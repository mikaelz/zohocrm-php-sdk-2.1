<?php 
namespace com\zoho\crm\api\profiles;

use com\zoho\crm\api\users\User;
use com\zoho\crm\api\util\Model;

class Profile implements Model
{

	private  $displayLabel;
	private  $createdTime;
	private  $modifiedTime;
	private  $permissionsDetails;
	private  $name;
	private  $modifiedBy;
	private  $defaultview;
	private  $default;
	private  $description;
	private  $id;
	private  $custom;
	private  $createdBy;
	private  $sections;
	private  $delete;
	private  $permissionType;
	private  $keyModified=array();

	/**
	 * The method to get the displayLabel
	 * @return string A string representing the displayLabel
	 */
	public  function getDisplayLabel()
	{
		return $this->displayLabel; 

	}

	/**
	 * The method to set the value to displayLabel
	 * @param string $displayLabel A string
	 */
	public  function setDisplayLabel(string $displayLabel)
	{
		$this->displayLabel=$displayLabel; 
		$this->keyModified['display_label'] = 1; 

	}

	/**
	 * The method to get the createdTime
	 * @return \DateTime An instance of \DateTime
	 */
	public  function getCreatedTime()
	{
		return $this->createdTime; 

	}

	/**
	 * The method to set the value to createdTime
	 * @param \DateTime $createdTime An instance of \DateTime
	 */
	public  function setCreatedTime(\DateTime $createdTime)
	{
		$this->createdTime=$createdTime; 
		$this->keyModified['created_time'] = 1; 

	}

	/**
	 * The method to get the modifiedTime
	 * @return \DateTime An instance of \DateTime
	 */
	public  function getModifiedTime()
	{
		return $this->modifiedTime; 

	}

	/**
	 * The method to set the value to modifiedTime
	 * @param \DateTime $modifiedTime An instance of \DateTime
	 */
	public  function setModifiedTime(\DateTime $modifiedTime)
	{
		$this->modifiedTime=$modifiedTime; 
		$this->keyModified['modified_time'] = 1; 

	}

	/**
	 * The method to get the permissionsDetails
	 * @return array A array representing the permissionsDetails
	 */
	public  function getPermissionsDetails()
	{
		return $this->permissionsDetails; 

	}

	/**
	 * The method to set the value to permissionsDetails
	 * @param array $permissionsDetails A array
	 */
	public  function setPermissionsDetails(array $permissionsDetails)
	{
		$this->permissionsDetails=$permissionsDetails; 
		$this->keyModified['permissions_details'] = 1; 

	}

	/**
	 * The method to get the name
	 * @return string A string representing the name
	 */
	public  function getName()
	{
		return $this->name; 

	}

	/**
	 * The method to set the value to name
	 * @param string $name A string
	 */
	public  function setName(string $name)
	{
		$this->name=$name; 
		$this->keyModified['name'] = 1; 

	}

	/**
	 * The method to get the modifiedBy
	 * @return User An instance of User
	 */
	public  function getModifiedBy()
	{
		return $this->modifiedBy; 

	}

	/**
	 * The method to set the value to modifiedBy
	 * @param User $modifiedBy An instance of User
	 */
	public  function setModifiedBy(User $modifiedBy)
	{
		$this->modifiedBy=$modifiedBy; 
		$this->keyModified['modified_by'] = 1; 

	}

	/**
	 * The method to get the defaultview
	 * @return DefaultView An instance of DefaultView
	 */
	public  function getDefaultview()
	{
		return $this->defaultview; 

	}

	/**
	 * The method to set the value to defaultview
	 * @param DefaultView $defaultview An instance of DefaultView
	 */
	public  function setDefaultview(DefaultView $defaultview)
	{
		$this->defaultview=$defaultview; 
		$this->keyModified['_default_view'] = 1; 

	}

	/**
	 * The method to get the default
	 * @return bool A bool representing the default
	 */
	public  function getDefault()
	{
		return $this->default; 

	}

	/**
	 * The method to set the value to default
	 * @param bool $default A bool
	 */
	public  function setDefault(bool $default)
	{
		$this->default=$default; 
		$this->keyModified['default'] = 1; 

	}

	/**
	 * The method to get the description
	 * @return string A string representing the description
	 */
	public  function getDescription()
	{
		return $this->description; 

	}

	/**
	 * The method to set the value to description
	 * @param string $description A string
	 */
	public  function setDescription(string $description)
	{
		$this->description=$description; 
		$this->keyModified['description'] = 1; 

	}

	/**
	 * The method to get the id
	 * @return string A string representing the id
	 */
	public  function getId()
	{
		return $this->id; 

	}

	/**
	 * The method to set the value to id
	 * @param string $id A string
	 */
	public  function setId(string $id)
	{
		$this->id=$id; 
		$this->keyModified['id'] = 1; 

	}

	/**
	 * The method to get the custom
	 * @return bool A bool representing the custom
	 */
	public  function getCustom()
	{
		return $this->custom; 

	}

	/**
	 * The method to set the value to custom
	 * @param bool $custom A bool
	 */
	public  function setCustom(bool $custom)
	{
		$this->custom=$custom; 
		$this->keyModified['custom'] = 1; 

	}

	/**
	 * The method to get the createdBy
	 * @return User An instance of User
	 */
	public  function getCreatedBy()
	{
		return $this->createdBy; 

	}

	/**
	 * The method to set the value to createdBy
	 * @param User $createdBy An instance of User
	 */
	public  function setCreatedBy(User $createdBy)
	{
		$this->createdBy=$createdBy; 
		$this->keyModified['created_by'] = 1; 

	}

	/**
	 * The method to get the sections
	 * @return array A array representing the sections
	 */
	public  function getSections()
	{
		return $this->sections; 

	}

	/**
	 * The method to set the value to sections
	 * @param array $sections A array
	 */
	public  function setSections(array $sections)
	{
		$this->sections=$sections; 
		$this->keyModified['sections'] = 1; 

	}

	/**
	 * The method to get the delete
	 * @return bool A bool representing the delete
	 */
	public  function getDelete()
	{
		return $this->delete; 

	}

	/**
	 * The method to set the value to delete
	 * @param bool $delete A bool
	 */
	public  function setDelete(bool $delete)
	{
		$this->delete=$delete; 
		$this->keyModified['_delete'] = 1; 

	}

	/**
	 * The method to get the permissionType
	 * @return string A string representing the permissionType
	 */
	public  function getPermissionType()
	{
		return $this->permissionType; 

	}

	/**
	 * The method to set the value to permissionType
	 * @param string $permissionType A string
	 */
	public  function setPermissionType(string $permissionType)
	{
		$this->permissionType=$permissionType; 
		$this->keyModified['permission_type'] = 1; 

	}

	/**
	 * The method to check if the user has modified the given key
	 * @param string $key A string
	 * @return int A int representing the modification
	 */
	public  function isKeyModified(string $key)
	{
		if(((array_key_exists($key, $this->keyModified))))
		{
			return $this->keyModified[$key]; 

		}
		return null; 

	}

	/**
	 * The method to mark the given key as modified
	 * @param string $key A string
	 * @param int $modification A int
	 */
	public  function setKeyModified(string $key, int $modification)
	{
		$this->keyModified[$key] = $modification; 

	}
} 
