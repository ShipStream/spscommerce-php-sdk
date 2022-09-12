<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * This group describes a part of an item
 */
class ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsMasterItemAttributeItemsItemAttributeItems extends ClassStructure
{
    const CONST_3_DC = '3DC';

    const ABPF = 'ABPF';

    const ABRS = 'ABRS';

    const ABV = 'ABV';

    const ACRI = 'ACRI';

    const ACS = 'ACS';

    const ACSY = 'ACSY';

    const ACT = 'ACT';

    const ACTV = 'ACTV';

    const ADDR = 'ADDR';

    const ADJS = 'ADJS';

    const ADLT = 'ADLT';

    const ADMO = 'ADMO';

    const ADR = 'ADR';

    const AER = 'AER';

    const AFF = 'AFF';

    const AFTG = 'AFTG';

    const AFTP = 'AFTP';

    const AING = 'AING';

    const AIOD = 'AIOD';

    const AIR = 'AIR';

    const AJOB = 'AJOB';

    const ALCF = 'ALCF';

    const ALI = 'ALI';

    const ALMT = 'ALMT';

    const ALO = 'ALO';

    const ALTM = 'ALTM';

    const AMMF = 'AMMF';

    const ANMN = 'ANMN';

    const ANSI = 'ANSI';

    const ANTR = 'ANTR';

    const AO = 'AO';

    const AOIN = 'AOIN';

    const AOU = 'AOU';

    const APL = 'APL';

    const APLG = 'APLG';

    const APMD = 'APMD';

    const APPL = 'APPL';

    const ARC = 'ARC';

    const ARM = 'ARM';

    const ARMR = 'ARMR';

    const ARPF = 'ARPF';

    const ARS = 'ARS';

    const ARTF = 'ARTF';

    const ARTS = 'ARTS';

    const ASC = 'ASC';

    const ASHT = 'ASHT';

    const ASM = 'ASM';

    const ATD = 'ATD';

    const ATH = 'ATH';

    const ATTT = 'ATTT';

    const AW = 'AW';

    const AWRC = 'AWRC';

    const BARC = 'BARC';

    const BASU = 'BASU';

    const BAT = 'BAT';

    const BB = 'BB';

    const BBCL = 'BBCL';

    const BBL = 'BBL';

    const BBP = 'BBP';

    const BBRL = 'BBRL';

    const BBS = 'BBS';

    const BC = 'BC';

    const BCHF = 'BCHF';

    const BCK1 = 'BCK1';

    const BCK2 = 'BCK2';

    const BCKM = 'BCKM';

    const BCKP = 'BCKP';

    const BCS = 'BCS';

    const BDMT = 'BDMT';

    const BDPT = 'BDPT';

    const BDRP = 'BDRP';

    const BDSZ = 'BDSZ';

    const BFCT = 'BFCT';

    const BGFT = 'BGFT';

    const BIMC = 'BIMC';

    const BIND = 'BIND';

    const BKAJ = 'BKAJ';

    const BKCV = 'BKCV';

    const BKHT = 'BKHT';

    const BKMT = 'BKMT';

    const BKMX = 'BKMX';

    const BLD = 'BLD';

    const BLDE = 'BLDE';

    const BLDM = 'BLDM';

    const BLE = 'BLE';

    const BLPT = 'BLPT';

    const BLS = 'BLS';

    const BLTP = 'BLTP';

    const BLWR = 'BLWR';

    const BND = 'BND';

    const BNTM = 'BNTM';

    const BPAF = 'BPAF';

    const BPE = 'BPE';

    const BPY = 'BPY';

    const BRAF = 'BRAF';

    const BRC = 'BRC';

    const BRD = 'BRD';

    const BRGT = 'BRGT';

    const BRM = 'BRM';

    const BRN = 'BRN';

    const BRNS = 'BRNS';

    const BRQ = 'BRQ';

    const BRR = 'BRR';

    const BRST = 'BRST';

    const BRT = 'BRT';

    const BRWT = 'BRWT';

    const BS = 'BS';

    const BSCV = 'BSCV';

    const BSN = 'BSN';

    const BT = 'BT';

    const BTL = 'BTL';

    const BTS = 'BTS';

    const BTST = 'BTST';

    const BU = 'BU';

    const BUL = 'BUL';

    const BVRG = 'BVRG';

    const BYCY = 'BYCY';

    const CAB = 'CAB';

    const CALF = 'CALF';

    const CALP = 'CALP';

    const CALS = 'CALS';

    const CANH = 'CANH';

    const CARG = 'CARG';

    const CARP = 'CARP';

    const CARS = 'CARS';

    const CB = 'CB';

    const CCP = 'CCP';

    const CCW = 'CCW';

    const CDI = 'CDI';

    const CDO = 'CDO';

    const CFBN = 'CFBN';

    const CFN = 'CFN';

    const CH = 'CH';

    const CHEM = 'CHEM';

    const CHGT = 'CHGT';

    const CHMR = 'CHMR';

    const CHR = 'CHR';

    const CHRT = 'CHRT';

    const CHST = 'CHST';

    const CHZM = 'CHZM';

    const CI = 'CI';

    const CL = 'CL';

    const CLAT = 'CLAT';

    const CLB = 'CLB';

    const CLD = 'CLD';

    const CLDM = 'CLDM';

    const CLGR = 'CLGR';

    const CLLO = 'CLLO';

    const CLNB = 'CLNB';

    const CLPT = 'CLPT';

    const CLSO = 'CLSO';

    const CLSW = 'CLSW';

    const CMFL = 'CMFL';

    const CMI = 'CMI';

    const CMPR = 'CMPR';

    const CNDL = 'CNDL';

    const CNDT = 'CNDT';

    const CNMD = 'CNMD';

    const CNS = 'CNS';

    const CO = 'CO';

    const COA = 'COA';

    const CON = 'CON';

    const CONM = 'CONM';

    const CONV = 'CONV';

    const COO = 'COO';

    const COOP = 'COOP';

    const COP = 'COP';

    const COSM = 'COSM';

    const COSU = 'COSU';

    const COUR = 'COUR';

    const COV = 'COV';

    const CPMR = 'CPMR';

    const CPRN = 'CPRN';

    const CQ = 'CQ';

    const CR = 'CR';

    const CRCT = 'CRCT';

    const CRDI = 'CRDI';

    const CRDL = 'CRDL';

    const CRS = 'CRS';

    const CSET = 'CSET';

    const CSHN = 'CSHN';

    const CSMT = 'CSMT';

    const CSTP = 'CSTP';

    const CSTR = 'CSTR';

    const CSUB = 'CSUB';

    const CTCM = 'CTCM';

    const CTMP = 'CTMP';

    const CTNG = 'CTNG';

    const CTRS = 'CTRS';

