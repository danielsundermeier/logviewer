# logviewer
Viewer for Codeigniter Log Files

##Installation/Usage

Download the folder and drag it into your application folder.

Loading the library:

$this->load->library('logviewer');

Get all files:

    $all_files = $this->logviewer->get_files();
  
Get logs from files
 
    $file = $this->logviewer->get_file($file_name);
