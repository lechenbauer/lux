<?php
declare(strict_types=1);
namespace In2code\Lux\Domain\Model;

/**
 * Class Newsvisit
 */
class Newsvisit extends AbstractModel
{
    const TABLE_NAME = 'tx_lux_domain_model_newsvisit';

    /**
     * @var \In2code\Lux\Domain\Model\Visitor
     */
    protected $visitor = null;

    /**
     * @var \In2code\Lux\Domain\Model\News
     */
    protected $news = null;

    /**
     * @var int
     */
    protected $language = 0;

    /**
     * @var \DateTime
     */
    protected $crdate = null;

    /**
     * @return Visitor
     */
    public function getVisitor()
    {
        return $this->visitor;
    }

    /**
     * @param Visitor $visitor
     * @return Newsvisit
     */
    public function setVisitor(Visitor $visitor)
    {
        $this->visitor = $visitor;
        return $this;
    }

    /**
     * @return News
     */
    public function getNews(): News
    {
        return $this->news;
    }

    /**
     * @param News $news
     * @return Newsvisit
     */
    public function setNews(News $news): self
    {
        $this->news = $news;
        return $this;
    }

    /**
     * @return int
     */
    public function getLanguage(): int
    {
        return $this->language;
    }

    /**
     * @param int $language
     * @return Newsvisit
     */
    public function setLanguage(int $language): self
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return \DateTime
     * @throws \Exception
     */
    public function getCrdate(): \DateTime
    {
        $crdate = $this->crdate;
        if ($crdate === null) {
            $crdate = new \DateTime();
        }
        return $crdate;
    }

    /**
     * @param \DateTime $crdate
     * @return Newsvisit
     */
    public function setCrdate(\DateTime $crdate)
    {
        $this->crdate = $crdate;
        return $this;
    }
}