    const CUPS = 'CUPS';

    const CUS = 'CUS';

    const CVI = 'CVI';

    const CVO = 'CVO';

    const CW = 'CW';

    const CWY = 'CWY';

    const DCRS = 'DCRS';

    const DESR = 'DESR';

    const DF = 'DF';

    const DIM = 'DIM';

    const DIS = 'DIS';

    const DLCC = 'DLCC';

    const DLCT = 'DLCT';

    const DNC = 'DNC';

    const DOOR = 'DOOR';

    const DRCF = 'DRCF';

    const DRP = 'DRP';

    const DRPL = 'DRPL';

    const DRS = 'DRS';

    const DRSG = 'DRSG';

    const DRST = 'DRST';

    const DS = 'DS';

    const DSP = 'DSP';

    const DSR = 'DSR';

    const DUCT = 'DUCT';

    const DUR = 'DUR';

    const DVDC = 'DVDC';

    const DVTR = 'DVTR';

    const DWRM = 'DWRM';

    const DYE = 'DYE';

    const DYGM = 'DYGM';

    const DYOW = 'DYOW';

    const EBP = 'EBP';

    const ECAE = 'ECAE';

    const ECCN = 'ECCN';

    const ED = 'ED';

    const EDT = 'EDT';

    const EDUF = 'EDUF';

    const EF = 'EF';

    const EKO = 'EKO';

    const ELAJ = 'ELAJ';

    const ELMD = 'ELMD';

    const END = 'END';

    const ENTT = 'ENTT';

    const EPB = 'EPB';

    const ESRB = 'ESRB';

    const EXPP = 'EXPP';

    const EYOB = 'EYOB';

    const EYR = 'EYR';

    const FA = 'FA';

    const FAAC = 'FAAC';

    const FACB = 'FACB';

    const FAN = 'FAN';

    const FATP = 'FATP';

    const FATS = 'FATS';

    const FATY = 'FATY';

    const FB = 'FB';

    const FBRT = 'FBRT';

    const FBT = 'FBT';

    const FCS = 'FCS';

    const FCT = 'FCT';

    const FCTS = 'FCTS';

    const FCTT = 'FCTT';

    const FDF = 'FDF';

    const FDSP = 'FDSP';

    const FDSS = 'FDSS';

    const FERT = 'FERT';

    const FF = 'FF';

    const FIT = 'FIT';

    const FLCH = 'FLCH';

    const FLM = 'FLM';

    const FLNG = 'FLNG';

    const FLV = 'FLV';

    const FLX = 'FLX';

    const FOG = 'FOG';

    const FOOT = 'FOOT';

    const FOT = 'FOT';

    const FOVA = 'FOVA';

    const FOVH = 'FOVH';

    const FOVT = 'FOVT';

    const FPTN = 'FPTN';

    const FRME = 'FRME';

    const FRML = 'FRML';

    const FRRT = 'FRRT';

    const FSC = 'FSC';

    const FSHL = 'FSHL';

    const FT = 'FT';

    const FTEX = 'FTEX';

    const FTSK = 'FTSK';

    const FUE = 'FUE';

    const FUEC = 'FUEC';

    const FW = 'FW';

    const FWC = 'FWC';

    const FWUP = 'FWUP';

    const FZCF = 'FZCF';

    const GBAT = 'GBAT';

    const GBAV = 'GBAV';

    const GCBC = 'GCBC';

    const GCTP = 'GCTP';

    const GDAJ = 'GDAJ';

    const GEM = 'GEM';

    const GEN = 'GEN';

    const GEO = 'GEO';

    const GFAH = 'GFAH';

    const GMCL = 'GMCL';

    const GMCT = 'GMCT';

    const GMOC = 'GMOC';

    const GMSH = 'GMSH';

    const GNBX = 'GNBX';

    const GPC = 'GPC';

    const GPCB = 'GPCB';

    const GPS = 'GPS';

    const GR = 'GR';

    const GRD = 'GRD';

    const GRDL = 'GRDL';

    const GRLL = 'GRLL';

    const GRP = 'GRP';

    const GRRT = 'GRRT';

    const GTHD = 'GTHD';

    const GTRC = 'GTRC';

    const HA = 'HA';

    const HAN = 'HAN';

    const HB = 'HB';

    const HC = 'HC';

    const HCNC = 'HCNC';

    const HD = 'HD';

    const HDAJ = 'HDAJ';

    const HDFH = 'HDFH';

    const HDMI = 'HDMI';

    const HDMO = 'HDMO';

    const HDWR = 'HDWR';

    const HE = 'HE';

    const HEAD = 'HEAD';

    const HEAT = 'HEAT';

    const HEFF = 'HEFF';

    const HEPA = 'HEPA';

    const HF = 'HF';

    const HLES = 'HLES';

    const HM = 'HM';

    const HMC = 'HMC';

    const HNBG = 'HNBG';

    const HND = 'HND';

    const HNSW = 'HNSW';

    const HPR = 'HPR';

    const HRRM = 'HRRM';

    const HRTD = 'HRTD';

    const HRTP = 'HRTP';

    const HSD = 'HSD';

    const HSLC = 'HSLC';

    const HTEL = 'HTEL';

    const HTRS = 'HTRS';

    const HTSY = 'HTSY';

    const HYP = 'HYP';

    const IED = 'IED';

    const IGNT = 'IGNT';

    const IING = 'IING';

    const IMA = 'IMA';

    const IME = 'IME';

    const IMG = 'IMG';

    const INCL = 'INCL';

    const INDM = 'INDM';

    const INDU = 'INDU';

    const INF = 'INF';

    const INFR = 'INFR';

    const ING = 'ING';

    const INGL = 'INGL';

    const INGP = 'INGP';

    const INKA = 'INKA';

    const INLG = 'INLG';

    const INLR = 'INLR';

    const INS = 'INS';

    const INSL = 'INSL';

    const INTS = 'INTS';

    const INVU = 'INVU';

    const ISL = 'ISL';

    const ISLR = 'ISLR';

    const ISLW = 'ISLW';

    const ITR = 'ITR';

    const ITS = 'ITS';

    const ITTR = 'ITTR';

    const JKLG = 'JKLG';

    const JMRL = 'JMRL';

    const JNK = 'JNK';

    const JS = 'JS';

    const KIWA = 'KIWA';

    const KNSC = 'KNSC';

    const KP = 'KP';

    const KSHR = 'KSHR';

    const KT = 'KT';

    const KW = 'KW';

    const KYBD = 'KYBD';

    const KYSZ = 'KYSZ';

    const LADR = 'LADR';

    const LAUC = 'LAUC';

    const LCKT = 'LCKT';

    const LCNS = 'LCNS';

    const LEA = 'LEA';

