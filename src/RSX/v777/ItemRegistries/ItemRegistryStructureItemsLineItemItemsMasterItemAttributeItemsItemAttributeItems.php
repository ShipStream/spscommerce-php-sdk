<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\ItemRegistries;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * This group describes a part of an item
 */
class ItemRegistryStructureItemsLineItemItemsMasterItemAttributeItemsItemAttributeItems extends ClassStructure
{
    const CONST_3_DC = '3DC';

    const ABPF = 'ABPF';

    const ABRS = 'ABRS';

    const ABV = 'ABV';

    const ACBS = 'ACBS';

    const ACLV = 'ACLV';

    const ACRD = 'ACRD';

    const ACRI = 'ACRI';

    const ACRP = 'ACRP';

    const ACS = 'ACS';

    const ACSY = 'ACSY';

    const ACT = 'ACT';

    const ACTL = 'ACTL';

    const ACTV = 'ACTV';

    const ADDR = 'ADDR';

    const ADHV = 'ADHV';

    const ADJS = 'ADJS';

    const ADLT = 'ADLT';

    const ADMO = 'ADMO';

    const ADPT = 'ADPT';

    const ADR = 'ADR';

    const ADSP = 'ADSP';

    const ADTT = 'ADTT';

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

    const ALRG = 'ALRG';

    const ALRM = 'ALRM';

    const ALTM = 'ALTM';

    const AMBT = 'AMBT';

    const AMMF = 'AMMF';

    const AMPL = 'AMPL';

    const ANLA = 'ANLA';

    const ANLM = 'ANLM';

    const ANLT = 'ANLT';

    const ANMN = 'ANMN';

    const ANRS = 'ANRS';

    const ANSI = 'ANSI';

    const ANSP = 'ANSP';

    const ANTC = 'ANTC';

    const ANTR = 'ANTR';

    const AO = 'AO';

    const AOIN = 'AOIN';

    const AOU = 'AOU';

    const APL = 'APL';

    const APLG = 'APLG';

    const APMD = 'APMD';

    const APPL = 'APPL';

    const APRT = 'APRT';

    const ARC = 'ARC';

    const ARM = 'ARM';

    const ARMC = 'ARMC';

    const ARMR = 'ARMR';

    const ARPF = 'ARPF';

    const ARS = 'ARS';

    const ARTF = 'ARTF';

    const ARTS = 'ARTS';

    const ASC = 'ASC';

    const ASHT = 'ASHT';

    const ASM = 'ASM';

    const ASPG = 'ASPG';

    const ASTA = 'ASTA';

    const ATD = 'ATD';

    const ATFC = 'ATFC';

    const ATH = 'ATH';

    const ATST = 'ATST';

    const ATTT = 'ATTT';

    const AW = 'AW';

    const AWRC = 'AWRC';

    const BAGT = 'BAGT';

    const BALL = 'BALL';

    const BAND = 'BAND';

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

    const BDCP = 'BDCP';

    const BDMT = 'BDMT';

    const BDPT = 'BDPT';

    const BDRP = 'BDRP';

    const BDSZ = 'BDSZ';

    const BEAD = 'BEAD';

    const BFCT = 'BFCT';

    const BFFC = 'BFFC';

    const BFFP = 'BFFP';

    const BFFS = 'BFFS';

    const BGFT = 'BGFT';

    const BIMC = 'BIMC';

    const BIND = 'BIND';

    const BKAJ = 'BKAJ';

    const BKCV = 'BKCV';

    const BKHT = 'BKHT';

    const BKMT = 'BKMT';

    const BKMX = 'BKMX';

    const BLD = 'BLD';

    const BLDB = 'BLDB';

    const BLDE = 'BLDE';

    const BLDM = 'BLDM';

    const BLDT = 'BLDT';

    const BLE = 'BLE';

    const BLND = 'BLND';

    const BLPT = 'BLPT';

    const BLS = 'BLS';

    const BLTP = 'BLTP';

    const BLWR = 'BLWR';

    const BND = 'BND';

    const BNTM = 'BNTM';

    const BOWL = 'BOWL';

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

    const BRRL = 'BRRL';

    const BRSH = 'BRSH';

    const BRSL = 'BRSL';

    const BRST = 'BRST';

    const BRT = 'BRT';

    const BRTT = 'BRTT';

    const BRWT = 'BRWT';

    const BS = 'BS';

    const BSBT = 'BSBT';

    const BSCP = 'BSCP';

    const BSCV = 'BSCV';

    const BSN = 'BSN';

    const BSWT = 'BSWT';

    const BT = 'BT';

    const BTFC = 'BTFC';

    const BTL = 'BTL';

    const BTS = 'BTS';

    const BTST = 'BTST';

    const BTTL = 'BTTL';

    const BU = 'BU';

    const BUL = 'BUL';

    const BVRG = 'BVRG';

    const BYCY = 'BYCY';

    const BZL = 'BZL';

    const CAB = 'CAB';

    const CALB = 'CALB';

    const CALF = 'CALF';

    const CALP = 'CALP';

    const CALS = 'CALS';

    const CANH = 'CANH';

    const CAPC = 'CAPC';

    const CAPM = 'CAPM';

    const CAPT = 'CAPT';

    const CARD = 'CARD';

    const CARG = 'CARG';

    const CARP = 'CARP';

    const CARS = 'CARS';

    const _CASE = 'CASE';

    const CB = 'CB';

    const CBST = 'CBST';

    const CCMD = 'CCMD';

    const CCP = 'CCP';

    const CCW = 'CCW';

    const CDCG = 'CDCG';

    const CDI = 'CDI';

    const CDO = 'CDO';

    const CDPL = 'CDPL';

    const CDTP = 'CDTP';

    const CELL = 'CELL';

    const CFBN = 'CFBN';

    const CFN = 'CFN';

    const CFRM = 'CFRM';

    const CH = 'CH';

    const CHEM = 'CHEM';

    const CHGT = 'CHGT';

    const CHKS = 'CHKS';

    const CHLF = 'CHLF';

    const CHMB = 'CHMB';

    const CHML = 'CHML';

    const CHMN = 'CHMN';

    const CHMR = 'CHMR';

    const CHR = 'CHR';

    const CHRT = 'CHRT';

    const CHST = 'CHST';

    const CHUT = 'CHUT';

    const CHZM = 'CHZM';

    const CI = 'CI';

    const CJCP = 'CJCP';

    const CL = 'CL';

    const CLAT = 'CLAT';

    const CLB = 'CLB';

    const CLBG = 'CLBG';

    const CLCL = 'CLCL';

    const CLD = 'CLD';

    const CLDM = 'CLDM';

    const CLDN = 'CLDN';

    const CLDS = 'CLDS';

    const CLGR = 'CLGR';

    const CLIN = 'CLIN';

    const CLLO = 'CLLO';

    const CLMN = 'CLMN';

    const CLMP = 'CLMP';

    const CLNB = 'CLNB';

    const CLND = 'CLND';

    const CLPT = 'CLPT';

    const CLSD = 'CLSD';

    const CLSO = 'CLSO';

    const CLSW = 'CLSW';

    const CLTD = 'CLTD';

    const CMFL = 'CMFL';

    const CMI = 'CMI';

    const CMMN = 'CMMN';

    const CMPD = 'CMPD';

    const CMPR = 'CMPR';

    const CMSC = 'CMSC';

    const CMTG = 'CMTG';

    const CNCT = 'CNCT';

    const CNDJ = 'CNDJ';

    const CNDL = 'CNDL';

    const CNDS = 'CNDS';

    const CNDT = 'CNDT';

    const CNMD = 'CNMD';

    const CNNL = 'CNNL';

    const CNS = 'CNS';

    const CNTD = 'CNTD';

    const CNTF = 'CNTF';

    const CNTM = 'CNTM';

    const CNTN = 'CNTN';

    const CNTR = 'CNTR';

    const CO = 'CO';

    const COA = 'COA';

    const COIL = 'COIL';

    const CON = 'CON';

    const CONC = 'CONC';

    const CONE = 'CONE';

    const CONM = 'CONM';

    const CONV = 'CONV';

