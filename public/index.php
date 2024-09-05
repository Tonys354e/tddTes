    <?php  

    require '../vendor/autoload.php';  

    use App\HtmlElement;  

    $element = new HtmlElement('p',[],'este es el contemido');  

    echo htmlentities( $element->render(), ENT_QUOTES, 'UTF-8');

    $element = new HtmlElement('p',['id'=>'my_paragraph'],'este es el contemido');  

    echo htmlentities( $element->render(), ENT_QUOTES, 'UTF-8');