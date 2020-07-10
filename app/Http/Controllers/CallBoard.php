<?php
	namespace App\Http\Controllers;
	
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Rubric;
	use App\Advert;
	
	
	use Illuminate\Support\Facades\DB;
	
	class CallBoard extends Controller
	{
		public function index(Request $request, $adverts='')
		{
			$rubrics=Rubric::all();
			$this->saveNewAdvert($request);
			return view('laravelUrok30.callboard',['rubrics'=>$rubrics, 'title'=>'Доска объявлений','adverts'=>$adverts]);
		}
		
		public function getAdverts(Request $request,$id)
		{
			$rubrics=Rubric::all();
			$rubric=Rubric::find($id);
			$adverts = $rubric->adverts->sortByDesc('timestamp');
			$this->saveNewAdvert($request);
			return view('laravelUrok30.callboard',['rubrics'=>$rubrics,'adverts'=>$adverts, 'title'=>'Доска объявлений']);
		}
		
		public function admin(Request $request)
		{
			$adverts=Advert::all();
			return view('laravelUrok30.callboardAdmin',['adverts'=>$adverts,'title'=>'Админка']);
		}
		
		public function deleteAdvert(Request $request,$id)
		{
			$advert = Advert::find($id)->id;
			$request->session()->flash('status', 'объявление '.$advert.' удалено!');
			Advert::destroy($id);
			return redirect()->route('callboardAdmin');
		}
		
		private function saveNewAdvert(Request $request)
		{
			if($request->has('submit'))
			{	
				$rubric =Rubric::firstOrCreate(['name'=>$request->rubric]);
				$rubric_id = $rubric->id;
				$advert = new Advert(['text' => $request->advert, 'rubric_id' =>$rubric_id]);
				$advert->save();
				return redirect()->route('callboard');
			}
		}
	}
?>