    const LFST = 'LFST';

    const LI = 'LI';

    const LLA = 'LLA';

    const LMM = 'LMM';

    const LMTD = 'LMTD';

    const LN = 'LN';

    const LO = 'LO';

    const LOCK = 'LOCK';

    const LOF = 'LOF';

    const LQD = 'LQD';

    const LS = 'LS';

    const LSCR = 'LSCR';

    const LSCT = 'LSCT';

    const LSR = 'LSR';

    const LT = 'LT';

    const LTS = 'LTS';

    const LUBE = 'LUBE';

    const MAK = 'MAK';

    const MARR = 'MARR';

    const MDCT = 'MDCT';

    const ME = 'ME';

    const MEP = 'MEP';

    const MER = 'MER';

    const METL = 'METL';

    const MF = 'MF';

    const MFR = 'MFR';

    const MGFC = 'MGFC';

    const MGNT = 'MGNT';

    const MIC = 'MIC';

    const MILS = 'MILS';

    const MKTE = 'MKTE';

    const MLBN = 'MLBN';

    const MN = 'MN';

    const MNLG = 'MNLG';

    const MOD = 'MOD';

    const MODE = 'MODE';

    const MOTN = 'MOTN';

    const MOU = 'MOU';

    const MOUL = 'MOUL';

    const MOUT = 'MOUT';

    const MPAA = 'MPAA';

    const MPSE = 'MPSE';

    const MRRR = 'MRRR';

    const MTBR = 'MTBR';

    const MTCH = 'MTCH';

    const MTO = 'MTO';

    const MTR = 'MTR';

    const MU = 'MU';

    const MXTP = 'MXTP';

    const MYE = 'MYE';

    const MZVL = 'MZVL';

    const NCKL = 'NCKL';

    const NCKT = 'NCKT';

    const NFPA = 'NFPA';

    const NIGP = 'NIGP';

    const NMBO = 'NMBO';

    const NNMK = 'NNMK';

    const NOMF = 'NOMF';

    const NPOT = 'NPOT';

    const NS = 'NS';

    const NSFT = 'NSFT';

    const NSN = 'NSN';

    const NST = 'NST';

    const NVTB = 'NVTB';

    const OBS = 'OBS';

    const OFET = 'OFET';

    const OI = 'OI';

    const OLRS = 'OLRS';

    const OO = 'OO';

    const OPNT = 'OPNT';

    const OPPR = 'OPPR';

    const OPTR = 'OPTR';

    const _OR = 'OR';

    const ORDU = 'ORDU';

    const ORMD = 'ORMD';

    const ORTH = 'ORTH';

    const OS = 'OS';

    const OSC = 'OSC';

    const OUTR = 'OUTR';

    const OVNS = 'OVNS';

    const PADD = 'PADD';

    const PBL = 'PBL';

    const PBY = 'PBY';

    const PCAR = 'PCAR';

    const PCAV = 'PCAV';

    const PCKL = 'PCKL';

    const PDL = 'PDL';

    const PED = 'PED';

    const PEST = 'PEST';

    const PG = 'PG';

    const PHPW = 'PHPW';

    const PHT = 'PHT';

    const PILG = 'PILG';

    const PL = 'PL';

    const PLN = 'PLN';

    const PLNT = 'PLNT';

    const PLS = 'PLS';

    const PLTD = 'PLTD';

    const PLY = 'PLY';

    const PLYR = 'PLYR';

    const PM = 'PM';

    const PMD = 'PMD';

    const PMF = 'PMF';

    const PNTR = 'PNTR';

    const PNTS = 'PNTS';

    const POI = 'POI';

    const POK = 'POK';

    const POL = 'POL';

    const PPA = 'PPA';

    const PPI = 'PPI';

    const PPM = 'PPM';

    const PPUA = 'PPUA';

    const PRC = 'PRC';

    const PRS = 'PRS';

    const PRSB = 'PRSB';

    const PRSI = 'PRSI';

    const PRSZ = 'PRSZ';

    const PRTA = 'PRTA';

    const PRTG = 'PRTG';

    const PRTP = 'PRTP';

    const PRTS = 'PRTS';

    const PSFT = 'PSFT';

    const PSKU = 'PSKU';

    const PSO = 'PSO';

    const PT = 'PT';

    const PTBL = 'PTBL';

    const PTCR = 'PTCR';

    const PTLV = 'PTLV';

    const PTR = 'PTR';

    const PTTY = 'PTTY';

    const PUMP = 'PUMP';

    const PUPL = 'PUPL';

    const PVL = 'PVL';

    const PYST = 'PYST';

    const QTCL = 'QTCL';

    const QTTP = 'QTTP';

    const RAI = 'RAI';

    const RAM = 'RAM';

    const RB = 'RB';

    const REF = 'REF';

    const REO = 'REO';

    const REP = 'REP';

    const RETR = 'RETR';

    const REU = 'REU';

    const REVR = 'REVR';

    const RF = 'RF';

    const RFLL = 'RFLL';

    const RFTG = 'RFTG';

    const RFTN = 'RFTN';

    const RHC = 'RHC';

    const RI = 'RI';

    const RIS = 'RIS';

    const RL = 'RL';

    const RM = 'RM';

    const RMCT = 'RMCT';

    const RMHO = 'RMHO';

    const RMVI = 'RMVI';

    const RNI = 'RNI';

    const RP = 'RP';

    const RPCK = 'RPCK';

    const RPCP = 'RPCP';

    const RPLN = 'RPLN';

    const RPM = 'RPM';

    const RSR = 'RSR';

    const RST = 'RST';

    const RTC = 'RTC';

    const RTCC = 'RTCC';

    const RTCL = 'RTCL';

    const RTE = 'RTE';

    const RUL = 'RUL';

    const SADJ = 'SADJ';

    const SAG = 'SAG';

    const SAJM = 'SAJM';

    const SBBT = 'SBBT';

    const SBFL = 'SBFL';

    const SBJ = 'SBJ';

    const SBR = 'SBR';

    const SCAV = 'SCAV';

    const SCK = 'SCK';

    const SCKB = 'SCKB';

    const SCL = 'SCL';

    const SCNT = 'SCNT';

    const SCPR = 'SCPR';

    const SCRG = 'SCRG';

    const SEAT = 'SEAT';

    const SECT = 'SECT';

    const SERS = 'SERS';

    const SES = 'SES';

    const SET = 'SET';

    const SFTF = 'SFTF';

    const SFTM = 'SFTM';

    const SFTP = 'SFTP';

    const SG = 'SG';

    const SGC = 'SGC';

    const SGHT = 'SGHT';

    const SGLU = 'SGLU';

    const SHE = 'SHE';

    const SHF = 'SHF';

    const SHHT = 'SHHT';

