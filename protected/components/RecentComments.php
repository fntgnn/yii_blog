<?php
Yii::import('zii.widgets.CPortlet');

class RecentComments extends CPortlet{
  public $title = 'Recent Comments';
  public $maxComments = 10;
  //
  // public function init(){
  //   parent::init();
  // }

  public function getRecentComments(){
    return Comment::model()->findRecentComments($this->maxComments);
  }

  public function renderContent(){
    $this->render('recentComments');
  }
}

?>
