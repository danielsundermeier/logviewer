<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

  /**
   * @author Daniel Sundermeier
   *
   * origninally developed for www.serienguide.tv
   */

  class Logviewer
  {
    /**
     * log-files directory
     * 
     * @var string
     */
    protected $log_dir = './application/logs';
    
    public function __construct() 
    {
      // Load config file
      $this->ci = &get_instance();
      
      $this->ci->load->helper('file');
    }
    
    /**
     * Get all log-files
     * 
     * @return array
     */
    public function get_files()
    {   
      $files = get_filenames($this->log_dir);
      
      unset($files[array_search('index.html', $files)]);
      
      rsort(&$files);
      
      return $files;
    }
    
    /**
     * Get log-file
     * 
     * @param string $file
     * @return multitype:
     */
    public function get_file($file)
    {
      $log = read_file($this->log_dir.'/'.$file);
      
      $messages = explode("\n", $log);
      unset($messages[0], $messages[1]);
      
      return $messages;      
    }
  
  }