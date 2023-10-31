<?php

namespace App\Entity;

use App\Repository\ComplaintRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComplaintRepository::class)]
#[ORM\Table(name: 'customer_complaint_log')]
class Complaint
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $_id = null;

    #[ORM\Column]
    private ?int $account_number = null;

    #[ORM\Column(length: 255)]
    private ?string $account_name = null;

    #[ORM\Column(length: 255)]
    private ?string $contact_name = null;

    #[ORM\Column(length: 255)]
    private ?string $phone = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(length: 255)]
    private ?string $product_description = null;

    #[ORM\Column(length: 255)]
    private ?string $product_size = null;

    #[ORM\Column]
    private ?int $product_id = null;

    #[ORM\Column]
    private ?int $complaint_tier_id = null;

    #[ORM\Column]
    private ?int $complaint_category_id = null;

    #[ORM\Column]
    private ?int $complaint_sub_category_id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $purchase_dt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $account_email = null;

    #[ORM\Column(length: 255)]
    private ?string $purchase_location = null;

    #[ORM\Column(length: 255)]
    private ?string $complaint_description = null;

    #[ORM\Column(length: 255)]
    private ?string $root_cause_analysis = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $action_taken = null;

    #[ORM\Column]
    private ?int $user_id = null;

    #[ORM\Column]
    private ?int $delivery = null;

    #[ORM\Column(nullable: true)]
    private ?int $assigned_to = null;

    #[ORM\Column]
    private ?int $completed = null;

    #[ORM\Column]
    private ?int $completed_by = null;

    #[ORM\Column(length: 255)]
    private ?string $version = null;

    #[ORM\Column(length: 255)]
    private ?string $sqf_ver = null;

    #[ORM\Column(length: 255)]
    private ?string $change_log = null;

    #[ORM\Column]
    private ?int $complaint_source_id = null;

    public function getId(): ?int
    {
        return $this->_id;
    }

    public function setId(int $_id): self
    {
        $this->_id = $_id;

        return $this;
    }

    public function getAccountNumber(): ?int
    {
        return $this->account_number;
    }

    public function setAccountNumber(int $account_number): self
    {
        $this->account_number = $account_number;

        return $this;
    }

    public function getAccountName(): ?string
    {
        return $this->account_name;
    }

    public function setAccountName(string $account_name): self
    {
        $this->account_name = $account_name;

        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->contact_name;
    }

    public function setContactName(string $contact_name): self
    {
        $this->contact_name = $contact_name;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getProductDescription(): ?string
    {
        return $this->product_description;
    }

    public function setProductDescription(string $product_description): self
    {
        $this->product_description = $product_description;

        return $this;
    }

    public function getProductSize(): ?string
    {
        return $this->product_size;
    }

    public function setProductSize(string $product_size): self
    {
        $this->product_size = $product_size;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->product_id;
    }

    public function setProductId(int $product_id): self
    {
        $this->product_id = $product_id;

        return $this;
    }

    public function getComplaintTierId(): ?int
    {
        return $this->complaint_tier_id;
    }

    public function setComplaintTierId(int $complaint_tier_id): self
    {
        $this->complaint_tier_id = $complaint_tier_id;

        return $this;
    }

    public function getComplaintCategoryId(): ?int
    {
        return $this->complaint_category_id;
    }

    public function setComplaintCategoryId(int $complaint_category_id): self
    {
        $this->complaint_category_id = $complaint_category_id;

        return $this;
    }

    public function getComplaintSubCategoryId(): ?int
    {
        return $this->complaint_sub_category_id;
    }

    public function setComplaintSubCategoryId(int $complaint_sub_category_id): self
    {
        $this->complaint_sub_category_id = $complaint_sub_category_id;

        return $this;
    }


    public function getPurchaseDt(): ?\DateTimeInterface
    {
        return $this->purchase_dt;
    }

    public function setPurchaseDt(\DateTimeInterface $purchase_dt): self
    {
        $this->purchase_dt = $purchase_dt;

        return $this;
    }

    public function getAccountEmail(): ?string
    {
        return $this->account_email;
    }

    public function setAccountEmail(?string $account_email): self
    {
        $this->account_email = $account_email;

        return $this;
    }

    public function getPurchaseLocation(): ?string
    {
        return $this->purchase_location;
    }

    public function setPurchaseLocation(string $purchase_location): self
    {
        $this->purchase_location = $purchase_location;

        return $this;
    }

    public function getComplaintDescription(): ?string
    {
        return $this->complaint_description;
    }

    public function setComplaintDescription(string $complaint_description): self
    {
        $this->complaint_description = $complaint_description;

        return $this;
    }

    public function getRootCauseAnalysis(): ?string
    {
        return $this->root_cause_analysis;
    }

    public function setRootCauseAnalysis(string $root_cause_analysis): self
    {
        $this->root_cause_analysis = $root_cause_analysis;

        return $this;
    }

    public function getActionTaken(): ?string
    {
        return $this->action_taken;
    }

    public function setActionTaken(?string $action_taken): self
    {
        $this->action_taken = $action_taken;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getDelivery(): ?int
    {
        return $this->delivery;
    }

    public function setDelivery(int $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    public function getAssignedTo(): ?int
    {
        return $this->assigned_to;
    }

    public function setAssignedTo(?int $assigned_to): self
    {
        $this->assigned_to = $assigned_to;

        return $this;
    }

    public function getCompleted(): ?int
    {
        return $this->completed;
    }

    public function setCompleted(int $completed): self
    {
        $this->completed = $completed;

        return $this;
    }

    public function getCompletedBy(): ?int
    {
        return $this->completed_by;
    }

    public function setCompletedBy(int $completed_by): self
    {
        $this->completed_by = $completed_by;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getSqfVer(): ?string
    {
        return $this->sqf_ver;
    }

    public function setSqfVer(string $sqf_ver): self
    {
        $this->sqf_ver = $sqf_ver;

        return $this;
    }

    public function getChangeLog(): ?string
    {
        return $this->change_log;
    }

    public function setChangeLog(string $change_log): self
    {
        $this->change_log = $change_log;

        return $this;
    }

    public function getComplaintSourceId(): ?int
    {
        return $this->complaint_source_id;
    }

    public function setComplaintSourceId(int $complaint_source_id): self
    {
        $this->complaint_source_id = $complaint_source_id;

        return $this;
    }
}