    const COO = 'COO';

    const COOL = 'COOL';

    const COOP = 'COOP';

    const COP = 'COP';

    const COSM = 'COSM';

    const COSU = 'COSU';

    const COUR = 'COUR';

    const COV = 'COV';

    const CPLG = 'CPLG';

    const CPLY = 'CPLY';

    const CPMR = 'CPMR';

    const CPRN = 'CPRN';

    const CQ = 'CQ';

    const CR = 'CR';

    const CRBN = 'CRBN';

    const CRCT = 'CRCT';

    const CRDI = 'CRDI';

    const CRDL = 'CRDL';

    const CRDM = 'CRDM';

    const CRDT = 'CRDT';

    const CRS = 'CRS';

    const CRTG = 'CRTG';

    const CSET = 'CSET';

    const CSHN = 'CSHN';

    const CSMT = 'CSMT';

    const CSST = 'CSST';

    const CSTP = 'CSTP';

    const CSTR = 'CSTR';

    const CSUB = 'CSUB';

    const CSYS = 'CSYS';

    const CTCB = 'CTCB';

    const CTCM = 'CTCM';

    const CTLR = 'CTLR';

    const CTMP = 'CTMP';

    const CTNG = 'CTNG';

    const CTRS = 'CTRS';

    const CUFC = 'CUFC';

    const CUFF = 'CUFF';

    const CUPS = 'CUPS';

    const CUS = 'CUS';

    const CVI = 'CVI';

    const CVO = 'CVO';

    const CVR = 'CVR';

    const CVTT = 'CVTT';

    const CVTY = 'CVTY';

    const CW = 'CW';

    const CWY = 'CWY';

    const CXRC = 'CXRC';

    const CYCL = 'CYCL';

    const DCMP = 'DCMP';

    const DCPC = 'DCPC';

    const DCRS = 'DCRS';

    const DESR = 'DESR';

    const DF = 'DF';

    const DFST = 'DFST';

    const DIAL = 'DIAL';

    const DIM = 'DIM';

    const DIS = 'DIS';

    const DISC = 'DISC';

    const DISH = 'DISH';

    const DISP = 'DISP';

    const DLCC = 'DLCC';

    const DLCT = 'DLCT';

    const DLRC = 'DLRC';

    const DLRN = 'DLRN';

    const DLTN = 'DLTN';

    const DNC = 'DNC';

    const DNSF = 'DNSF';

    const DOOR = 'DOOR';

    const DPAC = 'DPAC';

    const DPGM = 'DPGM';

    const DPOP = 'DPOP';

    const DPPR = 'DPPR';

    const DRCF = 'DRCF';

    const DRP = 'DRP';

    const DRPL = 'DRPL';

    const DRS = 'DRS';

    const DRSG = 'DRSG';

    const DRSH = 'DRSH';

    const DRST = 'DRST';

    const DRVS = 'DRVS';

    const DS = 'DS';

    const DSHM = 'DSHM';

    const DSP = 'DSP';

    const DSPL = 'DSPL';

    const DSPN = 'DSPN';

    const DSR = 'DSR';

    const DTCT = 'DTCT';

    const DTHS = 'DTHS';

    const DTMT = 'DTMT';

    const DTRM = 'DTRM';

    const DTSG = 'DTSG';

    const DTSY = 'DTSY';

    const DUCT = 'DUCT';

    const DUR = 'DUR';

    const DVBC = 'DVBC';

    const DVDC = 'DVDC';

    const DVTR = 'DVTR';

    const DWRM = 'DWRM';

    const DYE = 'DYE';

    const DYET = 'DYET';

    const DYGM = 'DYGM';

    const DYOW = 'DYOW';

    const EARC = 'EARC';

    const EARM = 'EARM';

    const EARP = 'EARP';

    const EBP = 'EBP';

    const ECAE = 'ECAE';

    const ECCN = 'ECCN';

    const ECEN = 'ECEN';

    const ECTY = 'ECTY';

    const ED = 'ED';

    const EDGE = 'EDGE';

    const EDT = 'EDT';

    const EDUF = 'EDUF';

    const EF = 'EF';

    const EGCN = 'EGCN';

    const EGRG = 'EGRG';

    const EKO = 'EKO';

    const ELAJ = 'ELAJ';

    const ELCT = 'ELCT';

    const ELMD = 'ELMD';

    const ELRR = 'ELRR';

    const ENCL = 'ENCL';

    const ENCM = 'ENCM';

    const END = 'END';

    const ENDC = 'ENDC';

    const ENEX = 'ENEX';

    const ENTT = 'ENTT';

    const ENZM = 'ENZM';

    const EPB = 'EPB';

    const ESRB = 'ESRB';

    const EVPR = 'EVPR';

    const EXHA = 'EXHA';

    const EXPL = 'EXPL';

    const EXPP = 'EXPP';

    const EXRT = 'EXRT';

    const EXTB = 'EXTB';

    const EXTT = 'EXTT';

    const EYOB = 'EYOB';

    const EYR = 'EYR';

    const FA = 'FA';

    const FAAC = 'FAAC';

    const FACB = 'FACB';

    const FACE = 'FACE';

    const FAN = 'FAN';

    const FATP = 'FATP';

    const FATS = 'FATS';

    const FATY = 'FATY';

    const FB = 'FB';

    const FBRT = 'FBRT';

    const FBT = 'FBT';

    const FCS = 'FCS';

    const FCSL = 'FCSL';

    const FCSM = 'FCSM';

    const FCT = 'FCT';

    const FCTS = 'FCTS';

    const FCTT = 'FCTT';

    const FDF = 'FDF';

    const FDSP = 'FDSP';

    const FDSS = 'FDSS';

    const FDWC = 'FDWC';

    const FDWT = 'FDWT';

    const FEED = 'FEED';

    const FERT = 'FERT';

    const FF = 'FF';

    const FFNN = 'FFNN';

    const FHCB = 'FHCB';

    const FIT = 'FIT';

    const FLCH = 'FLCH';

    const FLDV = 'FLDV';

    const FLGU = 'FLGU';

    const FLM = 'FLM';

    const FLNG = 'FLNG';

    const FLRD = 'FLRD';

    const FLRS = 'FLRS';

    const FLRT = 'FLRT';

    const FLSK = 'FLSK';

    const FLTR = 'FLTR';

    const FLV = 'FLV';

    const FLX = 'FLX';

    const FMLA = 'FMLA';

    const FNGR = 'FNGR';

    const FNNL = 'FNNL';

    const FNNT = 'FNNT';

    const FNWG = 'FNWG';

    const FOG = 'FOG';

    const FOOT = 'FOOT';

    const FOT = 'FOT';

    const FOTP = 'FOTP';

    const FOVA = 'FOVA';

    const FOVH = 'FOVH';

    const FOVT = 'FOVT';

    const FPTN = 'FPTN';

    const FRIT = 'FRIT';

    const FRMC = 'FRMC';

    const FRME = 'FRME';

    const FRML = 'FRML';

    const FRMW = 'FRMW';

    const FRRT = 'FRRT';

    const FRST = 'FRST';

    const FSC = 'FSC';

    const FSCH = 'FSCH';

    const FSHL = 'FSHL';

    const FT = 'FT';

    const FTEX = 'FTEX';

    const FTPR = 'FTPR';

    const FTRT = 'FTRT';

    const FTSK = 'FTSK';

    const FUE = 'FUE';

    const FUEC = 'FUEC';

    const FW = 'FW';

    const FWC = 'FWC';

    const FWUP = 'FWUP';

    const FZCF = 'FZCF';

    const GAP = 'GAP';

    const GASC = 'GASC';

    const GASM = 'GASM';

    const GASU = 'GASU';

    const GBAT = 'GBAT';

    const GBAV = 'GBAV';

    const GCBC = 'GCBC';

    const GCTP = 'GCTP';

    const GDAJ = 'GDAJ';

    const GDCL = 'GDCL';

    const GEL = 'GEL';

    const GEM = 'GEM';

    const GEN = 'GEN';

    const GENE = 'GENE';

    const GEO = 'GEO';

    const GFAH = 'GFAH';

