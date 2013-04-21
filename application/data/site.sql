create table t5_luser (
  fname varchar(64) not null comment 'login name',
  fpass varchar(32) not null comment 'encodedd pass',
  fscname varchar(128) not null comment 'screen name',
  femail varchar(64) not null comment 'user email address', 
  fmobile int(11) unsigned not null comment 'user mobile number',
  fcompanyid  int(11) unsigned not null comment 'user company id',
  fstatus tinyint unsigned default 1 not null comment 'user status',
  froleid smallint unsigned not null comment 'user role id',
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
  frollid   int(11) unsigned not null default 0 comment 'upper spindle primary id',
  floominfo varchar(128) comment 'loom extension info'
);

create table t5_rollinfo_base (
   fid int(11) unsigned not null auto_increment primary key,
   frollno varchar(200) not null comment '֯���',
   frollgrp varchar(200) not null comment '�������XXX-XXX-XXX',
   freednum  tinyint unsigned not null comment '���ش���',
   fhealdnum tinyint unsigned not null comment '��˿����',
   ftension varchar(200) not null comment '�趨����',
   fsnum   tinyint unsigned not null comment '����ƥ����',
   frpm	   smallint unsigned not null comment 'ת/����',
   feffect float not null comment '֯��Ч��(%)',
   fsilktype int(11) unsigned not null comment '1-˫֯�᣻2-��֯��4-��γ��8-�Ứ��16-˫γ',
   flasttime int(11) unsigned not null comment '�ϴν��ʱ��',
   flastoperator int(11) unsigned not null comment '�ϴξ�����Ա',
   frolltime int(11) unsigned not null comment '��������ʱ��',
   frolloperator int(11) unsigned not null comment '����������Ա',
   fpltime   int(11) unsigned not null comment '�ƻ�����ʱ��',
   frealtime int(11) unsigned not null comment 'ʵ�ʾ���ʱ��',
   frealoperator int(11) unsigned not null comment 'ʵ�ʾ�����Ա',
   fproductid int(11) unsigned not null comment '��Ʒ����',
   fchaineid  int(11) unsigned not null comment '��ɴ��������',
   fweftid int(11) unsigned not null comment 'γɴ��������',
   forderid varchar(200) not null default '' comment '������',
   fpcardno varchar(200) not null default '' comment '�Ƴ̿���',
   fmemo  varchar(400) comment '��ע��Ϣ',
   UNIQUE  pk_rollinfo(frollno, frolltime)
);


/*
--���м̱�ŷֱ�����
*/
create table t5_loom_secdt_base (
  frepeatid int(11) unsigned not null  comment 'loom repeater id',
  flcardid tinyint unsigned not null  comment 'loom collector id',
  frstatus  int(11) unsigned not null  comment 'loom status',
  ftimestamp int(11) unsigned not null  comment 'loom status changed time',
  frlength  int(11) unsigned not null  comment 'lustring length',
  fpowersec int(11) unsigned not null  comment 'loom powner on elapsed seconds',
  frunsec   int(11) unsigned not null  comment 'loom run seconds',
  fwbrknum int(11) unsigned not null  comment 'weft broken times',
  fsbrknum int(11) unsigned not null  comment 'side silk broken times',
  fobrknum int(11) unsigned not null  comment 'other silk broken times',
  frpmnum  int(11) unsigned not null  comment 'electric motor revolutions per minute',
  ftbrknum int(11) unsigned not null  comment 'silk warp broken times',
  fextnum  int(11) unsigned not null  comment 'unused extension column',
  faddtm   int(11) unsigned not null comment 'data inserted time',
  fdttype  tinyint unsigned not null comment '1-real data; 2- history data',
  primary key pk_loom_status(frepeatid, flcardid, ftimestamp)

);

/*
loom status. just update data
*/
create table t5_loom_status_base (
  frepeatid int(11) unsigned not null  comment 'loom repeater id',
  flcardid tinyint unsigned not null  comment 'loom collector id',
  frstatus  int(11) unsigned not null  comment 'loom status',
  ftimestamp int(11) unsigned not null  comment 'loom status changed time',
  frlength  int(11) unsigned not null  comment 'lustring length',
  fpowersec int(11) unsigned not null  comment 'loom powner on elapsed seconds',
  frunsec   int(11) unsigned not null  comment 'loom run seconds',
  fwbrknum int(11) unsigned not null  comment 'weft broken times',
  fsbrknum int(11) unsigned not null  comment 'side silk broken times',
  fobrknum int(11) unsigned not null  comment 'other silk broken times',
  frpmnum  int(11) unsigned not null  comment 'electric motor revolutions per minute',
  ftbrknum int(11) unsigned not null  comment 'silk warp broken times',
  fextnum  int(11) unsigned not null  comment 'unused extension column',
  fupdatetm int(11) unsigned not null  comment 'data status changed time',
  fstatus  tinyint unsigned not null comment 'data status',
  primary key pk_loom_status(frepeatid, flcardid)

);
/*
punch card record
*/
create table t5_punchcard_list_base (
  faddtm int(11) unsigned not null comment 'data insert into timestamp',
  fcardno int(11) unsigned not null comment 'employee card no',
  frepeatid int(11) unsigned not null comment 'loom repeater id',
  flcardid int(11) unsigned not null comment 'loom collector card id',
  ftimestamp int(11) unsigned not null comment 'punch card timestamp',
  fstatus tinyint unsigned not null comment 'data status',
  primary key pk_punchcard_list(fcardno, ftimestamp)
);


create table t5_events_base (  
  faddtm int(11) unsigned not null comment 'data insert time',
  frepeatid int(11) unsigned not null comment 'loom repeater id',
  flcardid int(11) unsigned not null comment 'loom collector card id',
  ftimestamp int(11) unsigned not null comment 'punch card timestamp',
  feventid int(11) unsigned not null comment '',
  frlength  int(11) unsigned not null comment 'product silk length',
  fwbrknum int(11) unsigned not null  comment '',
  fsbrknum int(11) unsigned not null  comment '',
  fobrknum int(11) unsigned not null  comment '',
  ftbrknum int(11) unsigned not null  comment '',
  fstatus int(11) unsigned not null comment 'data status',
  primary key pk_events(frepeatid, flcardid, ftimestamp, feventid)
);