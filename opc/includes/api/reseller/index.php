<?php


class APIWrapper
{
	static public $db;
	static public $rKey;

	static public function filterRow($ba2d146bb5a55097, $C17543903e9aa6ae, $c733678227713664, $B05582e97914c7eb)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   179  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   179  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   179  RECV/63                   16?2=     ?3                   ?4294967294         	;0
		3   179  RECV_INIT/64              16?3=     ?4                   0:false             	;0
		4   181  GOTO/253                  ?0        ?67                  ?1                  	;0
		5   184  GOTO/253                  ?0        ?80                  ?2                  	;0
		6   186  ASSIGN_DIM/147            ?0        16?0                 3:'data'            	;0
		7   186  OP_DATA/137               ?0        16?4                 ?0                  	;0
		8   187  RETURN/62                 ?0        16?0                 ?0                  	;0
		9   188  GOTO/253                  ?0        ?5                   ?4                  	;0
		10  190  RETURN/62                 ?0        16?4                 ?0                  	;0
		11  191  GOTO/253                  ?0        ?5                   ?5                  	;0
		12  193  GOTO/253                  ?0        ?14                  ?6                  	;0
		13  195  ASSIGN/38                 ?1        16?5                 16?0                	;0
		14  197  ASSIGN/38                 ?2        16?4                 7:array (
)         	;0
		15  198  GOTO/253                  ?0        ?16                  ?8                  	;0
		16  200  BOOL_NOT/13               #10=      16?5                 ?0                  	;0
		17  200  JMPZ/43                   ?0        #10                  ?19                 	;0	>>19
		18  201  GOTO/253                  ?0        ?64                  ?9                  	;0
		19  203  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'array_keys'     	;1	<<17
		20  203  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		21  203  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		22  203  FE_RESET_R/77             $12=      $11                  ?63                 	;0
		23  203  FE_FETCH_R/78             ?0        $12                  16?6                	;63	>>63	<<62
		24  204  NOP/0                     ?0        ?0                   ?0                  	;1
		25  204  GOTO/253                  ?0        ?43                  ?12                 	;0
		26  209  NOP/0                     ?0        ?0                   ?0                  	;1
		27  209  GOTO/253                  ?0        ?62                  ?13                 	;0
		28  212  NOP/0                     ?0        ?0                   ?0                  	;1
		29  212  GOTO/253                  ?0        ?26                  ?14                 	;0
		30  214  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'in_array'       	;2
		31  214  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		32  214  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		33  214  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		34  214  BOOL_NOT/13               #14=      $13                  ?0                  	;0
		35  214  JMPZ/43                   ?0        #14                  ?38                 	;0	>>38
		36  215  NOP/0                     ?0        ?0                   ?0                  	;1
		37  215  GOTO/253                  ?0        ?26                  ?17                 	;0
		38  217  FETCH_DIM_R/81            $16=      16?5                 16?6                	;0	<<35
		39  217  ASSIGN_DIM/147            ?8        16?4                 16?6                	;0
		40  217  OP_DATA/137               ?0        $16                  ?0                  	;0
		41  218  NOP/0                     ?0        ?0                   ?0                  	;1
		42  218  GOTO/253                  ?0        ?26                  ?18                 	;0
		43  220  JMPZ/43                   ?0        16?1                 ?46                 	;0	>>46
		44  221  NOP/0                     ?0        ?0                   ?0                  	;1
		45  221  GOTO/253                  ?0        ?30                  ?19                 	;0
		46  223  BOOL_NOT/13               #17=      16?2                 ?0                  	;0	<<43
		47  223  JMPZ/43                   ?0        #17                  ?50                 	;0	>>50
		48  224  NOP/0                     ?0        ?0                   ?0                  	;1
		49  224  GOTO/253                  ?0        ?28                  ?20                 	;0
		50  226  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'in_array'       	;2	<<47
		51  226  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		52  226  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		53  226  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		54  226  JMPZ/43                   ?0        $18                  ?57                 	;0	>>57
		55  227  NOP/0                     ?0        ?0                   ?0                  	;1
		56  227  GOTO/253                  ?0        ?60                  ?23                 	;0
		57  229  FETCH_DIM_R/81            $20=      16?5                 16?6                	;0	<<54
		58  229  ASSIGN_DIM/147            ?12       16?4                 16?6                	;0
		59  229  OP_DATA/137               ?0        $20                  ?0                  	;0
		60  231  NOP/0                     ?0        ?0                   ?0                  	;1
		61  231  GOTO/253                  ?0        ?28                  ?24                 	;0
		62  232  JMP/42                    ?0        ?23                  ?0                  	;0	>>23
		63  232  FE_FREE/127               ?0        $12                  ?0                  	;0	<<22
		64  236  JMPZ/43                   ?0        16?3                 ?66                 	;0	>>66
		65  237  GOTO/253                  ?0        ?10                  ?25                 	;0
		66  239  GOTO/253                  ?0        ?6                   ?26                 	;0	<<64
		67  241  BOOL_NOT/13               #21=      16?1                 ?0                  	;0
		68  241  JMPZ_EX/46                #21=      #21                  ?71                 	;0	>>71
		69  241  BOOL_NOT/13               #22=      16?2                 ?0                  	;0
		70  241  BOOL/52                   #21=      #22                  ?0                  	;0
		71  241  BOOL_NOT/13               #23=      #21                  ?0                  	;0	<<68
		72  241  JMPZ/43                   ?0        #23                  ?74                 	;0	>>74
		73  242  GOTO/253                  ?0        ?75                  ?27                 	;0
		74  244  RETURN/62                 ?0        16?0                 ?0                  	;0	<<72
		75  246  JMPZ/43                   ?0        16?3                 ?77                 	;0	>>77
		76  247  GOTO/253                  ?0        ?13                  ?28                 	;0
		77  249  FETCH_DIM_R/81            $24=      16?0                 29:'data'           	;0	<<75
		78  249  ASSIGN/38                 ?18       16?5                 $24                 	;0
		79  250  GOTO/253                  ?0        ?12                  ?30                 	;0
		80  252  NOP/0                     ?0        31:NULL              ?0                  	;4294967295
		*/
	}

	static public function filterRows($D8e7681dfae2905b, $C17543903e9aa6ae, $c733678227713664)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   253  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   253  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   253  RECV/63                   16?2=     ?3                   ?4294967294         	;0
		3   255  ASSIGN/38                 ?0        16?3                 0:array (
)         	;0
		4   256  FETCH_DIM_R/81            $6=       16?0                 1:'data'            	;0
		5   256  BOOL_NOT/13               #7=       $6                   ?0                  	;0
		6   256  JMPZ/43                   ?0        #7                   ?8                  	;0	>>8
		7   257  GOTO/253                  ?0        ?21                  ?2                  	;0
		8   259  FETCH_DIM_R/81            $8=       16?0                 3:'data'            	;0	<<6
		9   259  FE_RESET_R/77             $9=       $8                   ?20                 	;0
		10  259  FE_FETCH_R/78             ?0        $9                   16?4                	;20	>>20	<<19
		11  260  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 4:'filterRow'       	;4
		12  260  SEND_VAR/117              ?80       16?4                 ?1                  	;0
		13  260  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		14  260  SEND_VAR/117              ?112      16?2                 ?3                  	;0
		15  260  SEND_VAL/65               ?128      6:true               ?4                  	;0
		16  260  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		17  260  ASSIGN_DIM/147            ?5        16?3                 ?1668828544         	;0
		18  260  OP_DATA/137               ?0        $11                  ?0                  	;0
		19  261  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		20  261  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		21  265  RETURN/62                 ?0        16?3                 ?0                  	;0
		22  266  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function TableAPI($Abcb228699a7f743, $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   267  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   267  RECV_INIT/64              16?1=     ?2                   0:0                 	;0
		2   267  RECV_INIT/64              16?2=     ?3                   1:10                	;0
		3   267  RECV_INIT/64              16?3=     ?4                   2:array (
)         	;0
		4   267  RECV_INIT/64              16?4=     ?5                   3:array (
)         	;0
		5   267  RECV_INIT/64              16?5=     ?6                   4:array (
)         	;0
		6   269  GOTO/253                  ?0        ?9                   ?5                  	;0
		7   271  RETURN/62                 ?0        16?6                 ?0                  	;0
		8   272  GOTO/253                  ?0        ?90                  ?6                  	;0
		9   274  FETCH_CONSTANT/99         #10=      ?0                   10:'SERVER_ID'      	;16
		10  274  FETCH_STATIC_PROP_R/173   $9=       7:'rServers'         8:'XUI'             	;0
		11  274  FETCH_DIM_R/81            $11=      $9                   #10                 	;0
		12  274  FETCH_DIM_R/81            $12=      $11                  13:'http_broadcast_port'	;0
		13  274  CONCAT/8                  #13=      14:'http://127.0.0.1:' $12                 	;0
		14  274  CONCAT/8                  #14=      #13                  15:'/'              	;0
		15  274  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'trim'           	;2
		16  274  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'dirname'        	;1
		17  274  FETCH_FUNC_ARG/92         $15=      20:'_SERVER'         ?0                  	;1
		18  274  FETCH_DIM_FUNC_ARG/93     $16=      $15                  21:'PHP_SELF'       	;1
		19  274  SEND_VAR_EX/66            ?80       $16                  ?1                  	;0
		20  274  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
		21  274  SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
		22  274  SEND_VAL_EX/116           ?96       22:'/'               ?2                  	;0
		23  274  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		24  274  CONCAT/8                  #19=      #14                  $18                 	;0
		25  274  CONCAT/8                  #20=      #19                  23:'/table.php'     	;0
		26  274  ASSIGN/38                 ?12       16?7                 #20                 	;0
		27  275  FETCH_STATIC_PROP_R/173   $23=      25:'rKey'            ?513                	;0
		28  275  ASSIGN_DIM/147            ?13       16?3                 24:'api_key'        	;0
		29  275  OP_DATA/137               ?0        $23                  ?0                  	;0
		30  276  ASSIGN_DIM/147            ?15       16?3                 26:'id'             	;0
		31  276  OP_DATA/137               ?0        16?0                 ?0                  	;0
		32  277  ASSIGN_DIM/147            ?16       16?3                 27:'start'          	;0
		33  277  OP_DATA/137               ?0        16?1                 ?0                  	;0
		34  278  ASSIGN_DIM/147            ?17       16?3                 28:'length'         	;0
		35  278  OP_DATA/137               ?0        16?2                 ?0                  	;0
		36  279  GOTO/253                  ?0        ?37                  ?29                 	;0
		37  281  ASSIGN_DIM/147            ?18       16?3                 30:'show_columns'   	;0
		38  281  OP_DATA/137               ?0        16?4                 ?0                  	;0
		39  282  ASSIGN_DIM/147            ?19       16?3                 31:'hide_columns'   	;0
		40  282  OP_DATA/137               ?0        16?5                 ?0                  	;0
		41  283  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'curl_init'      	;0
		42  283  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
		43  283  ASSIGN/38                 ?21       16?8                 $29                 	;0
		44  284  INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'curl_setopt'    	;3
		45  284  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
		46  284  FETCH_CONSTANT/99         #31=      ?0                   36:'CURLOPT_URL'    	;16
		47  284  SEND_VAL_EX/116           ?96       #31                  ?2                  	;0
		48  284  SEND_VAR_EX/66            ?112      16?7                 ?3                  	;0
		49  284  DO_FCALL_BY_NAME/131      ?23       ?0                   ?0                  	;0
		50  285  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'curl_setopt'    	;3
		51  285  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
		52  285  FETCH_CONSTANT/99         #33=      ?0                   41:'CURLOPT_POST'   	;16
		53  285  SEND_VAL_EX/116           ?96       #33                  ?2                  	;0
		54  285  SEND_VAL_EX/116           ?112      44:1                 ?3                  	;0
		55  285  DO_FCALL_BY_NAME/131      ?25       ?0                   ?0                  	;0
		56  286  GOTO/253                  ?0        ?57                  ?45                 	;0
		57  288  INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'curl_setopt'    	;3
		58  288  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
		59  288  FETCH_CONSTANT/99         #35=      ?0                   48:'CURLOPT_POSTFIELDS'	;16
		60  288  SEND_VAL_EX/116           ?96       #35                  ?2                  	;0
		61  288  INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'http_build_query'	;1
		62  288  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		63  288  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
		64  288  SEND_VAR_NO_REF_EX/50     ?112      $36                  ?3                  	;0
		65  288  DO_FCALL_BY_NAME/131      ?28       ?0                   ?0                  	;0
		66  289  INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'curl_setopt'    	;3
		67  289  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
		68  289  FETCH_CONSTANT/99         #38=      ?0                   55:'CURLOPT_RETURNTRANSFER'	;16
		69  289  SEND_VAL_EX/116           ?96       #38                  ?2                  	;0
		70  289  SEND_VAL_EX/116           ?112      58:true              ?3                  	;0
		71  289  DO_FCALL_BY_NAME/131      ?30       ?0                   ?0                  	;0
		72  290  INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'curl_setopt'    	;3
		73  290  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
		74  290  FETCH_CONSTANT/99         #40=      ?0                   61:'CURLOPT_HTTPHEADER'	;16
		75  290  SEND_VAL_EX/116           ?96       #40                  ?2                  	;0
		76  290  SEND_VAL_EX/116           ?112      64:array (
  0 => 'X-Requested-With: xmlhttprequest',
) ?3                  	;0
		77  290  DO_FCALL_BY_NAME/131      ?32       ?0                   ?0                  	;0
		78  291  INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'json_decode'    	;2
		79  291  INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'curl_exec'      	;1
		80  291  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
		81  291  DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
		82  291  SEND_VAR_NO_REF_EX/50     ?80       $42                  ?1                  	;0
		83  291  SEND_VAL_EX/116           ?96       69:true              ?2                  	;0
		84  291  DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
		85  291  ASSIGN/38                 ?35       16?6                 $43                 	;0
		86  292  INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'curl_close'     	;1
		87  292  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
		88  292  DO_FCALL_BY_NAME/131      ?36       ?0                   ?0                  	;0
		89  293  GOTO/253                  ?0        ?7                   ?72                 	;0
		90  295  NOP/0                     ?0        73:NULL              ?0                  	;4294967295
		*/
	}

	static public function createSession()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   298  JMP/42                    ?0        ?1                   ?0                  	;0	>>1
		1   300  BIND_GLOBAL/168           ?0        16?0                 1:'E59d0debc75e7be8'	;0	<<0
		2   300  BIND_GLOBAL/168           ?0        16?1                 2:'db0a61ef32b89a27'	;0
		3   301  FETCH_STATIC_PROP_R/173   $2=       3:'db'               ?513                	;0
		4   301  INIT_METHOD_CALL/112      ?0        $2                   4:'query'           	;2
		5   301  SEND_VAL_EX/116           ?80       6:'SELECT * FROM `users` LEFT JOIN `users_groups` ON `users_groups`.`group_id` = `users`.`member_group_id` WHERE `api_key` = ? AND LENGTH(`api_key`) > 0 AND `is_reseller` = 1 AND `status` = 1;' ?1                  	;0
		6   301  FETCH_STATIC_PROP_FUNC_ARG/177 $3=       7:'rKey'             ?513                	;2
		7   301  SEND_VAR_EX/66            ?96       $3                   ?2                  	;0
		8   301  DO_FCALL/60               ?2        ?0                   ?0                  	;0
		9   302  FETCH_STATIC_PROP_R/173   $5=       8:'db'               ?513                	;0
		10  302  INIT_METHOD_CALL/112      ?0        $5                   9:'num_rows'        	;0
		11  302  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		12  302  IS_SMALLER/19             #7=       11:0                 $6                  	;0
		13  302  BOOL_NOT/13               #8=       #7                   ?0                  	;0
		14  302  JMPZ/43                   ?0        #8                   ?16                 	;0	>>16
		15  303  GOTO/253                  ?0        ?30                  ?12                 	;0
		16  305  FETCH_STATIC_PROP_W/174   $10=      16:'db'              ?513                	;0	<<14
		17  305  MAKE_REF/51               $11=      $10                  ?0                  	;0
		18  305  FETCH_STATIC_PROP_W/174   $9=       13:'db'              14:'ResellerAPI'    	;0
		19  305  ASSIGN_REF/39             ?10       $9                   $11                 	;0
		20  306  INIT_STATIC_METHOD_CALL/113 ?0        17:'ResellerAPI'     19:'init'           	;1
		21  306  FETCH_STATIC_PROP_R/173   $13=      21:'db'              ?513                	;0
		22  306  INIT_METHOD_CALL/112      ?0        $13                  22:'get_row'        	;0
		23  306  DO_FCALL/60               $14=      ?0                   ?0                  	;0
		24  306  SEPARATE/156              $14=      $14                  ?0                  	;0
		25  306  FETCH_DIM_FUNC_ARG/93     $15=      $14                  24:'id'             	;1
		26  306  SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
		27  306  DO_FCALL/60               ?14       ?0                   ?0                  	;0
		28  307  GOTO/253                  ?0        ?32                  ?25                 	;0
		29  310  RETURN/62                 ?0        26:true              ?0                  	;0
		30  312  RETURN/62                 ?0        27:false             ?0                  	;0
		31  313  GOTO/253                  ?0        ?51                  ?28                 	;0
		32  315  FETCH_STATIC_PROP_UNSET/178 $17=      29:'rUserInfo'       30:'ResellerAPI'    	;0
		33  315  UNSET_DIM/75              ?0        $17                  32:'password'       	;0
		34  316  FETCH_STATIC_PROP_R/173   $18=      33:'rUserInfo'       34:'ResellerAPI'    	;0
		35  316  ASSIGN/38                 ?17       16?0                 $18                 	;0
		36  317  FETCH_STATIC_PROP_R/173   $20=      36:'rPermissions'    37:'ResellerAPI'    	;0
		37  317  ASSIGN/38                 ?19       16?1                 $20                 	;0
		38  318  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'strlen'         	;1
		39  318  FETCH_DIM_FUNC_ARG/93     $22=      16?0                 41:'timezone'       	;1
		40  318  SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
		41  318  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
		42  318  IS_SMALLER/19             #24=      42:0                 $23                 	;0
		43  318  BOOL_NOT/13               #25=      #24                  ?0                  	;0
		44  318  JMPZ/43                   ?0        #25                  ?46                 	;0	>>46
		45  319  GOTO/253                  ?0        ?29                  ?43                 	;0
		46  321  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'date_default_timezone_set'	;1	<<44
		47  321  FETCH_DIM_FUNC_ARG/93     $26=      16?0                 46:'timezone'       	;1
		48  321  SEND_VAR_EX/66            ?80       $26                  ?1                  	;0
		49  321  DO_FCALL_BY_NAME/131      ?25       ?0                   ?0                  	;0
		50  322  GOTO/253                  ?0        ?29                  ?47                 	;0
		51  324  NOP/0                     ?0        48:NULL              ?0                  	;4294967295
		*/
	}

	static public function CC988751EebBF271()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   327  BIND_GLOBAL/168           ?0        16?0                 0:'E59d0debc75e7be8'	;0
		1   327  BIND_GLOBAL/168           ?0        16?1                 1:'db0a61ef32b89a27'	;0
		2   328  INIT_ARRAY/71             #2=       2:'STATUS_SUCCESS'   3:'status'          	;14
		3   328  ADD_ARRAY_ELEMENT/72      #2=       16?0                 4:'data'            	;0
		4   328  ADD_ARRAY_ELEMENT/72      #2=       16?1                 5:'permissions'     	;0
		5   328  RETURN/62                 ?0        #2                   ?0                  	;0
		6   329  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	static public function d117e45424fE8F00()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   332  BIND_GLOBAL/168           ?0        16?0                 0:'E59d0debc75e7be8'	;0
		1   333  BOOL_NOT/13               #4=       16?0                 ?0                  	;0
		2   333  JMPZ/43                   ?0        #4                   ?4                  	;0	>>4
		3   334  GOTO/253                  ?0        ?55                  ?1                  	;0
		4   336  ASSIGN/38                 ?1        16?1                 2:array (
)         	;0	<<2
		5   337  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'json_decode'     	;2
		6   337  FETCH_DIM_FUNC_ARG/93     $6=       16?0                 5:'override_packages'	;1
		7   337  SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
		8   337  SEND_VAL_EX/116           ?96       6:true               ?2                  	;0
		9   337  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		10  337  ASSIGN/38                 ?4        16?2                 $7                  	;0
		11  338  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'D8C8284136938Ef0'	;1
		12  338  FETCH_DIM_FUNC_ARG/93     $9=       16?0                 9:'member_group_id' 	;1
		13  338  SEND_VAR_EX/66            ?80       $9                   ?1                  	;0
		14  338  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		15  338  FE_RESET_R/77             $11=      $10                  ?51                 	;0
		16  338  FE_FETCH_R/78             ?0        $11                  16?3                	;51	>>51	<<50
		17  339  FETCH_DIM_R/81            $12=      16?3                 10:'id'             	;0
		18  339  FETCH_DIM_IS/90           $13=      16?2                 $12                 	;0
		19  339  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'official_credits'	;33554432
		20  339  JMPZ_EX/46                #14=      #14                  ?29                 	;0	>>29
		21  339  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'strlen'         	;1
		22  339  FETCH_DIM_R/81            $15=      16?3                 14:'id'             	;0
		23  339  FETCH_DIM_FUNC_ARG/93     $16=      16?2                 $15                 	;1
		24  339  FETCH_DIM_FUNC_ARG/93     $17=      $16                  15:'official_credits'	;1
		25  339  SEND_VAR_EX/66            ?80       $17                  ?1                  	;0
		26  339  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		27  339  IS_SMALLER/19             #19=      16:0                 $18                 	;0
		28  339  BOOL/52                   #14=      #19                  ?0                  	;0
		29  339  JMPZ/43                   ?0        #14                  ?32                 	;0	>>32	<<20
		30  340  NOP/0                     ?0        ?0                   ?0                  	;1
		31  340  GOTO/253                  ?0        ?40                  ?17                 	;0
		32  342  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'intval'         	;1	<<29
		33  342  FETCH_DIM_FUNC_ARG/93     $21=      16?3                 21:'official_credits'	;1
		34  342  SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
		35  342  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
		36  342  ASSIGN_DIM/147            ?16       16?3                 18:'official_credits'	;0
		37  342  OP_DATA/137               ?0        $22                  ?0                  	;0
		38  343  NOP/0                     ?0        ?0                   ?0                  	;1
		39  343  GOTO/253                  ?0        ?48                  ?22                 	;0
		40  345  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'intval'         	;1
		41  345  FETCH_DIM_R/81            $24=      16?3                 26:'id'             	;0
		42  345  FETCH_DIM_FUNC_ARG/93     $25=      16?2                 $24                 	;1
		43  345  FETCH_DIM_FUNC_ARG/93     $26=      $25                  27:'official_credits'	;1
		44  345  SEND_VAR_EX/66            ?80       $26                  ?1                  	;0
		45  345  DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
		46  345  ASSIGN_DIM/147            ?19       16?3                 23:'official_credits'	;0
		47  345  OP_DATA/137               ?0        $27                  ?0                  	;0
		48  347  ASSIGN_DIM/147            ?24       16?1                 ?0                  	;0
		49  347  OP_DATA/137               ?0        16?3                 ?0                  	;0
		50  348  JMP/42                    ?0        ?16                  ?0                  	;0	>>16
		51  348  FE_FREE/127               ?0        $11                  ?0                  	;0	<<15
		52  351  INIT_ARRAY/71             #29=      28:'STATUS_SUCCESS'  29:'status'         	;10
		53  351  ADD_ARRAY_ELEMENT/72      #29=      16?1                 30:'data'           	;0
		54  351  RETURN/62                 ?0        #29                  ?0                  	;0
		55  353  RETURN/62                 ?0        31:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		56  354  NOP/0                     ?0        32:NULL              ?0                  	;4294967295
		*/
	}

	static public function getLine($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   355  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   357  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'b5AD1d95a92ce732'	;1
		2   357  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   357  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   357  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   357  JMPZ_EX/46                #4=       $3                   ?11                 	;0	>>11
		6   357  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'E589A4bF54A2DAd1'	;2
		7   357  SEND_VAL_EX/116           ?80       4:'line'             ?1                  	;0
		8   357  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		9   357  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		10  357  BOOL/52                   #4=       $5                   ?0                  	;0
		11  357  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		12  357  JMPZ/43                   ?0        #6                   ?14                 	;0	>>14
		13  358  GOTO/253                  ?0        ?17                  ?5                  	;0
		14  360  INIT_ARRAY/71             #7=       6:'STATUS_SUCCESS'   7:'status'          	;10	<<12
		15  360  ADD_ARRAY_ELEMENT/72      #7=       16?1                 8:'data'            	;0
		16  360  RETURN/62                 ?0        #7                   ?0                  	;0
		17  362  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		18  363  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function createLine($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   364  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   366  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2   366  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3   366  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4   367  GOTO/253                  ?0        ?6                   ?1                  	;0
		5   369  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6   371  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7   371  INIT_STATIC_METHOD_CALL/113 ?0        4:'ResellerAPI'      6:'fCCAa0F750EFA5B7'	;1
		8   371  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   371  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10  371  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11  371  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12  371  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13  372  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14  372  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15  372  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16  372  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17  373  GOTO/253                  ?0        ?26                  ?10                 	;0
		18  375  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'getLine'        	;1	<<16
		19  375  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20  375  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21  375  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22  375  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23  375  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24  375  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25  375  OP_DATA/137               ?0        $14                  ?0                  	;0
		26  377  RETURN/62                 ?0        16?1                 ?0                  	;0
		27  378  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editLine($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   379  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   379  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   381  JMP/42                    ?0        ?27                  ?0                  	;0	>>27
		3   384  RETURN/62                 ?0        1:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		4   385  GOTO/253                  ?0        ?42                  ?2                  	;0
		5   387  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		6   387  INIT_STATIC_METHOD_CALL/113 ?0        4:'ResellerAPI'      6:'fCcaA0f750EFA5b7'	;1
		7   387  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		8   387  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		9   387  SEND_VAR/117              ?80       $3                   ?1                  	;0
		10  387  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		11  387  ASSIGN/38                 ?2        16?2                 $4                  	;0
		12  388  FETCH_DIM_IS/90           $6=       16?2                 8:'data'            	;0
		13  388  ISSET_ISEMPTY_DIM_OBJ/115 #7=       $6                   9:'insert_id'       	;33554432
		14  388  BOOL_NOT/13               #8=       #7                   ?0                  	;0
		15  388  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16  389  GOTO/253                  ?0        ?25                  ?10                 	;0
		17  391  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'getLine'        	;1	<<15
		18  391  FETCH_DIM_R/81            $10=      16?2                 14:'data'           	;0
		19  391  FETCH_DIM_R/81            $11=      $10                  15:'insert_id'      	;0
		20  391  SEND_VAR/117              ?80       $11                  ?1                  	;0
		21  391  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		22  391  FETCH_DIM_R/81            $13=      $12                  16:'data'           	;0
		23  391  ASSIGN_DIM/147            ?6        16?2                 11:'data'           	;0
		24  391  OP_DATA/137               ?0        $13                  ?0                  	;0
		25  393  RETURN/62                 ?0        16?2                 ?0                  	;0
		26  394  GOTO/253                  ?0        ?3                   ?17                 	;0
		27  396  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'B5Ad1D95a92CE732'	;1	<<2
		28  396  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		29  396  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		30  396  BOOL_NOT/13               #15=      $14                  ?0                  	;0
		31  396  JMPZ/43                   ?0        #15                  ?33                 	;0	>>33
		32  397  GOTO/253                  ?0        ?3                   ?20                 	;0
		33  399  ASSIGN_DIM/147            ?13       16?1                 21:'edit'           	;0	<<31
		34  399  OP_DATA/137               ?0        16?0                 ?0                  	;0
		35  400  ISSET_ISEMPTY_DIM_OBJ/115 #17=      16?1                 22:'isp_clear'      	;33554432
		36  400  BOOL_NOT/13               #18=      #17                  ?0                  	;0
		37  400  JMPZ/43                   ?0        #18                  ?39                 	;0	>>39
		38  401  GOTO/253                  ?0        ?41                  ?23                 	;0
		39  403  ASSIGN_DIM/147            ?16       16?1                 24:'isp_clear'      	;0	<<37
		40  403  OP_DATA/137               ?0        25:''                ?0                  	;0
		41  405  GOTO/253                  ?0        ?5                   ?26                 	;0
		42  407  NOP/0                     ?0        27:NULL              ?0                  	;4294967295
		*/
	}

	static public function CA81c8F24c099495($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   408  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   410  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'B5ad1d95A92cE732'	;1
		2   410  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   410  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4   410  BOOL_NOT/13               #2=       $1                   ?0                  	;0
		5   410  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
		6   411  GOTO/253                  ?0        ?14                  ?2                  	;0
		7   413  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'C24B1b1FdAD37C5E'	;1	<<5
		8   413  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   413  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		10  413  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		11  413  JMPZ/43                   ?0        #4                   ?13                 	;0	>>13
		12  414  GOTO/253                  ?0        ?14                  ?5                  	;0
		13  416  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<11
		14  419  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		15  420  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	static public function disableLine($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   421  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   423  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'b5Ad1D95A92cE732'	;1
		2   423  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   423  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4   423  BOOL_NOT/13               #2=       $1                   ?0                  	;0
		5   423  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
		6   424  GOTO/253                  ?0        ?13                  ?2                  	;0
		7   426  FETCH_STATIC_PROP_R/173   $3=       3:'db'               ?513                	;0	<<5
		8   426  INIT_METHOD_CALL/112      ?0        $3                   4:'query'           	;2
		9   426  SEND_VAL_EX/116           ?80       6:'UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;' ?1                  	;0
		10  426  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		11  426  DO_FCALL/60               ?3        ?0                   ?0                  	;0
		12  427  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		13  429  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		14  430  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function enableLine($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   431  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   433  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'B5ad1d95A92cE732'	;1
		2   433  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   433  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4   433  BOOL_NOT/13               #2=       $1                   ?0                  	;0
		5   433  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
		6   434  GOTO/253                  ?0        ?13                  ?2                  	;0
		7   436  FETCH_STATIC_PROP_R/173   $3=       3:'db'               ?513                	;0	<<5
		8   436  INIT_METHOD_CALL/112      ?0        $3                   4:'query'           	;2
		9   436  SEND_VAL_EX/116           ?80       6:'UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;' ?1                  	;0
		10  436  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		11  436  DO_FCALL/60               ?3        ?0                   ?0                  	;0
		12  437  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		13  439  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		14  440  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function d6BCC99e8bAFa737($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   441  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   443  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'A32D85AEfa28959d'	;1
		2   443  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   443  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   443  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   443  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6   443  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7   444  GOTO/253                  ?0        ?19                  ?2                  	;0
		8   446  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'e589A4bf54A2dAd1'	;2	<<6
		9   446  SEND_VAL_EX/116           ?80       5:'line'             ?1                  	;0
		10  446  FETCH_DIM_FUNC_ARG/93     $5=       16?1                 6:'user_id'         	;2
		11  446  SEND_VAR_EX/66            ?96       $5                   ?2                  	;0
		12  446  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		13  446  BOOL_NOT/13               #7=       $6                   ?0                  	;0
		14  446  JMPZ/43                   ?0        #7                   ?16                 	;0	>>16
		15  447  GOTO/253                  ?0        ?19                  ?7                  	;0
		16  449  INIT_ARRAY/71             #8=       8:'STATUS_SUCCESS'   9:'status'          	;10	<<14
		17  449  ADD_ARRAY_ELEMENT/72      #8=       16?1                 10:'data'           	;0
		18  449  RETURN/62                 ?0        #8                   ?0                  	;0
		19  452  RETURN/62                 ?0        11:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		20  453  NOP/0                     ?0        12:NULL              ?0                  	;4294967295
		*/
	}

	static public function createMAG($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   454  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   456  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2   456  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3   456  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4   457  GOTO/253                  ?0        ?6                   ?1                  	;0
		5   459  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6   461  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7   461  INIT_STATIC_METHOD_CALL/113 ?0        4:'ResellerAPI'      6:'b087C00f20554a9b'	;1
		8   461  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   461  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10  461  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11  461  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12  461  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13  462  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14  462  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15  462  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16  462  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17  463  GOTO/253                  ?0        ?26                  ?10                 	;0
		18  465  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'d6bCC99E8bafa737'	;1	<<16
		19  465  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20  465  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21  465  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22  465  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23  465  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24  465  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25  465  OP_DATA/137               ?0        $14                  ?0                  	;0
		26  467  RETURN/62                 ?0        16?1                 ?0                  	;0
		27  468  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editMAG($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   469  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   469  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   471  JMP/42                    ?0        ?25                  ?0                  	;0	>>25
		3   473  INIT_FCALL/61             ?0        ?240                 1:'parseerror'      	;1
		4   473  INIT_STATIC_METHOD_CALL/113 ?0        2:'ResellerAPI'      4:'B087c00F20554A9b'	;1
		5   473  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		6   473  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		7   473  SEND_VAR/117              ?80       $3                   ?1                  	;0
		8   473  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		9   473  ASSIGN/38                 ?2        16?2                 $4                  	;0
		10  474  FETCH_DIM_IS/90           $6=       16?2                 6:'data'            	;0
		11  474  ISSET_ISEMPTY_DIM_OBJ/115 #7=       $6                   7:'insert_id'       	;33554432
		12  474  BOOL_NOT/13               #8=       #7                   ?0                  	;0
		13  474  JMPZ/43                   ?0        #8                   ?15                 	;0	>>15
		14  475  GOTO/253                  ?0        ?23                  ?8                  	;0
		15  477  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 10:'D6BcC99e8BaFa737'	;1	<<13
		16  477  FETCH_DIM_R/81            $10=      16?2                 12:'data'           	;0
		17  477  FETCH_DIM_R/81            $11=      $10                  13:'insert_id'      	;0
		18  477  SEND_VAR/117              ?80       $11                  ?1                  	;0
		19  477  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		20  477  FETCH_DIM_R/81            $13=      $12                  14:'data'           	;0
		21  477  ASSIGN_DIM/147            ?6        16?2                 9:'data'            	;0
		22  477  OP_DATA/137               ?0        $13                  ?0                  	;0
		23  479  RETURN/62                 ?0        16?2                 ?0                  	;0
		24  480  GOTO/253                  ?0        ?40                  ?15                 	;0
		25  482  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'A32D85AEFa28959d'	;1	<<2
		26  482  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		27  482  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		28  482  BOOL_NOT/13               #15=      $14                  ?0                  	;0
		29  482  JMPZ/43                   ?0        #15                  ?31                 	;0	>>31
		30  483  GOTO/253                  ?0        ?40                  ?18                 	;0
		31  485  ASSIGN_DIM/147            ?13       16?1                 19:'edit'           	;0	<<29
		32  485  OP_DATA/137               ?0        16?0                 ?0                  	;0
		33  486  ISSET_ISEMPTY_DIM_OBJ/115 #17=      16?1                 20:'isp_clear'      	;33554432
		34  486  BOOL_NOT/13               #18=      #17                  ?0                  	;0
		35  486  JMPZ/43                   ?0        #18                  ?37                 	;0	>>37
		36  487  GOTO/253                  ?0        ?39                  ?21                 	;0
		37  489  ASSIGN_DIM/147            ?16       16?1                 22:'isp_clear'      	;0	<<35
		38  489  OP_DATA/137               ?0        23:''                ?0                  	;0
		39  491  GOTO/253                  ?0        ?3                   ?24                 	;0
		40  494  RETURN/62                 ?0        25:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		41  495  GOTO/253                  ?0        ?42                  ?26                 	;0
		42  497  NOP/0                     ?0        27:NULL              ?0                  	;4294967295
		*/
	}

	static public function b3E7cdF7aC99ab57($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   498  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   500  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'A32d85AeFA28959D'	;1
		2   500  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   500  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4   500  BOOL_NOT/13               #2=       $1                   ?0                  	;0
		5   500  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
		6   501  GOTO/253                  ?0        ?14                  ?2                  	;0
		7   503  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'dd81518D00a2dD90'	;1	<<5
		8   503  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   503  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		10  503  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		11  503  JMPZ/43                   ?0        #4                   ?13                 	;0	>>13
		12  504  GOTO/253                  ?0        ?14                  ?5                  	;0
		13  506  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<11
		14  509  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		15  510  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	static public function disableMAG($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   511  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   513  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'a32D85AeFa28959D'	;1
		2   513  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   513  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   513  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   513  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6   513  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7   514  GOTO/253                  ?0        ?15                  ?2                  	;0
		8   516  FETCH_STATIC_PROP_R/173   $5=       3:'db'               ?513                	;0	<<6
		9   516  INIT_METHOD_CALL/112      ?0        $5                   4:'query'           	;2
		10  516  SEND_VAL_EX/116           ?80       6:'UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;' ?1                  	;0
		11  516  FETCH_DIM_FUNC_ARG/93     $6=       16?1                 7:'user_id'         	;2
		12  516  SEND_VAR_EX/66            ?96       $6                   ?2                  	;0
		13  516  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		14  517  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		15  519  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		16  520  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function enableMAG($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   521  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   523  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'A32D85AefA28959D'	;1
		2   523  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   523  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   523  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   523  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6   523  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7   524  GOTO/253                  ?0        ?15                  ?2                  	;0
		8   526  FETCH_STATIC_PROP_R/173   $5=       3:'db'               ?513                	;0	<<6
		9   526  INIT_METHOD_CALL/112      ?0        $5                   4:'query'           	;2
		10  526  SEND_VAL_EX/116           ?80       6:'UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;' ?1                  	;0
		11  526  FETCH_DIM_FUNC_ARG/93     $6=       16?1                 7:'user_id'         	;2
		12  526  SEND_VAR_EX/66            ?96       $6                   ?2                  	;0
		13  526  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		14  527  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		15  529  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		16  530  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function convertMAG($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   531  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   533  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'A32d85AEfA28959d'	;1
		2   533  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   533  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   533  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   533  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6   533  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7   534  GOTO/253                  ?0        ?21                  ?2                  	;0
		8   536  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'Dd81518d00A2Dd90'	;4	<<6
		9   536  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		10  536  SEND_VAL_EX/116           ?96       5:false              ?2                  	;0
		11  536  SEND_VAL_EX/116           ?112      6:false              ?3                  	;0
		12  536  SEND_VAL_EX/116           ?128      7:true               ?4                  	;0
		13  536  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
		14  537  INIT_ARRAY/71             #6=       8:'STATUS_SUCCESS'   9:'status'          	;10
		15  537  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'b5ad1d95a92cE732'	;1
		16  537  FETCH_DIM_FUNC_ARG/93     $7=       16?1                 12:'user_id'        	;1
		17  537  SEND_VAR_EX/66            ?80       $7                   ?1                  	;0
		18  537  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		19  537  ADD_ARRAY_ELEMENT/72      #6=       $8                   13:'data'           	;0
		20  537  RETURN/62                 ?0        #6                   ?0                  	;0
		21  539  RETURN/62                 ?0        14:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		22  540  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
		*/
	}

	static public function aB9DD80290F141De($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   541  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   543  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'ef70A93e98fb7Ce9'	;1
		2   543  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   543  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   543  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   543  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6   543  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7   544  GOTO/253                  ?0        ?19                  ?2                  	;0
		8   546  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'E589A4bf54a2dAD1'	;2	<<6
		9   546  SEND_VAL_EX/116           ?80       5:'line'             ?1                  	;0
		10  546  FETCH_DIM_FUNC_ARG/93     $5=       16?1                 6:'user_id'         	;2
		11  546  SEND_VAR_EX/66            ?96       $5                   ?2                  	;0
		12  546  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		13  546  BOOL_NOT/13               #7=       $6                   ?0                  	;0
		14  546  JMPZ/43                   ?0        #7                   ?16                 	;0	>>16
		15  547  GOTO/253                  ?0        ?19                  ?7                  	;0
		16  549  INIT_ARRAY/71             #8=       8:'STATUS_SUCCESS'   9:'status'          	;10	<<14
		17  549  ADD_ARRAY_ELEMENT/72      #8=       16?1                 10:'data'           	;0
		18  549  RETURN/62                 ?0        #8                   ?0                  	;0
		19  552  RETURN/62                 ?0        11:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		20  553  NOP/0                     ?0        12:NULL              ?0                  	;4294967295
		*/
	}

	static public function createEnigma($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   554  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   556  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2   556  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3   556  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4   557  GOTO/253                  ?0        ?6                   ?1                  	;0
		5   559  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6   561  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7   561  INIT_STATIC_METHOD_CALL/113 ?0        4:'ResellerAPI'      6:'f5D44bE8B59F4e62'	;1
		8   561  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   561  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10  561  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11  561  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12  561  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13  562  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14  562  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15  562  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16  562  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17  563  GOTO/253                  ?0        ?26                  ?10                 	;0
		18  565  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'AB9Dd80290f141DE'	;1	<<16
		19  565  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20  565  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21  565  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22  565  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23  565  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24  565  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25  565  OP_DATA/137               ?0        $14                  ?0                  	;0
		26  567  RETURN/62                 ?0        16?1                 ?0                  	;0
		27  568  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editEnigma($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   569  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   569  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   571  JMP/42                    ?0        ?3                   ?0                  	;0	>>3
		3   573  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'Ef70a93E98fb7cE9'	;1	<<2
		4   573  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		5   573  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		6   573  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		7   573  JMPZ/43                   ?0        #4                   ?9                  	;0	>>9
		8   574  GOTO/253                  ?0        ?18                  ?3                  	;0
		9   576  ASSIGN_DIM/147            ?2        16?1                 4:'edit'            	;0	<<7
		10  576  OP_DATA/137               ?0        16?0                 ?0                  	;0
		11  577  ISSET_ISEMPTY_DIM_OBJ/115 #6=       16?1                 5:'isp_clear'       	;33554432
		12  577  BOOL_NOT/13               #7=       #6                   ?0                  	;0
		13  577  JMPZ/43                   ?0        #7                   ?15                 	;0	>>15
		14  578  GOTO/253                  ?0        ?17                  ?6                  	;0
		15  580  ASSIGN_DIM/147            ?5        16?1                 7:'isp_clear'       	;0	<<13
		16  580  OP_DATA/137               ?0        8:''                 ?0                  	;0
		17  582  GOTO/253                  ?0        ?20                  ?9                  	;0
		18  585  RETURN/62                 ?0        10:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19  586  GOTO/253                  ?0        ?42                  ?11                 	;0
		20  588  INIT_FCALL/61             ?0        ?240                 12:'parseerror'     	;1
		21  588  INIT_STATIC_METHOD_CALL/113 ?0        13:'ResellerAPI'     15:'F5D44BE8B59F4e62'	;1
		22  588  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		23  588  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		24  588  SEND_VAR/117              ?80       $9                   ?1                  	;0
		25  588  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		26  588  ASSIGN/38                 ?8        16?2                 $10                 	;0
		27  589  FETCH_DIM_IS/90           $12=      16?2                 17:'data'           	;0
		28  589  ISSET_ISEMPTY_DIM_OBJ/115 #13=      $12                  18:'insert_id'      	;33554432
		29  589  BOOL_NOT/13               #14=      #13                  ?0                  	;0
		30  589  JMPZ/43                   ?0        #14                  ?32                 	;0	>>32
		31  590  GOTO/253                  ?0        ?40                  ?19                 	;0
		32  592  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 21:'ab9dd80290F141DE'	;1	<<30
		33  592  FETCH_DIM_R/81            $16=      16?2                 23:'data'           	;0
		34  592  FETCH_DIM_R/81            $17=      $16                  24:'insert_id'      	;0
		35  592  SEND_VAR/117              ?80       $17                  ?1                  	;0
		36  592  DO_FCALL/60               $18=      ?0                   ?0                  	;0
		37  592  FETCH_DIM_R/81            $19=      $18                  25:'data'           	;0
		38  592  ASSIGN_DIM/147            ?12       16?2                 20:'data'           	;0
		39  592  OP_DATA/137               ?0        $19                  ?0                  	;0
		40  594  RETURN/62                 ?0        16?2                 ?0                  	;0
		41  595  GOTO/253                  ?0        ?18                  ?26                 	;0
		42  597  NOP/0                     ?0        27:NULL              ?0                  	;4294967295
		*/
	}

	static public function Ad38e07A7561acF3($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   598  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   600  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'ef70a93e98fb7cE9'	;1
		2   600  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   600  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4   600  BOOL_NOT/13               #2=       $1                   ?0                  	;0
		5   600  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
		6   601  GOTO/253                  ?0        ?14                  ?2                  	;0
		7   603  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'a486863E198221fA'	;1	<<5
		8   603  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   603  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		10  603  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		11  603  JMPZ/43                   ?0        #4                   ?13                 	;0	>>13
		12  604  GOTO/253                  ?0        ?14                  ?5                  	;0
		13  606  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<11
		14  609  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		15  610  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	static public function disableEnigma($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   611  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   613  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'EF70A93E98Fb7Ce9'	;1
		2   613  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   613  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   613  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   613  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6   613  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7   614  GOTO/253                  ?0        ?15                  ?2                  	;0
		8   616  FETCH_STATIC_PROP_R/173   $5=       3:'db'               ?513                	;0	<<6
		9   616  INIT_METHOD_CALL/112      ?0        $5                   4:'query'           	;2
		10  616  SEND_VAL_EX/116           ?80       6:'UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;' ?1                  	;0
		11  616  FETCH_DIM_FUNC_ARG/93     $6=       16?1                 7:'user_id'         	;2
		12  616  SEND_VAR_EX/66            ?96       $6                   ?2                  	;0
		13  616  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		14  617  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		15  619  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		16  620  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function enableEnigma($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   621  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   623  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'Ef70a93e98Fb7ce9'	;1
		2   623  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   623  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   623  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   623  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6   623  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7   624  GOTO/253                  ?0        ?15                  ?2                  	;0
		8   626  FETCH_STATIC_PROP_R/173   $5=       3:'db'               ?513                	;0	<<6
		9   626  INIT_METHOD_CALL/112      ?0        $5                   4:'query'           	;2
		10  626  SEND_VAL_EX/116           ?80       6:'UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;' ?1                  	;0
		11  626  FETCH_DIM_FUNC_ARG/93     $6=       16?1                 7:'user_id'         	;2
		12  626  SEND_VAR_EX/66            ?96       $6                   ?2                  	;0
		13  626  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		14  627  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		15  629  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		16  630  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function convertEnigma($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   631  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   633  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'eF70A93e98fb7ce9'	;1
		2   633  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   633  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   633  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   633  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6   633  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7   634  GOTO/253                  ?0        ?21                  ?2                  	;0
		8   636  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'A486863e198221Fa'	;4	<<6
		9   636  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		10  636  SEND_VAL_EX/116           ?96       5:false              ?2                  	;0
		11  636  SEND_VAL_EX/116           ?112      6:false              ?3                  	;0
		12  636  SEND_VAL_EX/116           ?128      7:true               ?4                  	;0
		13  636  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
		14  637  INIT_ARRAY/71             #6=       8:'STATUS_SUCCESS'   9:'status'          	;10
		15  637  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'B5Ad1D95A92CE732'	;1
		16  637  FETCH_DIM_FUNC_ARG/93     $7=       16?1                 12:'user_id'        	;1
		17  637  SEND_VAR_EX/66            ?80       $7                   ?1                  	;0
		18  637  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		19  637  ADD_ARRAY_ELEMENT/72      #6=       $8                   13:'data'           	;0
		20  637  RETURN/62                 ?0        #6                   ?0                  	;0
		21  639  RETURN/62                 ?0        14:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		22  640  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
		*/
	}

	static public function b349523ecb058d86($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   641  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   643  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'Ba89228dc958ce05'	;1
		2   643  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   643  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   643  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   643  JMPZ_EX/46                #4=       $3                   ?12                 	;0	>>12
		6   643  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'e589a4Bf54A2dad1'	;2
		7   643  SEND_VAL_EX/116           ?80       4:'user'             ?1                  	;0
		8   643  FETCH_DIM_FUNC_ARG/93     $5=       16?1                 5:'id'              	;2
		9   643  SEND_VAR_EX/66            ?96       $5                   ?2                  	;0
		10  643  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		11  643  BOOL/52                   #4=       $6                   ?0                  	;0
		12  643  BOOL_NOT/13               #7=       #4                   ?0                  	;0	<<5
		13  643  JMPZ/43                   ?0        #7                   ?15                 	;0	>>15
		14  644  GOTO/253                  ?0        ?18                  ?6                  	;0
		15  646  INIT_ARRAY/71             #8=       7:'STATUS_SUCCESS'   8:'status'          	;10	<<13
		16  646  ADD_ARRAY_ELEMENT/72      #8=       16?1                 9:'data'            	;0
		17  646  RETURN/62                 ?0        #8                   ?0                  	;0
		18  648  RETURN/62                 ?0        10:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19  649  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	static public function createUser($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   650  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   652  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2   652  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3   652  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4   653  GOTO/253                  ?0        ?6                   ?1                  	;0
		5   655  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6   657  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7   657  INIT_STATIC_METHOD_CALL/113 ?0        4:'ResellerAPI'      6:'d3824406bc4f2a23'	;1
		8   657  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   657  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10  657  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11  657  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12  657  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13  658  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14  658  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15  658  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16  658  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17  659  GOTO/253                  ?0        ?26                  ?10                 	;0
		18  661  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'b349523eCB058D86'	;1	<<16
		19  661  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20  661  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21  661  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22  661  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23  661  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24  661  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25  661  OP_DATA/137               ?0        $14                  ?0                  	;0
		26  663  RETURN/62                 ?0        16?1                 ?0                  	;0
		27  664  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editUser($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   665  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   665  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   667  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'b349523eCB058d86'	;1
		3   667  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4   667  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5   667  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6   667  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7   667  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8   667  BOOL/52                   #6=       #7                   ?0                  	;0
		9   667  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10  667  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11  668  GOTO/253                  ?0        ?35                  ?3                  	;0
		12  670  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13  670  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14  671  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15  671  INIT_STATIC_METHOD_CALL/113 ?0        6:'ResellerAPI'      8:'D3824406bc4f2a23'	;1
		16  671  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17  671  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18  671  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19  671  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20  671  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21  672  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22  672  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23  672  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24  672  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25  673  GOTO/253                  ?0        ?34                  ?12                 	;0
		26  675  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'B349523ECb058D86'	;1	<<24
		27  675  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28  675  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29  675  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30  675  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31  675  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32  675  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33  675  OP_DATA/137               ?0        $20                  ?0                  	;0
		34  677  RETURN/62                 ?0        16?3                 ?0                  	;0
		35  679  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36  680  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function d8C5152aaA448bdD($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   681  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   683  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'B349523ECb058d86'	;1
		2   683  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3   683  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   683  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   683  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6   683  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7   683  BOOL/52                   #4=       #5                   ?0                  	;0
		8   683  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9   683  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10  684  GOTO/253                  ?0        ?18                  ?3                  	;0
		11  686  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'c05365Dcb6d79618'	;1	<<9
		12  686  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13  686  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14  686  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15  686  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16  687  GOTO/253                  ?0        ?18                  ?6                  	;0
		17  689  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18  692  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19  693  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function disableUser($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   694  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   696  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'B349523ECB058d86'	;1
		2   696  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3   696  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   696  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   696  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6   696  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7   696  BOOL/52                   #4=       #5                   ?0                  	;0
		8   696  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9   696  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10  697  GOTO/253                  ?0        ?17                  ?3                  	;0
		11  699  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12  699  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13  699  SEND_VAL_EX/116           ?80       7:'UPDATE `users` SET `status` = 0 WHERE `id` = ?;' ?1                  	;0
		14  699  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		15  699  DO_FCALL/60               ?6        ?0                   ?0                  	;0
		16  700  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		17  702  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		18  703  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function enableUser($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   704  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   706  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'B349523ECB058D86'	;1
		2   706  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3   706  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   706  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   706  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6   706  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7   706  BOOL/52                   #4=       #5                   ?0                  	;0
		8   706  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9   706  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10  707  GOTO/253                  ?0        ?17                  ?3                  	;0
		11  709  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12  709  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13  709  SEND_VAL_EX/116           ?80       7:'UPDATE `users` SET `status` = 1 WHERE `id` = ?;' ?1                  	;0
		14  709  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		15  709  DO_FCALL/60               ?6        ?0                   ?0                  	;0
		16  710  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		17  712  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		18  713  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function adjustCredits($Abcb228699a7f743, $E8f21e009ba7a8c5, $A2724e95b275e9d5)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   714  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   714  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   714  RECV/63                   16?2=     ?3                   ?4294967294         	;0
		3   716  JMP/42                    ?0        ?6                   ?0                  	;0	>>6
		4   720  RETURN/62                 ?0        1:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		5   721  GOTO/253                  ?0        ?111                 ?2                  	;0
		6   723  BIND_GLOBAL/168           ?0        16?3                 3:'E59d0debc75e7be8'	;0	<<3
		7   724  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'strlen'          	;1
		8   724  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		9   724  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		10  724  IS_EQUAL/17               #8=       $7                   6:0                 	;0
		11  724  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		12  724  JMPZ/43                   ?0        #9                   ?14                 	;0	>>14
		13  725  GOTO/253                  ?0        ?15                  ?7                  	;0
		14  727  ASSIGN/38                 ?3        16?2                 8:'Reseller API Adjustment'	;0	<<12
		15  729  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 9:'b349523ECb058d86'	;1
		16  729  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		17  729  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		18  729  ASSIGN/38                 $12=      16?4                 $11                 	;0
		19  729  JMPZ_EX/46                #13=      $12                  ?22                 	;0	>>22
		20  729  ISSET_ISEMPTY_DIM_OBJ/115 #14=      16?4                 11:'data'           	;33554432
		21  729  BOOL/52                   #13=      #14                  ?0                  	;0
		22  729  BOOL_NOT/13               #15=      #13                  ?0                  	;0	<<19
		23  729  JMPZ/43                   ?0        #15                  ?25                 	;0	>>25
		24  730  GOTO/253                  ?0        ?4                   ?12                 	;0
		25  732  GOTO/253                  ?0        ?26                  ?13                 	;0	<<23
		26  734  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'is_numeric'     	;1
		27  734  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		28  734  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		29  734  BOOL_NOT/13               #17=      $16                  ?0                  	;0
		30  734  JMPZ/43                   ?0        #17                  ?32                 	;0	>>32
		31  735  GOTO/253                  ?0        ?4                   ?16                 	;0
		32  737  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'intval'         	;1	<<30
		33  737  FETCH_DIM_FUNC_ARG/93     $18=      16?3                 19:'credits'        	;1
		34  737  SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
		35  737  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		36  737  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'intval'         	;1
		37  737  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		38  737  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		39  737  SUB/2                     #21=      $19                  $20                 	;0
		40  737  ASSIGN/38                 ?15       16?5                 #21                 	;0
		41  738  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'intval'         	;1
		42  738  FETCH_DIM_FUNC_ARG/93     $23=      16?4                 24:'data'           	;1
		43  738  FETCH_DIM_FUNC_ARG/93     $24=      $23                  25:'credits'        	;1
		44  738  SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
		45  738  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
		46  738  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'intval'         	;1
		47  738  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		48  738  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
		49  738  ADD/1                     #27=      $25                  $26                 	;0
		50  738  ASSIGN/38                 ?21       16?6                 #27                 	;0
		51  739  IS_SMALLER_OR_EQUAL/20    #29=      28:0                 16?6                	;0
		52  739  JMPZ_EX/46                #29=      #29                  ?55                 	;0	>>55
		53  739  IS_SMALLER_OR_EQUAL/20    #30=      29:0                 16?5                	;0
		54  739  BOOL/52                   #29=      #30                  ?0                  	;0
		55  739  BOOL_NOT/13               #31=      #29                  ?0                  	;0	<<52
		56  739  JMPZ/43                   ?0        #31                  ?58                 	;0	>>58
		57  740  GOTO/253                  ?0        ?110                 ?30                 	;0
		58  742  FETCH_STATIC_PROP_R/173   $32=      31:'db'              ?513                	;0	<<56
		59  742  INIT_METHOD_CALL/112      ?0        $32                  32:'query'          	;3
		60  742  SEND_VAL_EX/116           ?80       34:'UPDATE `users` SET `credits` = ? WHERE `id` = ?;' ?1                  	;0
		61  742  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
		62  742  FETCH_DIM_FUNC_ARG/93     $33=      16?3                 35:'id'             	;3
		63  742  SEND_VAR_EX/66            ?112      $33                  ?3                  	;0
		64  742  DO_FCALL/60               ?27       ?0                   ?0                  	;0
		65  743  GOTO/253                  ?0        ?66                  ?36                 	;0
		66  745  FETCH_STATIC_PROP_R/173   $35=      37:'db'              ?513                	;0
		67  745  INIT_METHOD_CALL/112      ?0        $35                  38:'query'          	;3
		68  745  SEND_VAL_EX/116           ?80       40:'UPDATE `users` SET `credits` = ? WHERE `id` = ?;' ?1                  	;0
		69  745  SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
		70  745  FETCH_DIM_FUNC_ARG/93     $36=      16?4                 41:'data'           	;3
		71  745  FETCH_DIM_FUNC_ARG/93     $37=      $36                  42:'id'             	;3
		72  745  SEND_VAR_EX/66            ?112      $37                  ?3                  	;0
		73  745  DO_FCALL/60               ?31       ?0                   ?0                  	;0
		74  746  FETCH_STATIC_PROP_R/173   $39=      43:'db'              ?513                	;0
		75  746  INIT_METHOD_CALL/112      ?0        $39                  44:'query'          	;6
		76  746  SEND_VAL_EX/116           ?80       46:'INSERT INTO `users_credits_logs`(`target_id`, `admin_id`, `amount`, `date`, `reason`) VALUES(?, ?, ?, ?, ?);' ?1                  	;0
		77  746  FETCH_DIM_FUNC_ARG/93     $40=      16?4                 47:'data'           	;2
		78  746  FETCH_DIM_FUNC_ARG/93     $41=      $40                  48:'id'             	;2
		79  746  SEND_VAR_EX/66            ?96       $41                  ?2                  	;0
		80  746  FETCH_DIM_FUNC_ARG/93     $42=      16?3                 49:'id'             	;3
		81  746  SEND_VAR_EX/66            ?112      $42                  ?3                  	;0
		82  746  SEND_VAR_EX/66            ?128      16?1                 ?4                  	;0
		83  746  INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'time'           	;0
		84  746  DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
		85  746  SEND_VAR_NO_REF_EX/50     ?144      $43                  ?5                  	;0
		86  746  SEND_VAR_EX/66            ?160      16?2                 ?6                  	;0
		87  746  DO_FCALL/60               ?37       ?0                   ?0                  	;0
		88  747  FETCH_STATIC_PROP_R/173   $45=      52:'db'              ?513                	;0
		89  747  INIT_METHOD_CALL/112      ?0        $45                  53:'query'          	;8
		90  747  SEND_VAL_EX/116           ?80       55:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'user\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
		91  747  FETCH_DIM_FUNC_ARG/93     $46=      16?3                 56:'id'             	;2
		92  747  SEND_VAR_EX/66            ?96       $46                  ?2                  	;0
		93  747  SEND_VAL_EX/116           ?112      57:'adjust_credits'  ?3                  	;0
		94  747  SEND_VAR_EX/66            ?128      16?0                 ?4                  	;0
		95  747  INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'intval'         	;1
		96  747  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		97  747  DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
		98  747  SEND_VAR_NO_REF_EX/50     ?144      $47                  ?5                  	;0
		99  747  SEND_VAR_EX/66            ?160      16?5                 ?6                  	;0
		100 747  INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'time'           	;0
		101 747  DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
		102 747  SEND_VAR_NO_REF_EX/50     ?176      $48                  ?7                  	;0
		103 747  INIT_FCALL_BY_NAME/59     ?0        ?0                   62:'json_encode'    	;1
		104 747  FETCH_DIM_FUNC_ARG/93     $49=      16?4                 64:'data'           	;1
		105 747  SEND_VAR_EX/66            ?80       $49                  ?1                  	;0
		106 747  DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
		107 747  SEND_VAR_NO_REF_EX/50     ?192      $50                  ?8                  	;0
		108 747  DO_FCALL/60               ?44       ?0                   ?0                  	;0
		109 748  RETURN/62                 ?0        65:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		110 750  GOTO/253                  ?0        ?4                   ?66                 	;0
		111 752  NOP/0                     ?0        67:NULL              ?0                  	;4294967295
		*/
	}
}

function parseError($F647a429f8089f01)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   160  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   162  BIND_GLOBAL/168           ?0        16?1                 0:'A15af5ebe30b3cdc'	;0
	2   163  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 1:'status'          	;33554432
	3   163  JMPZ_EX/46                #2=       #2                   ?9                  	;0	>>9
	4   163  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_numeric'      	;1
	5   163  FETCH_DIM_FUNC_ARG/93     $3=       16?0                 4:'status'          	;1
	6   163  SEND_VAR_EX/66            ?80       $3                   ?1                  	;0
	7   163  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	8   163  BOOL/52                   #2=       $4                   ?0                  	;0
	9   163  BOOL_NOT/13               #5=       #2                   ?0                  	;0	<<3
	10  163  JMPZ/43                   ?0        #5                   ?12                 	;0	>>12
	11  164  GOTO/253                  ?0        ?16                  ?5                  	;0
	12  166  FETCH_DIM_R/81            $7=       16?0                 7:'status'          	;0	<<10
	13  166  FETCH_DIM_R/81            $8=       16?1                 $7                  	;0
	14  166  ASSIGN_DIM/147            ?4        16?0                 6:'status'          	;0
	15  166  OP_DATA/137               ?0        $8                   ?0                  	;0
	16  168  JMPZ/43                   ?0        16?0                 ?18                 	;0	>>18
	17  169  GOTO/253                  ?0        ?20                  ?8                  	;0
	18  171  ASSIGN_DIM/147            ?7        16?0                 9:'status'          	;0	<<16
	19  171  OP_DATA/137               ?0        10:'STATUS_NO_PERMISSIONS' ?0                  	;0
	20  173  RETURN/62                 ?0        16?0                 ?0                  	;0
	21  174  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?603                 ?0                  	;0	>>603
1   5    GOTO/253                  ?0        ?9                   ?1                  	;0
2   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'explode'         	;2
3   7    SEND_VAL_EX/116           ?80       4:','                ?1                  	;0
4   7    FETCH_STATIC_PROP_FUNC_ARG/177 $11=      5:'rRequest'         6:'XUI'             	;2
5   7    FETCH_DIM_FUNC_ARG/93     $12=      $11                  8:'show_columns'    	;2
6   7    SEND_VAR_EX/66            ?96       $12                  ?2                  	;0
7   7    DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
8   7    ASSIGN/38                 ?3        16?0                 $13                 	;0
9   9    FETCH_STATIC_PROP_IS/176  $15=      9:'rRequest'         10:'XUI'            	;0
10  9    ISSET_ISEMPTY_DIM_OBJ/115 #16=      $15                  12:'hide_columns'   	;33554432
11  9    JMPZ/43                   ?0        #16                  ?13                 	;0	>>13
12  10   GOTO/253                  ?0        ?519                 ?13                 	;0
13  12   GOTO/253                  ?0        ?517                 ?14                 	;0	<<11
14  14   SWITCH_STRING/188         ?0        16?1                 15:array (
  'packages' => 88,
  'user_info' => 100,
  'get_lines' => 112,
  'get_mags' => 125,
  'get_enigmas' => 138,
  'get_users' => 151,
  'activity_logs' => 164,
  'live_connections' => 177,
  'user_logs' => 190,
  'get_line' => 203,
  'create_line' => 218,
  'edit_line' => 227,
  'delete_line' => 241,
  'disable_line' => 251,
  'enable_line' => 261,
  'get_mag' => 271,
  'create_mag' => 286,
  'edit_mag' => 295,
  'delete_mag' => 309,
  'disable_mag' => 319,
  'enable_mag' => 329,
  'convert_mag' => 339,
  'get_enigma' => 349,
  'create_enigma' => 364,
  'edit_enigma' => 373,
  'delete_enigma' => 387,
  'disable_enigma' => 397,
  'enable_enigma' => 407,
  'convert_enigma' => 417,
  'get_user' => 427,
  'create_user' => 449,
  'edit_user' => 457,
  'delete_user' => 469,
  'disable_user' => 478,
  'enable_user' => 487,
  'adjust_credits' => 496,
)	;511
15  15   CASE/48                   #17=      16?1                 16:'packages'       	;0	>>17
16  15   JMPNZ/44                  ?0        #17                  ?88                 	;0	>>88
17  18   CASE/48                   #17=      16?1                 17:'user_info'      	;0	>>19	<<15
18  18   JMPNZ/44                  ?0        #17                  ?100                	;0	>>100
19  21   CASE/48                   #17=      16?1                 18:'get_lines'      	;0	>>21	<<17
20  21   JMPNZ/44                  ?0        #17                  ?112                	;0	>>112
21  24   CASE/48                   #17=      16?1                 19:'get_mags'       	;0	>>23	<<19
22  24   JMPNZ/44                  ?0        #17                  ?125                	;0	>>125
23  27   CASE/48                   #17=      16?1                 20:'get_enigmas'    	;0	>>25	<<21
24  27   JMPNZ/44                  ?0        #17                  ?138                	;0	>>138
25  30   CASE/48                   #17=      16?1                 21:'get_users'      	;0	>>27	<<23
26  30   JMPNZ/44                  ?0        #17                  ?151                	;0	>>151
27  33   CASE/48                   #17=      16?1                 22:'activity_logs'  	;0	>>29	<<25
28  33   JMPNZ/44                  ?0        #17                  ?164                	;0	>>164
29  36   CASE/48                   #17=      16?1                 23:'live_connections'	;0	>>31	<<27
30  36   JMPNZ/44                  ?0        #17                  ?177                	;0	>>177
31  39   CASE/48                   #17=      16?1                 24:'user_logs'      	;0	>>33	<<29
32  39   JMPNZ/44                  ?0        #17                  ?190                	;0	>>190
33  42   CASE/48                   #17=      16?1                 25:'get_line'       	;0	>>35	<<31
34  42   JMPNZ/44                  ?0        #17                  ?203                	;0	>>203
35  45   CASE/48                   #17=      16?1                 26:'create_line'    	;0	>>37	<<33
36  45   JMPNZ/44                  ?0        #17                  ?218                	;0	>>218
37  48   CASE/48                   #17=      16?1                 27:'edit_line'      	;0	>>39	<<35
38  48   JMPNZ/44                  ?0        #17                  ?227                	;0	>>227
39  53   CASE/48                   #17=      16?1                 28:'delete_line'    	;0	>>41	<<37
40  53   JMPNZ/44                  ?0        #17                  ?241                	;0	>>241
41  56   CASE/48                   #17=      16?1                 29:'disable_line'   	;0	>>43	<<39
42  56   JMPNZ/44                  ?0        #17                  ?251                	;0	>>251
43  59   CASE/48                   #17=      16?1                 30:'enable_line'    	;0	>>45	<<41
44  59   JMPNZ/44                  ?0        #17                  ?261                	;0	>>261
45  62   CASE/48                   #17=      16?1                 31:'get_mag'        	;0	>>47	<<43
46  62   JMPNZ/44                  ?0        #17                  ?271                	;0	>>271
47  65   CASE/48                   #17=      16?1                 32:'create_mag'     	;0	>>49	<<45
48  65   JMPNZ/44                  ?0        #17                  ?286                	;0	>>286
49  68   CASE/48                   #17=      16?1                 33:'edit_mag'       	;0	>>51	<<47
50  68   JMPNZ/44                  ?0        #17                  ?295                	;0	>>295
51  73   CASE/48                   #17=      16?1                 34:'delete_mag'     	;0	>>53	<<49
52  73   JMPNZ/44                  ?0        #17                  ?309                	;0	>>309
53  76   CASE/48                   #17=      16?1                 35:'disable_mag'    	;0	>>55	<<51
54  76   JMPNZ/44                  ?0        #17                  ?319                	;0	>>319
55  79   CASE/48                   #17=      16?1                 36:'enable_mag'     	;0	>>57	<<53
56  79   JMPNZ/44                  ?0        #17                  ?329                	;0	>>329
57  82   CASE/48                   #17=      16?1                 37:'convert_mag'    	;0	>>59	<<55
58  82   JMPNZ/44                  ?0        #17                  ?339                	;0	>>339
59  85   CASE/48                   #17=      16?1                 38:'get_enigma'     	;0	>>61	<<57
60  85   JMPNZ/44                  ?0        #17                  ?349                	;0	>>349
61  88   CASE/48                   #17=      16?1                 39:'create_enigma'  	;0	>>63	<<59
62  88   JMPNZ/44                  ?0        #17                  ?364                	;0	>>364
63  91   CASE/48                   #17=      16?1                 40:'edit_enigma'    	;0	>>65	<<61
64  91   JMPNZ/44                  ?0        #17                  ?373                	;0	>>373
65  96   CASE/48                   #17=      16?1                 41:'delete_enigma'  	;0	>>67	<<63
66  96   JMPNZ/44                  ?0        #17                  ?387                	;0	>>387
67  99   CASE/48                   #17=      16?1                 42:'disable_enigma' 	;0	>>69	<<65
68  99   JMPNZ/44                  ?0        #17                  ?397                	;0	>>397
69  102  CASE/48                   #17=      16?1                 43:'enable_enigma'  	;0	>>71	<<67
70  102  JMPNZ/44                  ?0        #17                  ?407                	;0	>>407
71  105  CASE/48                   #17=      16?1                 44:'convert_enigma' 	;0	>>73	<<69
72  105  JMPNZ/44                  ?0        #17                  ?417                	;0	>>417
73  108  CASE/48                   #17=      16?1                 45:'get_user'       	;0	>>75	<<71
74  108  JMPNZ/44                  ?0        #17                  ?427                	;0	>>427
75  116  CASE/48                   #17=      16?1                 46:'create_user'    	;0	>>77	<<73
76  116  JMPNZ/44                  ?0        #17                  ?449                	;0	>>449
77  119  CASE/48                   #17=      16?1                 47:'edit_user'      	;0	>>79	<<75
78  119  JMPNZ/44                  ?0        #17                  ?457                	;0	>>457
79  124  CASE/48                   #17=      16?1                 48:'delete_user'    	;0	>>81	<<77
80  124  JMPNZ/44                  ?0        #17                  ?469                	;0	>>469
81  127  CASE/48                   #17=      16?1                 49:'disable_user'   	;0	>>83	<<79
82  127  JMPNZ/44                  ?0        #17                  ?478                	;0	>>478
83  130  CASE/48                   #17=      16?1                 50:'enable_user'    	;0	>>85	<<81
84  130  JMPNZ/44                  ?0        #17                  ?487                	;0	>>487
85  133  CASE/48                   #17=      16?1                 51:'adjust_credits' 	;0	>>87	<<83
86  133  JMPNZ/44                  ?0        #17                  ?496                	;0	>>496
87  133  JMP/42                    ?0        ?511                 ?0                  	;0	>>511	<<85
88  16   INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'json_encode'    	;1	<<16
89  16   INIT_STATIC_METHOD_CALL/113 ?0        54:'APIWrapper'      56:'filterRow'      	;3
90  16   INIT_STATIC_METHOD_CALL/113 ?0        58:'APIWrapper'      60:'D117E45424fE8F00'	;0
91  16   DO_FCALL/60               $18=      ?0                   ?0                  	;0
92  16   SEND_VAR_NO_REF_EX/50     ?80       $18                  ?1                  	;0
93  16   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
94  16   SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
95  16   DO_FCALL/60               $19=      ?0                   ?0                  	;0
96  16   SEND_VAR_NO_REF_EX/50     ?80       $19                  ?1                  	;0
97  16   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
98  16   ECHO/40                   ?0        $20                  ?0                  	;0
99  17   GOTO/253                  ?0        ?516                 ?62                 	;0
100 19   INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'json_encode'    	;1	<<18
101 19   INIT_STATIC_METHOD_CALL/113 ?0        65:'APIWrapper'      67:'filterRow'      	;3
102 19   INIT_STATIC_METHOD_CALL/113 ?0        69:'APIWrapper'      71:'Cc988751EeBbf271'	;0
103 19   DO_FCALL/60               $21=      ?0                   ?0                  	;0
104 19   SEND_VAR_NO_REF_EX/50     ?80       $21                  ?1                  	;0
105 19   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
106 19   SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
107 19   DO_FCALL/60               $22=      ?0                   ?0                  	;0
108 19   SEND_VAR_NO_REF_EX/50     ?80       $22                  ?1                  	;0
109 19   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
110 19   ECHO/40                   ?0        $23                  ?0                  	;0
111 20   GOTO/253                  ?0        ?516                 ?73                 	;0
112 22   INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'json_encode'    	;1	<<20
113 22   INIT_STATIC_METHOD_CALL/113 ?0        76:'APIWrapper'      78:'TableAPI'       	;6
114 22   SEND_VAL_EX/116           ?80       80:'lines'           ?1                  	;0
115 22   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
116 22   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
117 22   SEND_VAR_EX/66            ?128      16?5                 ?4                  	;0
118 22   SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
119 22   SEND_VAR_EX/66            ?160      16?2                 ?6                  	;0
120 22   DO_FCALL/60               $24=      ?0                   ?0                  	;0
121 22   SEND_VAR_NO_REF_EX/50     ?80       $24                  ?1                  	;0
122 22   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
123 22   ECHO/40                   ?0        $25                  ?0                  	;0
124 23   GOTO/253                  ?0        ?516                 ?81                 	;0
125 25   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'json_encode'    	;1	<<22
126 25   INIT_STATIC_METHOD_CALL/113 ?0        84:'APIWrapper'      86:'TableAPI'       	;6
127 25   SEND_VAL_EX/116           ?80       88:'mags'            ?1                  	;0
128 25   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
129 25   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
130 25   SEND_VAR_EX/66            ?128      16?5                 ?4                  	;0
131 25   SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
132 25   SEND_VAR_EX/66            ?160      16?2                 ?6                  	;0
133 25   DO_FCALL/60               $26=      ?0                   ?0                  	;0
134 25   SEND_VAR_NO_REF_EX/50     ?80       $26                  ?1                  	;0
135 25   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
136 25   ECHO/40                   ?0        $27                  ?0                  	;0
137 26   GOTO/253                  ?0        ?516                 ?89                 	;0
138 28   INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'json_encode'    	;1	<<24
139 28   INIT_STATIC_METHOD_CALL/113 ?0        92:'APIWrapper'      94:'TableAPI'       	;6
140 28   SEND_VAL_EX/116           ?80       96:'enigmas'         ?1                  	;0
141 28   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
142 28   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
143 28   SEND_VAR_EX/66            ?128      16?5                 ?4                  	;0
144 28   SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
145 28   SEND_VAR_EX/66            ?160      16?2                 ?6                  	;0
146 28   DO_FCALL/60               $28=      ?0                   ?0                  	;0
147 28   SEND_VAR_NO_REF_EX/50     ?80       $28                  ?1                  	;0
148 28   DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
149 28   ECHO/40                   ?0        $29                  ?0                  	;0
150 29   GOTO/253                  ?0        ?516                 ?97                 	;0
151 31   INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'json_encode'    	;1	<<26
152 31   INIT_STATIC_METHOD_CALL/113 ?0        100:'APIWrapper'     102:'TableAPI'      	;6
153 31   SEND_VAL_EX/116           ?80       104:'reg_users'      ?1                  	;0
154 31   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
155 31   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
156 31   SEND_VAR_EX/66            ?128      16?5                 ?4                  	;0
157 31   SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
158 31   SEND_VAR_EX/66            ?160      16?2                 ?6                  	;0
159 31   DO_FCALL/60               $30=      ?0                   ?0                  	;0
160 31   SEND_VAR_NO_REF_EX/50     ?80       $30                  ?1                  	;0
161 31   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
162 31   ECHO/40                   ?0        $31                  ?0                  	;0
163 32   GOTO/253                  ?0        ?516                 ?105                	;0
164 34   INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'json_encode'   	;1	<<28
165 34   INIT_STATIC_METHOD_CALL/113 ?0        108:'APIWrapper'     110:'TableAPI'      	;6
166 34   SEND_VAL_EX/116           ?80       112:'line_activity'  ?1                  	;0
167 34   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
168 34   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
169 34   SEND_VAR_EX/66            ?128      16?5                 ?4                  	;0
170 34   SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
171 34   SEND_VAR_EX/66            ?160      16?2                 ?6                  	;0
172 34   DO_FCALL/60               $32=      ?0                   ?0                  	;0
173 34   SEND_VAR_NO_REF_EX/50     ?80       $32                  ?1                  	;0
174 34   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
175 34   ECHO/40                   ?0        $33                  ?0                  	;0
176 35   GOTO/253                  ?0        ?516                 ?113                	;0
177 37   INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'json_encode'   	;1	<<30
178 37   INIT_STATIC_METHOD_CALL/113 ?0        116:'APIWrapper'     118:'TableAPI'      	;6
179 37   SEND_VAL_EX/116           ?80       120:'live_connections' ?1                  	;0
180 37   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
181 37   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
182 37   SEND_VAR_EX/66            ?128      16?5                 ?4                  	;0
183 37   SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
184 37   SEND_VAR_EX/66            ?160      16?2                 ?6                  	;0
185 37   DO_FCALL/60               $34=      ?0                   ?0                  	;0
186 37   SEND_VAR_NO_REF_EX/50     ?80       $34                  ?1                  	;0
187 37   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
188 37   ECHO/40                   ?0        $35                  ?0                  	;0
189 38   GOTO/253                  ?0        ?516                 ?121                	;0
190 40   INIT_FCALL_BY_NAME/59     ?0        ?0                   122:'json_encode'   	;1	<<32
191 40   INIT_STATIC_METHOD_CALL/113 ?0        124:'APIWrapper'     126:'TableAPI'      	;6
192 40   SEND_VAL_EX/116           ?80       128:'reg_user_logs'  ?1                  	;0
193 40   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
194 40   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
195 40   SEND_VAR_EX/66            ?128      16?5                 ?4                  	;0
196 40   SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
197 40   SEND_VAR_EX/66            ?160      16?2                 ?6                  	;0
198 40   DO_FCALL/60               $36=      ?0                   ?0                  	;0
199 40   SEND_VAR_NO_REF_EX/50     ?80       $36                  ?1                  	;0
200 40   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
201 40   ECHO/40                   ?0        $37                  ?0                  	;0
202 41   GOTO/253                  ?0        ?516                 ?129                	;0
203 43   INIT_FCALL_BY_NAME/59     ?0        ?0                   130:'json_encode'   	;1	<<34
204 43   INIT_STATIC_METHOD_CALL/113 ?0        132:'APIWrapper'     134:'filterRow'     	;3
205 43   INIT_STATIC_METHOD_CALL/113 ?0        136:'APIWrapper'     138:'getLine'       	;1
206 43   FETCH_STATIC_PROP_FUNC_ARG/177 $38=      140:'rRequest'       141:'XUI'           	;1
207 43   FETCH_DIM_FUNC_ARG/93     $39=      $38                  143:'id'            	;1
208 43   SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
209 43   DO_FCALL/60               $40=      ?0                   ?0                  	;0
210 43   SEND_VAR_NO_REF_EX/50     ?80       $40                  ?1                  	;0
211 43   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
212 43   SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
213 43   DO_FCALL/60               $41=      ?0                   ?0                  	;0
214 43   SEND_VAR_NO_REF_EX/50     ?80       $41                  ?1                  	;0
215 43   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
216 43   ECHO/40                   ?0        $42                  ?0                  	;0
217 44   GOTO/253                  ?0        ?516                 ?144                	;0
218 46   INIT_FCALL_BY_NAME/59     ?0        ?0                   145:'json_encode'   	;1	<<36
219 46   INIT_STATIC_METHOD_CALL/113 ?0        147:'APIWrapper'     149:'createLine'    	;1
220 46   FETCH_STATIC_PROP_FUNC_ARG/177 $43=      151:'rRequest'       152:'XUI'           	;1
221 46   SEND_VAR_EX/66            ?80       $43                  ?1                  	;0
222 46   DO_FCALL/60               $44=      ?0                   ?0                  	;0
223 46   SEND_VAR_NO_REF_EX/50     ?80       $44                  ?1                  	;0
224 46   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
225 46   ECHO/40                   ?0        $45                  ?0                  	;0
226 47   GOTO/253                  ?0        ?516                 ?154                	;0
227 49   FETCH_STATIC_PROP_R/173   $46=      155:'rRequest'       156:'XUI'           	;0	<<38
228 49   ASSIGN/38                 ?36       16?5                 $46                 	;0
229 50   UNSET_DIM/75              ?0        16?5                 158:'id'            	;0
230 51   INIT_FCALL_BY_NAME/59     ?0        ?0                   159:'json_encode'   	;1
231 51   INIT_STATIC_METHOD_CALL/113 ?0        161:'APIWrapper'     163:'editLine'      	;2
232 51   FETCH_STATIC_PROP_FUNC_ARG/177 $48=      165:'rRequest'       166:'XUI'           	;1
233 51   FETCH_DIM_FUNC_ARG/93     $49=      $48                  168:'id'            	;1
234 51   SEND_VAR_EX/66            ?80       $49                  ?1                  	;0
235 51   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
236 51   DO_FCALL/60               $50=      ?0                   ?0                  	;0
237 51   SEND_VAR_NO_REF_EX/50     ?80       $50                  ?1                  	;0
238 51   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
239 51   ECHO/40                   ?0        $51                  ?0                  	;0
240 52   GOTO/253                  ?0        ?516                 ?169                	;0
241 54   INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'json_encode'   	;1	<<40
242 54   INIT_STATIC_METHOD_CALL/113 ?0        172:'APIWrapper'     174:'ca81C8F24C099495'	;1
243 54   FETCH_STATIC_PROP_FUNC_ARG/177 $52=      176:'rRequest'       177:'XUI'           	;1
244 54   FETCH_DIM_FUNC_ARG/93     $53=      $52                  179:'id'            	;1
245 54   SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
246 54   DO_FCALL/60               $54=      ?0                   ?0                  	;0
247 54   SEND_VAR_NO_REF_EX/50     ?80       $54                  ?1                  	;0
248 54   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
249 54   ECHO/40                   ?0        $55                  ?0                  	;0
250 55   GOTO/253                  ?0        ?516                 ?180                	;0
251 57   INIT_FCALL_BY_NAME/59     ?0        ?0                   181:'json_encode'   	;1	<<42
252 57   INIT_STATIC_METHOD_CALL/113 ?0        183:'APIWrapper'     185:'disableLine'   	;1
253 57   FETCH_STATIC_PROP_FUNC_ARG/177 $56=      187:'rRequest'       188:'XUI'           	;1
254 57   FETCH_DIM_FUNC_ARG/93     $57=      $56                  190:'id'            	;1
255 57   SEND_VAR_EX/66            ?80       $57                  ?1                  	;0
256 57   DO_FCALL/60               $58=      ?0                   ?0                  	;0
257 57   SEND_VAR_NO_REF_EX/50     ?80       $58                  ?1                  	;0
258 57   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
259 57   ECHO/40                   ?0        $59                  ?0                  	;0
260 58   GOTO/253                  ?0        ?516                 ?191                	;0
261 60   INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'json_encode'   	;1	<<44
262 60   INIT_STATIC_METHOD_CALL/113 ?0        194:'APIWrapper'     196:'enableLine'    	;1
263 60   FETCH_STATIC_PROP_FUNC_ARG/177 $60=      198:'rRequest'       199:'XUI'           	;1
264 60   FETCH_DIM_FUNC_ARG/93     $61=      $60                  201:'id'            	;1
265 60   SEND_VAR_EX/66            ?80       $61                  ?1                  	;0
266 60   DO_FCALL/60               $62=      ?0                   ?0                  	;0
267 60   SEND_VAR_NO_REF_EX/50     ?80       $62                  ?1                  	;0
268 60   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
269 60   ECHO/40                   ?0        $63                  ?0                  	;0
270 61   GOTO/253                  ?0        ?516                 ?202                	;0
271 63   INIT_FCALL_BY_NAME/59     ?0        ?0                   203:'json_encode'   	;1	<<46
272 63   INIT_STATIC_METHOD_CALL/113 ?0        205:'APIWrapper'     207:'filterRow'     	;3
273 63   INIT_STATIC_METHOD_CALL/113 ?0        209:'APIWrapper'     211:'d6bcc99e8BAfa737'	;1
274 63   FETCH_STATIC_PROP_FUNC_ARG/177 $64=      213:'rRequest'       214:'XUI'           	;1
275 63   FETCH_DIM_FUNC_ARG/93     $65=      $64                  216:'id'            	;1
276 63   SEND_VAR_EX/66            ?80       $65                  ?1                  	;0
277 63   DO_FCALL/60               $66=      ?0                   ?0                  	;0
278 63   SEND_VAR_NO_REF_EX/50     ?80       $66                  ?1                  	;0
279 63   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
280 63   SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
281 63   DO_FCALL/60               $67=      ?0                   ?0                  	;0
282 63   SEND_VAR_NO_REF_EX/50     ?80       $67                  ?1                  	;0
283 63   DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
284 63   ECHO/40                   ?0        $68                  ?0                  	;0
285 64   GOTO/253                  ?0        ?516                 ?217                	;0
286 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'json_encode'   	;1	<<48
287 66   INIT_STATIC_METHOD_CALL/113 ?0        220:'APIWrapper'     222:'createMAG'     	;1
288 66   FETCH_STATIC_PROP_FUNC_ARG/177 $69=      224:'rRequest'       225:'XUI'           	;1
289 66   SEND_VAR_EX/66            ?80       $69                  ?1                  	;0
290 66   DO_FCALL/60               $70=      ?0                   ?0                  	;0
291 66   SEND_VAR_NO_REF_EX/50     ?80       $70                  ?1                  	;0
292 66   DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
293 66   ECHO/40                   ?0        $71                  ?0                  	;0
294 67   GOTO/253                  ?0        ?516                 ?227                	;0
295 69   FETCH_STATIC_PROP_R/173   $72=      228:'rRequest'       229:'XUI'           	;0	<<50
296 69   ASSIGN/38                 ?62       16?5                 $72                 	;0
297 70   UNSET_DIM/75              ?0        16?5                 231:'id'            	;0
298 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   232:'json_encode'   	;1
299 71   INIT_STATIC_METHOD_CALL/113 ?0        234:'APIWrapper'     236:'editMAG'       	;2
300 71   FETCH_STATIC_PROP_FUNC_ARG/177 $74=      238:'rRequest'       239:'XUI'           	;1
301 71   FETCH_DIM_FUNC_ARG/93     $75=      $74                  241:'id'            	;1
302 71   SEND_VAR_EX/66            ?80       $75                  ?1                  	;0
303 71   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
304 71   DO_FCALL/60               $76=      ?0                   ?0                  	;0
305 71   SEND_VAR_NO_REF_EX/50     ?80       $76                  ?1                  	;0
306 71   DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
307 71   ECHO/40                   ?0        $77                  ?0                  	;0
308 72   GOTO/253                  ?0        ?516                 ?242                	;0
309 74   INIT_FCALL_BY_NAME/59     ?0        ?0                   243:'json_encode'   	;1	<<52
310 74   INIT_STATIC_METHOD_CALL/113 ?0        245:'APIWrapper'     247:'B3E7Cdf7Ac99ab57'	;1
311 74   FETCH_STATIC_PROP_FUNC_ARG/177 $78=      249:'rRequest'       250:'XUI'           	;1
312 74   FETCH_DIM_FUNC_ARG/93     $79=      $78                  252:'id'            	;1
313 74   SEND_VAR_EX/66            ?80       $79                  ?1                  	;0
314 74   DO_FCALL/60               $80=      ?0                   ?0                  	;0
315 74   SEND_VAR_NO_REF_EX/50     ?80       $80                  ?1                  	;0
316 74   DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
317 74   ECHO/40                   ?0        $81                  ?0                  	;0
318 75   GOTO/253                  ?0        ?516                 ?253                	;0
319 77   INIT_FCALL_BY_NAME/59     ?0        ?0                   254:'json_encode'   	;1	<<54
320 77   INIT_STATIC_METHOD_CALL/113 ?0        256:'APIWrapper'     258:'disableMAG'    	;1
321 77   FETCH_STATIC_PROP_FUNC_ARG/177 $82=      260:'rRequest'       261:'XUI'           	;1
322 77   FETCH_DIM_FUNC_ARG/93     $83=      $82                  263:'id'            	;1
323 77   SEND_VAR_EX/66            ?80       $83                  ?1                  	;0
324 77   DO_FCALL/60               $84=      ?0                   ?0                  	;0
325 77   SEND_VAR_NO_REF_EX/50     ?80       $84                  ?1                  	;0
326 77   DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
327 77   ECHO/40                   ?0        $85                  ?0                  	;0
328 78   GOTO/253                  ?0        ?516                 ?264                	;0
329 80   INIT_FCALL_BY_NAME/59     ?0        ?0                   265:'json_encode'   	;1	<<56
330 80   INIT_STATIC_METHOD_CALL/113 ?0        267:'APIWrapper'     269:'enableMAG'     	;1
331 80   FETCH_STATIC_PROP_FUNC_ARG/177 $86=      271:'rRequest'       272:'XUI'           	;1
332 80   FETCH_DIM_FUNC_ARG/93     $87=      $86                  274:'id'            	;1
333 80   SEND_VAR_EX/66            ?80       $87                  ?1                  	;0
334 80   DO_FCALL/60               $88=      ?0                   ?0                  	;0
335 80   SEND_VAR_NO_REF_EX/50     ?80       $88                  ?1                  	;0
336 80   DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
337 80   ECHO/40                   ?0        $89                  ?0                  	;0
338 81   GOTO/253                  ?0        ?516                 ?275                	;0
339 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   276:'json_encode'   	;1	<<58
340 83   INIT_STATIC_METHOD_CALL/113 ?0        278:'APIWrapper'     280:'convertMAG'    	;1
341 83   FETCH_STATIC_PROP_FUNC_ARG/177 $90=      282:'rRequest'       283:'XUI'           	;1
342 83   FETCH_DIM_FUNC_ARG/93     $91=      $90                  285:'id'            	;1
343 83   SEND_VAR_EX/66            ?80       $91                  ?1                  	;0
344 83   DO_FCALL/60               $92=      ?0                   ?0                  	;0
345 83   SEND_VAR_NO_REF_EX/50     ?80       $92                  ?1                  	;0
346 83   DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
347 83   ECHO/40                   ?0        $93                  ?0                  	;0
348 84   GOTO/253                  ?0        ?516                 ?286                	;0
349 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'json_encode'   	;1	<<60
350 86   INIT_STATIC_METHOD_CALL/113 ?0        289:'APIWrapper'     291:'filterRow'     	;3
351 86   INIT_STATIC_METHOD_CALL/113 ?0        293:'APIWrapper'     295:'ab9dd80290F141DE'	;1
352 86   FETCH_STATIC_PROP_FUNC_ARG/177 $94=      297:'rRequest'       298:'XUI'           	;1
353 86   FETCH_DIM_FUNC_ARG/93     $95=      $94                  300:'id'            	;1
354 86   SEND_VAR_EX/66            ?80       $95                  ?1                  	;0
355 86   DO_FCALL/60               $96=      ?0                   ?0                  	;0
356 86   SEND_VAR_NO_REF_EX/50     ?80       $96                  ?1                  	;0
357 86   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
358 86   SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
359 86   DO_FCALL/60               $97=      ?0                   ?0                  	;0
360 86   SEND_VAR_NO_REF_EX/50     ?80       $97                  ?1                  	;0
361 86   DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
362 86   ECHO/40                   ?0        $98                  ?0                  	;0
363 87   GOTO/253                  ?0        ?516                 ?301                	;0
364 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   302:'json_encode'   	;1	<<62
365 89   INIT_STATIC_METHOD_CALL/113 ?0        304:'APIWrapper'     306:'createEnigma'  	;1
366 89   FETCH_STATIC_PROP_FUNC_ARG/177 $99=      308:'rRequest'       309:'XUI'           	;1
367 89   SEND_VAR_EX/66            ?80       $99                  ?1                  	;0
368 89   DO_FCALL/60               $100=     ?0                   ?0                  	;0
369 89   SEND_VAR_NO_REF_EX/50     ?80       $100                 ?1                  	;0
370 89   DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
371 89   ECHO/40                   ?0        $101                 ?0                  	;0
372 90   GOTO/253                  ?0        ?516                 ?311                	;0
373 92   FETCH_STATIC_PROP_R/173   $102=     312:'rRequest'       313:'XUI'           	;0	<<64
374 92   ASSIGN/38                 ?92       16?5                 $102                	;0
375 93   UNSET_DIM/75              ?0        16?5                 315:'id'            	;0
376 94   INIT_FCALL_BY_NAME/59     ?0        ?0                   316:'json_encode'   	;1
377 94   INIT_STATIC_METHOD_CALL/113 ?0        318:'APIWrapper'     320:'editEnigma'    	;2
378 94   FETCH_STATIC_PROP_FUNC_ARG/177 $104=     322:'rRequest'       323:'XUI'           	;1
379 94   FETCH_DIM_FUNC_ARG/93     $105=     $104                 325:'id'            	;1
380 94   SEND_VAR_EX/66            ?80       $105                 ?1                  	;0
381 94   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
382 94   DO_FCALL/60               $106=     ?0                   ?0                  	;0
383 94   SEND_VAR_NO_REF_EX/50     ?80       $106                 ?1                  	;0
384 94   DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
385 94   ECHO/40                   ?0        $107                 ?0                  	;0
386 95   GOTO/253                  ?0        ?516                 ?326                	;0
387 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   327:'json_encode'   	;1	<<66
388 97   INIT_STATIC_METHOD_CALL/113 ?0        329:'APIWrapper'     331:'ad38e07A7561aCf3'	;1
389 97   FETCH_STATIC_PROP_FUNC_ARG/177 $108=     333:'rRequest'       334:'XUI'           	;1
390 97   FETCH_DIM_FUNC_ARG/93     $109=     $108                 336:'id'            	;1
391 97   SEND_VAR_EX/66            ?80       $109                 ?1                  	;0
392 97   DO_FCALL/60               $110=     ?0                   ?0                  	;0
393 97   SEND_VAR_NO_REF_EX/50     ?80       $110                 ?1                  	;0
394 97   DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
395 97   ECHO/40                   ?0        $111                 ?0                  	;0
396 98   GOTO/253                  ?0        ?516                 ?337                	;0
397 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   338:'json_encode'   	;1	<<68
398 100  INIT_STATIC_METHOD_CALL/113 ?0        340:'APIWrapper'     342:'disableEnigma' 	;1
399 100  FETCH_STATIC_PROP_FUNC_ARG/177 $112=     344:'rRequest'       345:'XUI'           	;1
400 100  FETCH_DIM_FUNC_ARG/93     $113=     $112                 347:'id'            	;1
401 100  SEND_VAR_EX/66            ?80       $113                 ?1                  	;0
402 100  DO_FCALL/60               $114=     ?0                   ?0                  	;0
403 100  SEND_VAR_NO_REF_EX/50     ?80       $114                 ?1                  	;0
404 100  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
405 100  ECHO/40                   ?0        $115                 ?0                  	;0
406 101  GOTO/253                  ?0        ?516                 ?348                	;0
407 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   349:'json_encode'   	;1	<<70
408 103  INIT_STATIC_METHOD_CALL/113 ?0        351:'APIWrapper'     353:'enableEnigma'  	;1
409 103  FETCH_STATIC_PROP_FUNC_ARG/177 $116=     355:'rRequest'       356:'XUI'           	;1
410 103  FETCH_DIM_FUNC_ARG/93     $117=     $116                 358:'id'            	;1
411 103  SEND_VAR_EX/66            ?80       $117                 ?1                  	;0
412 103  DO_FCALL/60               $118=     ?0                   ?0                  	;0
413 103  SEND_VAR_NO_REF_EX/50     ?80       $118                 ?1                  	;0
414 103  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
415 103  ECHO/40                   ?0        $119                 ?0                  	;0
416 104  GOTO/253                  ?0        ?516                 ?359                	;0
417 106  INIT_FCALL_BY_NAME/59     ?0        ?0                   360:'json_encode'   	;1	<<72
418 106  INIT_STATIC_METHOD_CALL/113 ?0        362:'APIWrapper'     364:'convertEnigma' 	;1
419 106  FETCH_STATIC_PROP_FUNC_ARG/177 $120=     366:'rRequest'       367:'XUI'           	;1
420 106  FETCH_DIM_FUNC_ARG/93     $121=     $120                 369:'id'            	;1
421 106  SEND_VAR_EX/66            ?80       $121                 ?1                  	;0
422 106  DO_FCALL/60               $122=     ?0                   ?0                  	;0
423 106  SEND_VAR_NO_REF_EX/50     ?80       $122                 ?1                  	;0
424 106  DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
425 106  ECHO/40                   ?0        $123                 ?0                  	;0
426 107  GOTO/253                  ?0        ?516                 ?370                	;0
427 109  INIT_FCALL_BY_NAME/59     ?0        ?0                   371:'in_array'      	;2	<<74
428 109  SEND_VAL_EX/116           ?80       373:'password'       ?1                  	;0
429 109  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
430 109  DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
431 109  JMPZ/43                   ?0        $124                 ?433                	;0	>>433
432 110  GOTO/253                  ?0        ?435                 ?374                	;0
433 112  ASSIGN_DIM/147            ?114      16?2                 ?4397406            	;0	<<431
434 112  OP_DATA/137               ?0        375:'password'       ?0                  	;0
435 114  INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'json_encode'   	;1
436 114  INIT_STATIC_METHOD_CALL/113 ?0        378:'APIWrapper'     380:'filterRow'     	;3
437 114  INIT_STATIC_METHOD_CALL/113 ?0        382:'APIWrapper'     384:'B349523ecb058d86'	;1
438 114  FETCH_DIM_FUNC_ARG/93     $126=     16?5                 386:'id'            	;1
439 114  SEND_VAR_EX/66            ?80       $126                 ?1                  	;0
440 114  DO_FCALL/60               $127=     ?0                   ?0                  	;0
441 114  SEND_VAR_NO_REF_EX/50     ?80       $127                 ?1                  	;0
442 114  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
443 114  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
444 114  DO_FCALL/60               $128=     ?0                   ?0                  	;0
445 114  SEND_VAR_NO_REF_EX/50     ?80       $128                 ?1                  	;0
446 114  DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
447 114  ECHO/40                   ?0        $129                 ?0                  	;0
448 115  GOTO/253                  ?0        ?516                 ?387                	;0
449 117  INIT_FCALL_BY_NAME/59     ?0        ?0                   388:'json_encode'   	;1	<<76
450 117  INIT_STATIC_METHOD_CALL/113 ?0        390:'APIWrapper'     392:'createUser'    	;1
451 117  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
452 117  DO_FCALL/60               $130=     ?0                   ?0                  	;0
453 117  SEND_VAR_NO_REF_EX/50     ?80       $130                 ?1                  	;0
454 117  DO_FCALL_BY_NAME/131      $131=     ?0                   ?0                  	;0
455 117  ECHO/40                   ?0        $131                 ?0                  	;0
456 118  GOTO/253                  ?0        ?516                 ?394                	;0
457 120  FETCH_DIM_R/81            $132=     16?5                 395:'id'            	;0	<<78
458 120  ASSIGN/38                 ?122      16?6                 $132                	;0
459 121  UNSET_DIM/75              ?0        16?5                 396:'id'            	;0
460 122  INIT_FCALL_BY_NAME/59     ?0        ?0                   397:'json_encode'   	;1
461 122  INIT_STATIC_METHOD_CALL/113 ?0        399:'APIWrapper'     401:'editUser'      	;2
462 122  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
463 122  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
464 122  DO_FCALL/60               $134=     ?0                   ?0                  	;0
465 122  SEND_VAR_NO_REF_EX/50     ?80       $134                 ?1                  	;0
466 122  DO_FCALL_BY_NAME/131      $135=     ?0                   ?0                  	;0
467 122  ECHO/40                   ?0        $135                 ?0                  	;0
468 123  GOTO/253                  ?0        ?516                 ?403                	;0
469 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   404:'json_encode'   	;1	<<80
470 125  INIT_STATIC_METHOD_CALL/113 ?0        406:'APIWrapper'     408:'D8c5152AAa448BDD'	;1
471 125  FETCH_DIM_FUNC_ARG/93     $136=     16?5                 410:'id'            	;1
472 125  SEND_VAR_EX/66            ?80       $136                 ?1                  	;0
473 125  DO_FCALL/60               $137=     ?0                   ?0                  	;0
474 125  SEND_VAR_NO_REF_EX/50     ?80       $137                 ?1                  	;0
475 125  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
476 125  ECHO/40                   ?0        $138                 ?0                  	;0
477 126  GOTO/253                  ?0        ?516                 ?411                	;0
478 128  INIT_FCALL_BY_NAME/59     ?0        ?0                   412:'json_encode'   	;1	<<82
479 128  INIT_STATIC_METHOD_CALL/113 ?0        414:'APIWrapper'     416:'disableUser'   	;1
480 128  FETCH_DIM_FUNC_ARG/93     $139=     16?5                 418:'id'            	;1
481 128  SEND_VAR_EX/66            ?80       $139                 ?1                  	;0
482 128  DO_FCALL/60               $140=     ?0                   ?0                  	;0
483 128  SEND_VAR_NO_REF_EX/50     ?80       $140                 ?1                  	;0
484 128  DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
485 128  ECHO/40                   ?0        $141                 ?0                  	;0
486 129  GOTO/253                  ?0        ?516                 ?419                	;0
487 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   420:'json_encode'   	;1	<<84
488 131  INIT_STATIC_METHOD_CALL/113 ?0        422:'APIWrapper'     424:'enableUser'    	;1
489 131  FETCH_DIM_FUNC_ARG/93     $142=     16?5                 426:'id'            	;1
490 131  SEND_VAR_EX/66            ?80       $142                 ?1                  	;0
491 131  DO_FCALL/60               $143=     ?0                   ?0                  	;0
492 131  SEND_VAR_NO_REF_EX/50     ?80       $143                 ?1                  	;0
493 131  DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
494 131  ECHO/40                   ?0        $144                 ?0                  	;0
495 132  GOTO/253                  ?0        ?516                 ?427                	;0
496 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   428:'json_encode'   	;1	<<86
497 134  INIT_STATIC_METHOD_CALL/113 ?0        430:'APIWrapper'     432:'adjustCredits' 	;3
498 134  FETCH_DIM_FUNC_ARG/93     $145=     16?5                 434:'id'            	;1
499 134  SEND_VAR_EX/66            ?80       $145                 ?1                  	;0
500 134  FETCH_DIM_FUNC_ARG/93     $146=     16?5                 435:'credits'       	;2
501 134  SEND_VAR_EX/66            ?96       $146                 ?2                  	;0
502 134  FETCH_DIM_R/81            $147=     16?5                 436:'note'          	;0
503 134  JMP_SET/152               #148=     $147                 ?505                	;0
504 134  QM_ASSIGN/22              #148=     437:''               ?0                  	;0
505 134  SEND_VAL_EX/116           ?112      #148                 ?3                  	;0
506 134  DO_FCALL/60               $149=     ?0                   ?0                  	;0
507 134  SEND_VAR_NO_REF_EX/50     ?80       $149                 ?1                  	;0
508 134  DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
509 134  ECHO/40                   ?0        $150                 ?0                  	;0
510 135  GOTO/253                  ?0        ?516                 ?438                	;0
511 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   439:'json_encode'   	;1	<<87
512 137  SEND_VAL_EX/116           ?80       441:array (
  'status' => 'STATUS_FAILURE',
  'error' => 'Invalid action.',
) ?1                  	;0
513 137  DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
514 137  ECHO/40                   ?0        $151                 ?0                  	;0
515 138  GOTO/253                  ?0        ?516                 ?442                	;0
516 142  GOTO/253                  ?0        ?617                 ?443                	;0
517 144  ASSIGN/38                 ?141      16?2                 444:NULL            	;0
518 145  GOTO/253                  ?0        ?526                 ?445                	;0
519 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   446:'explode'       	;2
520 147  SEND_VAL_EX/116           ?80       448:','              ?1                  	;0
521 147  FETCH_STATIC_PROP_FUNC_ARG/177 $153=     449:'rRequest'       450:'XUI'           	;2
522 147  FETCH_DIM_FUNC_ARG/93     $154=     $153                 452:'hide_columns'  	;2
523 147  SEND_VAR_EX/66            ?96       $154                 ?2                  	;0
524 147  DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
525 147  ASSIGN/38                 ?145      16?2                 $155                	;0
526 149  GOTO/253                  ?0        ?14                  ?453                	;0
527 151  INIT_FCALL_BY_NAME/59     ?0        ?0                   454:'get_defined_constants'	;1
528 151  SEND_VAL_EX/116           ?80       456:true             ?1                  	;0
529 151  DO_FCALL_BY_NAME/131      $157=     ?0                   ?0                  	;0
530 151  FETCH_DIM_R/81            $158=     $157                 457:'user'          	;0
531 151  FE_RESET_R/77             $159=     $158                 ?550                	;0
532 151  FE_FETCH_R/78             #160=     $159                 16?7                	;550	>>550	<<549
533 151  ASSIGN/38                 ?150      16?8                 #160                	;0
534 152  INIT_FCALL_BY_NAME/59     ?0        ?0                   458:'substr'        	;3
535 152  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
536 152  SEND_VAL_EX/116           ?96       460:0                ?2                  	;0
537 152  SEND_VAL_EX/116           ?112      461:7                ?3                  	;0
538 152  DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
539 152  IS_EQUAL/17               #163=     $162                 462:'STATUS_'       	;0
540 152  BOOL_NOT/13               #164=     #163                 ?0                  	;0
541 152  JMPZ/43                   ?0        #164                 ?544                	;0	>>544
542 153  NOP/0                     ?0        ?0                   ?0                  	;1
543 153  GOTO/253                  ?0        ?549                 ?463                	;0
544 155  INIT_FCALL_BY_NAME/59     ?0        ?0                   464:'intval'        	;1	<<541
545 155  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
546 155  DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
547 155  ASSIGN_DIM/147            ?155      16?9                 $165                	;0
548 155  OP_DATA/137               ?0        16?8                 ?0                  	;0
549 157  JMP/42                    ?0        ?532                 ?0                  	;0	>>532
550 157  FE_FREE/127               ?0        $159                 ?0                  	;0	<<531
551 160  NOP/0                     ?0        ?0                   ?0                  	;0
552 175  NOP/0                     ?0        ?0                   ?0                  	;0
553 754  FETCH_STATIC_PROP_R/173   $168=     466:'rRequest'       467:'XUI'           	;0
554 754  ASSIGN/38                 ?158      16?5                 $168                	;0
555 755  GOTO/253                  ?0        ?556                 ?469                	;0
556 757  FETCH_STATIC_PROP_W/174   $170=     470:'db'             471:'APIWrapper'    	;0
557 757  ASSIGN_REF/39             ?160      $170                 16?10               	;0
558 758  FETCH_DIM_R/81            $173=     16?5                 476:'api_key'       	;0
559 758  FETCH_STATIC_PROP_W/174   $172=     473:'rKey'           474:'APIWrapper'    	;0
560 758  ASSIGN/38                 ?163      $172                 $173                	;0
561 759  FETCH_STATIC_PROP_IS/176  $175=     477:'rRequest'       478:'XUI'           	;0
562 759  ISSET_ISEMPTY_DIM_OBJ/115 #176=     $175                 480:'api_key'       	;16777216
563 759  BOOL_NOT/13               #177=     #176                 ?0                  	;0
564 759  JMPZ_EX/46                #177=     #177                 ?568                	;0	>>568
565 759  INIT_STATIC_METHOD_CALL/113 ?0        481:'APIWrapper'     483:'createSession' 	;0
566 759  DO_FCALL/60               $178=     ?0                   ?0                  	;0
567 759  BOOL/52                   #177=     $178                 ?0                  	;0
568 759  JMPZ/43                   ?0        #177                 ?570                	;0	>>570	<<564
569 760  GOTO/253                  ?0        ?576                 ?485                	;0
570 762  INIT_FCALL_BY_NAME/59     ?0        ?0                   486:'json_encode'   	;1	<<568
571 762  SEND_VAL_EX/116           ?80       488:array (
  'status' => 'STATUS_FAILURE',
  'error' => 'Invalid API key.',
) ?1                  	;0
572 762  DO_FCALL_BY_NAME/131      $179=     ?0                   ?0                  	;0
573 762  ECHO/40                   ?0        $179                 ?0                  	;0
574 763  GOTO/253                  ?0        ?617                 ?489                	;0
575 764  GOTO/253                  ?0        ?576                 ?490                	;0
576 767  FETCH_DIM_R/81            $180=     16?5                 491:'action'        	;0
577 767  ASSIGN/38                 ?170      16?1                 $180                	;0
578 768  INIT_FCALL_BY_NAME/59     ?0        ?0                   492:'intval'        	;1
579 768  FETCH_DIM_FUNC_ARG/93     $182=     16?5                 494:'start'         	;1
580 768  SEND_VAR_EX/66            ?80       $182                 ?1                  	;0
581 768  DO_FCALL_BY_NAME/131      $183=     ?0                   ?0                  	;0
582 768  JMP_SET/152               #184=     $183                 ?584                	;0
583 768  QM_ASSIGN/22              #184=     495:0                ?0                  	;0
584 768  ASSIGN/38                 ?174      16?3                 #184                	;0
585 769  INIT_FCALL_BY_NAME/59     ?0        ?0                   496:'intval'        	;1
586 769  FETCH_DIM_FUNC_ARG/93     $186=     16?5                 498:'limit'         	;1
587 769  SEND_VAR_EX/66            ?80       $186                 ?1                  	;0
588 769  DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
589 769  JMP_SET/152               #188=     $187                 ?591                	;0
590 769  QM_ASSIGN/22              #188=     499:50               ?0                  	;0
591 769  ASSIGN/38                 ?178      16?4                 #188                	;0
592 770  UNSET_DIM/75              ?0        16?5                 500:'api_key'       	;0
593 771  GOTO/253                  ?0        ?594                 ?501                	;0
594 773  UNSET_DIM/75              ?0        16?5                 502:'action'        	;0
595 774  UNSET_DIM/75              ?0        16?5                 503:'start'         	;0
596 775  UNSET_DIM/75              ?0        16?5                 504:'limit'         	;0
597 776  FETCH_STATIC_PROP_IS/176  $190=     505:'rRequest'       506:'XUI'           	;0
598 776  ISSET_ISEMPTY_DIM_OBJ/115 #191=     $190                 508:'show_columns'  	;33554432
599 776  JMPZ/43                   ?0        #191                 ?601                	;0	>>601
600 777  GOTO/253                  ?0        ?2                   ?509                	;0
601 779  ASSIGN/38                 ?181      16?0                 510:NULL            	;0	<<599
602 780  GOTO/253                  ?0        ?1                   ?511                	;0
603 782  INIT_FCALL_BY_NAME/59     ?0        ?0                   512:'defined'       	;1	<<0
604 782  SEND_VAL_EX/116           ?80       514:'XUI_HOME'       ?1                  	;0
605 782  DO_FCALL_BY_NAME/131      $193=     ?0                   ?0                  	;0
606 782  JMPZ/43                   ?0        $193                 ?608                	;0	>>608
607 783  GOTO/253                  ?0        ?612                 ?515                	;0
608 785  INIT_FCALL_BY_NAME/59     ?0        ?0                   516:'define'        	;2	<<606
609 785  SEND_VAL_EX/116           ?80       518:'XUI_HOME'       ?1                  	;0
610 785  SEND_VAL_EX/116           ?96       519:'/home/xui/'     ?2                  	;0
611 785  DO_FCALL_BY_NAME/131      ?183      ?0                   ?0                  	;0
612 787  FETCH_CONSTANT/99         #195=     ?0                   520:'XUI_HOME'      	;16
613 787  CONCAT/8                  #196=     #195                 523:'includes/admin.php'	;0
614 787  INCLUDE_OR_EVAL/73        ?186      #196                 ?0                  	;16
615 788  ASSIGN/38                 ?187      16?9                 524:array (
)       	;0
616 789  GOTO/253                  ?0        ?527                 ?525                	;0
617 792  NOP/0                     ?0        526:1                ?0                  	;4294967295
*/

?>