    const GGE = 'GGE';

    const GMCL = 'GMCL';

    const GMCT = 'GMCT';

    const GMMT = 'GMMT';

    const GMOC = 'GMOC';

    const GMSH = 'GMSH';

    const GNAL = 'GNAL';

    const GNBX = 'GNBX';

    const GNSY = 'GNSY';

    const GPC = 'GPC';

    const GPCB = 'GPCB';

    const GPS = 'GPS';

    const GR = 'GR';

    const GRCH = 'GRCH';

    const GRD = 'GRD';

    const GRDC = 'GRDC';

    const GRDL = 'GRDL';

    const GRDM = 'GRDM';

    const GRDN = 'GRDN';

    const GRID = 'GRID';

    const GRLL = 'GRLL';

    const GRP = 'GRP';

    const GRRT = 'GRRT';

    const GSKT = 'GSKT';

    const GSRR = 'GSRR';

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

    const HDFS = 'HDFS';

    const HDLD = 'HDLD';

    const HDMI = 'HDMI';

    const HDMO = 'HDMO';

    const HDSP = 'HDSP';

    const HDST = 'HDST';

    const HDTY = 'HDTY';

    const HDWR = 'HDWR';

    const HE = 'HE';

    const HEAD = 'HEAD';

    const HEAT = 'HEAT';

    const HEDW = 'HEDW';

    const HEFF = 'HEFF';

    const HEM = 'HEM';

    const HEPA = 'HEPA';

    const HF = 'HF';

    const HLES = 'HLES';

    const HM = 'HM';

    const HMC = 'HMC';

    const HMDR = 'HMDR';

    const HMDY = 'HMDY';

    const HNBG = 'HNBG';

    const HND = 'HND';

    const HNDC = 'HNDC';

    const HNDM = 'HNDM';

    const HNSW = 'HNSW';

    const HODT = 'HODT';

    const HOOD = 'HOOD';

    const HOSE = 'HOSE';

    const HPPR = 'HPPR';

    const HPR = 'HPR';

    const HRNS = 'HRNS';

    const HRRM = 'HRRM';

    const HRTD = 'HRTD';

    const HRTP = 'HRTP';

    const HSD = 'HSD';

    const HSLC = 'HSLC';

    const HSNM = 'HSNM';

    const HTAJ = 'HTAJ';

    const HTEL = 'HTEL';

    const HTIN = 'HTIN';

    const HTOP = 'HTOP';

    const HTPL = 'HTPL';

    const HTRS = 'HTRS';

    const HTSR = 'HTSR';

    const HTSY = 'HTSY';

    const HWSP = 'HWSP';

    const HYDL = 'HYDL';

    const HYP = 'HYP';

    const HZSP = 'HZSP';

    const ICBR = 'ICBR';

    const IECC = 'IECC';

    const IED = 'IED';

    const IGNT = 'IGNT';

    const IHBR = 'IHBR';

    const IING = 'IING';

    const IJCT = 'IJCT';

    const IMA = 'IMA';

    const IME = 'IME';

    const IMG = 'IMG';

    const IMGN = 'IMGN';

    const IMMA = 'IMMA';

    const IMRS = 'IMRS';

    const INCB = 'INCB';

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

    const INLT = 'INLT';

    const INS = 'INS';

    const INSB = 'INSB';

    const INSL = 'INSL';

    const INST = 'INST';

    const INTF = 'INTF';

    const INTR = 'INTR';

    const INTS = 'INTS';

    const INVU = 'INVU';

    const IPRT = 'IPRT';

    const ISL = 'ISL';

    const ISLR = 'ISLR';

    const ISLW = 'ISLW';

    const ISTR = 'ISTR';

    const ITR = 'ITR';

    const ITS = 'ITS';

    const ITTR = 'ITTR';

    const JARM = 'JARM';

    const JAWS = 'JAWS';

    const JCKT = 'JCKT';

    const JCTN = 'JCTN';

    const JKLG = 'JKLG';

    const JKTK = 'JKTK';

    const JMRL = 'JMRL';

    const JNK = 'JNK';

    const JNTS = 'JNTS';

    const JS = 'JS';

    const KIWA = 'KIWA';

    const KNSC = 'KNSC';

    const KP = 'KP';

    const KPFN = 'KPFN';

    const KSHR = 'KSHR';

    const KT = 'KT';

    const KW = 'KW';

    const KYBD = 'KYBD';

    const KYLS = 'KYLS';

    const KYSZ = 'KYSZ';

    const LABL = 'LABL';

    const LACE = 'LACE';

    const LADR = 'LADR';

    const LAUC = 'LAUC';

    const LCKM = 'LCKM';

    const LCKT = 'LCKT';

    const LCNS = 'LCNS';

    const LCTL = 'LCTL';

    const LDCL = 'LDCL';

    const LDOP = 'LDOP';

    const LEA = 'LEA';

    const LFSP = 'LFSP';

    const LFST = 'LFST';

    const LFTM = 'LFTM';

    const LFTT = 'LFTT';

    const LGCF = 'LGCF';

    const LGLD = 'LGLD';

    const LI = 'LI';

    const LINE = 'LINE';

    const LLA = 'LLA';

    const LMBS = 'LMBS';

    const LMM = 'LMM';

    const LMTD = 'LMTD';

    const LN = 'LN';

    const LNGC = 'LNGC';

    const LO = 'LO';

    const LOCK = 'LOCK';

    const LOF = 'LOF';

    const LQD = 'LQD';

    const LS = 'LS';

    const LSCR = 'LSCR';

    const LSCT = 'LSCT';

    const LSR = 'LSR';

    const LT = 'LT';

    const LTPT = 'LTPT';

    const LTS = 'LTS';

    const LTXF = 'LTXF';

    const LUBE = 'LUBE';

    const LYST = 'LYST';

    const MAK = 'MAK';

    const MARR = 'MARR';

    const MCRS = 'MCRS';

    const MDCT = 'MDCT';

    const MDUL = 'MDUL';

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

    const MIXR = 'MIXR';

    const MKTE = 'MKTE';

    const MLBN = 'MLBN';

    const MLTP = 'MLTP';

    const MMBR = 'MMBR';

    const MMTX = 'MMTX';

    const MN = 'MN';

    const MNFL = 'MNFL';

    const MNGL = 'MNGL';

    const MNLG = 'MNLG';

    const MNMD = 'MNMD';

    const MNTR = 'MNTR';

    const MOAT = 'MOAT';

    const MOD = 'MOD';

    const MODE = 'MODE';

    const MOLE = 'MOLE';

    const MOTN = 'MOTN';

    const MOTR = 'MOTR';

    const MOU = 'MOU';

    const MOUL = 'MOUL';

    const MOUT = 'MOUT';

    const MPAA = 'MPAA';

    const MPLG = 'MPLG';

    const MPSE = 'MPSE';

    const MRRR = 'MRRR';

    const MSHM = 'MSHM';

    const MTBR = 'MTBR';

    const MTCH = 'MTCH';

    const MTHS = 'MTHS';

    const MTLR = 'MTLR';

    const MTO = 'MTO';

    const MTR = 'MTR';

    const MTRT = 'MTRT';

    const MU = 'MU';

    const MXGL = 'MXGL';

    const MXTP = 'MXTP';

    const MYCO = 'MYCO';

    const MYE = 'MYE';

    const MZVL = 'MZVL';

    const NCHM = 'NCHM';

    const NCKD = 'NCKD';

    const NCKL = 'NCKL';

    const NCKT = 'NCKT';

    const NDDL = 'NDDL';

    const NDDS = 'NDDS';

    const NFPA = 'NFPA';

    const NIGP = 'NIGP';

    const NMBO = 'NMBO';

    const NNMK = 'NNMK';

    const NOMF = 'NOMF';

    const NPOT = 'NPOT';

    const NS = 'NS';

    const NSFT = 'NSFT';

    const NSN = 'NSN';

    const NSPC = 'NSPC';

    const NST = 'NST';

    const NTDT = 'NTDT';

    const NTRY = 'NTRY';

    const NVTB = 'NVTB';

    const NWKP = 'NWKP';

