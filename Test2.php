<?php

$myBase = new Base();
$myBSSession = $myBase->doTest();
echo $myBSSession->getSessionEndDTime().'<br>';
echo $myBSSession->sessionEndDtime.'<br>';

echo 'ためしに'.$myBase->sessionEndDtime.'<br>';

class Base {

    /**
     *
     */public function doTest()
    {
        $myBSSession = new BSSession('test2', 3333, 4444);

        return $myBSSession;
    }
}

class BSSession {

    //////// 稼働中のセッション名
    private $sessionName;

    //////// 稼働中セッションの開始日時
    public $sessionStartDTime;

    //////// 稼働中セッションの終了日時
    public $sessionEndDTime;

    /**
     *
     * コンストラクタ
     *
     */
    public function __construct(String $theSessionName, int $theSessionStartDtime, int $theSessionEndDtime)
    {
        //////// 稼働中のセッション名
        $this->setSessionName($theSessionName);
        $this->sessionName = $theSessionName;

        //////// 稼働中セッションの開始日時
        $this->setSessionStartDTime($theSessionStartDtime);
        $this->sessionStartDtime = $theSessionStartDtime;

        //////// 稼働中セッションの終了日時
        $this->setSessionEndDTime($theSessionEndDtime);
        $this->sessionEndDtime = $theSessionEndDtime;
    }


    /**
     * @return String 稼働中のセッション名
     */
    public function getSessionName()
    {
        return $this->sessionName;
    }

    /**
     * @return number 稼働中セッションの開始日時
     */
    public function getSessionStartDTime()
    {
        return $this->sessionStartDTime;
    }

    /**
     * @return number 稼働中セッションの終了日時
     */
    public function getSessionEndDTime()
    {
        return $this->sessionEndDTime;
    }

    /**
     * @param String $sessionName 稼働中のセッション名
     */
    public function setSessionName($sessionName)
    {
        $this->sessionName = $sessionName;
    }

    /**
     * @param number $sessionStartDTime 稼働中セッションの開始日時
     */
    public function setSessionStartDTime($sessionStartDTime)
    {
        $this->sessionStartDTime = $sessionStartDTime * 2;
    }

    /**
     * @param number $sessionEndDTime 稼働中セッションの終了日時
     */
    public function setSessionEndDTime(int $sessionEndDTime)
    {
        $this->sessionEndDTime = $sessionEndDTime * 2;
    }
}
?>
