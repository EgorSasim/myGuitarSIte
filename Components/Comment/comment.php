<?php
class CommentJson{
    public static $path = '/assets/imgs/avatars/%1$s.jpg';

    public $about;
    public $date;
    public $picture;
    public $text;

    public function __construct($about, $date, $avatar_id, $text) {
        $this->about = $about;
        $this->date = $date;
        $this->text = $text;

        $this->picture = sprintf(self::$path, $avatar_id);
    }
}
?>