    const NWKT = 'NWKT';

    const OBS = 'OBS';

    const OFET = 'OFET';

    const OI = 'OI';

    const OILT = 'OILT';

    const OLRS = 'OLRS';

    const OO = 'OO';

    const OPEN = 'OPEN';

    const OPNT = 'OPNT';

    const OPPR = 'OPPR';

    const OPTR = 'OPTR';

    const _OR = 'OR';

    const ORBT = 'ORBT';

    const ORDU = 'ORDU';

    const ORMD = 'ORMD';

    const ORTH = 'ORTH';

    const OS = 'OS';

    const OSC = 'OSC';

    const OTS = 'OTS';

    const OUTL = 'OUTL';

    const OUTR = 'OUTR';

    const OVNS = 'OVNS';

    const PADD = 'PADD';

    const PAND = 'PAND';

    const PAPR = 'PAPR';

    const PBL = 'PBL';

    const PBY = 'PBY';

    const PCAR = 'PCAR';

    const PCAV = 'PCAV';

    const PCKL = 'PCKL';

    const PCLR = 'PCLR';

    const PCSN = 'PCSN';

    const PDL = 'PDL';

    const PDVC = 'PDVC';

    const PED = 'PED';

    const PEST = 'PEST';

    const PEXS = 'PEXS';

    const PFHT = 'PFHT';

    const PG = 'PG';

    const PGFM = 'PGFM';

    const PHFM = 'PHFM';

    const PHPW = 'PHPW';

    const PHT = 'PHT';

    const PILG = 'PILG';

    const PINT = 'PINT';

    const PL = 'PL';

    const PLAT = 'PLAT';

    const PLGM = 'PLGM';

    const PLMM = 'PLMM';

    const PLN = 'PLN';

    const PLNG = 'PLNG';

    const PLNT = 'PLNT';

    const PLRT = 'PLRT';

    const PLS = 'PLS';

    const PLTD = 'PLTD';

    const PLTS = 'PLTS';

    const PLTT = 'PLTT';

    const PLTW = 'PLTW';

    const PLUG = 'PLUG';

    const PLY = 'PLY';

    const PLYR = 'PLYR';

    const PM = 'PM';

    const PMD = 'PMD';

    const PMF = 'PMF';

    const PMPS = 'PMPS';

    const PNSR = 'PNSR';

    const PNTR = 'PNTR';

    const PNTS = 'PNTS';

    const PODC = 'PODC';

    const POI = 'POI';

    const POK = 'POK';

    const POL = 'POL';

    const PORE = 'PORE';

    const PORT = 'PORT';

    const PPA = 'PPA';

    const PPI = 'PPI';

    const PPM = 'PPM';

    const PPMT = 'PPMT';

    const PPRL = 'PPRL';

    const PPUA = 'PPUA';

    const PRBB = 'PRBB';

    const PRC = 'PRC';

    const PRCB = 'PRCB';

    const PRCP = 'PRCP';

    const PRGM = 'PRGM';

    const PRNS = 'PRNS';

    const PRNT = 'PRNT';

    const PROB = 'PROB';

    const PRPL = 'PRPL';

    const PRS = 'PRS';

    const PRSB = 'PRSB';

    const PRSI = 'PRSI';

    const PRST = 'PRST';

    const PRSV = 'PRSV';

    const PRSZ = 'PRSZ';

    const PRTA = 'PRTA';

    const PRTB = 'PRTB';

    const PRTG = 'PRTG';

    const PRTN = 'PRTN';

    const PRTP = 'PRTP';

    const PRTS = 'PRTS';

    const PRTY = 'PRTY';

    const PRWV = 'PRWV';

    const PSCD = 'PSCD';

    const PSFT = 'PSFT';

    const PSKU = 'PSKU';

    const PSO = 'PSO';

    const PSTL = 'PSTL';

    const PT = 'PT';

    const PTBL = 'PTBL';

    const PTCL = 'PTCL';

    const PTCR = 'PTCR';

    const PTLV = 'PTLV';

    const PTR = 'PTR';

    const PTTY = 'PTTY';

    const PUMP = 'PUMP';

    const PUPL = 'PUPL';

    const PVL = 'PVL';

    const PWCD = 'PWCD';

    const PWDF = 'PWDF';

    const PYMR = 'PYMR';

    const PYST = 'PYST';

    const QTCL = 'QTCL';

    const QTTP = 'QTTP';

    const RACK = 'RACK';

    const RAI = 'RAI';

    const RAM = 'RAM';

    const RARS = 'RARS';

    const RB = 'RB';

    const RCDR = 'RCDR';

    const RCKC = 'RCKC';

    const RCPR = 'RCPR';

    const RDTN = 'RDTN';

    const REF = 'REF';

    const REO = 'REO';

    const REP = 'REP';

    const RESN = 'RESN';

    const RETR = 'RETR';

    const REU = 'REU';

    const REVR = 'REVR';

    const RF = 'RF';

    const RFLL = 'RFLL';

    const RFTG = 'RFTG';

    const RFTN = 'RFTN';

    const RHC = 'RHC';

    const RI = 'RI';

    const RING = 'RING';

    const RINS = 'RINS';

    const RIS = 'RIS';

    const RL = 'RL';

    const RM = 'RM';

    const RMCT = 'RMCT';

    const RMHO = 'RMHO';

    const RMMD = 'RMMD';

    const RMVI = 'RMVI';

    const RNI = 'RNI';

    const RNSF = 'RNSF';

    const ROBT = 'ROBT';

    const ROD = 'ROD';

    const ROLL = 'ROLL';

    const RP = 'RP';

    const RPCK = 'RPCK';

    const RPCP = 'RPCP';

    const RPLN = 'RPLN';

    const RPM = 'RPM';

    const RSFP = 'RSFP';

    const RSPN = 'RSPN';

    const RSR = 'RSR';

    const RSRQ = 'RSRQ';

    const RST = 'RST';

    const RSVT = 'RSVT';

    const RTBL = 'RTBL';

    const RTC = 'RTC';

    const RTCC = 'RTCC';

    const RTCL = 'RTCL';

    const RTE = 'RTE';

    const RTTN = 'RTTN';

    const RUL = 'RUL';

    const SADJ = 'SADJ';

    const SAG = 'SAG';

    const SAJM = 'SAJM';

    const SALT = 'SALT';

    const SAMP = 'SAMP';

    const SBBT = 'SBBT';

    const SBFL = 'SBFL';

    const SBJ = 'SBJ';

    const SBLC = 'SBLC';

    const SBMP = 'SBMP';

    const SBR = 'SBR';

    const SCAN = 'SCAN';

    const SCAV = 'SCAV';

    const SCCK = 'SCCK';

    const SCK = 'SCK';

    const SCKB = 'SCKB';

    const SCL = 'SCL';

    const SCLE = 'SCLE';

    const SCLR = 'SCLR';

    const SCNT = 'SCNT';

    const SCPL = 'SCPL';

    const SCPR = 'SCPR';

    const SCRC = 'SCRC';

    const SCRF = 'SCRF';

    const SCRG = 'SCRG';

    const SCRM = 'SCRM';

    const SCRT = 'SCRT';

    const SCTD = 'SCTD';

    const SCTP = 'SCTP';

    const SDRM = 'SDRM';

    const SEAL = 'SEAL';

    const SEAM = 'SEAM';

    const SEAT = 'SEAT';

    const SECT = 'SECT';

    const SELR = 'SELR';

    const SENS = 'SENS';

    const SERS = 'SERS';

    const SES = 'SES';

    const SET = 'SET';

    const SFCM = 'SFCM';

    const SFLV = 'SFLV';

    const SFTF = 'SFTF';

    const SFTM = 'SFTM';

    const SFTP = 'SFTP';

    const SG = 'SG';

    const SGC = 'SGC';

    const SGHT = 'SGHT';

    const SGLU = 'SGLU';

    const SHCK = 'SHCK';

    const SHDP = 'SHDP';

    const SHE = 'SHE';

    const SHF = 'SHF';

    const SHHT = 'SHHT';

    const SHIP = 'SHIP';

    const SHKR = 'SHKR';