    const SHIP = 'SHIP';

    const SHL = 'SHL';

    const SHLR = 'SHLR';

    const SHP = 'SHP';

    const SHRD = 'SHRD';

    const SHRP = 'SHRP';

    const SIC = 'SIC';

    const SIG = 'SIG';

    const SJT = 'SJT';

    const SKL = 'SKL';

    const SKS = 'SKS';

    const SKTM = 'SKTM';

    const SKTP = 'SKTP';

    const SL = 'SL';

    const SLPR = 'SLPR';

    const SLPT = 'SLPT';

    const SLR = 'SLR';

    const SLTL = 'SLTL';

    const SMC = 'SMC';

    const SMM = 'SMM';

    const SN = 'SN';

    const SO = 'SO';

    const SPC = 'SPC';

    const SPCS = 'SPCS';

    const SPEQ = 'SPEQ';

    const SPFR = 'SPFR';

    const SPI = 'SPI';

    const SPN = 'SPN';

    const SPNR = 'SPNR';

    const SPO = 'SPO';

    const SPPT = 'SPPT';

    const SPRC = 'SPRC';

    const SPRT = 'SPRT';

    const SRFC = 'SRFC';

    const SRU = 'SRU';

    const SRVP = 'SRVP';

    const SSZ = 'SSZ';

    const ST = 'ST';

    const STCK = 'STCK';

    const STFC = 'STFC';

    const STG = 'STG';

    const STON = 'STON';

    const STR = 'STR';

    const STRG = 'STRG';

    const STRP = 'STRP';

    const STRS = 'STRS';

    const STSI = 'STSI';

    const SUB = 'SUB';

    const SVC = 'SVC';

    const SVD = 'SVD';

    const SVI = 'SVI';

    const SVO = 'SVO';

    const SW = 'SW';

    const SWS = 'SWS';

    const SWWT = 'SWWT';

    const SYSR = 'SYSR';

    const TANE = 'TANE';

    const TAPF = 'TAPF';

    const TBST = 'TBST';

    const TCHL = 'TCHL';

    const TCNF = 'TCNF';

    const TCTC = 'TCTC';

    const TEA = 'TEA';

    const TEXT = 'TEXT';

    const TGRM = 'TGRM';

    const THD = 'THD';

    const THDC = 'THDC';

    const THRM = 'THRM';

    const TIM = 'TIM';

    const TIMR = 'TIMR';

    const TINT = 'TINT';

    const TIT = 'TIT';

    const TLBT = 'TLBT';

    const TLI = 'TLI';

    const TLSC = 'TLSC';

    const TM = 'TM';

    const TMA = 'TMA';

    const TMEP = 'TMEP';

    const TMPC = 'TMPC';

    const TMPL = 'TMPL';

    const TMPR = 'TMPR';

    const TMPS = 'TMPS';

    const TOPG = 'TOPG';

    const TOS = 'TOS';

    const TOTF = 'TOTF';

    const TP = 'TP';

    const TPL = 'TPL';

    const TPMC = 'TPMC';

    const TQE = 'TQE';

    const TR = 'TR';

    const TRCF = 'TRCF';

    const TRDM = 'TRDM';

    const TRMC = 'TRMC';

    const TRMM = 'TRMM';

    const TRST = 'TRST';

    const TRTP = 'TRTP';

    const TS = 'TS';

    const TSAR = 'TSAR';

    const TSR = 'TSR';

    const TSZ = 'TSZ';

    const TTG = 'TTG';

    const TTHO = 'TTHO';

    const TVR = 'TVR';

    const TVSZ = 'TVSZ';

    const TWTP = 'TWTP';

    const TYCT = 'TYCT';

    const UIST = 'UIST';

    const UNDW = 'UNDW';

    const UNIV = 'UNIV';

    const UNSPSC = 'UNSPSC';

    const UPD = 'UPD';

    const UPH = 'UPH';

    const USB = 'USB';

    const USDA = 'USDA';

    const VARP = 'VARP';

    const VARS = 'VARS';

    const VART = 'VART';

    const VEHT = 'VEHT';

    const VHSC = 'VHSC';

    const VID = 'VID';

    const VMT = 'VMT';

    const VNTS = 'VNTS';

    const VOC = 'VOC';

    const VRSN = 'VRSN';

    const VRTL = 'VRTL';

    const VVTP = 'VVTP';

    const VW = 'VW';

    const WAC = 'WAC';

    const WAI = 'WAI';

    const WAIR = 'WAIR';

    const WAR = 'WAR';

    const WARD = 'WARD';

    const WAS = 'WAS';

    const WB = 'WB';

    const WDAJ = 'WDAJ';

    const WEAP = 'WEAP';

    const WEHC = 'WEHC';

    const WI = 'WI';

    const WL = 'WL';

    const WNDP = 'WNDP';

    const WNDR = 'WNDR';

    const WOOD = 'WOOD';

    const WOR = 'WOR';

    const WP = 'WP';

    const WPF = 'WPF';

    const WPMT = 'WPMT';

    const WR = 'WR';

    const WRKT = 'WRKT';

    const WRN = 'WRN';

    const WRNI = 'WRNI';

    const WRUT = 'WRUT';

    const WTRP = 'WTRP';

    const WTRR = 'WTRR';

    const CONST_01 = '01';

    const CONST_03 = '03';

    const CONST_12 = '12';

    const CONST_15 = '15';

    const CONST_1_N = '1N';

    const CONST_2_N = '2N';

    const CONST_2_P = '2P';

    const CONST_2_W = '2W';

    const CONST_31 = '31';

    const CONST_3_F = '3F';

    const CONST_3_T = '3T';

    const CONST_4_E = '4E';

    const CONST_4_F = '4F';

    const CONST_4_G = '4G';

    const CONST_50 = '50';

    const CONST_5_I = '5I';

    const CONST_68 = '68';

    const CONST_8_C = '8C';

    const AA = 'AA';

    const AD = 'AD';

    const AF = 'AF';

    const AM = 'AM';

    const _AS = 'AS';

    const AV = 'AV';

    const AY = 'AY';

    const BA = 'BA';

    const BD = 'BD';

    const BF = 'BF';

    const BG = 'BG';

    const BI = 'BI';

    const BJ = 'BJ';

    const BK = 'BK';

    const BL = 'BL';

    const BM = 'BM';

    const BN = 'BN';

    const BO = 'BO';

    const BP = 'BP';

    const BR = 'BR';

    const BTU = 'BTU';

    const BX = 'BX';

    const C3 = 'C3';

    const C4 = 'C4';

    const C8 = 'C8';

    const CA = 'CA';

    const CA1 = 'CA1';

    const CA2 = 'CA2';

    const CC = 'CC';

    const CD = 'CD';

    const CE = 'CE';

