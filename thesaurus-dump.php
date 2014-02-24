<?php

function cleanup($data='') {
    $config = array(
       // 'indent' => false,
        'output-xhtml' => true,
     //   'wrap' => 400,
        'numeric-entities' => true
    );
    $config['char-encoding'] = 'utf8';
    $config['input-encoding'] = 'utf8';
    $config['output-encoding'] = 'utf8';

    $data = trim($data);
    $data = trim($data,'"');
	$data = str_replace('\r\n',' ',$data);
	$slh = '\"';
	$data = str_replace($slh, '"', $data);
	$data = trim($data);
	$tidy = new tidy();
    $tidy->parseString($data, $config, "utf8");
    $tidy->repairString($data, $config, "utf8");
    $body = $tidy->Body();
    $string = $body->value;
    $string = str_replace("<body>", "", $string);
    $string = str_replace("</body>", "", $string);
    return trim($string);
}


$link = mysqli_connect("localhost","root","tyuhbvcf","thesaurus") or die("Error " . mysqli_error($link));
$query = 'select name,definition from names
join definitions on definitions.concept_no = names.concept_no 
where definitions.langcode = "gb" and names.langcode = "gb" ' or die("Error" . mysqli_error($link));
$result = $link->query($query);



while($row = mysqli_fetch_assoc($result)) {
  
  	$def = utf8_encode($row['definition']);
  	$x[utf8_encode($row['name'])] = cleanup($def);
  

} 

$yaml = yaml_emit($x);

echo $yaml;

?>