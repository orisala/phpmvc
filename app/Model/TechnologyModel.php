<?php
class SportModel extends Model
{
    public $string_sport;

    public $image_sport;

    public $main_title = "Trusox enable you to change directions faster!";

    public $content1_title = "Rugby Requires Ipsum Dolores Simitus";
    public $content1_text = "<p>
        Vestibulum facilisis, lorem nec tincidunt sodales, ante magna tempus neque, non malesuada sem ante non augue. Aenean ac molestie sem, et aliquet metus. Curabitur et vulputate risus. Nulla consequat euismod rhoncus. Ut arcu diam, elementum id tortor sit amet, tristique.
        </p>
        <ul>
            <li>Incidunt sodales ante magna tempus</li>
            <li>Curabitur at mollis est ac viverra sem nunc</li>
            <li>Lorem Ipsum Three</li>
        </ul>";
    public $content1_image = "image_content1.jpg";

    public $box1_title = "Raise Your Game";
    public $box1_text = "Professional players have been wearing TruSox to give them a real edge over their opponents.
To meet the demand of players across the world, Meta Sports (MetaSox) are proud to introduce TruSox.";
    public $box1_image = "box1.jpg";

    public $box2_title = "Maximise Power Transfer";
    public $box2_text = "The patent-pending technology in the shape of pads on both the INSIDE AND OUTSIDE of the TruSox keep the foot from sliding in the sock and the sock from sliding within the boot.";
    public $box2_image = "box2.jpg";

    public $box3_title = "Stabilisation Of Plant Foot";
    public $box3_text = "TruSox are made in the USA and are machine washable on a cold setting. Players have found that TruSox grip properties actually improve after each wash. They are also known to significantly reduce blisters.";
    public $box3_image = "box3.jpg";

    public $content2_title = "Football Requires Ipsum Dolores SImitus";
    public $content2_text = "
    <h3>Lorem Dolores Commodo Adipsing Purusot</h3>
    <p>
    TruSox are made in the USA and are machine washable on a cold setting.
    Players have found that TruSox grip properties actually improve after each wash.
    They are also known to significantly reduce blisters.
    </p>
    <h3>Lorem Dolores Commodo Adipsing Purusot</h3>
    <p>TruSox are made in the USA and are machine washable
on a cold setting. Players have found that TruSox grip properties
 actually improve after each wash. They are also known to significantly reduce blisters.</p>";


    public $content2_image = "content2.jpg";

    public function __construct($sport="", $image=""){
        $this->string_sport = $sport;
        $this->image_sport = $image;
    }

    public function getImage(){
        return $this->image_sport;
    }

    public function getSport(){
        return $this->string_sport;
    }


    public function getContent1_title(){
        return $this->content1_title;
    }

    public function getContent1_text(){
        return $this->content1_text;
    }

    public function getContent1_image(){
        return $this->content1_image;
    }

    public function getContent2_title(){
        return $this->content2_title;
    }

    public function getContent2_text(){
        return $this->content2_text;
    }

    public function getContent2_image(){
        return $this->content2_image;
    }

    public function getBox1_title(){
        return $this->box1_title;
    }
    public function getBox1_text(){
        return $this->box1_text;
    }
    public function getBox1_image(){
        return $this->box1_image;
    }


    public function getBox2_title(){
        return $this->box2_title;
    }
    public function getBox2_text(){
        return $this->box2_text;
    }
    public function getBox2_image(){
        return $this->box2_image;
    }


    public function getBox3_title(){
        return $this->box3_title;
    }
    public function getBox3_text(){
        return $this->box3_text;
    }
    public function getBox3_image(){
        return $this->box3_image;
    }



    public function setImage($image){
        $this->image_sport = $image;
    }

    public function setSport($sport){
        $this->string_sport = $sport;

        switch ($sport) {
            case "wear" :    {$this->image_sport = "wear.jpg"; break;}
            case "boxing" :  {$this->image_sport = "sport.jpg"; break;}
            case "football" :{$this->image_sport = "sport.jpg"; break;}

            case "golf" :    {$this->image_sport = "sport.jpg"; break;}
            case "running" : {$this->image_sport = "sport.jpg"; break;}

            case "basketball" :  {$this->image_sport = "sport.jpg"; break;}
            case "rugby" :       {$this->image_sport = "sport.jpg"; break;}

            case "tennis" :      {$this->image_sport = "sport.jpg"; break;}
            case "badminton" :   {$this->image_sport = "sport.jpg"; break;}

            default :       {$this->image_sport = "sport.jpg";}
        }

    }


}