    const CF = 'CF';

    const CFM = 'CFM';

    const CG = 'CG';

    const CM = 'CM';

    const CN = 'CN';

    const CP = 'CP';

    const CS = 'CS';

    const CT = 'CT';

    const CU = 'CU';

    const CX = 'CX';

    const CY = 'CY';

    const DA = 'DA';

    const DB = 'DB';

    const DD = 'DD';

    const DE = 'DE';

    const DG = 'DG';

    const DH = 'DH';

    const DI = 'DI';

    const DK = 'DK';

    const DL = 'DL';

    const DM = 'DM';

    const _DO = 'DO';

    const DP = 'DP';

    const DR = 'DR';

    const DW = 'DW';

    const DWT = 'DWT';

    const DZ = 'DZ';

    const E1 = 'E1';

    const EA = 'EA';

    const EP = 'EP';

    const EV = 'EV';

    const FO = 'FO';

    const FYGD = 'FYGD';

    const FZ = 'FZ';

    const GA = 'GA';

    const GB = 'GB';

    const GH = 'GH';

    const GHZ = 'GHZ';

    const GL = 'GL';

    const GM = 'GM';

    const GN = 'GN';

    const GPM = 'GPM';

    const GS = 'GS';

    const H1 = 'H1';

    const H2 = 'H2';

    const H3 = 'H3';

    const H4 = 'H4';

    const H6 = 'H6';

    const HCF = 'HCF';

    const HK = 'HK';

    const HL = 'HL';

    const HR = 'HR';

    const HS = 'HS';

    const HU = 'HU';

    const HV = 'HV';

    const HY = 'HY';

    const HZ = 'HZ';

    const I = 'I';

    const IM = 'IM';

    const IN = 'IN';

    const JA = 'JA';

    const JO = 'JO';

    const JR = 'JR';

    const JU = 'JU';

    const K6 = 'K6';

    const KC = 'KC';

    const KE = 'KE';

    const KG = 'KG';

    const KH = 'KH';

    const KM = 'KM';

    const KV = 'KV';

    const KVA = 'KVA';

    const KVAH = 'KVAH';

    const LB = 'LB';

    const LF = 'LF';

    const LG = 'LG';

    const LK = 'LK';

    const LM = 'LM';

    const LR = 'LR';

    const LU = 'LU';

    const LY = 'LY';

    const MB = 'MB';

    const MC = 'MC';

    const MG = 'MG';

    const MHZ = 'MHZ';

    const MJ = 'MJ';

    const MK = 'MK';

    const ML = 'ML';

    const MM = 'MM';

    const MO = 'MO';

    const MOA = 'MOA';

    const MP = 'MP';

    const MR = 'MR';

    const NG = 'NG';

    const NX = 'NX';

    const OP = 'OP';

    const OZ = 'OZ';

    const P = 'P';

    const P3 = 'P3';

    const P4 = 'P4';

    const P5 = 'P5';

    const P6 = 'P6';

    const P7 = 'P7';

    const P8 = 'P8';

    const P9 = 'P9';

    const PA = 'PA';

    const PC = 'PC';

    const PD = 'PD';

    const PER = 'PER';

    const PF = 'PF';

    const PH = 'PH';

    const PK = 'PK';

    const PO = 'PO';

    const PP = 'PP';

    const PR = 'PR';

    const PSI = 'PSI';

    const PV = 'PV';

    const PXL = 'PXL';

    const PY = 'PY';

    const Q1 = 'Q1';

    const Q4 = 'Q4';

    const Q5 = 'Q5';

    const Q6 = 'Q6';

    const Q7 = 'Q7';

    const QD = 'QD';

    const QS = 'QS';

    const QT = 'QT';

    const RA = 'RA';

    const RE = 'RE';

    const RO = 'RO';

    const SC = 'SC';

    const SF = 'SF';

    const SH = 'SH';

    const SI = 'SI';

    const SJ = 'SJ';

    const SM = 'SM';

    const SP = 'SP';

    const SQ = 'SQ';

    const SV = 'SV';

    const SY = 'SY';

    const SZ = 'SZ';

    const T4 = 'T4';

    const TB = 'TB';

    const TC = 'TC';

    const TCF = 'TCF';

    const TE = 'TE';

    const TH = 'TH';

    const TI = 'TI';

    const TK = 'TK';

    const TL = 'TL';

    const TO = 'TO';

    const TRM = 'TRM';

    const TU = 'TU';

    const TY = 'TY';

    const U2 = 'U2';

    const U5 = 'U5';

    const UN = 'UN';

    const UZ = 'UZ';

    const _VAR = 'VAR';

    const VC = 'VC';

    const VI = 'VI';

    const VO = 'VO';

    const WA = 'WA';

    const WD = 'WD';

    const WG = 'WG';

    const WK = 'WK';

    const X8 = 'X8';

    const Y4 = 'Y4';

    const YD = 'YD';

    const YR = 'YR';

    const ZC = 'ZC';

    const N = 'N';

    const Y = 'Y';

    /** @var string Code identifying the part of an item being described. */
    public $itemAttributeQualifier;

    /** @var float Numeric value of the ItemAttributeQualifier */
    public $value;

