function buscarEstandarMIMENombre($filename){
    return mime_content_type($filename);
}

function buscarEstandarMIMEFormato($formato){
    //Encuentra el estandar MIME https://developer.mozilla.org/es/docs/Web/HTTP/Basics_of_HTTP/MIME_types
    return mime_content_type("example.$filename");
}

echo '<h1>Aquí se mostrarán un par de ejemplos</h1>';
echo '<p>buscarEstandarMIMEFormato('pdf').'</p>';
echo '<p>buscarEstandarMIMEFormato('png').'</p>';
echo '<p>buscarEstandarMIMEFormato('doc').'</p>';



echo '<h1>Aquí se mostrarán un par de ejemplos</h1>';

echo '<p>buscarEstandarMIMENombre('tarea6.pdf').'</p>';
echo '<p>buscarEstandarMIMENombre('imagen.png').'</p>';
echo '<p>buscarEstandarMIMENombre('documento.doc').'</p>';
