<?php
namespace App\Core;

use App\Core\Request;
use App\Core\Session;
use App\Core\Constantes;
use Digia\InstanceFactory\InstanceFactory;

class Controller  {

    protected Request $request;
    protected Session $session;
    public function __construct(Request $request)
    {
        $this->request=$request;
        $this->session=new Session;
    }

    public function render(string $path,array $data=[]){
        $data["Constantes"]=Constantes::class;
        $data["request"]=$this->request;
        ob_start();
        extract($data);
        require_once(Constantes::ROOT()."templates/".$path);
        $content_for_views = ob_get_clean();
        require_once(Constantes::ROOT()."templates/layout/base.html.php");
    }
    public function instancifier(string $classe,array $data){
        return $classe=InstanceFactory::fromProperties($classe,$data);
    }
    
    public function redirecToRoute($uri){
        header("location:".Constantes::WEB_ROOT.$uri);
    }

}