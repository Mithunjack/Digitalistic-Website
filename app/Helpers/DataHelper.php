<?php
use App\Homepage;
use App\Team;

function getHome(){
  return Homepage::all()->toArray();
}
function insertTeam($params){
  if($params['id']!=null)
  {
    $member = Team::find($params['id']);
  }
  else {
    $member = new Team();
  }
  $member->name = $params['name'];
  $member->bio = $params['bio'];
  $member->photo = $params['image'];
  $member->skill = $params['skill'];
  $member->position = $params['position'];
  $member->save();
}
function getMember($params){
  $member = Team::find($params);
  return $member;
}
function insertCarousel($slides){
  $carousel = Homepage::where('key','carousel')->first();
  $slides = json_encode($slides);
  if($carousel != null)
  {
    $carousel->value = $slides;
    $carousel->save();
  }
  else{
    $home = new Homepage();
    $home->key = "carousel";
    $home->value = $slides;
    $home->save();
  }

}
function insertGallery($images){
  $gallery = Homepage::where('key','gallery')->first();
  $images = json_encode($images);
  if($gallery != null)
  {
    $gallery->value = $images;
    $gallery->save();
  }
  else{
    $home = new Homepage();
    $home->key = "gallery";
    $home->value = $images;
    $home->save();
  }

}

function insertClients($images){
  $gallery = Homepage::where('key','clients')->first();
  $images = json_encode($images);
  if($gallery != null)
  {
    $gallery->value = $images;
    $gallery->save();
  }
  else{
    $home = new Homepage();
    $home->key = "clients";
    $home->value = $images;
    $home->save();
  }

}

function insertPortfolio($param){
  $portfolio = Homepage::where('key','portfolio')->first();

  if($portfolio != null)
  {
    $portfolio->value = $param;
    $portfolio->save();
  }
  else{
    $home = new Homepage();
    $home->key = "portfolio";
    $home->value = $param;
    $home->save();
  }
}
function insertBio($param){
  $bio = Homepage::where('key','bio')->first();
  $param = json_encode($param);
  if($bio != null)
  {
    $bio->value = $param;
    $bio->save();
  }
  else{
    $home = new Homepage();
    $home->key = "bio";
    $home->value = $param;
    $home->save();
  }
}
function insertService($param){
  $service = Homepage::where('key','service')->first();
  $param = json_encode($param);
  if($service != null)
  {
    $service->value = $param;
    $service->save();
  }
  else{
    $home = new Homepage();
    $home->key = "service";
    $home->value = $param;
    $home->save();
  }
}
function insertAddress($param){
  $address = Homepage::where('key','address')->first();
  if($address != null)
  {
    $address->value = $param;
    $address->save();
  }
  else{
    $home = new Homepage();
    $home->key = "address";
    $home->value = $param;
    $home->save();
  }
}

?>
