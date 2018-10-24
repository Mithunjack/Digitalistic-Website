<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    function __construct()
    {
        $this->middleware('auth')->except('index','contactUs');
    }

    function index(){

        $homeData = getHome();

        foreach ($homeData as $value) {
          switch($value['key'])
          {
            case "carousel":
              $carousel = get_object_vars(json_decode($value['value']))['carousel'];
              break;
            case "portfolio":
              $portfolio = $value['value'];
              break;
            case "service":
              $service = get_object_vars(json_decode($value['value']))['service'];
              break;
            case "gallery":
              $gallery = get_object_vars(json_decode($value['value']))['gallery'];
              break;
            case "bio":
              $bio = get_object_vars(json_decode($value['value']));
              break;
            case "clients":
              $clients = get_object_vars(json_decode($value['value']))['clients'];
              break;
            case "address":
              $address = $value['value'];
              break;
          }
        }
        $data = [
          "carousel" => $carousel,
          "portfolio" => $portfolio,
          "service" => $service,
          "gallery" => $gallery,
          "bio" => $bio,
          "clients" => $clients,
          "address" => $address
        ];
        return view('main',['data' => $data]);
    }



    function team(Request $request){
      if($request->isMethod('post'))
      {
        $image = $request->file('image');
        $params = $request->all();
        if($image != null)
        {
          $actualName = $image->getClientOriginalName();
          $actualName = str_replace(' ', '-', $actualName);
          $prefix = $actualName . "_";
          $filename = time().$image->getClientOriginalName();
          $name = explode('.',$filename);
          $name[0]= md5($name[0]);
          $name = $prefix.implode('.',$name);

          $file = str_replace('contents/', '', $image->storeAs('contents',$name));
          $team = [
            'image'=>$file
          ];
        }
        else {
          $team = [
            'image' => $params['existingImage']
          ];
        }
        if($params['name']!= null)
        {
          $team['name'] = $params['name'];
        }

        if($params['bio']!= null)
        {
          $team['bio']= $params['bio'];
        }
        if($params['memberId'] != null)
        {
            $team['id']= $params['memberId'];
        }
        else {
            $team['id'] = null;
        }
        $skill = [
          'creativity' => $params['creativity'],
          'leadership' => $params['leadership'],
          'skill' => $params['skill'],
          'communication' => $params['communication']
        ];
        $team['skill'] = json_encode($skill);
        $team['position'] = $params['position'];
        insertTeam($team);
        return redirect('/admin');

      }
    }



    function admin(Request $request){
        $homeData = getHome();
        $params = $request->all();
        if(isset($params['memberId']))
        {
          $member = getMember($params['memberId'])->toArray();

          $skill = get_object_vars(json_decode($member['skill']));
          $member['memberId'] = $member['id'];

          $member['creativity'] = $skill['creativity'];
          $member['leadership'] = $skill['leadership'];
          $member['communication'] = $skill['communication'];
          $member['skill'] = $skill['skill'];
        }
        else
        {
          $member = [
            "name" => " ",
            "bio" => " ",
            "position" => " ",
            "photo" => " ",
            "creativity" => " ",
            "leadership" => " ",
            "skill" => " ",
            "communication" => " ",
            "memberId" => null
          ];
        }
        foreach ($homeData as $value) {
          switch($value['key'])
          {
            case "bio":
              $bio = get_object_vars(json_decode($value['value']));
              break;
          }
        }
        return view('admin',['bio'=>$bio,'member'=>$member]);
    }

    function carousel(Request $request){
      if($request->isMethod('post'))
      {
        $slides = $request->file('carousel');
        $params = $request->all();

        foreach ($slides as $k=>$slide) {

            $actualName = $slide->getClientOriginalName();
            $actualName = str_replace(' ', '-', $actualName);
            $prefix = $actualName . "_";
            $filename = time().$slide->getClientOriginalName();
            $name = explode('.',$filename);
            $name[0]= md5($name[0]);
            $name = $prefix.implode('.',$name);

            $file = str_replace('contents/', '', $slide->storeAs('contents',$name));
            $file = [
              'slide'=>$file,
              'heading'=>$params['caption-heading'][$k],
              'description'=>$params['caption-description'][$k],
              'font' => $params['font'][$k],
              'align' => $params['align'][$k]
            ];
            $files[] = $file;
        }
        $carousel = [
          'carousel'=>$files
        ];
        insertCarousel($carousel);

          return redirect('/admin');
      }
      else {
        return redirect('/admin');
      }

    }
    function service(Request $request){
      if($request->isMethod('post'))
      {
        $icons = $request->file('service-icons');
        $params = $request->all();

        foreach ($icons as $k=>$icon) {

            $actualName = $icon->getClientOriginalName();
            $actualName = str_replace(' ', '-', $actualName);
            $prefix = $actualName . "_";
            $filename = time().$icon->getClientOriginalName();
            $name = explode('.',$filename);
            $name[0]= md5($name[0]);
            $name = $prefix.implode('.',$name);

            $file = str_replace('contents/', '', $icon->storeAs('contents',$name));
            $string = $params['service-description'][$k];
            if(strlen($string)>30)
            {
              $replacement = '<br> ';

              substr_replace($string, $replacement, 30, 0);
            }
            $file = [
              'icon'=>$file,
              'title'=>$params['service-title'][$k],
              'description'=>$string,
            ];
            $files[] = $file;
        }
        $service = [
          'service'=>$files
        ];
        insertService($service);

          return redirect('/admin');
      }
      else {
        return redirect('/admin');
      }

    }


    function portfolio(Request $request){
      if($request->isMethod('post'))
      {

        $portfolio = $request->file('portfolio');

        $actualName = $portfolio->getClientOriginalName();
        $actualName = str_replace(' ', '-', $actualName);
        $prefix = $actualName . "_";
        $filename = time().$portfolio->getClientOriginalName();
        $name = explode('.',$filename);
        $name[0]= md5($name[0]);
        $name = $prefix.implode('.',$name);
        $file = str_replace('contents/', '', $portfolio->storeAs('contents',$name));

        insertPortfolio($file);

        return redirect('/admin');
      }
      else{
        return redirect('/admin');
      }
    }


    function gallery(Request $request){
      if($request->isMethod('post'))
      {
        $images = $request->file('gallery-images');
        $params = $request->all();

        foreach ($images as $k=>$img) {

            $actualName = $img->getClientOriginalName();
            $actualName = str_replace(' ', '-', $actualName);
            $prefix = $actualName . "_";
            $filename = time().$img->getClientOriginalName();
            $name = explode('.',$filename);
            $name[0]= md5($name[0]);
            $name = $prefix.implode('.',$name);

            $file = str_replace('contents/', '', $img->storeAs('contents',$name));

            $files[] = $file;
        }
        $gallery = [
          'gallery'=>$files
        ];
        insertGallery($gallery);

          return redirect('/admin');
      }
      else {
        return redirect('/admin');
      }
    }
    function bio(Request $request){
      if($request->isMethod('post')){
        $param = $request->all();
        $background = $request->file('background-image');
        if($background!=null)
        {
          $actualName = $background->getClientOriginalName();
          $actualName = str_replace(' ', '-', $actualName);
          $prefix = $actualName . "_";
          $filename = time().$background->getClientOriginalName();
          $name = explode('.',$filename);
          $name[0]= md5($name[0]);
          $name = $prefix.implode('.',$name);
          $file = str_replace('contents/', '', $background->storeAs('contents',$name));
          $contents = [
            'bio' => $param['bio'],
            'image' => $file
          ];
        }
        else {
          $contents = [
            'bio' => $param['bio'],
            'image' => $param['existingBackground']
          ];
        }
        insertBio($contents);


        return redirect('/admin');
      }
      else {
        return redirect('/admin');
      }
    }
    function clients(Request $request){
      if($request->isMethod('post'))
      {
        $images = $request->file('clients');
        $params = $request->all();
        foreach ($images as $k=>$img) {

            $actualName = $img->getClientOriginalName();
            $actualName = str_replace(' ', '-', $actualName);
            $prefix = $actualName . "_";
            $filename = time().$img->getClientOriginalName();
            $name = explode('.',$filename);
            $name[0]= md5($name[0]);
            $name = $prefix.implode('.',$name);

            $file = str_replace('contents/', '', $img->storeAs('contents',$name));

            $files[] = $file;
        }
        $clients = [
          'clients'=>$files
        ];
        insertClients($clients);

          return redirect('/admin');
      }
      else {
        return redirect('/admin');
      }
    }
    function office(Request $request){
      if($request->isMethod('post'))
      {
        $param = $request->all();
        insertAddress($param['office']);
        return redirect('/admin');
      }
      else {
        return redirect('/admin');
      }
    }



    function contactUs(Request $request)
    {
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone_no' => $request->input('phone_no'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ];

        Mail::to("info@digitalistic.net")->send(new ContactUsMail($data));
        return redirect('/');
    }

}
