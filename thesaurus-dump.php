<?php

define("PATH", "/Users/ogs22/CMEP/cookbook/glossary/");
require_once 'markdownify/markdownify.php';

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

function md($content) {
    $md = new Markdownify;
    $string = $md->parseString(trim($content));
    return trim($string);
}

function pdmd($file) {
//    'pandoc -f html -t markdown hello.html'
    $cmd = 'pandoc -f html -t markdown \''.PATH.$file.'.html\' -o \''.PATH.$file.'.md\'';
    exec($cmd);
}


function makeName($title) {
    $name = trim(strtolower($title));
    $name = preg_replace("/\\\'/","_",$name);
    $name = preg_replace("/\'/","_",$name);
    $name = preg_replace("/\s/","_",$name);
    $name = str_replace('"',"_",$name);
    $name = str_replace('*',"_",$name);
    $name = str_replace('/',"_",$name);
    $name = str_replace(':',"_",$name);
    $name = str_replace('<',"_",$name);
    $name = str_replace('>',"_",$name);
    $name = str_replace('&',"_",$name);
    $name = str_replace(';',"_",$name);
    $name = str_replace('?',"_",$name);
    $name = str_replace('|',"vbar",$name);
    $name = str_replace("__","_",$name);
    return $name;
}

function checkDupe(&$name,$depth=1) {
    if (file_exists(PATH.$name.".md")) {
        $name = $name."I";
        checkDupe($name,$depth++);
    }
}


$link = mysqli_connect("localhost","root","","thes2") or die("Error " . mysqli_error($link));
$query = 'select definitions.concept_no,name,definition from names
join definitions on definitions.concept_no = names.concept_no 
where definitions.langcode = "gb" and names.langcode = "gb" group by definitions.concept_no' or die("Error" . mysqli_error($link));
$result = $link->query($query);

echo mysqli_num_rows($result);


while($row = mysqli_fetch_assoc($result)) {
  
  	$def = utf8_encode($row['definition']);
  	$clean = cleanup($def);
//    $md = md($clean);
    $name = makeName(utf8_encode($row['name']));
    checkDupe($name);
    echo $row['name']."::";
    echo $row['concept_no']."::";
    echo $name.".md\n";
//    file_put_contents(PATH.$name.".md", $md);
    file_put_contents(PATH.$name.".db", $row['definition']);
    file_put_contents(PATH.$name.".html", $clean);
    pdmd($name);

} 

//$yaml = yaml_emit($x);

//echo $yaml;













