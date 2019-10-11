function buscarEstandarMIME($formato){
    //Encuentra el estandar MIME https://developer.mozilla.org/es/docs/Web/HTTP/Basics_of_HTTP/MIME_types
    $standarMIME  = array(
        'jpg'  => 'image/jpg',
        'gif'  => 'image/gif',
        'png'  => 'image/png',
        'zip'  => 'application/x-compressed',
        'txt'  => 'text/plain',
        'pdf'  => 'application/pdf',
        'doc'  => 'application/msword',
        'dot'  => 'application/msword',
        'docx' => 'pplication/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'dotx' => 'pplication/vnd.openxmlformats-officedocument.wordprocessingml.template',
        'docm' => 'pplication/vnd.ms-word.document.macroEnabled.12',
        'dotm' => 'pplication/vnd.ms-word.template.macroEnabled.12',
        'xls'  => 'application/vnd.ms-excel',
        'xlt'  => 'application/vnd.ms-excel',
        'xla'  => 'application/vnd.ms-excel',
        'xlsx' => 'pplication/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'xltx' => 'pplication/vnd.openxmlformats-officedocument.spreadsheetml.template',
        'xlsm' => 'pplication/vnd.ms-excel.sheet.macroEnabled.12',
        'xltm' => 'pplication/vnd.ms-excel.template.macroEnabled.12',
        'xlam' => 'pplication/vnd.ms-excel.addin.macroEnabled.12',
        'xlsb' => 'pplication/vnd.ms-excel.sheet.binary.macroEnabled.12',
        'ppt'  => 'application/vnd.ms-powerpoint',
        'pot'  => 'application/vnd.ms-powerpoint',
        'pps'  => 'application/vnd.ms-powerpoint',
        'ppa'  => 'application/vnd.ms-powerpoint',
        'pptx' => 'pplication/vnd.openxmlformats-officedocument.presentationml.presentation',
        'potx' => 'pplication/vnd.openxmlformats-officedocument.presentationml.template',
        'ppsx' => 'pplication/vnd.openxmlformats-officedocument.presentationml.slideshow',
        'ppam' => 'pplication/vnd.ms-powerpoint.addin.macroEnabled.12',
        'pptm' => 'pplication/vnd.ms-powerpoint.presentation.macroEnabled.12',
        'potm' => 'pplication/vnd.ms-powerpoint.template.macroEnabled.12',
        'ppsm' => 'pplication/vnd.ms-powerpoint.slideshow.macroEnabled.12',
        'mdb'  => 'application/vnd.ms-access'
    );
    $mime = $standarMIME[$formato];
    return $mime;
}

echo '<h1>Aquí se mostrarán un par de ejemplos</h1>';
echo '<p>buscarEstandarMIME('pdf').'</p>';
echo '<p>buscarEstandarMIME('png').'</p>';
echo '<p>buscarEstandarMIME('doc').'</p>';
