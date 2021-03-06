<?php

/**
 * This class centralizes all the delivery attributes that are specific for a given request  
 * and not general for the delivery definition.
 * For example- when a request is passed from the Playmanifest - all parameters should be passed through 
 * this data transfer object 
 */
class DeliveryProfileDynamicAttributes {
	
	/**
	 * @var string
	 */
	protected $format;
	
	/**
	 * @var string
	 */
	protected $extension = null;
	
	/**
	 * @var string
	 */
	protected $containerFormat = null;
	
	/**
	 * @var int
	 */
	protected $seekFromTime = null;
	
	/**
	 * @var int
	 */
	protected $clipTo = null;
	
	/**
	 * @var int
	 */
	protected $storageProfileId = null;
	
	/**
	 * @var int
	 */
	protected $storageId = null;
	
	/**
	 * @var string
	 */
	protected $entryId = null;
	
	/**
	 * may contain several fallbacks options, each one with a set of tags
	 * @var array
	 */
	protected $tags;
	
	/**
	 * @var array
	 */
	protected $flavorAssets = array();
	
	/**
	 * @var array
	 */
	protected $remoteFileSyncs;
	
	/**
	 * TODO Remove me???
	 * @var FileSync
	 */
	protected $manifestFileSync = null;
	
	/**
	 * @var int
	 */
	protected $preferredBitrate = null;
	
	/**
	 * @var string
	 */
	protected $responseFormat;
	
	/**
	 * @var string
	 */
	protected $mediaProtocol = PlaybackProtocol::HTTP;
	
	/**
	 * @var boolean
	 */
	protected $usePlayServer = false;
	
	/**
	 * @var string
	 */
	protected $playerConfig = null;
	
	/**
	 * @var int
	 */
	protected $uiConfId = null;
	
	/**
	 * @return the $format
	 */
	public function getFormat() {
		return $this->format;
	}

	/**
	 * @return the $extension
	 */
	public function getFileExtension() {
		return $this->extension;
	}

	/**
	 * @return the $containerFormat
	 */
	public function getContainerFormat() {
		return $this->containerFormat;
	}

	/**
	 * @return the $seekFromTime
	 */
	public function getSeekFromTime() {
		return $this->seekFromTime;
	}

	/**
	 * @return the $clipTo
	 */
	public function getClipTo() {
		return $this->clipTo;
	}

	/**
	 * @return the $storageProfileId
	 */
	public function getStorageProfileId() {
		return $this->storageProfileId;
	}

	/**
	 * @return the $storageId
	 */
	public function getStorageId() {
		return $this->storageId;
	}

	/**
	 * @return the $entryId
	 */
	public function getEntryId() {
		return $this->entryId;
	}

	/**
	 * @return the $flavorAssets
	 */
	public function getFlavorAssets() {
		return $this->flavorAssets;
	}

	/**
	 * @return the $remoteFileSyncs
	 */
	public function getRemoteFileSyncs() {
		return $this->remoteFileSyncs;
	}

	/**
	 * @return the $manifestFileSync
	 */
	public function getManifestFileSync() {
		return $this->manifestFileSync;
	}

	/**
	 * @return the $preferredBitrate
	 */
	public function getPreferredBitrate() {
		return $this->preferredBitrate;
	}

	/**
	 * @param string $format
	 */
	public function setFormat($format) {
		$this->format = $format;
	}

	/**
	 * @param string $extension
	 */
	public function setFileExtension($extension) {
		$this->extension = $extension;
	}

	/**
	 * @param string $containerFormat
	 */
	public function setContainerFormat($containerFormat) {
		$this->containerFormat = $containerFormat;
	}

	/**
	 * @param number $seekFromTime
	 */
	public function setSeekFromTime($seekFromTime) {
		$this->seekFromTime = $seekFromTime;
	}

	/**
	 * @param number $clipTo
	 */
	public function setClipTo($clipTo) {
		$this->clipTo = $clipTo;
	}

	/**
	 * @param number $storageProfileId
	 */
	public function setStorageProfileId($storageProfileId) {
		$this->storageProfileId = $storageProfileId;
	}

	/**
	 * @param number $storageId
	 */
	public function setStorageId($storageId) {
		$this->storageId = $storageId;
	}

