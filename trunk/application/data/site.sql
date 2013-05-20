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
  floomname varchar(64) not null comment 'loom id which show in status window',
  floomx float not null default 0 comment 'loom x axis position',
  floomy float not null default 0 comment 'loom y axis position',
  fcompanyid int(11) unsigned not null comment 'which belon compay id',
  frepeaterid int(11) unsigned not null comment 'repeater address',
  flcardid int(11) unsigned not null comment 'gather card address',
  fstatus tinyint unsigned not null default 0,
  frollid   int(11) unsigned not null default 0 comment 'upper spindle primary id',
  floominfo varchar(128) comment 'loom extension info',
  UNIQUE  uk_loominfo(frepeaterid, flcardid)
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
   fproductid int(11) unsigned not null comment '��Ʒ����ID(productinfo.fid)',
   fchaineid  int(11) unsigned not null comment '��ɴ��������ID',
   fweftid int(11) unsigned not null comment 'γɴ��������ID',
   forderid varchar(200) not null default '' comment '������',
   fpcardno varchar(200) not null default '' comment '�Ƴ̿���',
   fmemo  varchar(400) comment '��ע��Ϣ',
   frefloomid varchar(400) not null default '' comment '֯����Ź��� t5_loominfo.fid �ö��ŷָ�',
   UNIQUE  uk_rollinfo(frollno, frolltime)
);
/*

*/
create table t5_productinfo_base (
  fid int(11) unsigned not null primary key auto_increment comment '��Ʒ����ID',
  fprodcutsn varchar(200) not null default '' comment '��Ʒ����',
  fproductnm varchar(200) not null default '' comment '��Ʒ����',
  fsilksp varchar(200) not null default '' comment '��ƥ���',
  freedwd int(11) unsigned not null default 0 comment '�ط�',
  freedsn varchar(32) not null default '' comment '�غ�',
  freedlen smallint unsigned not null default 0 comment '�س�(CM)',
  ftotallen int(11) unsigned not null default 0 comment '��ͣ����',
  fweave varchar(200) not null default '' comment '֯��',
  ftype  varchar(200) not null default '' comment '����',
  flevel varchar(200) not null default '' comment '���׳̶�',
  fplspeed smallint unsigned not null default 0 comment '�ƻ�����(rpm/min)',
  fpleffect float not null default 0.00 comment '�ƻ�Ч��',
   fchaineid  int(11) unsigned not null comment '��ɴ��������ID',
   fweftid int(11) unsigned not null comment 'γɴ��������ID',
   finfo varchar(400) default '' comment '������ע��Ϣ',
   fstatus tinyint unsigned not null default 1 comment '��Ʒ��Ч״̬',
   UNIQUE uk_productinfo( fprodcutsn)
);

/*
��ɴ������
*/
create table t5_chaineinfo_base (
    fid int(11) unsigned not null primary key auto_increment comment '',
    fnumber int(11) unsigned not null default 0 comment '�ܾ�����',
    fdensity int(11) unsigned not null default 0 comment '��ɴ�ܶ�',
    fminirate float not null default 0.00 comment '�����ʣ�%��',
    fquota int(11) unsigned not null default 0 comment '��ɴ����',
    fspinfo varchar(200) not null default '' comment '��ɴ���',
    frate  varchar(100) not null default '' comment '��ɴ����',
    flotnum varchar(100) not null default '' comment '��ɴ����',
    fsn varchar(100) not null default '' comment '��ɴ����',
    ffactory varchar(200) not null default '' comment '��ɴ����',
    UNIQUE uk_chaineinfo(fsn)
);
/*
  γɴ������
*/
create table t5_weftinfo_base (
   fid int(11) unsigned not null primary key auto_increment comment 'γɴ��������ID',
   fdensity float not null default 0.00 comment 'ά�ܣ���/inch��',
   fcycle smallint unsigned not null default 0 comment '����ת����ÿתMȦ��',
   fnumber int(11) unsigned not null default 0 comment '����γɴ����γN����',
   flnumber varchar(100) not null default '' comment 'γɴ���',
   fquota int(11) unsigned not null default 0 comment 'γɴ����',
   fspinfo varchar(200) not null default '' comment 'γɴ���',
   frate varchar(100) not null default '' comment 'γɴ����',
   flotnum varchar(100) not null default '' comment 'γɴ����',
   fsn varchar(100) not null default '' comment 'γɴ����',
   ffactory varchar(200) not null default '' comment 'γɴ����',
   UNIQUE uk_weftinfo(fsn)
);
/*
--���м̱�ŷֱ�����
*/
create table t5_secdt_base (
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
create table t5_status_base (
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
create table t5_punchcard_base (
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

/* ��������Ϣ*/
create table t5_events_base (
   fcardno int(11) not null unsigned  primary key,
   fgroupid smallint not null unsigned comment '������������',
   fteamid smallint not null unsigned comment '�������İ�α��',
   fname varchar(100) not null default '����������',
   ftype varchar(100) not null default '����������໹���а࣬��������',
   flooms varchar(400) not null default ',' comment '�����֯������ö��ŷָ�',
   fstatus tinyint unsigned not null default 1 comment '������Ч��Ĭ��1-��Ч'
);
/* 
��Сʱ�������ݣ������ÿ��Сʱ�ڲ�����������
*/
CREATE TABLE t5_hourdata_base (
  fhourid int(11) unsigned not null  comment '�����ݲ�����ʱ��ֺ�������Ϊ��',
  frepeatid int(11) unsigned not null  comment 'loom repeater id',
  flcardid tinyint unsigned not null  comment 'loom collector id',
  frstatus  int(11) unsigned not null  comment 'loom status', 
  ftimestamp int(11) unsigned not null  comment 'loom status changed time',  
  frlength  int(11) unsigned not null  comment 'lustring length offset',
  fpowersec int(11) unsigned not null  comment 'loom powner on elapsed seconds offset',
  frunsec   int(11) unsigned not null  comment 'loom run seconds offset',
  fwbrknum int(11) unsigned not null  comment 'weft broken times offset',
  fsbrknum int(11) unsigned not null  comment 'side silk broken times offset',
  fobrknum int(11) unsigned not null  comment 'other silk broken times offset',
  frpmnum  int(11) unsigned not null  comment 'electric motor revolutions per minute offset',
  ftbrknum int(11) unsigned not null  comment 'silk warp broken times offset',
  fextnum  int(11) unsigned not null  comment 'unused extension column offset',
  faddtm   int(11) unsigned not null comment 'data inserted time',
  fupdatetm int(11) unsigned not null comment 'data update time',
  PRIMARY KEY (fhourid, frepeatid,flcardid)
);
/* 
��ȡ֯���ڱ�ͳ�Ƴ���ǰһ�θ����µ�һ������
*/
create table t5_loomlsdata_base (
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
  fupdatetm   int(11) unsigned not null comment 'data update time',
  primary key pk_loom_status(frepeatid, flcardid, ftimestamp)
);
/**
 depracated
**/
create table t5_hourevents_base (
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