    const SHL = 'SHL';

    const SHLF = 'SHLF';

    const SHLR = 'SHLR';

    const SHNK = 'SHNK';

    const SHP = 'SHP';

    const SHRD = 'SHRD';

    const SHRP = 'SHRP';

    const SIC = 'SIC';

    const SIEV = 'SIEV';

    const SIG = 'SIG';

    const SINK = 'SINK';

    const SJT = 'SJT';

    const SKL = 'SKL';

    const SKS = 'SKS';

    const SKTD = 'SKTD';

    const SKTM = 'SKTM';

    const SKTP = 'SKTP';

    const SL = 'SL';

    const SLBT = 'SLBT';

    const SLCF = 'SLCF';

    const SLID = 'SLID';

    const SLPR = 'SLPR';

    const SLPT = 'SLPT';

    const SLR = 'SLR';

    const SLTL = 'SLTL';

    const SLVM = 'SLVM';

    const SLVS = 'SLVS';

    const SLVT = 'SLVT';

    const SMC = 'SMC';

    const SMM = 'SMM';

    const SMPL = 'SMPL';

    const SMPP = 'SMPP';

    const SN = 'SN';

    const SNSR = 'SNSR';

    const SO = 'SO';

    const SOLN = 'SOLN';

    const SORB = 'SORB';

    const SPC = 'SPC';

    const SPCH = 'SPCH';

    const SPCM = 'SPCM';

    const SPCP = 'SPCP';

    const SPCS = 'SPCS';

    const SPCT = 'SPCT';

    const SPDR = 'SPDR';

    const SPDS = 'SPDS';

    const SPEC = 'SPEC';

    const SPEQ = 'SPEQ';

    const SPFR = 'SPFR';

    const SPI = 'SPI';

    const SPN = 'SPN';

    const SPNR = 'SPNR';

    const SPO = 'SPO';

    const SPOL = 'SPOL';

    const SPPT = 'SPPT';

    const SPRA = 'SPRA';

    const SPRC = 'SPRC';

    const SPRT = 'SPRT';

    const SPRY = 'SPRY';

    const SPST = 'SPST';

    const SPSZ = 'SPSZ';

    const SPTM = 'SPTM';

    const SPUT = 'SPUT';

    const SRFC = 'SRFC';

    const SRU = 'SRU';

    const SRVP = 'SRVP';

    const SSRT = 'SSRT';

    const SSZ = 'SSZ';

    const ST = 'ST';

    const STAI = 'STAI';

    const STBL = 'STBL';

    const STCK = 'STCK';

    const STEM = 'STEM';

    const STFC = 'STFC';

    const STG = 'STG';

    const STLM = 'STLM';

    const STNP = 'STNP';

    const STON = 'STON';

    const STPR = 'STPR';

    const STPT = 'STPT';

    const STR = 'STR';

    const STRG = 'STRG';

    const STRK = 'STRK';

    const STRL = 'STRL';

    const STRP = 'STRP';

    const STRR = 'STRR';

    const STRS = 'STRS';

    const STSI = 'STSI';

    const STSL = 'STSL';

    const STSU = 'STSU';

    const STTR = 'STTR';

    const SUB = 'SUB';

    const SUBL = 'SUBL';

    const SUTR = 'SUTR';

    const SVC = 'SVC';

    const SVD = 'SVD';

    const SVI = 'SVI';

    const SVO = 'SVO';

    const SW = 'SW';

    const SWS = 'SWS';

    const SWWT = 'SWWT';

    const SYPR = 'SYPR';

    const SYSR = 'SYSR';

    const TANE = 'TANE';

    const TANK = 'TANK';

    const TAPE = 'TAPE';

    const TAPF = 'TAPF';

    const TBST = 'TBST';

    const TCHL = 'TCHL';

    const TCNF = 'TCNF';

    const TCTC = 'TCTC';

    const TEA = 'TEA';

    const TEST = 'TEST';

    const TETH = 'TETH';

    const TEXT = 'TEXT';

    const TGRM = 'TGRM';

    const THD = 'THD';

    const THDC = 'THDC';

    const THER = 'THER';

    const THRM = 'THRM';

    const TILT = 'TILT';

    const TIM = 'TIM';

    const TIMR = 'TIMR';

    const TINT = 'TINT';

    const TIPM = 'TIPM';

    const TIPT = 'TIPT';

    const TIT = 'TIT';

    const TLBT = 'TLBT';

    const TLI = 'TLI';

    const TLSC = 'TLSC';

    const TM = 'TM';

    const TMA = 'TMA';

    const TMCL = 'TMCL';

    const TMEP = 'TMEP';

    const TMPC = 'TMPC';

    const TMPL = 'TMPL';

    const TMPR = 'TMPR';

    const TMPS = 'TMPS';

    const TOPG = 'TOPG';

    const TOS = 'TOS';

    const TOTF = 'TOTF';

    const TP = 'TP';

    const TPCL = 'TPCL';

    const TPER = 'TPER';

    const TPL = 'TPL';

    const TPLG = 'TPLG';

    const TPMC = 'TPMC';

    const TPRR = 'TPRR';

    const TPSH = 'TPSH';

    const TPST = 'TPST';

    const TQE = 'TQE';

    const TR = 'TR';

    const TRAY = 'TRAY';

    const TRCF = 'TRCF';

    const TRDC = 'TRDC';

    const TRDM = 'TRDM';

    const TRMC = 'TRMC';

    const TRMM = 'TRMM';

    const TRST = 'TRST';

    const TRTM = 'TRTM';

    const TRTP = 'TRTP';

    const TS = 'TS';

    const TSAR = 'TSAR';

    const TSR = 'TSR';

    const TSTM = 'TSTM';

    const TSTP = 'TSTP';

    const TSZ = 'TSZ';

    const TTG = 'TTG';

    const TTHO = 'TTHO';

    const TUBE = 'TUBE';

    const TUBM = 'TUBM';

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

    const USPT = 'USPT';

    const UTLP = 'UTLP';

    const UVPR = 'UVPR';

    const UVRS = 'UVRS';

    const VARP = 'VARP';

    const VARS = 'VARS';

    const VART = 'VART';

    const VCRM = 'VCRM';

    const VCSL = 'VCSL';

    const VCTM = 'VCTM';

    const VEHT = 'VEHT';

    const VHSC = 'VHSC';

    const VIAL = 'VIAL';

    const VID = 'VID';

    const VIEW = 'VIEW';

    const VILM = 'VILM';

    const VISR = 'VISR';

    const VLST = 'VLST';

    const VMT = 'VMT';

    const VNTS = 'VNTS';

    const VOC = 'VOC';

    const VOID = 'VOID';

    const VPOR = 'VPOR';

    const VRSN = 'VRSN';

    const VRTL = 'VRTL';

    const VSCR = 'VSCR';

    const VSCS = 'VSCS';

    const VVTP = 'VVTP';

    const VW = 'VW';

    const WAC = 'WAC';

    const WAI = 'WAI';

    const WAIR = 'WAIR';

    const WALL = 'WALL';

    const WAR = 'WAR';

    const WARD = 'WARD';

    const WAS = 'WAS';

    const WATR = 'WATR';

    const WB = 'WB';

    const WBBM = 'WBBM';

    const WDAJ = 'WDAJ';

    const WEAP = 'WEAP';

    const WEHC = 'WEHC';

    const WELL = 'WELL';

    const WHLD = 'WHLD';

    const WI = 'WI';

    const WL = 'WL';

    const WLLC = 'WLLC';

    const WLLS = 'WLLS';

    const WNDP = 'WNDP';

    const WNDR = 'WNDR';

    const WNDW = 'WNDW';

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

    const WSCY = 'WSCY';

    const WSTD = 'WSTD';

    const WTRP = 'WTRP';

    const WTRR = 'WTRR';

    const WTSL = 'WTSL';

    const WVRP = 'WVRP';

    const XPRT = 'XPRT';

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