    /** @var string The unit of measure of the numeric value of the ItemAttributeQualifier */
    public $valueUOM;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /** @var string Code indicating a Yes or No condition or response */
    public $yesOrNoResponse;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsMasterItemAttributeItemsItemAttributeItemsMeasurementsItems[]|array */
    public $measurements;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->itemAttributeQualifier = Schema::string();
        $properties->itemAttributeQualifier->enum = array(
            self::CONST_3_DC,
            self::ABPF,
            self::ABRS,
            self::ABV,
            self::ACRI,
            self::ACS,
            self::ACSY,
            self::ACT,
            self::ACTV,
            self::ADDR,
            self::ADJS,
            self::ADLT,
            self::ADMO,
            self::ADR,
            self::AER,
            self::AFF,
            self::AFTG,
            self::AFTP,
            self::AING,
            self::AIOD,
            self::AIR,
            self::AJOB,
            self::ALCF,
            self::ALI,
            self::ALMT,
            self::ALO,
            self::ALTM,
            self::AMMF,
            self::ANMN,
            self::ANSI,
            self::ANTR,
            self::AO,
            self::AOIN,
            self::AOU,
            self::APL,
            self::APLG,
            self::APMD,
            self::APPL,
            self::ARC,
            self::ARM,
            self::ARMR,
            self::ARPF,
            self::ARS,
            self::ARTF,
            self::ARTS,
            self::ASC,
            self::ASHT,
            self::ASM,
            self::ATD,
            self::ATH,
            self::ATTT,
            self::AW,
            self::AWRC,
            self::BARC,
            self::BASU,
            self::BAT,
            self::BB,
            self::BBCL,
            self::BBL,
            self::BBP,
            self::BBRL,
            self::BBS,
            self::BC,
            self::BCHF,
            self::BCK1,
            self::BCK2,
            self::BCKM,
            self::BCKP,
            self::BCS,
            self::BDMT,
            self::BDPT,
            self::BDRP,
            self::BDSZ,
            self::BFCT,
            self::BGFT,
            self::BIMC,
            self::BIND,
            self::BKAJ,
            self::BKCV,
            self::BKHT,
            self::BKMT,
            self::BKMX,
            self::BLD,
            self::BLDE,
            self::BLDM,
            self::BLE,
            self::BLPT,
            self::BLS,
            self::BLTP,
            self::BLWR,
            self::BND,
            self::BNTM,
            self::BPAF,
            self::BPE,
            self::BPY,
            self::BRAF,
            self::BRC,
            self::BRD,
            self::BRGT,
            self::BRM,
            self::BRN,
            self::BRNS,
            self::BRQ,
            self::BRR,
            self::BRST,
            self::BRT,
            self::BRWT,
            self::BS,
            self::BSCV,
            self::BSN,
            self::BT,
            self::BTL,
            self::BTS,
            self::BTST,
            self::BU,
            self::BUL,
            self::BVRG,
            self::BYCY,
            self::CAB,
            self::CALF,
            self::CALP,
            self::CALS,
            self::CANH,
            self::CARG,
            self::CARP,
            self::CARS,
            self::CB,
            self::CCP,
            self::CCW,
            self::CDI,
            self::CDO,
            self::CFBN,
            self::CFN,
            self::CH,
            self::CHEM,
            self::CHGT,
            self::CHMR,
            self::CHR,
            self::CHRT,
            self::CHST,
            self::CHZM,
            self::CI,
            self::CL,
            self::CLAT,
            self::CLB,
            self::CLD,
            self::CLDM,
            self::CLGR,
            self::CLLO,
            self::CLNB,
            self::CLPT,
            self::CLSO,
            self::CLSW,
            self::CMFL,
            self::CMI,
            self::CMPR,
            self::CNDL,
            self::CNDT,
            self::CNMD,
            self::CNS,
            self::CO,
            self::COA,
            self::CON,
            self::CONM,
            self::CONV,
            self::COO,
            self::COOP,
            self::COP,
            self::COSM,
            self::COSU,
            self::COUR,
            self::COV,
            self::CPMR,
            self::CPRN,
            self::CQ,
            self::CR,
            self::CRCT,
            self::CRDI,
            self::CRDL,
            self::CRS,
            self::CSET,
            self::CSHN,
            self::CSMT,
            self::CSTP,
            self::CSTR,
            self::CSUB,
            self::CTCM,
            self::CTMP,
            self::CTNG,
            self::CTRS,
            self::CUPS,
            self::CUS,
            self::CVI,
            self::CVO,
            self::CW,
            self::CWY,
            self::DCRS,
            self::DESR,
            self::DF,
            self::DIM,
            self::DIS,
            self::DLCC,
            self::DLCT,
            self::DNC,
            self::DOOR,
            self::DRCF,
            self::DRP,
            self::DRPL,
            self::DRS,
            self::DRSG,
            self::DRST,
            self::DS,
            self::DSP,
            self::DSR,
            self::DUCT,
            self::DUR,
            self::DVDC,
            self::DVTR,
            self::DWRM,
            self::DYE,
            self::DYGM,
            self::DYOW,
            self::EBP,
            self::ECAE,
            self::ECCN,
            self::ED,
            self::EDT,
            self::EDUF,
            self::EF,
            self::EKO,
            self::ELAJ,
            self::ELMD,
            self::END,
            self::ENTT,
            self::EPB,
            self::ESRB,
            self::EXPP,
            self::EYOB,
            self::EYR,
            self::FA,
            self::FAAC,
            self::FACB,
            self::FAN,
            self::FATP,
            self::FATS,
            self::FATY,
            self::FB,
            self::FBRT,
            self::FBT,
            self::FCS,
            self::FCT,
            self::FCTS,
            self::FCTT,
            self::FDF,
            self::FDSP,
            self::FDSS,
            self::FERT,
            self::FF,
            self::FIT,
            self::FLCH,
            self::FLM,
            self::FLNG,
            self::FLV,
            self::FLX,
            self::FOG,
            self::FOOT,
            self::FOT,
            self::FOVA,
            self::FOVH,
            self::FOVT,
            self::FPTN,
            self::FRME,
            self::FRML,
            self::FRRT,
            self::FSC,
            self::FSHL,
            self::FT,
            self::FTEX,
            self::FTSK,
            self::FUE,
            self::FUEC,
            self::FW,
            self::FWC,
            self::FWUP,
            self::FZCF,
            self::GBAT,
            self::GBAV,
            self::GCBC,
            self::GCTP,
            self::GDAJ,
            self::GEM,
            self::GEN,
            self::GEO,
            self::GFAH,
            self::GMCL,
            self::GMCT,
            self::GMOC,
            self::GMSH,
            self::GNBX,
            self::GPC,
            self::GPCB,
            self::GPS,
            self::GR,
            self::GRD,
            self::GRDL,
            self::GRLL,
            self::GRP,
            self::GRRT,
            self::GTHD,
            self::GTRC,
            self::HA,
            self::HAN,
            self::HB,
            self::HC,
            self::HCNC,
            self::HD,
            self::HDAJ,
            self::HDFH,
            self::HDMI,
            self::HDMO,
            self::HDWR,
            self::HE,
            self::HEAD,
            self::HEAT,
            self::HEFF,
            self::HEPA,
            self::HF,
            self::HLES,
            self::HM,
            self::HMC,
            self::HNBG,
            self::HND,
            self::HNSW,
            self::HPR,
            self::HRRM,
            self::HRTD,
            self::HRTP,
            self::HSD,
            self::HSLC,
            self::HTEL,
            self::HTRS,
            self::HTSY,
            self::HYP,
            self::IED,
            self::IGNT,
            self::IING,
            self::IMA,
            self::IME,
            self::IMG,
            self::INCL,
            self::INDM,
            self::INDU,
            self::INF,
            self::INFR,
            self::ING,
            self::INGL,
            self::INGP,
            self::INKA,
            self::INLG,
            self::INLR,
            self::INS,
            self::INSL,
            self::INTS,
            self::INVU,
            self::ISL,
            self::ISLR,
            self::ISLW,
            self::ITR,
            self::ITS,
            self::ITTR,
            self::JKLG,
            self::JMRL,
            self::JNK,
            self::JS,
            self::KIWA,
            self::KNSC,
            self::KP,
            self::KSHR,
            self::KT,
            self::KW,
            self::KYBD,
            self::KYSZ,
            self::LADR,
            self::LAUC,
            self::LCKT,
            self::LCNS,
            self::LEA,
            self::LFST,
            self::LI,
            self::LLA,
            self::LMM,
            self::LMTD,
            self::LN,
            self::LO,
            self::LOCK,
            self::LOF,
            self::LQD,
            self::LS,
            self::LSCR,
            self::LSCT,
            self::LSR,
            self::LT,
            self::LTS,
            self::LUBE,
            self::MAK,
            self::MARR,
            self::MDCT,
            self::ME,
            self::MEP,
            self::MER,
            self::METL,
            self::MF,
            self::MFR,
            self::MGFC,
            self::MGNT,
            self::MIC,
            self::MILS,
            self::MKTE,
            self::MLBN,
            self::MN,
            self::MNLG,
            self::MOD,
            self::MODE,
            self::MOTN,
            self::MOU,
            self::MOUL,
            self::MOUT,
            self::MPAA,
            self::MPSE,
            self::MRRR,
            self::MTBR,
            self::MTCH,
            self::MTO,
            self::MTR,
            self::MU,
            self::MXTP,
            self::MYE,
            self::MZVL,
            self::NCKL,
            self::NCKT,
            self::NFPA,
            self::NIGP,
            self::NMBO,
            self::NNMK,
            self::NOMF,
            self::NPOT,
            self::NS,
            self::NSFT,
            self::NSN,
            self::NST,
            self::NVTB,
            self::OBS,
            self::OFET,
            self::OI,
            self::OLRS,
            self::OO,
            self::OPNT,
            self::OPPR,
            self::OPTR,
            self::_OR,
            self::ORDU,
            self::ORMD,
            self::ORTH,
            self::OS,
            self::OSC,
            self::OUTR,
            self::OVNS,
            self::PADD,
            self::PBL,
            self::PBY,
            self::PCAR,
            self::PCAV,
            self::PCKL,
            self::PDL,
            self::PED,
            self::PEST,
            self::PG,
            self::PHPW,
            self::PHT,
            self::PILG,
            self::PL,
            self::PLN,
            self::PLNT,
            self::PLS,
            self::PLTD,
            self::PLY,
            self::PLYR,
            self::PM,
            self::PMD,
            self::PMF,
            self::PNTR,
            self::PNTS,
            self::POI,
            self::POK,
            self::POL,
            self::PPA,
            self::PPI,
            self::PPM,
            self::PPUA,
            self::PRC,
            self::PRS,
            self::PRSB,
            self::PRSI,
            self::PRSZ,
            self::PRTA,
            self::PRTG,
            self::PRTP,
            self::PRTS,
            self::PSFT,
            self::PSKU,
            self::PSO,
            self::PT,
            self::PTBL,
            self::PTCR,
            self::PTLV,
            self::PTR,
            self::PTTY,
            self::PUMP,
            self::PUPL,
            self::PVL,
            self::PYST,
            self::QTCL,
            self::QTTP,
            self::RAI,
            self::RAM,
            self::RB,
            self::REF,
            self::REO,
            self::REP,
            self::RETR,
            self::REU,
            self::REVR,
            self::RF,
            self::RFLL,
            self::RFTG,
            self::RFTN,
            self::RHC,
            self::RI,
            self::RIS,
            self::RL,
            self::RM,
            self::RMCT,
            self::RMHO,
            self::RMVI,
            self::RNI,
            self::RP,
            self::RPCK,
            self::RPCP,
            self::RPLN,
            self::RPM,
            self::RSR,
            self::RST,
            self::RTC,
            self::RTCC,
            self::RTCL,
            self::RTE,
            self::RUL,
            self::SADJ,
            self::SAG,
            self::SAJM,
            self::SBBT,
            self::SBFL,
            self::SBJ,
            self::SBR,
            self::SCAV,
            self::SCK,
            self::SCKB,
            self::SCL,
            self::SCNT,
            self::SCPR,
            self::SCRG,
            self::SEAT,
            self::SECT,
            self::SERS,
            self::SES,
            self::SET,
            self::SFTF,
            self::SFTM,
            self::SFTP,
            self::SG,
            self::SGC,
            self::SGHT,
            self::SGLU,
            self::SHE,
            self::SHF,
            self::SHHT,
            self::SHIP,
            self::SHL,
            self::SHLR,
            self::SHP,
            self::SHRD,
            self::SHRP,
            self::SIC,
            self::SIG,
            self::SJT,
            self::SKL,
            self::SKS,
            self::SKTM,
            self::SKTP,
            self::SL,
            self::SLPR,
            self::SLPT,
            self::SLR,
            self::SLTL,
            self::SMC,
            self::SMM,
            self::SN,
            self::SO,
            self::SPC,
            self::SPCS,
            self::SPEQ,
            self::SPFR,
            self::SPI,
            self::SPN,
            self::SPNR,
            self::SPO,
            self::SPPT,
            self::SPRC,
            self::SPRT,
            self::SRFC,
            self::SRU,
            self::SRVP,
            self::SSZ,
            self::ST,
            self::STCK,
            self::STFC,
            self::STG,
            self::STON,
            self::STR,
            self::STRG,
            self::STRP,
            self::STRS,
            self::STSI,
            self::SUB,
            self::SVC,
            self::SVD,
            self::SVI,
            self::SVO,
            self::SW,
            self::SWS,
            self::SWWT,
            self::SYSR,
            self::TANE,
            self::TAPF,
            self::TBST,
            self::TCHL,
            self::TCNF,
            self::TCTC,
            self::TEA,
            self::TEXT,
            self::TGRM,
            self::THD,
            self::THDC,
            self::THRM,
            self::TIM,
            self::TIMR,
            self::TINT,
            self::TIT,
            self::TLBT,
            self::TLI,
            self::TLSC,
            self::TM,
            self::TMA,
            self::TMEP,
            self::TMPC,
            self::TMPL,
            self::TMPR,
            self::TMPS,
            self::TOPG,
            self::TOS,
            self::TOTF,
            self::TP,
            self::TPL,
            self::TPMC,
            self::TQE,
            self::TR,
            self::TRCF,
            self::TRDM,
            self::TRMC,
            self::TRMM,
            self::TRST,
            self::TRTP,
            self::TS,
            self::TSAR,
            self::TSR,
            self::TSZ,
            self::TTG,
            self::TTHO,
            self::TVR,
            self::TVSZ,
            self::TWTP,
            self::TYCT,
            self::UIST,
            self::UNDW,
            self::UNIV,
            self::UNSPSC,
            self::UPD,
            self::UPH,
            self::USB,
            self::USDA,
            self::VARP,
            self::VARS,
            self::VART,
            self::VEHT,
            self::VHSC,
            self::VID,
            self::VMT,
            self::VNTS,
            self::VOC,
            self::VRSN,
            self::VRTL,
            self::VVTP,
            self::VW,
            self::WAC,
            self::WAI,
            self::WAIR,
            self::WAR,
            self::WARD,
            self::WAS,
            self::WB,
            self::WDAJ,
            self::WEAP,
            self::WEHC,
            self::WI,
            self::WL,
            self::WNDP,
            self::WNDR,
            self::WOOD,
            self::WOR,
            self::WP,
            self::WPF,
            self::WPMT,
            self::WR,
            self::WRKT,
            self::WRN,
            self::WRNI,
            self::WRUT,
            self::WTRP,
            self::WTRR,
        );
        $properties->itemAttributeQualifier->description = "Code identifying the part of an item being described.";
        $ownerSchema->addPropertyMapping('ItemAttributeQualifier', self::names()->itemAttributeQualifier);
        $properties->value = Schema::number();
        $properties->value->description = "Numeric value of the ItemAttributeQualifier";
        $ownerSchema->addPropertyMapping('Value', self::names()->value);
        $properties->valueUOM = Schema::string();
        $properties->valueUOM->enum = array(
            self::CONST_01,
            self::CONST_03,
            self::CONST_12,
            self::CONST_15,
            self::CONST_1_N,
            self::CONST_2_N,
            self::CONST_2_P,
            self::CONST_2_W,
            self::CONST_31,
            self::CONST_3_F,
            self::CONST_3_T,
            self::CONST_4_E,
            self::CONST_4_F,
            self::CONST_4_G,
            self::CONST_50,
            self::CONST_5_I,
            self::CONST_68,
            self::CONST_8_C,
            self::AA,
            self::AD,
            self::AF,
            self::AM,
            self::_AS,
            self::AV,
            self::AY,
            self::BA,
            self::BB,
            self::BC,
            self::BD,
            self::BF,
            self::BG,
            self::BI,
            self::BJ,
            self::BK,
            self::BL,
            self::BM,
            self::BN,
            self::BO,
            self::BP,
            self::BR,
            self::BT,
            self::BTU,
            self::BU,
            self::BX,
            self::C3,
            self::C4,
            self::C8,
            self::CA,
            self::CA1,
            self::CA2,
            self::CB,
            self::CC,
            self::CD,
            self::CE,
            self::CF,
            self::CFM,
            self::CG,
            self::CH,
            self::CI,
            self::CL,
            self::CM,
            self::CN,
            self::CP,
            self::CQ,
            self::CR,
            self::CS,
            self::CT,
            self::CU,
            self::CW,
            self::CX,
            self::CY,
            self::DA,
            self::DB,
            self::DD,
            self::DE,
            self::DG,
            self::DH,
            self::DI,
            self::DK,
            self::DL,
            self::DM,
            self::_DO,
            self::DP,
            self::DR,
            self::DS,
            self::DW,
            self::DWT,
            self::DZ,
            self::E1,
            self::EA,
            self::EP,
            self::EV,
            self::FA,
            self::FF,
            self::FO,
            self::FT,
            self::FYGD,
            self::FZ,
            self::GA,
            self::GB,
            self::GH,
            self::GHZ,
            self::GL,
            self::GM,
            self::GN,
            self::GPM,
            self::GR,
            self::GS,
            self::H1,
            self::H2,
            self::H3,
            self::H4,
            self::H6,
            self::HA,
            self::HC,
            self::HCF,
            self::HD,
            self::HF,
            self::HK,
            self::HL,
            self::HR,
            self::HS,
            self::HU,
            self::HV,
            self::HY,
            self::HZ,
            self::I,
            self::IM,
            self::IN,
            self::JA,
            self::JO,
            self::JR,
            self::JU,
            self::K6,
            self::KC,
            self::KE,
            self::KG,
            self::KH,
            self::KM,
            self::KT,
            self::KV,
            self::KVA,
            self::KVAH,
            self::KW,
            self::LB,
            self::LF,
            self::LG,
            self::LI,
            self::LK,
            self::LM,
            self::LN,
            self::LO,
            self::LR,
            self::LS,
            self::LT,
            self::LU,
            self::LY,
            self::MB,
            self::MC,
            self::ME,
            self::MG,
            self::MHZ,
            self::MJ,
            self::MK,
            self::ML,
            self::MM,
            self::MN,
            self::MO,
            self::MOA,
            self::MP,
            self::MR,
            self::NG,
            self::NS,
            self::NX,
            self::OP,
            self::OZ,
            self::P,
            self::P3,
            self::P4,
            self::P5,
            self::P6,
            self::P7,
            self::P8,
            self::P9,
            self::PA,
            self::PC,
            self::PD,
            self::PER,
            self::PF,
            self::PH,
            self::PK,
            self::PL,
            self::PO,
            self::PP,
            self::PR,
            self::PSI,
            self::PT,
            self::PV,
            self::PXL,
            self::PY,
            self::Q1,
            self::Q4,
            self::Q5,
            self::Q6,
            self::Q7,
            self::QD,
            self::QS,
            self::QT,
            self::RA,
            self::RE,
            self::RL,
            self::RM,
            self::RO,
            self::SC,
            self::SF,
            self::SH,
            self::SI,
            self::SJ,
            self::SL,
            self::SM,
            self::SO,
            self::SP,
            self::SQ,
            self::ST,
            self::SV,
            self::SY,
            self::SZ,
            self::T4,
            self::TB,
            self::TC,
            self::TCF,
            self::TE,
            self::TH,
            self::TI,
            self::TK,
            self::TL,
            self::TM,
            self::TO,
            self::TP,
            self::TR,
            self::TRM,
            self::TS,
            self::TU,
            self::TY,
            self::U2,
            self::U5,
            self::UN,
            self::UZ,
            self::_VAR,
            self::VC,
            self::VI,
            self::VO,
            self::WA,
            self::WD,
            self::WG,
            self::WK,
            self::WR,
            self::X8,
            self::Y4,
            self::YD,
            self::YR,
            self::ZC,
        );
        $properties->valueUOM->description = "The unit of measure of the numeric value of the ItemAttributeQualifier";
        $ownerSchema->addPropertyMapping('ValueUOM', self::names()->valueUOM);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $properties->yesOrNoResponse = Schema::string();
        $properties->yesOrNoResponse->enum = array(
            self::N,
            self::Y,
        );
        $properties->yesOrNoResponse->description = "Code indicating a Yes or No condition or response";
        $ownerSchema->addPropertyMapping('YesOrNoResponse', self::names()->yesOrNoResponse);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsMasterItemAttributeItemsItemAttributeItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "This group describes a part of an item";
        $ownerSchema->required = array(
        );
    }
}