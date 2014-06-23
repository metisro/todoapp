<?php

class HomeController extends BaseController {
	public function getIndex()  {
           $items = Auth::user()->items;
            
           return View::make('home', array(
               'items' => $items
           ));           
	}
        
        public function postIndex() {
            $id = Input::get('id');
            $userID = Auth::user()->id;
            
            $item = Item::findOrFail($id);
            
            if ($item->owner_id === $userID) {
            $item->mark();
            }
            
            return Redirect::route('home');
        }
}