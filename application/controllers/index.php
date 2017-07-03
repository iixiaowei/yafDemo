<?php
// use Illuminate\Database\Capsule\Manager as Capsule;
/**
 * https://github.com/illuminate/database
 * @author Administrator
 *
 */
class IndexController extends \Yaf\Controller_Abstract {
   public function indexAction() { //默认Action
//        $this->getView()->assign("content", "Hello World");
		
   		$users = DB::table('member')->where('id', '>', 1)->get();
   		foreach($users as $user){
   			echo $user->name;
   			echo "<Br>";
   		}
   	
   		return false;
   }
}