    /** @var ItemRegistryStructureItemsLineItemItemsMasterItemAttributeItemsItemAttributeItemsMeasurementsItems[]|array */
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
            self::ACBS,
            self::ACLV,
            self::ACRD,
            self::ACRI,
            self::ACRP,
            self::ACS,
            self::ACSY,
            self::ACT,
            self::ACTL,
            self::ACTV,
            self::ADDR,
            self::ADHV,
            self::ADJS,
            self::ADLT,
            self::ADMO,
            self::ADPT,
            self::ADR,
            self::ADSP,
            self::ADTT,
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
            self::ALRG,
            self::ALRM,
            self::ALTM,
            self::AMBT,
            self::AMMF,
            self::AMPL,
            self::ANLA,
            self::ANLM,
            self::ANLT,
            self::ANMN,
            self::ANRS,
            self::ANSI,
            self::ANSP,
            self::ANTC,
            self::ANTR,
            self::AO,
            self::AOIN,
            self::AOU,
            self::APL,
            self::APLG,
            self::APMD,
            self::APPL,
            self::APRT,
            self::ARC,
            self::ARM,
            self::ARMC,
            self::ARMR,
            self::ARPF,
            self::ARS,
            self::ARTF,
            self::ARTS,
            self::ASC,
            self::ASHT,
            self::ASM,
            self::ASPG,
            self::ASTA,
            self::ATD,
            self::ATFC,
            self::ATH,
            self::ATST,
            self::ATTT,
            self::AW,
            self::AWRC,
            self::BAGT,
            self::BALL,
            self::BAND,
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
            self::BDCP,
            self::BDMT,
            self::BDPT,
            self::BDRP,
            self::BDSZ,
            self::BEAD,
            self::BFCT,
            self::BFFC,
            self::BFFP,
            self::BFFS,
            self::BGFT,
            self::BIMC,
            self::BIND,
            self::BKAJ,
            self::BKCV,
            self::BKHT,
            self::BKMT,
            self::BKMX,
            self::BLD,
            self::BLDB,
            self::BLDE,
            self::BLDM,
            self::BLDT,
            self::BLE,
            self::BLND,
            self::BLPT,
            self::BLS,
            self::BLTP,
            self::BLWR,
            self::BND,
            self::BNTM,
            self::BOWL,
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
            self::BRRL,
            self::BRSH,
            self::BRSL,
            self::BRST,
            self::BRT,
            self::BRTT,
            self::BRWT,
            self::BS,
            self::BSBT,
            self::BSCP,
            self::BSCV,
            self::BSN,
            self::BSWT,
            self::BT,
            self::BTFC,
            self::BTL,
            self::BTS,
            self::BTST,
            self::BTTL,
            self::BU,
            self::BUL,
            self::BVRG,
            self::BYCY,
            self::BZL,
            self::CAB,
            self::CALB,
            self::CALF,
            self::CALP,
            self::CALS,
            self::CANH,
            self::CAPC,
            self::CAPM,
            self::CAPT,
            self::CARD,
            self::CARG,
            self::CARP,
            self::CARS,
            self::_CASE,
            self::CB,
            self::CBST,
            self::CCMD,
            self::CCP,
            self::CCW,
            self::CDCG,
            self::CDI,
            self::CDO,
            self::CDPL,
            self::CDTP,
            self::CELL,
            self::CFBN,
            self::CFN,
            self::CFRM,
            self::CH,
            self::CHEM,
            self::CHGT,
            self::CHKS,
            self::CHLF,
            self::CHMB,
            self::CHML,
            self::CHMN,
            self::CHMR,
            self::CHR,
            self::CHRT,
            self::CHST,
            self::CHUT,
            self::CHZM,
            self::CI,
            self::CJCP,
            self::CL,
            self::CLAT,
            self::CLB,
            self::CLBG,
            self::CLCL,
            self::CLD,
            self::CLDM,
            self::CLDN,
            self::CLDS,
            self::CLGR,
            self::CLIN,
            self::CLLO,
            self::CLMN,
            self::CLMP,
            self::CLNB,
            self::CLND,
            self::CLPT,
            self::CLSD,
            self::CLSO,
            self::CLSW,
            self::CLTD,
            self::CMFL,
            self::CMI,
            self::CMMN,
            self::CMPD,
            self::CMPR,
            self::CMSC,
            self::CMTG,
            self::CNCT,
            self::CNDJ,
            self::CNDL,
            self::CNDS,
            self::CNDT,
            self::CNMD,
            self::CNNL,
            self::CNS,
            self::CNTD,
            self::CNTF,
            self::CNTM,
            self::CNTN,
            self::CNTR,
            self::CO,
            self::COA,
            self::COIL,
            self::CON,
            self::CONC,
            self::CONE,
            self::CONM,
            self::CONV,
            self::COO,
            self::COOL,
            self::COOP,
            self::COP,
            self::COSM,
            self::COSU,
            self::COUR,
            self::COV,
            self::CPLG,
            self::CPLY,
            self::CPMR,
            self::CPRN,
            self::CQ,
            self::CR,
            self::CRBN,
            self::CRCT,
            self::CRDI,
            self::CRDL,
            self::CRDM,
            self::CRDT,
            self::CRS,
            self::CRTG,
            self::CSET,
            self::CSHN,
            self::CSMT,
            self::CSST,
            self::CSTP,
            self::CSTR,
            self::CSUB,
            self::CSYS,
            self::CTCB,
            self::CTCM,
            self::CTLR,
            self::CTMP,
            self::CTNG,
            self::CTRS,
            self::CUFC,
            self::CUFF,
            self::CUPS,
            self::CUS,
            self::CVI,
            self::CVO,
            self::CVR,
            self::CVTT,
            self::CVTY,
            self::CW,
            self::CWY,
            self::CXRC,
            self::CYCL,
            self::DCMP,
            self::DCPC,
            self::DCRS,
            self::DESR,
            self::DF,
            self::DFST,
            self::DIAL,
            self::DIM,
            self::DIS,
            self::DISC,
            self::DISH,
            self::DISP,
            self::DLCC,
            self::DLCT,
            self::DLRC,
            self::DLRN,
            self::DLTN,
            self::DNC,
            self::DNSF,
            self::DOOR,
            self::DPAC,
            self::DPGM,
            self::DPOP,
            self::DPPR,
            self::DRCF,
            self::DRP,
            self::DRPL,
            self::DRS,
            self::DRSG,
            self::DRSH,
            self::DRST,
            self::DRVS,
            self::DS,
            self::DSHM,
            self::DSP,
            self::DSPL,
            self::DSPN,
            self::DSR,
            self::DTCT,
            self::DTHS,
            self::DTMT,
            self::DTRM,
            self::DTSG,
            self::DTSY,
            self::DUCT,
            self::DUR,
            self::DVBC,
            self::DVDC,
            self::DVTR,
            self::DWRM,
            self::DYE,
            self::DYET,
            self::DYGM,
            self::DYOW,
            self::EARC,
            self::EARM,
            self::EARP,
            self::EBP,
            self::ECAE,
            self::ECCN,
            self::ECEN,
            self::ECTY,
            self::ED,
            self::EDGE,
            self::EDT,
            self::EDUF,
            self::EF,
            self::EGCN,
            self::EGRG,
            self::EKO,
            self::ELAJ,
            self::ELCT,
            self::ELMD,
            self::ELRR,
            self::ENCL,
            self::ENCM,
            self::END,
            self::ENDC,
            self::ENEX,
            self::ENTT,
            self::ENZM,
            self::EPB,
            self::ESRB,
            self::EVPR,
            self::EXHA,
            self::EXPL,
            self::EXPP,
            self::EXRT,
            self::EXTB,
            self::EXTT,
            self::EYOB,
            self::EYR,
            self::FA,
            self::FAAC,
            self::FACB,
            self::FACE,
            self::FAN,
            self::FATP,
            self::FATS,
            self::FATY,
            self::FB,
            self::FBRT,
            self::FBT,
            self::FCS,
            self::FCSL,
            self::FCSM,
            self::FCT,
            self::FCTS,
            self::FCTT,
            self::FDF,
            self::FDSP,
            self::FDSS,
            self::FDWC,
            self::FDWT,
            self::FEED,
            self::FERT,
            self::FF,
            self::FFNN,
            self::FHCB,
            self::FIT,
            self::FLCH,
            self::FLDV,
            self::FLGU,
            self::FLM,
            self::FLNG,
            self::FLRD,
            self::FLRS,
            self::FLRT,
            self::FLSK,
            self::FLTR,
            self::FLV,
            self::FLX,
            self::FMLA,
            self::FNGR,
            self::FNNL,
            self::FNNT,
            self::FNWG,
            self::FOG,
            self::FOOT,
            self::FOT,
            self::FOTP,
            self::FOVA,
            self::FOVH,
            self::FOVT,
            self::FPTN,
            self::FRIT,
            self::FRMC,
            self::FRME,
            self::FRML,
            self::FRMW,
            self::FRRT,
            self::FRST,
            self::FSC,
            self::FSCH,
            self::FSHL,
            self::FT,
            self::FTEX,
            self::FTPR,
            self::FTRT,
            self::FTSK,
            self::FUE,
            self::FUEC,
            self::FW,
            self::FWC,
            self::FWUP,
            self::FZCF,
            self::GAP,
            self::GASC,
            self::GASM,
            self::GASU,
            self::GBAT,
            self::GBAV,
            self::GCBC,
            self::GCTP,
            self::GDAJ,
            self::GDCL,
            self::GEL,
            self::GEM,
            self::GEN,
            self::GENE,
            self::GEO,
            self::GFAH,
            self::GGE,
            self::GMCL,
            self::GMCT,
            self::GMMT,
            self::GMOC,
            self::GMSH,
            self::GNAL,
            self::GNBX,
            self::GNSY,
            self::GPC,
            self::GPCB,
            self::GPS,
            self::GR,
            self::GRCH,
            self::GRD,
            self::GRDC,
            self::GRDL,
            self::GRDM,
            self::GRDN,
            self::GRID,
            self::GRLL,
            self::GRP,
            self::GRRT,
            self::GSKT,
            self::GSRR,
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
            self::HDFS,
            self::HDLD,
            self::HDMI,
            self::HDMO,
            self::HDSP,
            self::HDST,
            self::HDTY,
            self::HDWR,
            self::HE,
            self::HEAD,
            self::HEAT,
            self::HEDW,
            self::HEFF,
            self::HEM,
            self::HEPA,
            self::HF,
            self::HLES,
            self::HM,
            self::HMC,
            self::HMDR,
            self::HMDY,
            self::HNBG,
            self::HND,
            self::HNDC,
            self::HNDM,
            self::HNSW,
            self::HODT,
            self::HOOD,
            self::HOSE,
            self::HPPR,
            self::HPR,
            self::HRNS,
            self::HRRM,
            self::HRTD,
            self::HRTP,
            self::HSD,
            self::HSLC,
            self::HSNM,
            self::HTAJ,
            self::HTEL,
            self::HTIN,
            self::HTOP,
            self::HTPL,
            self::HTRS,
            self::HTSR,
            self::HTSY,
            self::HWSP,
            self::HYDL,
            self::HYP,
            self::HZSP,
            self::ICBR,
            self::IECC,
            self::IED,
            self::IGNT,
            self::IHBR,
            self::IING,
            self::IJCT,
            self::IMA,
            self::IME,
            self::IMG,
            self::IMGN,
            self::IMMA,
            self::IMRS,
            self::INCB,
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
            self::INLT,
            self::INS,
            self::INSB,
            self::INSL,
            self::INST,
            self::INTF,
            self::INTR,
            self::INTS,
            self::INVU,
            self::IPRT,
            self::ISL,
            self::ISLR,
            self::ISLW,
            self::ISTR,
            self::ITR,
            self::ITS,
            self::ITTR,
            self::JARM,
            self::JAWS,
            self::JCKT,
            self::JCTN,
            self::JKLG,
            self::JKTK,
            self::JMRL,
            self::JNK,
            self::JNTS,
            self::JS,
            self::KIWA,
            self::KNSC,
            self::KP,
            self::KPFN,
            self::KSHR,
            self::KT,
            self::KW,
            self::KYBD,
            self::KYLS,
            self::KYSZ,
            self::LABL,
            self::LACE,
            self::LADR,
            self::LAUC,
            self::LCKM,
            self::LCKT,
            self::LCNS,
            self::LCTL,
            self::LDCL,
            self::LDOP,
            self::LEA,
            self::LFSP,
            self::LFST,
            self::LFTM,
            self::LFTT,
            self::LGCF,
            self::LGLD,
            self::LI,
            self::LINE,
            self::LLA,
            self::LMBS,
            self::LMM,
            self::LMTD,
            self::LN,
            self::LNGC,
            self::LO,
            self::LOCK,
            self::LOF,
            self::LQD,
            self::LS,
            self::LSCR,
            self::LSCT,
            self::LSR,
            self::LT,
            self::LTPT,
            self::LTS,
            self::LTXF,
            self::LUBE,
            self::LYST,
            self::MAK,
            self::MARR,
            self::MCRS,
            self::MDCT,
            self::MDUL,
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
            self::MIXR,
            self::MKTE,
            self::MLBN,
            self::MLTP,
            self::MMBR,
            self::MMTX,
            self::MN,
            self::MNFL,
            self::MNGL,
            self::MNLG,
            self::MNMD,
            self::MNTR,
            self::MOAT,
            self::MOD,
            self::MODE,
            self::MOLE,
            self::MOTN,
            self::MOTR,
            self::MOU,
            self::MOUL,
            self::MOUT,
            self::MPAA,
            self::MPLG,
            self::MPSE,
            self::MRRR,
            self::MSHM,
            self::MTBR,
            self::MTCH,
            self::MTHS,
            self::MTLR,
            self::MTO,
            self::MTR,
            self::MTRT,
            self::MU,
            self::MXGL,
            self::MXTP,
            self::MYCO,
            self::MYE,
            self::MZVL,
            self::NCHM,
            self::NCKD,
            self::NCKL,
            self::NCKT,
            self::NDDL,
            self::NDDS,
            self::NFPA,
            self::NIGP,
            self::NMBO,
            self::NNMK,
            self::NOMF,
            self::NPOT,
            self::NS,
            self::NSFT,
            self::NSN,
            self::NSPC,
            self::NST,
            self::NTDT,
            self::NTRY,
            self::NVTB,
            self::NWKP,
            self::NWKT,
            self::OBS,
            self::OFET,
            self::OI,
            self::OILT,
            self::OLRS,
            self::OO,
            self::OPEN,
            self::OPNT,
            self::OPPR,
            self::OPTR,
            self::_OR,
            self::ORBT,
            self::ORDU,
            self::ORMD,
            self::ORTH,
            self::OS,
            self::OSC,
            self::OTS,
            self::OUTL,
            self::OUTR,
            self::OVNS,
            self::PADD,
            self::PAND,
            self::PAPR,
            self::PBL,
            self::PBY,
            self::PCAR,
            self::PCAV,
            self::PCKL,
            self::PCLR,
            self::PCSN,
            self::PDL,
            self::PDVC,
            self::PED,
            self::PEST,
            self::PEXS,
            self::PFHT,
            self::PG,
            self::PGFM,
            self::PHFM,
            self::PHPW,
            self::PHT,
            self::PILG,
            self::PINT,
            self::PL,
            self::PLAT,
            self::PLGM,
            self::PLMM,
            self::PLN,
            self::PLNG,
            self::PLNT,
            self::PLRT,
            self::PLS,
            self::PLTD,
            self::PLTS,
            self::PLTT,
            self::PLTW,
            self::PLUG,
            self::PLY,
            self::PLYR,
            self::PM,
            self::PMD,
            self::PMF,
            self::PMPS,
            self::PNSR,
            self::PNTR,
            self::PNTS,
            self::PODC,
            self::POI,
            self::POK,
            self::POL,
            self::PORE,
            self::PORT,
            self::PPA,
            self::PPI,
            self::PPM,
            self::PPMT,
            self::PPRL,
            self::PPUA,
            self::PRBB,
            self::PRC,
            self::PRCB,
            self::PRCP,
            self::PRGM,
            self::PRNS,
            self::PRNT,
            self::PROB,
            self::PRPL,
            self::PRS,
            self::PRSB,
            self::PRSI,
            self::PRST,
            self::PRSV,
            self::PRSZ,
            self::PRTA,
            self::PRTB,
            self::PRTG,
            self::PRTN,
            self::PRTP,
            self::PRTS,
            self::PRTY,
            self::PRWV,
            self::PSCD,
            self::PSFT,
            self::PSKU,
            self::PSO,
            self::PSTL,
            self::PT,
            self::PTBL,
            self::PTCL,
            self::PTCR,
            self::PTLV,
            self::PTR,
            self::PTTY,
            self::PUMP,
            self::PUPL,
            self::PVL,
            self::PWCD,
            self::PWDF,
            self::PYMR,
            self::PYST,
            self::QTCL,
            self::QTTP,
            self::RACK,
            self::RAI,
            self::RAM,
            self::RARS,
            self::RB,
            self::RCDR,
            self::RCKC,
            self::RCPR,
            self::RDTN,
            self::REF,
            self::REO,
            self::REP,
            self::RESN,
            self::RETR,
            self::REU,
            self::REVR,
            self::RF,
            self::RFLL,
            self::RFTG,
            self::RFTN,
            self::RHC,
            self::RI,
            self::RING,
            self::RINS,
            self::RIS,
            self::RL,
            self::RM,
            self::RMCT,
            self::RMHO,
            self::RMMD,
            self::RMVI,
            self::RNI,
            self::RNSF,
            self::ROBT,
            self::ROD,
            self::ROLL,
            self::RP,
            self::RPCK,
            self::RPCP,
            self::RPLN,
            self::RPM,
            self::RSFP,
            self::RSPN,
            self::RSR,
            self::RSRQ,
            self::RST,
            self::RSVT,
            self::RTBL,
            self::RTC,
            self::RTCC,
            self::RTCL,
            self::RTE,
            self::RTTN,
            self::RUL,
            self::SADJ,
            self::SAG,
            self::SAJM,
            self::SALT,
            self::SAMP,
            self::SBBT,
            self::SBFL,
            self::SBJ,
            self::SBLC,
            self::SBMP,
            self::SBR,
            self::SCAN,
            self::SCAV,
            self::SCCK,
            self::SCK,
            self::SCKB,
            self::SCL,
            self::SCLE,
            self::SCLR,
            self::SCNT,
            self::SCPL,
            self::SCPR,
            self::SCRC,
            self::SCRF,
            self::SCRG,
            self::SCRM,
            self::SCRT,
            self::SCTD,
            self::SCTP,
            self::SDRM,
            self::SEAL,
            self::SEAM,
            self::SEAT,
            self::SECT,
            self::SELR,
            self::SENS,
            self::SERS,
            self::SES,
            self::SET,
            self::SFCM,
            self::SFLV,
            self::SFTF,
            self::SFTM,
            self::SFTP,
            self::SG,
            self::SGC,
            self::SGHT,
            self::SGLU,
            self::SHCK,
            self::SHDP,
            self::SHE,
            self::SHF,
            self::SHHT,
            self::SHIP,
            self::SHKR,
            self::SHL,
            self::SHLF,
            self::SHLR,
            self::SHNK,
            self::SHP,
            self::SHRD,
            self::SHRP,
            self::SIC,
            self::SIEV,
            self::SIG,
            self::SINK,
            self::SJT,
            self::SKL,
            self::SKS,
            self::SKTD,
            self::SKTM,
            self::SKTP,
            self::SL,
            self::SLBT,
            self::SLCF,
            self::SLID,
            self::SLPR,
            self::SLPT,
            self::SLR,
            self::SLTL,
            self::SLVM,
            self::SLVS,
            self::SLVT,
            self::SMC,
            self::SMM,
            self::SMPL,
            self::SMPP,
            self::SN,
            self::SNSR,
            self::SO,
            self::SOLN,
            self::SORB,
            self::SPC,
            self::SPCH,
            self::SPCM,
            self::SPCP,
            self::SPCS,
            self::SPCT,
            self::SPDR,
            self::SPDS,
            self::SPEC,
            self::SPEQ,
            self::SPFR,
            self::SPI,
            self::SPN,
            self::SPNR,
            self::SPO,
            self::SPOL,
            self::SPPT,
            self::SPRA,
            self::SPRC,
            self::SPRT,
            self::SPRY,
            self::SPST,
            self::SPSZ,
            self::SPTM,
            self::SPUT,
            self::SRFC,
            self::SRU,
            self::SRVP,
            self::SSRT,
            self::SSZ,
            self::ST,
            self::STAI,
            self::STBL,
            self::STCK,
            self::STEM,
            self::STFC,
            self::STG,
            self::STLM,
            self::STNP,
            self::STON,
            self::STPR,
            self::STPT,
            self::STR,
            self::STRG,
            self::STRK,
            self::STRL,
            self::STRP,
            self::STRR,
            self::STRS,
            self::STSI,
            self::STSL,
            self::STSU,
            self::STTR,
            self::SUB,
            self::SUBL,
            self::SUTR,
            self::SVC,
            self::SVD,
            self::SVI,
            self::SVO,
            self::SW,
            self::SWS,
            self::SWWT,
            self::SYPR,
            self::SYSR,
            self::TANE,
            self::TANK,
            self::TAPE,
            self::TAPF,
            self::TBST,
            self::TCHL,
            self::TCNF,
            self::TCTC,
            self::TEA,
            self::TEST,
            self::TETH,
            self::TEXT,
            self::TGRM,
            self::THD,
            self::THDC,
            self::THER,
            self::THRM,
            self::TILT,
            self::TIM,
            self::TIMR,
            self::TINT,
            self::TIPM,
            self::TIPT,
            self::TIT,
            self::TLBT,
            self::TLI,
            self::TLSC,
            self::TM,
            self::TMA,
            self::TMCL,
            self::TMEP,
            self::TMPC,
            self::TMPL,
            self::TMPR,
            self::TMPS,
            self::TOPG,
            self::TOS,
            self::TOTF,
            self::TP,
            self::TPCL,
            self::TPER,
            self::TPL,
            self::TPLG,
            self::TPMC,
            self::TPRR,
            self::TPSH,
            self::TPST,
            self::TQE,
            self::TR,
            self::TRAY,
            self::TRCF,
            self::TRDC,
            self::TRDM,
            self::TRMC,
            self::TRMM,
            self::TRST,
            self::TRTM,
            self::TRTP,
            self::TS,
            self::TSAR,
            self::TSR,
            self::TSTM,
            self::TSTP,
            self::TSZ,
            self::TTG,
            self::TTHO,
            self::TUBE,
            self::TUBM,
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
            self::USPT,
            self::UTLP,
            self::UVPR,
            self::UVRS,
            self::VARP,
            self::VARS,
            self::VART,
            self::VCRM,
            self::VCSL,
            self::VCTM,
            self::VEHT,
            self::VHSC,
            self::VIAL,
            self::VID,
            self::VIEW,
            self::VILM,
            self::VISR,
            self::VLST,
            self::VMT,
            self::VNTS,
            self::VOC,
            self::VOID,
            self::VPOR,
            self::VRSN,
            self::VRTL,
            self::VSCR,
            self::VSCS,
            self::VVTP,
            self::VW,
            self::WAC,
            self::WAI,
            self::WAIR,
            self::WALL,
            self::WAR,
            self::WARD,
            self::WAS,
            self::WATR,
            self::WB,
            self::WBBM,
            self::WDAJ,
            self::WEAP,
            self::WEHC,
            self::WELL,
            self::WHLD,
            self::WI,
            self::WL,
            self::WLLC,
            self::WLLS,
            self::WNDP,
            self::WNDR,
            self::WNDW,
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
            self::WSCY,
            self::WSTD,
            self::WTRP,
            self::WTRR,
            self::WTSL,
            self::WVRP,
            self::XPRT,
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
        $properties->measurements->items = ItemRegistryStructureItemsLineItemItemsMasterItemAttributeItemsItemAttributeItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "This group describes a part of an item";
        $ownerSchema->required = array(
        );
    }
}