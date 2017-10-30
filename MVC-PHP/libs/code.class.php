<?php
/*
 *
 *      设置画布   设置随机颜色   设置内溶   设置文字
 *
 *
 *
 * */
class code{
        public $imgwidth=100;
        public $imgheight=50;
        public $fontsize=array("min"=>25,"max"=>"30");
        public $angle=array("min"=>-10,"max"=>10);
        public $fontfile='./static/ttf/Hatian-SuiXing.ttf';
        public $code="1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
        public $codelength=4;
        public $creatcode="";
        public $linenum="5";
        public $pointnum="50";
        public $filetype="png";
    function setcanvas(){
        /* 绘制画板 */
        $this->img=imagecreatetruecolor($this->imgwidth,$this->imgheight);
        imagefill($this->img,0,0,$this->setcolor("back"));
    }
    function setcolor($type="back"){
        $r=$type=="back"?mt_rand(200,255):mt_rand(0,100);
        $g=$type=="back"?mt_rand(200,255):mt_rand(0,100);
        $b=$type=="back"?mt_rand(200,255):mt_rand(0,100);
        return imagecolorallocate($this->img,$r,$g,$b);
    }
    function setCon(){
        for($i=0;$i<$this->codelength;$i++){
         $arr=imagettfbbox (
             mt_rand($this->fontsize["min"],$this->fontsize["max"]),
             mt_rand($this->angle["min"],$this->angle["max"]),
             $this->fontfile,$this->creatcode);
        imagefttext($this->img,mt_rand($this->fontsize["min"],
                   $this->fontsize["max"]),mt_rand($this->angle["min"],
            $this->angle["max"]),
            mt_rand($i*23,23*($i+1)),
            $arr[1]-$arr[5],
            $this->setcolor("cc"),
            $this->fontfile,
            $this->creatcode[$i]);
        }
    }
    function setText(){
        $print="";
        $length=strlen($this->code);
        for($i=0;$i<$this->codelength;$i++) {
            $print .= $this->code[mt_rand(0, $length - 1)];
        }
        $this->creatcode=$print;
        $_SESSION["code"]=$print;
    }
    function setline(){
        for($i=0;$i<$this->linenum;$i++) {
            imageline($this->img,
                mt_rand(0,30),
                mt_rand(0,50),
                mt_rand(80,100),
                mt_rand(0,50),
                $this->setcolor("bb"));
        }
    }
    function setpix(){
        for($i=0;$i<$this->pointnum;$i++) {
            imagesetpixel($this->img,
                mt_rand(0,$this->imgwidth),
                mt_rand(0,$this->imgheight),
                $this->setcolor("bb"));
        }
    }
    function out(){
        header("content-type:image/".$this->filetype);
        /* 生成画布 */
        $this->setcanvas();
        /* 设置颜色*/
        $this->setcolor();
        /* 写入文本*/
        $this->setText();
        $this->setCon();
        /*设置线条*/
        $this->setline();
        /*设置点*/
        $this->setpix();
        imagepng($this->img);
    }
}
