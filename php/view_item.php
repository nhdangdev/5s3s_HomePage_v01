<!-- [102309Tuan] create class ViewItem -->
<?php
class ViewItem
{
    private String $name;
    private String $thumbnail;
    private String $title;
    private Array $ratios;  // array of ratio
    private String $subject;
    private String $status;
    private String $date;
    // constructor
    function __construct($name, $thumbnail, $title, $ratios, $subject, $status , $date){
        $this->name = $name;
        $this->thumbnail = $thumbnail;
        $this->title = $title;
        $this->ratios = $ratios;
        $this->subject = $subject;
        $this->status = $status;
        $this->date = $date;
    }
    //public function to build view item
    public function buildListViewItem()
    {
        echo '
        <div class="view-item">
            <div class="view-item__thumbnail">
                <img src="'. $this->thumbnail .'" alt="thumbnail" />
            </div>
            <div class="view-item__name">
                <p> ' . $this->name . '  <span><i class="fa-solid fa-caret-down fa-lg"></i> </span></p>
            </div>
            <div class="view-item__title">
                <span>Title: </span>
                <p>' . $this->title . '</p>
            </div>
            <div class="view-item__ratios">
                <span>Ratios: </span>';
                foreach ($this->ratios as &$ratio){
                    echo '<div class="ratio-card">'.$ratio.'</div>';
                };
                unset($ratio);
        echo'   
            </div>
            <div class="view-item__subject">
                <span>Subject: </span>
                <p>'.$this->subject.'</p>
            </div>
            <div class="view-item__status">
                <span>Status: </span>
                <p>'.$this->status.'</p>
            </div>
            <div class="view-item__created">
                <span>Created date: </span>
                <p>'.$this->date.'</p>
            </div>
        </div>
        ';
    }

    public function buildGridViewItem(){
        echo'
        <div class="view-item">
            <div class="view-item__thumbnail">
                <img src="'.$this->thumbnail.'" alt="thumbnail" />
            </div>
            <div class="view-item__title">'.$this->title.'</div>
            <div class="view-item__name">'.$this->name.' </div>
            <div class="view-item__ratios">';
                foreach ($this->ratios as &$ratio){
                    echo '<div class="ratio-card">'.$ratio.'</div>';
                };
                unset($ratio);
                echo'   
            </div>
            <div class="row no-gutters">
            <div class="col c-6 view-item__created"><p>'.$this->date.'</p></div>
            <div class="col c-6 view-item__subject"><p>'.$this->subject.'</p></div>
            <!-- <div class="col view-item__status">'.$this->status.'</div> -->
            </div>
        </div>
        ';
    }
}
?>