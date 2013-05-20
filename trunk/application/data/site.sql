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
   frollno varchar(200) not null comment '织轴号',
   frollgrp varchar(200) not null comment '并轴组别XXX-XXX-XXX',
   freednum  tinyint unsigned not null comment '刚筘次数',
   fhealdnum tinyint unsigned not null comment '综丝次数',
   ftension varchar(200) not null comment '设定张力',
   fsnum   tinyint unsigned not null comment '条（匹）数',
   frpm	   smallint unsigned not null comment '转/分钟',
   feffect float not null comment '织机效率(%)',
   fsilktype int(11) unsigned not null comment '1-双织轴；2-试织；4-三纬；8-提花；16-双纬',
   flasttime int(11) unsigned not null comment '上次金机时间',
   flastoperator int(11) unsigned not null comment '上次尽机人员',
   frolltime int(11) unsigned not null comment '本次上轴时间',
   frolloperator int(11) unsigned not null comment '本次上轴人员',
   fpltime   int(11) unsigned not null comment '计划尽机时间',
   frealtime int(11) unsigned not null comment '实际尽机时间',
   frealoperator int(11) unsigned not null comment '实际尽机人员',
   fproductid int(11) unsigned not null comment '产品代码ID(productinfo.fid)',
   fchaineid  int(11) unsigned not null comment '经纱参数代码ID',
   fweftid int(11) unsigned not null comment '纬纱参数代码ID',
   forderid varchar(200) not null default '' comment '订单号',
   fpcardno varchar(200) not null default '' comment '制程卡号',
   fmemo  varchar(400) comment '备注信息',
   frefloomid varchar(400) not null default '' comment '织机编号关联 t5_loominfo.fid 用逗号分割',
   UNIQUE  uk_rollinfo(frollno, frolltime)
);
/*

*/
create table t5_productinfo_base (
  fid int(11) unsigned not null primary key auto_increment comment '产品代码ID',
  fprodcutsn varchar(200) not null default '' comment '产品代码',
  fproductnm varchar(200) not null default '' comment '产品名称',
  fsilksp varchar(200) not null default '' comment '布匹规格',
  freedwd int(11) unsigned not null default 0 comment '筘幅',
  freedsn varchar(32) not null default '' comment '筘号',
  freedlen smallint unsigned not null default 0 comment '筘长(CM)',
  ftotallen int(11) unsigned not null default 0 comment '满停长度',
  fweave varchar(200) not null default '' comment '织法',
  ftype  varchar(200) not null default '' comment '种类',
  flevel varchar(200) not null default '' comment '难易程度',
  fplspeed smallint unsigned not null default 0 comment '计划车速(rpm/min)',
  fpleffect float not null default 0.00 comment '计划效率',
   fchaineid  int(11) unsigned not null comment '经纱参数代码ID',
   fweftid int(11) unsigned not null comment '纬纱参数代码ID',
   finfo varchar(400) default '' comment '其它备注信息',
   fstatus tinyint unsigned not null default 1 comment '产品有效状态',
   UNIQUE uk_productinfo( fprodcutsn)
);

/*
经纱参数表
*/
create table t5_chaineinfo_base (
    fid int(11) unsigned not null primary key auto_increment comment '',
    fnumber int(11) unsigned not null default 0 comment '总经根数',
    fdensity int(11) unsigned not null default 0 comment '经纱密度',
    fminirate float not null default 0.00 comment '经缩率（%）',
    fquota int(11) unsigned not null default 0 comment '经纱定额',
    fspinfo varchar(200) not null default '' comment '经纱规格',
    frate  varchar(100) not null default '' comment '经纱比例',
    flotnum varchar(100) not null default '' comment '经纱号数',
    fsn varchar(100) not null default '' comment '经纱批号',
    ffactory varchar(200) not null default '' comment '经纱厂家',
    UNIQUE uk_chaineinfo(fsn)
);
/*
  纬纱参数表
*/
create table t5_weftinfo_base (
   fid int(11) unsigned not null primary key auto_increment comment '纬纱参数代码ID',
   fdensity float not null default 0.00 comment '维密（根/inch）',
   fcycle smallint unsigned not null default 0 comment '周期转数（每转M圈）',
   fnumber int(11) unsigned not null default 0 comment '周期纬纱（打纬N根）',
   flnumber varchar(100) not null default '' comment '纬纱编号',
   fquota int(11) unsigned not null default 0 comment '纬纱定额',
   fspinfo varchar(200) not null default '' comment '纬纱规格',
   frate varchar(100) not null default '' comment '纬纱比例',
   flotnum varchar(100) not null default '' comment '纬纱号数',
   fsn varchar(100) not null default '' comment '纬纱批号',
   ffactory varchar(200) not null default '' comment '纬纱厂家',
   UNIQUE uk_weftinfo(fsn)
);
/*
--按中继编号分表数据
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

/* 挡车工信息*/
create table t5_events_base (
   fcardno int(11) not null unsigned  primary key,
   fgroupid smallint not null unsigned comment '操作工的组编号',
   fteamid smallint not null unsigned comment '操作工的班次编号',
   fname varchar(100) not null default '操作工姓名',
   ftype varchar(100) not null default '操作工是早班还是中班，晚班的类型',
   flooms varchar(400) not null default ',' comment '管理的织机编号用逗号分割',
   fstatus tinyint unsigned not null default 1 comment '数据有效性默认1-有效'
);
/* 
按小时汇总数据，计算出每个小时内产生的数据量
*/
CREATE TABLE t5_hourdata_base (
  fhourid int(11) unsigned not null  comment '将数据产生的时间分和秒设置为零',
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
获取织机在比统计程序前一次更新新的一行数据
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