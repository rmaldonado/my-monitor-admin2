create table t5_luser (
  fname varchar(64) not null comment 'login name',
  fpass varchar(32) not null comment 'encodedd pass',
  fscname varchar(128) not null comment 'screen name',
  femail varchar(64) not null comment 'user email address', 
  fmobile int(11) unsigned not null comment 'user mobile number',
  fcompanyid  int(11) unsigned not null comment 'user company id',
  fstatus tinyint not null comment 'user status',
  fcreatetm int(11) unsigned not null comment 'create timestamp',
  primary key(fname)
);

create table t5_companyinfo (
  fid int(11) unsigned not null auto_increment primary key,
  fname varchar(256) not null comment 'company name',
  faddress varchar(400) not null comment 'company address',
  floomnum int(11) unsigned not null default 0 comment 'company total loom number',
  fdepartnum int(11) unsigned not null default 0 comment 'company total loom department number',
  finfo varchar(400) not null default '' comment 'company extension info',
  fcreatetm int(11) unsigned not null comment 'company create timestamp',
  fstatus tinyint unsigned not null default 0
);

create table t5_loominfo_base (
  fid int(11) unsigned not null auto_increment primary key,
  floomsn int(11) unsigned not null comment 'loom serial number',
  floomid varchar(64) not null comment 'loom id which show in status window',
  floomx float not null default 0 comment 'loom x axis position',
  floomy float not null default 0 comment 'loom y axis position',
  fcompanyid int(11) unsigned not null comment 'which belon compay id',
  frepeaterid int(11) unsigned not null comment 'repeater address',
  fgatherid int(11) unsigned not null comment 'gather card address',
  fstatus tinyint unsigned not null default 0,
  floominfo varchar(128) comment 'loom extension info'
);

create table t5_loom_secdt_base (
  `floomid` int(11) unsigned NOT NULL,
  `ftmstamp` int(10) unsigned NOT NULL,
  `flstop` int(10) unsigned NOT NULL,
  `flstoptm` int(10) unsigned NOT NULL,
  `fwstop` int(10) unsigned NOT NULL,
  `fwstoptm` int(10) unsigned NOT NULL,
  `fsstop` int(10) unsigned NOT NULL,
  `fsstoptm` int(10) unsigned NOT NULL,
  `fotstop` int(10) unsigned NOT NULL,
  `fotstoptm` int(10) unsigned NOT NULL,
  `frstatus` int(10) unsigned NOT NULL,
  `frpmnum` int(10) unsigned NOT NULL,
  `fdoflag` int(11) DEFAULT '0',
  `fextcol` int(11) DEFAULT NULL,
  PRIMARY KEY (`floomid`)
);