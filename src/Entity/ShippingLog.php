<?php

namespace App\Entity;

use App\Repository\ShippingLogRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ShippingLogRepository::class)]
#[ORM\Table(name: 'shipping_log')]
class ShippingLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $_id = null;

    #[ORM\Column]
    private ?int $daily_route_id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $ship_dt = null;

    #[ORM\Column(nullable: true)]
    private ?int $truck = null;

    #[ORM\Column(nullable: true)]
    private ?int $trailer = null;

    #[ORM\Column(length: 255)]
    private ?string $sub_truck = null;

    #[ORM\Column(length: 255)]
    private ?string $sub_trailer = null;

    #[ORM\Column]
    private ?int $dock = null;

    #[ORM\Column]
    private ?int $route = null;

    #[ORM\Column]
    private ?int $driver = null;

    #[ORM\Column]
    private ?int $equip_qty = null;

    #[ORM\Column]
    private ?int $sample_qty = null;

    #[ORM\Column]
    private ?int $straps_qty = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $pallet_jack_id = null;

    #[ORM\Column]
    private ?int $third_evap = null;

    #[ORM\Column]
    private ?int $blanket_cooler = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $time_loaded = null;

    #[ORM\Column]
    private ?int $loader = null;

    #[ORM\Column]
    private ?int $trailer_condition = null;

    #[ORM\Column]
    private ?int $extra_doors = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sd1_seal = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sd2_seal = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sd3_seal = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $bd_seal = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $corrective_action = null;

    #[ORM\Column(length: 15)]
    private ?string $version = null;

    #[ORM\Column(length: 15)]
    private ?string $sqf_ver = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $change_log = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $last_change_dt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $create_stamp = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $finished = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $zone1_temp = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $zone2_temp = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $zone3_temp = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $zone1_prod_temp = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $zone2_prod_temp = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $zone1_note = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $zone2_note = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $effective_dt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $pre_cool_tm_taken = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $pre_cool_temp = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $_id): self
    {
        $this->_id = $_id;

        return $this;
    }

    public function getDailyRouteId(): ?int
    {
        return $this->daily_route_id;
    }

    public function setDailyRouteId(int $daily_route_id): self
    {
        $this->daily_route_id = $daily_route_id;

        return $this;
    }

    public function getShipDt(): ?string
    {
        return $this->ship_dt;
    }

    public function setShipDt(\DateTimeInterface $ship_dt): self
    {
        $this->ship_dt = $ship_dt;

        return $this;
    }

    public function getTruck(): ?int
    {
        return $this->truck;
    }

    public function setTruck(?int $truck): self
    {
        $this->truck = $truck;

        return $this;
    }

    public function getTrailer(): ?int
    {
        return $this->trailer;
    }

    public function setTrailer(?int $trailer): self
    {
        $this->trailer = $trailer;

        return $this;
    }

    public function getSubTruck(): ?string
    {
        return $this->sub_truck;
    }

    public function setSubTruck(string $sub_truck): self
    {
        $this->sub_truck = $sub_truck;

        return $this;
    }

    public function getSubTrailer(): ?string
    {
        return $this->sub_trailer;
    }

    public function setSubTrailer(string $sub_trailer): self
    {
        $this->sub_trailer = $sub_trailer;

        return $this;
    }

    public function getDock(): ?int
    {
        return $this->dock;
    }

    public function setDock(int $dock): self
    {
        $this->dock = $dock;

        return $this;
    }

    public function getRoute(): ?int
    {
        return $this->route;
    }

    public function setRoute(int $route): self
    {
        $this->route = $route;

        return $this;
    }

    public function getDriver(): ?int
    {
        return $this->driver;
    }

    public function setDriver(int $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    public function getEquipQty(): ?int
    {
        return $this->equip_qty;
    }

    public function setEquipQty(int $equip_qty): self
    {
        $this->equip_qty = $equip_qty;

        return $this;
    }

    public function getSampleQty(): ?int
    {
        return $this->sample_qty;
    }

    public function setSampleQty(int $sample_qty): self
    {
        $this->sample_qty = $sample_qty;

        return $this;
    }

    public function getStrapsQty(): ?int
    {
        return $this->straps_qty;
    }

    public function setStrapsQty(int $straps_qty): self
    {
        $this->straps_qty = $straps_qty;

        return $this;
    }

    public function getPalletJackId(): ?string
    {
        return $this->pallet_jack_id;
    }

    public function setPalletJackId(?string $pallet_jack_id): self
    {
        $this->pallet_jack_id = $pallet_jack_id;

        return $this;
    }

    public function getThirdEvap(): ?int
    {
        return $this->third_evap;
    }

    public function setThirdEvap(int $third_evap): self
    {
        $this->third_evap = $third_evap;

        return $this;
    }

    public function getBlanketCooler(): ?int
    {
        return $this->blanket_cooler;
    }

    public function setBlanketCooler(int $blanket_cooler): self
    {
        $this->blanket_cooler = $blanket_cooler;

        return $this;
    }

    public function getTimeLoaded()
    {
        return $this->time_loaded->format('H:i');
    }

    public function setTimeLoaded(?\DateTimeInterface $time_loaded): self
    {
        $this->time_loaded = $time_loaded;

        return $this;
    }

    public function getLoader(): ?int
    {
        return $this->loader;
    }

    public function setLoader(int $loader): self
    {
        $this->loader = $loader;

        return $this;
    }

    public function getTrailerCondition(): ?int
    {
        return $this->trailer_condition;
    }

    public function setTrailerCondition(int $trailer_condition): self
    {
        $this->trailer_condition = $trailer_condition;

        return $this;
    }

    public function getExtraDoors(): ?int
    {
        return $this->extra_doors;
    }

    public function setExtraDoors(int $extra_doors): self
    {
        $this->extra_doors = $extra_doors;

        return $this;
    }

    public function getSd1Seal(): ?string
    {
        return $this->sd1_seal;
    }

    public function setSd1Seal(?string $sd1_seal): self
    {
        $this->sd1_seal = $sd1_seal;

        return $this;
    }

    public function getSd2Seal(): ?string
    {
        return $this->sd2_seal;
    }

    public function setSd2Seal(?string $sd2_seal): self
    {
        $this->sd2_seal = $sd2_seal;

        return $this;
    }

    public function getSd3Seal(): ?string
    {
        return $this->sd3_seal;
    }

    public function setSd3Seal(?string $sd3_seal): self
    {
        $this->sd3_seal = $sd3_seal;

        return $this;
    }

    public function getBdSeal(): ?string
    {
        return $this->bd_seal;
    }

    public function setBdSeal(?string $bd_seal): self
    {
        $this->bd_seal = $bd_seal;

        return $this;
    }

    public function getCorrectiveAction(): ?string
    {
        return $this->corrective_action;
    }

    public function setCorrectiveAction(?string $corrective_action): self
    {
        $this->corrective_action = $corrective_action;

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

    public function setChangeLog(?string $change_log): self
    {
        $this->change_log = $change_log;

        return $this;
    }

    public function getLastChangeDt(): ?\DateTimeInterface
    {
        return $this->last_change_dt;
    }

    public function setLastChangeDt(?\DateTimeInterface $last_change_dt): self
    {
        $this->last_change_dt = $last_change_dt;

        return $this;
    }

    public function getCreateStamp(): ?\DateTimeInterface
    {
        return $this->create_stamp;
    }

    public function setCreateStamp(\DateTimeInterface $create_stamp): self
    {
        $this->create_stamp = $create_stamp;

        return $this;
    }

    public function getFinished(): ?int
    {
        return $this->finished;
    }

    public function setFinished(int $finished): self
    {
        $this->finished = $finished;

        return $this;
    }

    public function getZone1Temp(): ?int
    {
        return $this->zone1_temp;
    }

    public function setZone1Temp(?int $zone1_temp): self
    {
        $this->zone1_temp = $zone1_temp;

        return $this;
    }

    public function getZone2Temp(): ?int
    {
        return $this->zone2_temp;
    }

    public function setZone2Temp(?int $zone2_temp): self
    {
        $this->zone2_temp = $zone2_temp;

        return $this;
    }

    public function getZone3Temp(): ?int
    {
        return $this->zone3_temp;
    }

    public function setZone3Temp(?int $zone3_temp): self
    {
        $this->zone3_temp = $zone3_temp;

        return $this;
    }

    public function getZone1ProdTemp(): ?int
    {
        return $this->zone1_prod_temp;
    }

    public function setZone1ProdTemp(?int $zone1_prod_temp): self
    {
        $this->zone1_prod_temp = $zone1_prod_temp;

        return $this;
    }

    public function getZone2ProdTemp(): ?int
    {
        return $this->zone2_prod_temp;
    }

    public function setZone2ProdTemp(?int $zone2_prod_temp): self
    {
        $this->zone2_prod_temp = $zone2_prod_temp;

        return $this;
    }

    public function getZone1Note(): ?string
    {
        return $this->zone1_note;
    }

    public function setZone1Note(?string $zone1_note): self
    {
        $this->zone1_note = $zone1_note;

        return $this;
    }

    public function getZone2Note(): ?string
    {
        return $this->zone2_note;
    }

    public function setZone2Note(?string $zone2_note): self
    {
        $this->zone2_note = $zone2_note;

        return $this;
    }

    public function getEffectiveDt(): ?\DateTimeInterface
    {
        return $this->effective_dt;
    }

    public function setEffectiveDt(?\DateTimeInterface $effective_dt): self
    {
        $this->effective_dt = $effective_dt;

        return $this;
    }

    public function getPreCoolTmTaken(): ?\DateTimeInterface
    {
        return $this->pre_cool_tm_taken;
    }

    public function setPreCoolTmTaken(?\DateTimeInterface $pre_cool_tm_taken): self
    {
        $this->pre_cool_tm_taken = $pre_cool_tm_taken;

        return $this;
    }

    public function getPreCoolTemp(): ?int
    {
        return $this->pre_cool_temp;
    }

    public function setPreCoolTemp(?int $pre_cool_temp): self
    {
        $this->pre_cool_temp = $pre_cool_temp;

        return $this;
    }
}
