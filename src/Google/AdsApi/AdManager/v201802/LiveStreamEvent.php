<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LiveStreamEvent
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\DateTime $creationDateTime
     */
    protected $creationDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var string $startDateTimeType
     */
    protected $startDateTimeType = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\DateTime $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @var int $totalEstimatedConcurrentUsers
     */
    protected $totalEstimatedConcurrentUsers = null;

    /**
     * @var string[] $contentUrls
     */
    protected $contentUrls = null;

    /**
     * @var string[] $adTags
     */
    protected $adTags = null;

    /**
     * @var string $liveStreamEventCode
     */
    protected $liveStreamEventCode = null;

    /**
     * @var int $dvrWindowSeconds
     */
    protected $dvrWindowSeconds = null;

    /**
     * @var string $adBreakFillType
     */
    protected $adBreakFillType = null;

    /**
     * @var int $adHolidayDuration
     */
    protected $adHolidayDuration = null;

    /**
     * @var boolean $enableDurationlessAdBreaks
     */
    protected $enableDurationlessAdBreaks = null;

    /**
     * @var int $defaultAdBreakDuration
     */
    protected $defaultAdBreakDuration = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\CdnConfiguration[] $sourceContentConfigurations
     */
    protected $sourceContentConfigurations = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\HlsSettings $hlsSettings
     */
    protected $hlsSettings = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $description
     * @param string $status
     * @param \Google\AdsApi\AdManager\v201802\DateTime $creationDateTime
     * @param \Google\AdsApi\AdManager\v201802\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201802\DateTime $startDateTime
     * @param string $startDateTimeType
     * @param \Google\AdsApi\AdManager\v201802\DateTime $endDateTime
     * @param int $totalEstimatedConcurrentUsers
     * @param string[] $contentUrls
     * @param string[] $adTags
     * @param string $liveStreamEventCode
     * @param int $dvrWindowSeconds
     * @param string $adBreakFillType
     * @param int $adHolidayDuration
     * @param boolean $enableDurationlessAdBreaks
     * @param int $defaultAdBreakDuration
     * @param \Google\AdsApi\AdManager\v201802\CdnConfiguration[] $sourceContentConfigurations
     * @param \Google\AdsApi\AdManager\v201802\HlsSettings $hlsSettings
     */
    public function __construct($id = null, $name = null, $description = null, $status = null, $creationDateTime = null, $lastModifiedDateTime = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $totalEstimatedConcurrentUsers = null, array $contentUrls = null, array $adTags = null, $liveStreamEventCode = null, $dvrWindowSeconds = null, $adBreakFillType = null, $adHolidayDuration = null, $enableDurationlessAdBreaks = null, $defaultAdBreakDuration = null, array $sourceContentConfigurations = null, $hlsSettings = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->description = $description;
      $this->status = $status;
      $this->creationDateTime = $creationDateTime;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->startDateTime = $startDateTime;
      $this->startDateTimeType = $startDateTimeType;
      $this->endDateTime = $endDateTime;
      $this->totalEstimatedConcurrentUsers = $totalEstimatedConcurrentUsers;
      $this->contentUrls = $contentUrls;
      $this->adTags = $adTags;
      $this->liveStreamEventCode = $liveStreamEventCode;
      $this->dvrWindowSeconds = $dvrWindowSeconds;
      $this->adBreakFillType = $adBreakFillType;
      $this->adHolidayDuration = $adHolidayDuration;
      $this->enableDurationlessAdBreaks = $enableDurationlessAdBreaks;
      $this->defaultAdBreakDuration = $defaultAdBreakDuration;
      $this->sourceContentConfigurations = $sourceContentConfigurations;
      $this->hlsSettings = $hlsSettings;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\DateTime
     */
    public function getCreationDateTime()
    {
      return $this->creationDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\DateTime $creationDateTime
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setCreationDateTime($creationDateTime)
    {
      $this->creationDateTime = $creationDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\DateTime $startDateTime
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDateTimeType()
    {
      return $this->startDateTimeType;
    }

    /**
     * @param string $startDateTimeType
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setStartDateTimeType($startDateTimeType)
    {
      $this->startDateTimeType = $startDateTimeType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\DateTime
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\DateTime $endDateTime
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalEstimatedConcurrentUsers()
    {
      return $this->totalEstimatedConcurrentUsers;
    }

    /**
     * @param int $totalEstimatedConcurrentUsers
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setTotalEstimatedConcurrentUsers($totalEstimatedConcurrentUsers)
    {
      $this->totalEstimatedConcurrentUsers = (!is_null($totalEstimatedConcurrentUsers) && PHP_INT_SIZE === 4)
          ? floatval($totalEstimatedConcurrentUsers) : $totalEstimatedConcurrentUsers;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getContentUrls()
    {
      return $this->contentUrls;
    }

    /**
     * @param string[] $contentUrls
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setContentUrls(array $contentUrls)
    {
      $this->contentUrls = $contentUrls;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAdTags()
    {
      return $this->adTags;
    }

    /**
     * @param string[] $adTags
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setAdTags(array $adTags)
    {
      $this->adTags = $adTags;
      return $this;
    }

    /**
     * @return string
     */
    public function getLiveStreamEventCode()
    {
      return $this->liveStreamEventCode;
    }

    /**
     * @param string $liveStreamEventCode
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setLiveStreamEventCode($liveStreamEventCode)
    {
      $this->liveStreamEventCode = $liveStreamEventCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getDvrWindowSeconds()
    {
      return $this->dvrWindowSeconds;
    }

    /**
     * @param int $dvrWindowSeconds
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setDvrWindowSeconds($dvrWindowSeconds)
    {
      $this->dvrWindowSeconds = $dvrWindowSeconds;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdBreakFillType()
    {
      return $this->adBreakFillType;
    }

    /**
     * @param string $adBreakFillType
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setAdBreakFillType($adBreakFillType)
    {
      $this->adBreakFillType = $adBreakFillType;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdHolidayDuration()
    {
      return $this->adHolidayDuration;
    }

    /**
     * @param int $adHolidayDuration
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setAdHolidayDuration($adHolidayDuration)
    {
      $this->adHolidayDuration = (!is_null($adHolidayDuration) && PHP_INT_SIZE === 4)
          ? floatval($adHolidayDuration) : $adHolidayDuration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableDurationlessAdBreaks()
    {
      return $this->enableDurationlessAdBreaks;
    }

    /**
     * @param boolean $enableDurationlessAdBreaks
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setEnableDurationlessAdBreaks($enableDurationlessAdBreaks)
    {
      $this->enableDurationlessAdBreaks = $enableDurationlessAdBreaks;
      return $this;
    }

    /**
     * @return int
     */
    public function getDefaultAdBreakDuration()
    {
      return $this->defaultAdBreakDuration;
    }

    /**
     * @param int $defaultAdBreakDuration
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setDefaultAdBreakDuration($defaultAdBreakDuration)
    {
      $this->defaultAdBreakDuration = (!is_null($defaultAdBreakDuration) && PHP_INT_SIZE === 4)
          ? floatval($defaultAdBreakDuration) : $defaultAdBreakDuration;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\CdnConfiguration[]
     */
    public function getSourceContentConfigurations()
    {
      return $this->sourceContentConfigurations;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\CdnConfiguration[] $sourceContentConfigurations
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setSourceContentConfigurations(array $sourceContentConfigurations)
    {
      $this->sourceContentConfigurations = $sourceContentConfigurations;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\HlsSettings
     */
    public function getHlsSettings()
    {
      return $this->hlsSettings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\HlsSettings $hlsSettings
     * @return \Google\AdsApi\AdManager\v201802\LiveStreamEvent
     */
    public function setHlsSettings($hlsSettings)
    {
      $this->hlsSettings = $hlsSettings;
      return $this;
    }

}
