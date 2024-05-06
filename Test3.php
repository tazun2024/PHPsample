<?php

$myBase = new Base();
$result = $myBase->doTest();

echo $result->getTypeS().'<br>';
echo $result->getTypeE().'<br>';


class Base {

    /**
     *
     */public function doTest()
    {
        $myChild = new Child('test2', 3333, 4444);

        return $myChild->getSessionEndDTime();
    }
}

class Child {

    private $typeN;

    public $typeS;

    public $typeE;

    /**
     *
     * コンストラクタ
     *
     */
    public function __construct(String $theTypeN, int $theTypeS, int $theTypeE)
    {
        $tSet = isset($this);
        $tIns = get_class($this);

        //////// 稼働中のセッション名
        $this->setTypeN($theTypeN);
        $this->typeN = $theTypeN;

        //////// 稼働中セッションの開始日時
        $this->setTypeS($theTypeS);
        $this->typeS = $theTypeS;

        //////// 稼働中セッションの終了日時
        $this->setTypeE($theTypeE);
        $this->typeE = $theTypeE;

        $testValue1 = $this->getSessionEndDTime();
        $testValue2 = $this->sessionEndDtime;
    }


    /**
     * @return String 稼働中のセッション名
     */
    public function getSessionName()
    {
        return $this->typeN;
    }

    /**
     * @return number 稼働中セッションの開始日時
     */
    public function getSessionStartDTime()
    {
        return $this->typeS;
    }

    /**
     * @return number 稼働中セッションの終了日時
     */
    public function getSessionEndDTime()
    {
        return $this->typeE;
    }

    /**
     * @param String $sessionName 稼働中のセッション名
     */
    public function setTypeN($typeN)
    {
        $this->typeN = $typeN;
    }

    /**
     * @param number $sessionStartDTime 稼働中セッションの開始日時
     */
    public function setTypeS($typeS)
    {
        $this->typeS = $typeS * 2;
    }

    /**
     * @param number $sessionEndDTime 稼働中セッションの終了日時
     */
    public function setTypeE(int $typeE)
    {
        $this->typeE = $typeE * 2;
    }
}
?>
