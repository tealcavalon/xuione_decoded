<?php


class TMDB
{
	public const Ccb37d194fcaf0ef = 'http://api.themoviedb.org/3/';
	public const a1f3838b40110e3f = '0.0.3.0';

	private $_config;
	private $_apikey;
	private $_lang;
	private $_adult;
	private $_apiconfiguration;
	private $_debug;

	public function __construct($a51800349cf8965f, $d6633f00b24396e2, $b61f4585b85f80e3, $C29e5cdafdb8af43)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  33  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1  33  RECV_INIT/64              16?1=     ?2                   1:NULL              	;0
		2  33  RECV_INIT/64              16?2=     ?3                   2:NULL              	;0
		3  33  RECV_INIT/64              16?3=     ?4                   3:NULL              	;0
		4  35  INCLUDE_OR_EVAL/73        ?0        4:'TMDb/config/config.php' ?0                  	;16
		5  36  INIT_METHOD_CALL/112      ?0        ?0                   5:'setConfig'       	;1
		6  36  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		7  36  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		8  37  INIT_METHOD_CALL/112      ?0        ?0                   7:'setApikey'       	;1
		9  37  ISSET_ISEMPTY_CV/197      #7=       16?0                 ?0                  	;33554432
		10 37  JMPZ/43                   ?0        #7                   ?13                 	;0	>>13
		11 37  QM_ASSIGN/22              #8=       16?0                 ?0                  	;0
		12 37  JMP/42                    ?0        ?15                  ?0                  	;0	>>15
		13 37  FETCH_DIM_R/81            $9=       16?4                 9:'apikey'          	;0	<<10
		14 37  QM_ASSIGN/22              #8=       $9                   ?0                  	;0
		15 37  SEND_VAL_EX/116           ?80       #8                   ?1                  	;0	<<12
		16 37  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		17 38  INIT_METHOD_CALL/112      ?0        ?0                   10:'setLang'        	;1
		18 38  ISSET_ISEMPTY_CV/197      #11=      16?1                 ?0                  	;33554432
		19 38  JMPZ/43                   ?0        #11                  ?22                 	;0	>>22
		20 38  QM_ASSIGN/22              #12=      16?1                 ?0                  	;0
		21 38  JMP/42                    ?0        ?24                  ?0                  	;0	>>24
		22 38  FETCH_DIM_R/81            $13=      16?4                 12:'lang'           	;0	<<19
		23 38  QM_ASSIGN/22              #12=      $13                  ?0                  	;0
		24 38  SEND_VAL_EX/116           ?80       #12                  ?1                  	;0	<<21
		25 38  DO_FCALL/60               ?9        ?0                   ?0                  	;0
		26 39  INIT_METHOD_CALL/112      ?0        ?0                   13:'setAdult'       	;1
		27 39  ISSET_ISEMPTY_CV/197      #15=      16?2                 ?0                  	;33554432
		28 39  JMPZ/43                   ?0        #15                  ?31                 	;0	>>31
		29 39  QM_ASSIGN/22              #16=      16?2                 ?0                  	;0
		30 39  JMP/42                    ?0        ?33                  ?0                  	;0	>>33
		31 39  FETCH_DIM_R/81            $17=      16?4                 15:'adult'          	;0	<<28
		32 39  QM_ASSIGN/22              #16=      $17                  ?0                  	;0
		33 39  SEND_VAL_EX/116           ?80       #16                  ?1                  	;0	<<30
		34 39  DO_FCALL/60               ?13       ?0                   ?0                  	;0
		35 40  INIT_METHOD_CALL/112      ?0        ?0                   16:'setDebug'       	;1
		36 40  ISSET_ISEMPTY_CV/197      #19=      16?3                 ?0                  	;33554432
		37 40  JMPZ/43                   ?0        #19                  ?40                 	;0	>>40
		38 40  QM_ASSIGN/22              #20=      16?3                 ?0                  	;0
		39 40  JMP/42                    ?0        ?42                  ?0                  	;0	>>42
		40 40  FETCH_DIM_R/81            $21=      16?4                 18:'debug'          	;0	<<37
		41 40  QM_ASSIGN/22              #20=      $21                  ?0                  	;0
		42 40  SEND_VAL_EX/116           ?80       #20                  ?1                  	;0	<<39
		43 40  DO_FCALL/60               ?17       ?0                   ?0                  	;0
		44 41  INIT_METHOD_CALL/112      ?0        ?4443006             19:'_loadConfig'    	;0
		45 41  DO_FCALL/60               $23=      ?0                   ?0                  	;0
		46 41  JMPZ/43                   ?0        $23                  ?48                 	;0	>>48
		47 42  GOTO/253                  ?0        ?53                  ?21                 	;0
		48 44  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'_'              	;1	<<46
		49 44  SEND_VAL_EX/116           ?80       24:'Unable to read configuration, verify that the API key is valid' ?1                  	;0
		50 44  DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
		51 44  ECHO/40                   ?0        $24                  ?0                  	;0
		52 45  EXIT/79                   ?0        ?0                   ?0                  	;0
		53 47  NOP/0                     ?0        25:NULL              ?0                  	;4294967295
		*/
	}

	private function setConfig($c9b7f5ad275bdd3a)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  48  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  50  ASSIGN_OBJ/136            ?0        ?1657158624          0:'_config'         	;0
		2  50  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3  51  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	private function getConfig()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  54  FETCH_OBJ_R/82            $0=       ?0                   0:'_config'         	;0
		1  54  RETURN/62                 ?0        $0                   ?0                  	;0
		2  55  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	private function setApikey($a51800349cf8965f)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  56  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  58  CAST/21                   #2=       16?0                 ?0                  	;6
		2  58  ASSIGN_OBJ/136            ?0        ?2670194256          0:'_apikey'         	;0
		3  58  OP_DATA/137               ?0        #2                   ?0                  	;0
		4  59  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	private function getApikey()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  62  FETCH_OBJ_R/82            $0=       ?0                   0:'_apikey'         	;0
		1  62  RETURN/62                 ?0        $0                   ?0                  	;0
		2  63  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function setLang($d6633f00b24396e2)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  64  RECV_INIT/64              16?0=     ?1                   0:'en'              	;0
		1  66  CAST/21                   #2=       16?0                 ?0                  	;6
		2  66  ASSIGN_OBJ/136            ?0        ?2670194256          1:'_lang'           	;0
		3  66  OP_DATA/137               ?0        #2                   ?0                  	;0
		4  67  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getLang()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  70  FETCH_OBJ_R/82            $0=       ?0                   0:'_lang'           	;0
		1  70  RETURN/62                 ?0        $0                   ?0                  	;0
		2  71  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function setAdult($b61f4585b85f80e3)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  72  RECV_INIT/64              16?0=     ?1                   0:false             	;0
		1  74  ASSIGN_OBJ/136            ?0        ?2670194256          1:'_adult'          	;0
		2  74  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3  75  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getAdult()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  78  FETCH_OBJ_R/82            $0=       ?2670193760          0:'_adult'          	;0
		1  78  JMPZ/43                   ?0        $0                   ?4                  	;0	>>4
		2  78  QM_ASSIGN/22              #1=       1:'true'             ?0                  	;0
		3  78  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
		4  78  QM_ASSIGN/22              #1=       2:'false'            ?0                  	;0	<<1
		5  78  RETURN/62                 ?0        #1                   ?0                  	;0	<<3
		6  79  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function setDebug($C29e5cdafdb8af43)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  80  RECV_INIT/64              16?0=     ?1                   0:false             	;0
		1  82  ASSIGN_OBJ/136            ?0        ?1668194304          1:'_debug'          	;0
		2  82  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3  83  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getDebug()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  86  FETCH_OBJ_R/82            $0=       ?0                   0:'_debug'          	;0
		1  86  RETURN/62                 ?0        $0                   ?0                  	;0
		2  87  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	private function _loadConfig()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  90  NEW/68                    $1=       1:'APIConfiguration' ?192                	;1
		1  90  INIT_METHOD_CALL/112      ?0        ?78                  3:'_call'           	;1
		2  90  SEND_VAL_EX/116           ?80       5:'configuration'    ?1                  	;0
		3  90  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4  90  SEND_VAR_NO_REF_EX/50     ?80       $2                   ?1                  	;0
		5  90  DO_FCALL/60               ?3        ?8                   ?0                  	;0
		6  90  ASSIGN_OBJ/136            ?0        ?2670194256          0:'_apiconfiguration'	;0
		7  90  OP_DATA/137               ?0        $1                   ?0                  	;0
		8  91  ISSET_ISEMPTY_PROP_OBJ/148 #4=       ?8                   6:'_apiconfiguration'	;16777216
		9  91  BOOL_NOT/13               #5=       #4                   ?0                  	;0
		10 91  RETURN/62                 ?0        #5                   ?0                  	;0
		11 92  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	public function getAPIConfig()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  95  FETCH_OBJ_R/82            $0=       ?0                   0:'_apiconfiguration'	;0
		1  95  RETURN/62                 ?0        $0                   ?0                  	;0
		2  96  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getImageURL($size)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   97   RECV_INIT/64              16?0=     ?1                   0:'original'        	;0
		1   99   FETCH_OBJ_R/82            $1=       ?4397406             1:'_apiconfiguration'	;0
		2   99   INIT_METHOD_CALL/112      ?0        $1                   2:'getImageBaseURL' 	;0
		3   99   DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   99   CONCAT/8                  #3=       $2                   16?0                	;0
		5   99   RETURN/62                 ?0        #3                   ?0                  	;0
		6   100  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function getDiscoverMovies($b669f99ffc6c6dd1)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   101  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   103  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   104  INIT_METHOD_CALL/112      ?0        ?1661237944          2:'_call'           	;2
		3   104  SEND_VAL_EX/116           ?80       4:'discover/movie'   ?1                  	;0
		4   104  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   104  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   104  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   104  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   105  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   105  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  105  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  106  NEW/68                    $11=      7:'Movie'            ?96                 	;1
		12  106  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  106  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  106  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  106  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  107  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  107  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  110  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  111  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function getDiscoverTVShows($b669f99ffc6c6dd1)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   112  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   114  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   115  INIT_METHOD_CALL/112      ?0        ?4607662             2:'_call'           	;2
		3   115  SEND_VAL_EX/116           ?80       4:'discover/tv'      ?1                  	;0
		4   115  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   115  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   115  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   115  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   116  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   116  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  116  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  117  NEW/68                    $11=      7:'TVShow'           ?96                 	;1
		12  117  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  117  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  117  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  117  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  118  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  118  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  121  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  122  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function getDiscoverMovie($b669f99ffc6c6dd1)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   123  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   125  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   126  INIT_METHOD_CALL/112      ?0        ?4607662             2:'_call'           	;2
		3   126  SEND_VAL_EX/116           ?80       4:'discover/movie'   ?1                  	;0
		4   126  CONCAT/8                  #5=       5:'page='            16?0                	;0
		5   126  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   126  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   126  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   127  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   127  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  127  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  128  NEW/68                    $11=      7:'Movie'            ?96                 	;1
		12  128  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  128  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  128  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  128  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  129  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  129  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  132  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  133  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function getLatestMovie()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   136  NEW/68                    $0=       0:'Movie'            ?192                	;1
		1   136  INIT_METHOD_CALL/112      ?0        ?4294967040          2:'_call'           	;1
		2   136  SEND_VAL_EX/116           ?80       4:'movie/latest'     ?1                  	;0
		3   136  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		4   136  SEND_VAR_NO_REF_EX/50     ?80       $1                   ?1                  	;0
		5   136  DO_FCALL/60               ?2        ?8                   ?0                  	;0
		6   136  RETURN/62                 ?0        $0                   ?0                  	;0
		7   137  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	public function getNowPlayingMovies($b669f99ffc6c6dd1)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   138  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   140  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   141  INIT_METHOD_CALL/112      ?0        ?5126                2:'_call'           	;2
		3   141  SEND_VAL_EX/116           ?80       4:'movie/now_playing' ?1                  	;0
		4   141  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   141  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   141  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   141  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   142  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   142  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  142  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  143  NEW/68                    $11=      7:'Movie'            ?96                 	;1
		12  143  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  143  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  143  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  143  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  144  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  144  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  147  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  148  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function getPopularMovies($b669f99ffc6c6dd1)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   149  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   151  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   152  INIT_METHOD_CALL/112      ?0        ?4607662             2:'_call'           	;2
		3   152  SEND_VAL_EX/116           ?80       4:'movie/popular'    ?1                  	;0
		4   152  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   152  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   152  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   152  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   153  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   153  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  153  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  154  NEW/68                    $11=      7:'Movie'            ?96                 	;1
		12  154  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  154  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  154  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  154  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  155  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  155  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  158  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  159  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function getTopRatedMovies($b669f99ffc6c6dd1)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   160  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   162  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   163  INIT_METHOD_CALL/112      ?0        ?4607662             2:'_call'           	;2
		3   163  SEND_VAL_EX/116           ?80       4:'movie/top_rated'  ?1                  	;0
		4   163  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   163  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   163  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   163  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   164  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   164  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  164  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  165  NEW/68                    $11=      7:'Movie'            ?96                 	;1
		12  165  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  165  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  165  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  165  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  166  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  166  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  169  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  170  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function getUpcomingMovies($b669f99ffc6c6dd1)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   171  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   173  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   174  INIT_METHOD_CALL/112      ?0        ?4607662             2:'_call'           	;2
		3   174  SEND_VAL_EX/116           ?80       4:'movie/upcoming'   ?1                  	;0
		4   174  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   174  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   174  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   174  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   175  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   175  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  175  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  176  NEW/68                    $11=      7:'Movie'            ?96                 	;1
		12  176  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  176  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  176  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  176  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  177  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  177  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  180  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  181  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function getSimilarMovies($B361603840197dca, $b669f99ffc6c6dd1)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   182  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   182  RECV_INIT/64              16?1=     ?2                   0:1                 	;0
		2   184  ASSIGN/38                 ?0        16?2                 1:array (
)         	;0
		3   185  INIT_METHOD_CALL/112      ?0        ?4607662             2:'_call'           	;2
		4   185  CONCAT/8                  #6=       4:'movie/'           16?0                	;0
		5   185  CONCAT/8                  #7=       #6                   5:'/similar'        	;0
		6   185  SEND_VAL_EX/116           ?80       #7                   ?1                  	;0
		7   185  CONCAT/8                  #8=       6:'&page='           16?1                	;0
		8   185  SEND_VAL_EX/116           ?96       #8                   ?2                  	;0
		9   185  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		10  185  ASSIGN/38                 ?5        16?3                 $9                  	;0
		11  186  FETCH_DIM_R/81            $11=      16?3                 7:'results'         	;0
		12  186  FE_RESET_R/77             $12=      $11                  ?20                 	;0
		13  186  FE_FETCH_R/78             ?0        $12                  16?4                	;20	>>20	<<19
		14  187  NEW/68                    $14=      8:'Movie'            ?96                 	;1
		15  187  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		16  187  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		17  187  ASSIGN_DIM/147            ?8        16?2                 ?2                  	;0
		18  187  OP_DATA/137               ?0        $14                  ?0                  	;0
		19  188  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		20  188  FE_FREE/127               ?0        $12                  ?0                  	;0	<<12
		21  191  RETURN/62                 ?0        16?2                 ?0                  	;0
		22  192  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	public function getLatestTVShow()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   195  NEW/68                    $0=       0:'TVShow'           ?192                	;1
		1   195  INIT_METHOD_CALL/112      ?0        ?4294967040          2:'_call'           	;1
		2   195  SEND_VAL_EX/116           ?80       4:'tv/latest'        ?1                  	;0
		3   195  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		4   195  SEND_VAR_NO_REF_EX/50     ?80       $1                   ?1                  	;0
		5   195  DO_FCALL/60               ?2        ?8                   ?0                  	;0
		6   195  RETURN/62                 ?0        $0                   ?0                  	;0
		7   196  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	public function getOnTheAirTVShows($b669f99ffc6c6dd1)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   197  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   199  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   200  INIT_METHOD_CALL/112      ?0        ?5126                2:'_call'           	;2
		3   200  SEND_VAL_EX/116           ?80       4:'tv/on_the_air'    ?1                  	;0
		4   200  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   200  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   200  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   200  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   201  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   201  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  201  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  202  NEW/68                    $11=      7:'TVShow'           ?96                 	;1
		12  202  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  202  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  202  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  202  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  203  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  203  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  206  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  207  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function getSimilarSeries($B361603840197dca, $b669f99ffc6c6dd1)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   208  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   208  RECV_INIT/64              16?1=     ?2                   0:1                 	;0
		2   210  INIT_METHOD_CALL/112      ?0        ?4607662             1:'_call'           	;2
		3   210  CONCAT/8                  #3=       3:'tv/'              16?0                	;0
		4   210  CONCAT/8                  #4=       #3                   4:'/similar'        	;0
		5   210  SEND_VAL_EX/116           ?80       #4                   ?1                  	;0
		6   210  CONCAT/8                  #5=       5:'&page='           16?1                	;0
		7   210  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		8   210  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		9   210  ASSIGN/38                 ?4        16?2                 $6                  	;0
		10  211  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		11  211  RETURN/62                 ?0        $8                   ?0                  	;0
		12  212  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	public function getAiringTodayTVShows($b669f99ffc6c6dd1, $Bed6a5289a45d849)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   213  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   213  RECV_INIT/64              16?1=     ?2                   1:'Europe/Madrid'   	;0
		2   215  ASSIGN/38                 ?0        16?2                 2:array (
)         	;0
		3   216  INIT_METHOD_CALL/112      ?0        ?1681241744          3:'_call'           	;2
		4   216  SEND_VAL_EX/116           ?80       5:'tv/airing_today'  ?1                  	;0
		5   216  CONCAT/8                  #6=       6:'&page='           16?0                	;0
		6   216  SEND_VAL_EX/116           ?96       #6                   ?2                  	;0
		7   216  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		8   216  ASSIGN/38                 ?3        16?3                 $7                  	;0
		9   217  FETCH_DIM_R/81            $9=       16?3                 7:'results'         	;0
		10  217  FE_RESET_R/77             $10=      $9                   ?18                 	;0
		11  217  FE_FETCH_R/78             ?0        $10                  16?4                	;18	>>18	<<17
		12  218  NEW/68                    $12=      8:'TVShow'           ?96                 	;1
		13  218  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		14  218  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		15  218  ASSIGN_DIM/147            ?6        16?2                 ?2                  	;0
		16  218  OP_DATA/137               ?0        $12                  ?0                  	;0
		17  219  JMP/42                    ?0        ?11                  ?0                  	;0	>>11
		18  219  FE_FREE/127               ?0        $10                  ?0                  	;0	<<10
		19  222  RETURN/62                 ?0        16?2                 ?0                  	;0
		20  223  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	public function getTopRatedTVShows($b669f99ffc6c6dd1)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   224  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   226  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   227  INIT_METHOD_CALL/112      ?0        ?4607662             2:'_call'           	;2
		3   227  SEND_VAL_EX/116           ?80       4:'tv/top_rated'     ?1                  	;0
		4   227  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   227  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   227  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   227  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   228  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   228  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  228  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  229  NEW/68                    $11=      7:'TVShow'           ?96                 	;1
		12  229  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  229  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  229  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  229  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  230  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  230  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  233  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  234  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function getPopularTVShows($b669f99ffc6c6dd1)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   235  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   237  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   238  INIT_METHOD_CALL/112      ?0        ?4607662             2:'_call'           	;2
		3   238  SEND_VAL_EX/116           ?80       4:'tv/popular'       ?1                  	;0
		4   238  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   238  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   238  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   238  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   239  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   239  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  239  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  240  NEW/68                    $11=      7:'TVShow'           ?96                 	;1
		12  240  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  240  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  240  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  240  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  241  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  241  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  244  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  245  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function getLatestPerson()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   248  NEW/68                    $0=       0:'Person'           ?192                	;1
		1   248  INIT_METHOD_CALL/112      ?0        ?4294967040          2:'_call'           	;1
		2   248  SEND_VAL_EX/116           ?80       4:'person/latest'    ?1                  	;0
		3   248  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		4   248  SEND_VAR_NO_REF_EX/50     ?80       $1                   ?1                  	;0
		5   248  DO_FCALL/60               ?2        ?8                   ?0                  	;0
		6   248  RETURN/62                 ?0        $0                   ?0                  	;0
		7   249  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	public function getPopularPersons($b669f99ffc6c6dd1)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   250  RECV_INIT/64              16?0=     ?1                   0:1                 	;0
		1   252  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2   253  INIT_METHOD_CALL/112      ?0        ?5126                2:'_call'           	;2
		3   253  SEND_VAL_EX/116           ?80       4:'person/popular'   ?1                  	;0
		4   253  CONCAT/8                  #5=       5:'&page='           16?0                	;0
		5   253  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		6   253  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		7   253  ASSIGN/38                 ?3        16?2                 $6                  	;0
		8   254  FETCH_DIM_R/81            $8=       16?2                 6:'results'         	;0
		9   254  FE_RESET_R/77             $9=       $8                   ?17                 	;0
		10  254  FE_FETCH_R/78             ?0        $9                   16?3                	;17	>>17	<<16
		11  255  NEW/68                    $11=      7:'Person'           ?96                 	;1
		12  255  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13  255  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		14  255  ASSIGN_DIM/147            ?6        16?1                 ?2                  	;0
		15  255  OP_DATA/137               ?0        $11                  ?0                  	;0
		16  256  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		17  256  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		18  259  RETURN/62                 ?0        16?1                 ?0                  	;0
		19  260  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	private function _call($e33d7b9c6305435e, $c8bf29b8210cadd5)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   261  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   261  RECV_INIT/64              16?1=     ?2                   0:''                	;0
		2   263  GOTO/253                  ?0        ?42                  ?1                  	;0
		3   265  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'curl_setopt'     	;3
		4   265  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		5   265  FETCH_CONSTANT/99         #5=       ?0                   4:'CURLOPT_URL'     	;16
		6   265  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		7   265  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
		8   265  DO_FCALL_BY_NAME/131      ?1        ?0                   ?0                  	;0
		9   266  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'curl_setopt'     	;3
		10  266  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		11  266  FETCH_CONSTANT/99         #7=       ?0                   9:'CURLOPT_HEADER'  	;16
		12  266  SEND_VAL_EX/116           ?96       #7                   ?2                  	;0
		13  266  SEND_VAL_EX/116           ?112      12:0                 ?3                  	;0
		14  266  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
		15  267  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'curl_setopt'    	;3
		16  267  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		17  267  FETCH_CONSTANT/99         #9=       ?0                   15:'CURLOPT_RETURNTRANSFER'	;16
		18  267  SEND_VAL_EX/116           ?96       #9                   ?2                  	;0
		19  267  SEND_VAL_EX/116           ?112      18:1                 ?3                  	;0
		20  267  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
		21  268  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'curl_setopt'    	;3
		22  268  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		23  268  FETCH_CONSTANT/99         #11=      ?0                   21:'CURLOPT_FAILONERROR'	;16
		24  268  SEND_VAL_EX/116           ?96       #11                  ?2                  	;0
		25  268  SEND_VAL_EX/116           ?112      24:1                 ?3                  	;0
		26  268  DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
		27  269  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'curl_exec'      	;1
		28  269  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		29  269  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		30  269  ASSIGN/38                 ?9        16?4                 $13                 	;0
		31  270  GOTO/253                  ?0        ?32                  ?27                 	;0
		32  272  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'curl_close'     	;1
		33  272  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		34  272  DO_FCALL_BY_NAME/131      ?10       ?0                   ?0                  	;0
		35  273  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'json_decode'    	;2
		36  273  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		37  273  SEND_VAL_EX/116           ?96       32:true              ?2                  	;0
		38  273  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		39  273  CAST/21                   #17=      $16                  ?0                  	;7
		40  273  RETURN/62                 ?0        #17                  ?0                  	;0
		41  274  GOTO/253                  ?0        ?74                  ?33                 	;0
		42  276  CONCAT/8                  #18=      34:'http://api.themoviedb.org/3/' 16?0                	;0
		43  276  CONCAT/8                  #19=      #18                  35:'?api_key='      	;0
		44  276  INIT_METHOD_CALL/112      ?0        ?1661273216          36:'getApikey'      	;0
		45  276  DO_FCALL/60               $20=      ?0                   ?0                  	;0
		46  276  CONCAT/8                  #21=      #19                  $20                 	;0
		47  276  CONCAT/8                  #22=      #21                  38:'&language='     	;0
		48  276  INIT_METHOD_CALL/112      ?0        ?1661273280          39:'getLang'        	;0
		49  276  DO_FCALL/60               $23=      ?0                   ?0                  	;0
		50  276  CONCAT/8                  #24=      #22                  $23                 	;0
		51  276  CONCAT/8                  #25=      #24                  41:'&append_to_response='	;0
		52  276  INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'implode'        	;2
		53  276  SEND_VAL_EX/116           ?80       44:','               ?1                  	;0
		54  276  CAST/21                   #26=      16?1                 ?0                  	;7
		55  276  SEND_VAL_EX/116           ?96       #26                  ?2                  	;0
		56  276  DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
		57  276  CONCAT/8                  #28=      #25                  $27                 	;0
		58  276  CONCAT/8                  #29=      #28                  45:'&include_adult='	;0
		59  276  INIT_METHOD_CALL/112      ?0        ?1661621760          46:'getAdult'       	;0
		60  276  DO_FCALL/60               $30=      ?0                   ?0                  	;0
		61  276  CONCAT/8                  #31=      #29                  $30                 	;0
		62  276  ASSIGN/38                 ?27       16?3                 #31                 	;0
		63  277  FETCH_OBJ_R/82            $33=      ?4378512             48:'_debug'         	;0
		64  277  BOOL_NOT/13               #34=      $33                  ?0                  	;0
		65  277  JMPZ/43                   ?0        #34                  ?67                 	;0	>>67
		66  278  GOTO/253                  ?0        ?70                  ?49                 	;0
		67  280  CONCAT/8                  #35=      50:'<pre><a href="'  16?3                	;0	<<65
		68  280  CONCAT/8                  #36=      #35                  51:'">check request</a></pre>'	;0
		69  280  ECHO/40                   ?0        #36                  ?0                  	;0
		70  282  INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'curl_init'      	;0
		71  282  DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
		72  282  ASSIGN/38                 ?33       16?2                 $37                 	;0
		73  283  GOTO/253                  ?0        ?3                   ?54                 	;0
		74  285  NOP/0                     ?0        55:NULL              ?0                  	;4294967295
		*/
	}

	public function getMovie($f54d717f4b11d11a, $c8bf29b8210cadd5)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   286  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   286  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   288  ISSET_ISEMPTY_CV/197      #2=       16?1                 ?0                  	;33554432
		3   288  JMPZ/43                   ?0        #2                   ?6                  	;0	>>6
		4   288  QM_ASSIGN/22              #3=       16?1                 ?0                  	;0
		5   288  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
		6   288  INIT_METHOD_CALL/112      ?0        ?1683261183          1:'getConfig'       	;0	<<3
		7   288  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		8   288  FETCH_DIM_R/81            $5=       $4                   3:'appender'        	;0
		9   288  FETCH_DIM_R/81            $6=       $5                   4:'movie'           	;0
		10  288  FETCH_DIM_R/81            $7=       $6                   5:'default'         	;0
		11  288  QM_ASSIGN/22              #3=       $7                   ?0                  	;0
		12  288  ASSIGN/38                 ?6        16?1                 #3                  	;0	<<5
		13  289  NEW/68                    $9=       6:'Movie'            ?256                	;1
		14  289  INIT_METHOD_CALL/112      ?0        ?0                   8:'_call'           	;2
		15  289  CONCAT/8                  #10=      10:'movie/'          16?0                	;0
		16  289  SEND_VAL/65               ?80       #10                  ?1                  	;0
		17  289  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		18  289  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		19  289  SEND_VAR_NO_REF_EX/50     ?80       $11                  ?1                  	;0
		20  289  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		21  289  RETURN/62                 ?0        $9                   ?0                  	;0
		22  290  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	public function getTVShow($cd6041978f7e8712, $c8bf29b8210cadd5)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   291  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   291  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   293  ISSET_ISEMPTY_CV/197      #2=       16?1                 ?0                  	;33554432
		3   293  JMPZ/43                   ?0        #2                   ?6                  	;0	>>6
		4   293  QM_ASSIGN/22              #3=       16?1                 ?0                  	;0
		5   293  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
		6   293  INIT_METHOD_CALL/112      ?0        ?1683261183          1:'getConfig'       	;0	<<3
		7   293  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		8   293  FETCH_DIM_R/81            $5=       $4                   3:'appender'        	;0
		9   293  FETCH_DIM_R/81            $6=       $5                   4:'tvshow'          	;0
		10  293  FETCH_DIM_R/81            $7=       $6                   5:'default'         	;0
		11  293  QM_ASSIGN/22              #3=       $7                   ?0                  	;0
		12  293  ASSIGN/38                 ?6        16?1                 #3                  	;0	<<5
		13  294  NEW/68                    $9=       6:'TVShow'           ?256                	;1
		14  294  INIT_METHOD_CALL/112      ?0        ?0                   8:'_call'           	;2
		15  294  CONCAT/8                  #10=      10:'tv/'             16?0                	;0
		16  294  SEND_VAL/65               ?80       #10                  ?1                  	;0
		17  294  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		18  294  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		19  294  SEND_VAR_NO_REF_EX/50     ?80       $11                  ?1                  	;0
		20  294  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		21  294  RETURN/62                 ?0        $9                   ?0                  	;0
		22  295  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	public function getSeason($cd6041978f7e8712, $c946fae44ff7a585, $c8bf29b8210cadd5)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   296  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   296  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   296  RECV_INIT/64              16?2=     ?3                   0:NULL              	;0
		3   298  ISSET_ISEMPTY_CV/197      #3=       16?2                 ?0                  	;33554432
		4   298  JMPZ/43                   ?0        #3                   ?7                  	;0	>>7
		5   298  QM_ASSIGN/22              #4=       16?2                 ?0                  	;0
		6   298  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		7   298  INIT_METHOD_CALL/112      ?0        ?1683261183          1:'getConfig'       	;0	<<4
		8   298  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		9   298  FETCH_DIM_R/81            $6=       $5                   3:'appender'        	;0
		10  298  FETCH_DIM_R/81            $7=       $6                   4:'season'          	;0
		11  298  FETCH_DIM_R/81            $8=       $7                   5:'default'         	;0
		12  298  QM_ASSIGN/22              #4=       $8                   ?0                  	;0
		13  298  ASSIGN/38                 ?6        16?2                 #4                  	;0	<<6
		14  299  NEW/68                    $10=      6:'Season'           ?352                	;2
		15  299  INIT_METHOD_CALL/112      ?0        ?0                   8:'_call'           	;2
		16  299  CONCAT/8                  #11=      10:'tv/'             16?0                	;0
		17  299  CONCAT/8                  #12=      #11                  11:'/season/'       	;0
		18  299  CONCAT/8                  #13=      #12                  16?1                	;0
		19  299  SEND_VAL/65               ?80       #13                  ?1                  	;0
		20  299  SEND_VAR/117              ?96       16?2                 ?2                  	;0
		21  299  DO_FCALL/60               $14=      ?0                   ?0                  	;0
		22  299  SEND_VAR_NO_REF_EX/50     ?80       $14                  ?1                  	;0
		23  299  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		24  299  DO_FCALL/60               ?12       ?8                   ?0                  	;0
		25  299  RETURN/62                 ?0        $10                  ?0                  	;0
		26  300  NOP/0                     ?0        12:NULL              ?0                  	;4294967295
		*/
	}

	public function getEpisode($cd6041978f7e8712, $c946fae44ff7a585, $ccbec99512a46f53, $c8bf29b8210cadd5)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   301  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   301  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   301  RECV/63                   16?2=     ?3                   ?4294967294         	;0
		3   301  RECV_INIT/64              16?3=     ?4                   0:NULL              	;0
		4   303  ISSET_ISEMPTY_CV/197      #4=       16?3                 ?0                  	;33554432
		5   303  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		6   303  QM_ASSIGN/22              #5=       16?3                 ?0                  	;0
		7   303  JMP/42                    ?0        ?14                  ?0                  	;0	>>14
		8   303  INIT_METHOD_CALL/112      ?0        ?1683261183          1:'getConfig'       	;0	<<5
		9   303  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		10  303  FETCH_DIM_R/81            $7=       $6                   3:'appender'        	;0
		11  303  FETCH_DIM_R/81            $8=       $7                   4:'episode'         	;0
		12  303  FETCH_DIM_R/81            $9=       $8                   5:'default'         	;0
		13  303  QM_ASSIGN/22              #5=       $9                   ?0                  	;0
		14  303  ASSIGN/38                 ?6        16?3                 #5                  	;0	<<7
		15  304  NEW/68                    $11=      6:'Episode'          ?416                	;2
		16  304  INIT_METHOD_CALL/112      ?0        ?1665246144          8:'_call'           	;2
		17  304  CONCAT/8                  #12=      10:'tv/'             16?0                	;0
		18  304  CONCAT/8                  #13=      #12                  11:'/season/'       	;0
		19  304  CONCAT/8                  #14=      #13                  16?1                	;0
		20  304  CONCAT/8                  #15=      #14                  12:'/episode/'      	;0
		21  304  CONCAT/8                  #16=      #15                  16?2                	;0
		22  304  SEND_VAL/65               ?80       #16                  ?1                  	;0
		23  304  SEND_VAR/117              ?96       16?3                 ?2                  	;0
		24  304  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		25  304  SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
		26  304  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		27  304  DO_FCALL/60               ?14       ?8                   ?0                  	;0
		28  304  RETURN/62                 ?0        $11                  ?0                  	;0
		29  305  NOP/0                     ?0        13:NULL              ?0                  	;4294967295
		*/
	}

	public function getPerson($Bb6efcdf5168c97c, $c8bf29b8210cadd5)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   306  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   306  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   308  ISSET_ISEMPTY_CV/197      #2=       16?1                 ?0                  	;33554432
		3   308  JMPZ/43                   ?0        #2                   ?6                  	;0	>>6
		4   308  QM_ASSIGN/22              #3=       16?1                 ?0                  	;0
		5   308  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
		6   308  INIT_METHOD_CALL/112      ?0        ?1683261183          1:'getConfig'       	;0	<<3
		7   308  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		8   308  FETCH_DIM_R/81            $5=       $4                   3:'appender'        	;0
		9   308  FETCH_DIM_R/81            $6=       $5                   4:'person'          	;0
		10  308  FETCH_DIM_R/81            $7=       $6                   5:'default'         	;0
		11  308  QM_ASSIGN/22              #3=       $7                   ?0                  	;0
		12  308  ASSIGN/38                 ?6        16?1                 #3                  	;0	<<5
		13  309  NEW/68                    $9=       6:'Person'           ?256                	;1
		14  309  INIT_METHOD_CALL/112      ?0        ?1665515456          8:'_call'           	;2
		15  309  CONCAT/8                  #10=      10:'person/'         16?0                	;0
		16  309  SEND_VAL/65               ?80       #10                  ?1                  	;0
		17  309  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		18  309  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		19  309  SEND_VAR_NO_REF_EX/50     ?80       $11                  ?1                  	;0
		20  309  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		21  309  RETURN/62                 ?0        $9                   ?0                  	;0
		22  310  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	public function getCollection($B3297c2fc2a77fbc, $c8bf29b8210cadd5)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   311  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   311  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   313  ISSET_ISEMPTY_CV/197      #2=       16?1                 ?0                  	;33554432
		3   313  JMPZ/43                   ?0        #2                   ?6                  	;0	>>6
		4   313  QM_ASSIGN/22              #3=       16?1                 ?0                  	;0
		5   313  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
		6   313  INIT_METHOD_CALL/112      ?0        ?1683261183          1:'getConfig'       	;0	<<3
		7   313  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		8   313  FETCH_DIM_R/81            $5=       $4                   3:'appender'        	;0
		9   313  FETCH_DIM_R/81            $6=       $5                   4:'collection'      	;0
		10  313  FETCH_DIM_R/81            $7=       $6                   5:'default'         	;0
		11  313  QM_ASSIGN/22              #3=       $7                   ?0                  	;0
		12  313  ASSIGN/38                 ?6        16?1                 #3                  	;0	<<5
		13  314  NEW/68                    $9=       6:'Collection'       ?256                	;1
		14  314  INIT_METHOD_CALL/112      ?0        ?1665515456          8:'_call'           	;2
		15  314  CONCAT/8                  #10=      10:'collection/'     16?0                	;0
		16  314  SEND_VAL/65               ?80       #10                  ?1                  	;0
		17  314  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		18  314  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		19  314  SEND_VAR_NO_REF_EX/50     ?80       $11                  ?1                  	;0
		20  314  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		21  314  RETURN/62                 ?0        $9                   ?0                  	;0
		22  315  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	public function getCompany($e27d01e126afa317, $c8bf29b8210cadd5)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   316  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   316  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   318  ISSET_ISEMPTY_CV/197      #2=       16?1                 ?0                  	;33554432
		3   318  JMPZ/43                   ?0        #2                   ?6                  	;0	>>6
		4   318  QM_ASSIGN/22              #3=       16?1                 ?0                  	;0
		5   318  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
		6   318  INIT_METHOD_CALL/112      ?0        ?1683261183          1:'getConfig'       	;0	<<3
		7   318  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		8   318  FETCH_DIM_R/81            $5=       $4                   3:'appender'        	;0
		9   318  FETCH_DIM_R/81            $6=       $5                   4:'company'         	;0
		10  318  FETCH_DIM_R/81            $7=       $6                   5:'default'         	;0
		11  318  QM_ASSIGN/22              #3=       $7                   ?0                  	;0
		12  318  ASSIGN/38                 ?6        16?1                 #3                  	;0	<<5
		13  319  NEW/68                    $9=       6:'Company'          ?256                	;1
		14  319  INIT_METHOD_CALL/112      ?0        ?1665515456          8:'_call'           	;2
		15  319  CONCAT/8                  #10=      10:'company/'        16?0                	;0
		16  319  SEND_VAL/65               ?80       #10                  ?1                  	;0
		17  319  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		18  319  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		19  319  SEND_VAR_NO_REF_EX/50     ?80       $11                  ?1                  	;0
		20  319  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		21  319  RETURN/62                 ?0        $9                   ?0                  	;0
		22  320  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	public function searchMovie($d8ee6f12b04ddf57)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   321  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   323  ASSIGN/38                 ?0        16?1                 0:array (
)         	;0
		2   324  INIT_METHOD_CALL/112      ?0        ?5126                1:'_call'           	;2
		3   324  SEND_VAL/65               ?80       3:'search/movie'     ?1                  	;0
		4   324  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'urlencode'       	;1
		5   324  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6   324  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7   324  CONCAT/8                  #6=       6:'&query='          $5                  	;0
		8   324  SEND_VAL/65               ?96       #6                   ?2                  	;0
		9   324  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		10  324  ASSIGN/38                 ?4        16?2                 $7                  	;0
		11  325  FETCH_DIM_R/81            $9=       16?2                 7:'results'         	;0
		12  325  FE_RESET_R/77             $10=      $9                   ?20                 	;0
		13  325  FE_FETCH_R/78             ?0        $10                  16?3                	;20	>>20	<<19
		14  326  NEW/68                    $12=      8:'Movie'            ?96                 	;1
		15  326  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		16  326  DO_FCALL/60               ?9        ?8                   ?0                  	;0
		17  326  ASSIGN_DIM/147            ?7        16?1                 ?2                  	;0
		18  326  OP_DATA/137               ?0        $12                  ?0                  	;0
		19  327  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		20  327  FE_FREE/127               ?0        $10                  ?0                  	;0	<<12
		21  330  RETURN/62                 ?0        16?1                 ?0                  	;0
		22  331  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	public function searchTVShow($Adcae15910703b49)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   332  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   334  ASSIGN/38                 ?0        16?1                 0:array (
)         	;0
		2   335  INIT_METHOD_CALL/112      ?0        ?4607662             1:'_call'           	;2
		3   335  SEND_VAL/65               ?80       3:'search/tv'        ?1                  	;0
		4   335  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'urlencode'       	;1
		5   335  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6   335  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7   335  CONCAT/8                  #6=       6:'&query='          $5                  	;0
		8   335  SEND_VAL/65               ?96       #6                   ?2                  	;0
		9   335  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		10  335  ASSIGN/38                 ?4        16?2                 $7                  	;0
		11  336  FETCH_DIM_R/81            $9=       16?2                 7:'results'         	;0
		12  336  FE_RESET_R/77             $10=      $9                   ?20                 	;0
		13  336  FE_FETCH_R/78             ?0        $10                  16?3                	;20	>>20	<<19
		14  337  NEW/68                    $12=      8:'TVShow'           ?96                 	;1
		15  337  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		16  337  DO_FCALL/60               ?9        ?8                   ?0                  	;0
		17  337  ASSIGN_DIM/147            ?7        16?1                 ?2                  	;0
		18  337  OP_DATA/137               ?0        $12                  ?0                  	;0
		19  338  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		20  338  FE_FREE/127               ?0        $10                  ?0                  	;0	<<12
		21  341  RETURN/62                 ?0        16?1                 ?0                  	;0
		22  342  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	public function searchPerson($dbf7a631f276f236)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   343  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   345  ASSIGN/38                 ?0        16?1                 0:array (
)         	;0
		2   346  INIT_METHOD_CALL/112      ?0        ?4607662             1:'_call'           	;2
		3   346  SEND_VAL/65               ?80       3:'search/person'    ?1                  	;0
		4   346  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'urlencode'       	;1
		5   346  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6   346  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7   346  CONCAT/8                  #6=       6:'&query='          $5                  	;0
		8   346  SEND_VAL/65               ?96       #6                   ?2                  	;0
		9   346  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		10  346  ASSIGN/38                 ?4        16?2                 $7                  	;0
		11  347  FETCH_DIM_R/81            $9=       16?2                 7:'results'         	;0
		12  347  FE_RESET_R/77             $10=      $9                   ?20                 	;0
		13  347  FE_FETCH_R/78             ?0        $10                  16?3                	;20	>>20	<<19
		14  348  NEW/68                    $12=      8:'Person'           ?96                 	;1
		15  348  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		16  348  DO_FCALL/60               ?9        ?8                   ?0                  	;0
		17  348  ASSIGN_DIM/147            ?7        16?1                 ?2                  	;0
		18  348  OP_DATA/137               ?0        $12                  ?0                  	;0
		19  349  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		20  349  FE_FREE/127               ?0        $10                  ?0                  	;0	<<12
		21  352  RETURN/62                 ?0        16?1                 ?0                  	;0
		22  353  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	public function searchCollection($bb2f2cbe38f65000)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   354  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   356  ASSIGN/38                 ?0        16?1                 0:array (
)         	;0
		2   357  INIT_METHOD_CALL/112      ?0        ?4607662             1:'_call'           	;2
		3   357  SEND_VAL/65               ?80       3:'search/collection' ?1                  	;0
		4   357  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'urlencode'       	;1
		5   357  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6   357  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7   357  CONCAT/8                  #6=       6:'&query='          $5                  	;0
		8   357  SEND_VAL/65               ?96       #6                   ?2                  	;0
		9   357  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		10  357  ASSIGN/38                 ?4        16?2                 $7                  	;0
		11  358  FETCH_DIM_R/81            $9=       16?2                 7:'results'         	;0
		12  358  FE_RESET_R/77             $10=      $9                   ?20                 	;0
		13  358  FE_FETCH_R/78             ?0        $10                  16?3                	;20	>>20	<<19
		14  359  NEW/68                    $12=      8:'Collection'       ?96                 	;1
		15  359  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		16  359  DO_FCALL/60               ?9        ?8                   ?0                  	;0
		17  359  ASSIGN_DIM/147            ?7        16?1                 ?2                  	;0
		18  359  OP_DATA/137               ?0        $12                  ?0                  	;0
		19  360  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		20  360  FE_FREE/127               ?0        $10                  ?0                  	;0	<<12
		21  363  RETURN/62                 ?0        16?1                 ?0                  	;0
		22  364  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	public function searchCompany($e091403bfca7d2f3)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   365  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   367  ASSIGN/38                 ?0        16?1                 0:array (
)         	;0
		2   368  INIT_METHOD_CALL/112      ?0        ?4607662             1:'_call'           	;2
		3   368  SEND_VAL/65               ?80       3:'search/company'   ?1                  	;0
		4   368  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'urlencode'       	;1
		5   368  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6   368  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7   368  CONCAT/8                  #6=       6:'&query='          $5                  	;0
		8   368  SEND_VAL/65               ?96       #6                   ?2                  	;0
		9   368  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		10  368  ASSIGN/38                 ?4        16?2                 $7                  	;0
		11  369  FETCH_DIM_R/81            $9=       16?2                 7:'results'         	;0
		12  369  FE_RESET_R/77             $10=      $9                   ?20                 	;0
		13  369  FE_FETCH_R/78             ?0        $10                  16?3                	;20	>>20	<<19
		14  370  NEW/68                    $12=      8:'Company'          ?96                 	;1
		15  370  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		16  370  DO_FCALL/60               ?9        ?8                   ?0                  	;0
		17  370  ASSIGN_DIM/147            ?7        16?1                 ?2                  	;0
		18  370  OP_DATA/137               ?0        $12                  ?0                  	;0
		19  371  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		20  371  FE_FREE/127               ?0        $10                  ?0                  	;0	<<12
		21  374  RETURN/62                 ?0        16?1                 ?0                  	;0
		22  375  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	public function find($B361603840197dca, $c6deee8a7ad758cc)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   376  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   376  RECV_INIT/64              16?1=     ?2                   0:'imdb_id'         	;0
		2   378  GOTO/253                  ?0        ?26                  ?1                  	;0
		3   381  FETCH_DIM_R/81            $5=       16?2                 2:'tv_results'      	;0
		4   381  FE_RESET_R/77             $6=       $5                   ?13                 	;0
		5   381  FE_FETCH_R/78             ?0        $6                   16?3                	;13	>>13	<<12
		6   382  NEW/68                    $9=       4:'TVShow'           ?96                 	;1
		7   382  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		8   382  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		9   382  FETCH_DIM_W/84            $7=       16?4                 3:'tvshows'         	;0
		10  382  ASSIGN_DIM/147            ?3        $7                   ?0                  	;0
		11  382  OP_DATA/137               ?0        $9                   ?0                  	;0
		12  383  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
		13  383  FE_FREE/127               ?0        $6                   ?0                  	;0	<<4
		14  386  FETCH_DIM_R/81            $11=      16?2                 6:'tv_season_results'	;0
		15  386  FE_RESET_R/77             $12=      $11                  ?24                 	;0
		16  386  FE_FETCH_R/78             ?0        $12                  16?3                	;24	>>24	<<23
		17  387  NEW/68                    $15=      8:'Season'           ?96                 	;1
		18  387  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		19  387  DO_FCALL/60               ?11       ?8                   ?0                  	;0
		20  387  FETCH_DIM_W/84            $13=      16?4                 7:'seasons'         	;0
		21  387  ASSIGN_DIM/147            ?9        $13                  ?0                  	;0
		22  387  OP_DATA/137               ?0        $15                  ?0                  	;0
		23  388  JMP/42                    ?0        ?16                  ?0                  	;0	>>16
		24  388  FE_FREE/127               ?0        $12                  ?0                  	;0	<<15
		25  391  GOTO/253                  ?0        ?60                  ?10                 	;0
		26  393  ASSIGN/38                 ?12       16?4                 11:array (
)        	;0
		27  394  INIT_METHOD_CALL/112      ?0        ?4607789             12:'_call'          	;2
		28  394  CONCAT/8                  #18=      14:'find/'           16?0                	;0
		29  394  SEND_VAL/65               ?80       #18                  ?1                  	;0
		30  394  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'urlencode'      	;1
		31  394  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		32  394  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		33  394  CONCAT/8                  #20=      17:'&external_source=' $19                 	;0
		34  394  SEND_VAL/65               ?96       #20                  ?2                  	;0
		35  394  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		36  394  ASSIGN/38                 ?17       16?2                 $21                 	;0
		37  395  FETCH_DIM_R/81            $23=      16?2                 18:'movie_results'  	;0
		38  395  FE_RESET_R/77             $24=      $23                  ?47                 	;0
		39  395  FE_FETCH_R/78             ?0        $24                  16?3                	;47	>>47	<<46
		40  396  NEW/68                    $27=      20:'Movie'           ?96                 	;1
		41  396  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		42  396  DO_FCALL/60               ?23       ?8                   ?0                  	;0
		43  396  FETCH_DIM_W/84            $25=      16?4                 19:'movies'         	;0
		44  396  ASSIGN_DIM/147            ?21       $25                  ?2                  	;0
		45  396  OP_DATA/137               ?0        $27                  ?0                  	;0
		46  397  JMP/42                    ?0        ?39                  ?0                  	;0	>>39
		47  397  FE_FREE/127               ?0        $24                  ?0                  	;0	<<38
		48  400  FETCH_DIM_R/81            $29=      16?2                 22:'person_results' 	;0
		49  400  FE_RESET_R/77             $30=      $29                  ?58                 	;0
		50  400  FE_FETCH_R/78             ?0        $30                  16?3                	;58	>>58	<<57
		51  401  NEW/68                    $33=      24:'Person'          ?96                 	;1
		52  401  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		53  401  DO_FCALL/60               ?29       ?8                   ?0                  	;0
		54  401  FETCH_DIM_W/84            $31=      16?4                 23:'persons'        	;0
		55  401  ASSIGN_DIM/147            ?27       $31                  ?0                  	;0
		56  401  OP_DATA/137               ?0        $33                  ?0                  	;0
		57  402  JMP/42                    ?0        ?50                  ?0                  	;0	>>50
		58  402  FE_FREE/127               ?0        $30                  ?0                  	;0	<<49
		59  404  GOTO/253                  ?0        ?3                   ?26                 	;0
		60  406  FETCH_DIM_R/81            $35=      16?2                 27:'tv_episode_results'	;0
		61  406  FE_RESET_R/77             $36=      $35                  ?70                 	;0
		62  406  FE_FETCH_R/78             ?0        $36                  16?3                	;70	>>70	<<69
		63  407  NEW/68                    $39=      29:'Episode'         ?96                 	;1
		64  407  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		65  407  DO_FCALL/60               ?35       ?8                   ?0                  	;0
		66  407  FETCH_DIM_W/84            $37=      16?4                 28:'episodes'       	;0
		67  407  ASSIGN_DIM/147            ?33       $37                  ?0                  	;0
		68  407  OP_DATA/137               ?0        $39                  ?0                  	;0
		69  408  JMP/42                    ?0        ?62                  ?0                  	;0	>>62
		70  408  FE_FREE/127               ?0        $36                  ?0                  	;0	<<61
		71  411  RETURN/62                 ?0        16?4                 ?0                  	;0
		72  412  GOTO/253                  ?0        ?73                  ?31                 	;0
		73  414  NOP/0                     ?0        32:NULL              ?0                  	;4294967295
		*/
	}

	public function getTimezones()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   417  INIT_METHOD_CALL/112      ?0        ?1665919136          0:'_call'           	;1
		1   417  SEND_VAL/65               ?80       2:'timezones/list'   ?1                  	;0
		2   417  DO_FCALL/60               $0=       ?0                   ?0                  	;0
		3   417  RETURN/62                 ?0        $0                   ?0                  	;0
		4   418  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getJobs()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   421  INIT_METHOD_CALL/112      ?0        ?1665919136          0:'_call'           	;1
		1   421  SEND_VAL/65               ?80       2:'job/list'         ?1                  	;0
		2   421  DO_FCALL/60               $0=       ?0                   ?0                  	;0
		3   421  RETURN/62                 ?0        $0                   ?0                  	;0
		4   422  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getMovieGenres()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   425  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1   426  INIT_METHOD_CALL/112      ?0        ?4442274             1:'_call'           	;1
		2   426  SEND_VAL/65               ?80       3:'genre/movie/list' ?1                  	;0
		3   426  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		4   426  ASSIGN/38                 ?2        16?1                 $4                  	;0
		5   427  FETCH_DIM_R/81            $6=       16?1                 4:'genres'          	;0
		6   427  FE_RESET_R/77             $7=       $6                   ?14                 	;0
		7   427  FE_FETCH_R/78             ?0        $7                   16?2                	;14	>>14	<<13
		8   428  NEW/68                    $9=       5:'Genre'            ?96                 	;1
		9   428  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		10  428  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		11  428  ASSIGN_DIM/147            ?5        16?0                 ?1                  	;0
		12  428  OP_DATA/137               ?0        $9                   ?0                  	;0
		13  429  JMP/42                    ?0        ?7                   ?0                  	;0	>>7
		14  429  FE_FREE/127               ?0        $7                   ?0                  	;0	<<6
		15  432  RETURN/62                 ?0        16?0                 ?0                  	;0
		16  433  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	public function getTVGenres()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   436  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1   437  INIT_METHOD_CALL/112      ?0        ?4607662             1:'_call'           	;1
		2   437  SEND_VAL/65               ?80       3:'genre/tv/list'    ?1                  	;0
		3   437  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		4   437  ASSIGN/38                 ?2        16?1                 $4                  	;0
		5   438  FETCH_DIM_R/81            $6=       16?1                 4:'genres'          	;0
		6   438  FE_RESET_R/77             $7=       $6                   ?14                 	;0
		7   438  FE_FETCH_R/78             ?0        $7                   16?2                	;14	>>14	<<13
		8   439  NEW/68                    $9=       5:'Genre'            ?96                 	;1
		9   439  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		10  439  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		11  439  ASSIGN_DIM/147            ?5        16?0                 ?1                  	;0
		12  439  OP_DATA/137               ?0        $9                   ?0                  	;0
		13  440  JMP/42                    ?0        ?7                   ?0                  	;0	>>7
		14  440  FE_FREE/127               ?0        $7                   ?0                  	;0	<<6
		15  443  RETURN/62                 ?0        16?0                 ?0                  	;0
		16  444  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	public function getMoviesByGenre($D8c02646c5d1acef, $b669f99ffc6c6dd1)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   445  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   445  RECV_INIT/64              16?1=     ?2                   0:1                 	;0
		2   447  ASSIGN/38                 ?0        16?2                 1:array (
)         	;0
		3   448  INIT_METHOD_CALL/112      ?0        ?4607662             2:'_call'           	;2
		4   448  CONCAT/8                  #6=       4:'genre/'           16?0                	;0
		5   448  CONCAT/8                  #7=       #6                   5:'/movies'         	;0
		6   448  SEND_VAL/65               ?80       #7                   ?1                  	;0
		7   448  CONCAT/8                  #8=       6:'&page='           16?1                	;0
		8   448  SEND_VAL/65               ?96       #8                   ?2                  	;0
		9   448  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		10  448  ASSIGN/38                 ?5        16?3                 $9                  	;0
		11  449  FETCH_DIM_R/81            $11=      16?3                 7:'results'         	;0
		12  449  FE_RESET_R/77             $12=      $11                  ?20                 	;0
		13  449  FE_FETCH_R/78             ?0        $12                  16?4                	;20	>>20	<<19
		14  450  NEW/68                    $14=      8:'Movie'            ?96                 	;1
		15  450  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		16  450  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		17  450  ASSIGN_DIM/147            ?8        16?2                 ?2                  	;0
		18  450  OP_DATA/137               ?0        $14                  ?0                  	;0
		19  451  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		20  451  FE_FREE/127               ?0        $12                  ?0                  	;0	<<12
		21  454  RETURN/62                 ?0        16?2                 ?0                  	;0
		22  455  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?10                  ?0                  	;0	>>10
