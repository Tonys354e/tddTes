<?php  
namespace App;  


class HtmlElement 
{  
private $name,$content;


    public function __construct(string $name, $content = null)
    {
        $this->name =$name;
        $this->content=$content;
        
    }

    public function render()
    {
        $result ='<'.$this->name.'>';

        $result.= $this->content;
     

        $result .= '</'.$this->name.'>';
        return $result;
    }
}