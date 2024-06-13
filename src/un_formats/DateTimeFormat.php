<?php
// "https://unece.org/fileadmin/DAM/trade/untdid/d16b/tred/tred2379.htm";
enum UNDateTimeFormatCode: string
{
	public static function source()
	{
		return "https://unece.org/fileadmin/DAM/trade/untdid/d16b/tred/tred2379.htm";
	}

    case DDMMYY = '2';
    case MMDDYY = '3';
    case DDMMCCYY = '4';
    case DDMMCCYYHHMM = '5';
    case CCYYMMB = '6';
    case CCYYMMW = '7';
    case CCYYMMDDS = '8';
    case CCYYMMDDPP = '9';
    case CCYYMMDDTHHMM = '10';
    case YYMMDD = '101';
    case CCYYMMDD = '102';
    case YYWWD = '103';
    case MMWW_MMWW = '104';
    case YYDDD = '105';
    case MMDD = '106';
    case DDD = '107';
    case WW = '108';
    case MM = '109';
    case DD = '110';
    case YYMMDDHHMM = '201';
    case YYMMDDHHMMSS = '202';
    case CCYYMMDDHHMM = '203';
    case CCYYMMDDHHMMSS = '204';
    case CCYYMMDDHHMMZHHMM = '205';
    case YYMMDDHHMMZHHMM = '206';
    case YYMMDDHHMMSSZHHMM = '207';
    case CCYYMMDDHHMMSSZHHMM = '208';
    case HHMMSSZHHMM = '209';
    case HHMMSSZHHMM_HHMMSSZHHMM = '210';
    case YYMMDDHHMMZZZ = '301';
    case YYMMDDHHMMSSZZZ = '302';
    case CCYYMMDDHHMMZZZ = '303';
    case CCYYMMDDHHMMSSZZZ = '304';
    case MMDDHHMM = '305';
    case DDHHMM = '306';
    case CCYYMMDDHHMMSSFFF = '307';
    case HHMM = '401';
    case HHMMSS = '402';
    case HHMMSSZZZ = '404';
    case MMMMSS = '405';
    case ZHHMM = '406';
    case HHMMHHMM = '501';
    case HHMMSS_HHMMSS = '502';
    case HHMMSSZZZ_HHMMSSZZZ = '503';
    case CC = '600';
    case YY = '601';
    case CCYY = '602';
    case YYS = '603';
    case CCYYS = '604';
    case CCYYQ = '608';
    case YYMM = '609';
    case CCYYMM = '610';
    case YYMMA = '613';
    case CCYYMMA = '614';
    case YYWW = '615';
    case CCYYWW = '616';
    case YY_YY = '701';
    case CCYY_CCYY = '702';
    case YYS_YYS = '703';
    case CCYYS_CCYYS = '704';
    case YYPYYP = '705';
    case CCYYP_CCYYP = '706';
    case YYQ_YYQ = '707';
    case CCYYQ_CCYYQ = '708';
    case YYMM_YYMM = '709';
    case CCYYMM_CCYYMM = '710';
    case YYMMDDHHMM_YYMMDDHHMM = '713';
    case YYWW_YYWW = '715';
    case CCYYWW_CCYYWW = '716';
    case YYMMDD_YYMMDD = '717';
    case CCYYMMDD_CCYYMMDD = '718';
    case CCYYMMDDHHMM_CCYYMMDDHHMM = '719';
    case DHHMM_DHHMM = '720';
    case Year = '801';
    case Month = '802';
    case Week = '803';
    case Day = '804';
    case Hour = '805';
    case Minute = '806';
    case Second = '807';
    case Semester = '808';
    case FourMonthsPeriod = '809';
    case Trimester = '810';
    case HalfMonth = '811';
    case TenDays = '812';
    case DayOfWeek = '813';
    case WorkingDays = '814';
}


function dateOnlyFromString($date, $format = 'Y-m-d')
{
    $dateTime = new DateTime($date);
    $dateTime->setTime(0, 0);
    return $date->format('Y-m-d');
}