1   5    INCLUDE_OR_EVAL/73        ?0        1:'TMDb/Role.php'    ?0                  	;2
2   6    INCLUDE_OR_EVAL/73        ?1        2:'TMDb/roles/MovieRole.php' ?0                  	;2
3   7    INCLUDE_OR_EVAL/73        ?2        3:'TMDb/roles/TVShowRole.php' ?0                  	;2
4   8    INCLUDE_OR_EVAL/73        ?3        4:'TMDb/Collection.php' ?0                  	;2
5   9    INCLUDE_OR_EVAL/73        ?4        5:'TMDb/Company.php' ?0                  	;2
6   10   GOTO/253                  ?0        ?7                   ?6                  	;0
7   12   INCLUDE_OR_EVAL/73        ?5        7:'TMDb/Genre.php'   ?0                  	;2
8   13   INCLUDE_OR_EVAL/73        ?6        8:'TMDb/config/APIConfiguration.php' ?0                  	;2
9   14   GOTO/253                  ?0        ?16                  ?9                  	;0
10  16   INCLUDE_OR_EVAL/73        ?7        10:'TMDb/Movie.php'  ?0                  	;2	<<0
11  17   INCLUDE_OR_EVAL/73        ?8        11:'TMDb/TVShow.php' ?0                  	;2
12  18   INCLUDE_OR_EVAL/73        ?9        12:'TMDb/Season.php' ?0                  	;2
13  19   INCLUDE_OR_EVAL/73        ?10       13:'TMDb/Episode.php' ?0                  	;2
14  20   INCLUDE_OR_EVAL/73        ?11       14:'TMDb/Person.php' ?0                  	;2
15  21   GOTO/253                  ?0        ?1                   ?15                 	;0
16  23   NOP/0                     ?0        ?0                   ?0                  	;0
17  457  NOP/0                     ?0        16:1                 ?0                  	;4294967295
*/

?>