	/**
	 * @param string $entryId
	 */
	public function setEntryId($entryId) {
		$this->entryId = $entryId;
	}

	/**
	 * @param multitype: $flavorAssets
	 */
	public function setFlavorAssets($flavorAssets) {
		$this->flavorAssets = $flavorAssets;
	}

	/**
	 * @param multitype: $remoteFileSyncs
	 */
	public function setRemoteFileSyncs($remoteFileSyncs) {
		$this->remoteFileSyncs = $remoteFileSyncs;
	}

	/**
	 * @param FileSync $manifestFileSync
	 */
	public function setManifestFileSync($manifestFileSync) {
		$this->manifestFileSync = $manifestFileSync;
	}

	/**
	 * @param number $preferredBitrate
	 */
	public function setPreferredBitrate($preferredBitrate) {
		$this->preferredBitrate = $preferredBitrate;
	}
	
	/**
	 * @return the $responseFormat
	 */
	public function getResponseFormat() {
		return $this->responseFormat;
	}

	/**
	 * @param string $responseFormat
	 */
	public function setResponseFormat($responseFormat) {
		$this->responseFormat = $responseFormat;
	}
	
	/**
	 * @return the $tags
	 */
	public function getTags() {
		return $this->tags;
	}

	/**
	 * @param multitype: $tags
	 */
	public function setTags($tags) {
		$this->tags = $tags;
	}
	
	/**
	 * @return the $mediaProtocol
	 */
	public function getMediaProtocol() {
		return $this->mediaProtocol;
	}

	/**
	 * @param string $mediaProtocol
	 */
	public function setMediaProtocol($mediaProtocol) {
		$this->mediaProtocol = $mediaProtocol;
	}

	/**
	 * @return the $usePlayServer
	 */
	public function getUsePlayServer()
	{
		return $this->usePlayServer;
	}

	/**
	 * @return the $playerConfig
	 */
	public function getPlayerConfig()
	{
		return $this->playerConfig;
	}

	/**
	 * @param boolean $usePlayServer
	 */
	public function setUsePlayServer($usePlayServer)
	{
		$this->usePlayServer = $usePlayServer;
	}

	/**
	 * @param string $playerConfig
	 */
	public function setPlayerConfig($playerConfig)
	{
		$this->playerConfig = $playerConfig;
	}
	
	/**
	 * @return the uiConfId
	 */
	public function getUiConfId()
	{
		return $this->uiConfId;
	}
	
	/**
	 * @param string $uiConfId
	 */
	public function setUiConfId($uiConfId)
	{
		$this->uiConfId = $uiConfId;
	}

	/**
	 * @param array<asset|assetParams> $flavors
	 * @return array
	 */
	public function filterFlavorsByTags($flavors)
	{
		foreach ($this->tags as $tagsFallback)
		{
			$curFlavors = array();
				
			foreach ($flavors as $flavor)
			{
				foreach ($tagsFallback as $tagOption)
				{
					if (!$flavor->hasTag($tagOption))
						continue;
					$curFlavors[] = $flavor;
					break;
				}
			}
				
			if ($curFlavors)
				return $curFlavors;
		}
		return array();
	}
	
	public function cloneAttributes(DeliveryProfileDynamicAttributes $newObj) {
		$this->format = $newObj->getFormat();
		$this->extension = $newObj->getFileExtension();
		$this->containerFormat = $newObj->getContainerFormat();
		$this->seekFromTime = $newObj->getSeekFromTime();
		$this->clipTo = $newObj->getClipTo();
		$this->storageId = $newObj->getStorageId();
		$this->entryId = $newObj->getEntryId();
		$this->tags = $newObj->getTags();
		$this->flavorAssets = $newObj->getFlavorAssets();
		$this->remoteFileSyncs = $newObj->getRemoteFileSyncs();
		$this->manifestFileSync = $newObj->getManifestFileSync();
		$this->preferredBitrate = $newObj->getPreferredBitrate();
		$this->responseFormat = $newObj->getResponseFormat();
		$this->mediaProtocol = $newObj->getMediaProtocol();
		$this->usePlayServer = $newObj->getUsePlayServer();
		$this->playerConfig = $newObj->getPlayerConfig();
		$this->uiConfId = $newObj->getUiConfId();
	}
}

