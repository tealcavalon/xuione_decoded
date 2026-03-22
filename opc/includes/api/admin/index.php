<?php


class APIWrapper
{
	static public $db;
	static public $rKey;

	static public function filterRow($ba2d146bb5a55097, $C17543903e9aa6ae, $c733678227713664, $B05582e97914c7eb)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   640  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   640  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   640  RECV/63                   16?2=     ?3                   ?4294967294         	;0
		3   640  RECV_INIT/64              16?3=     ?4                   0:false             	;0
		4   642  GOTO/253                  ?0        ?9                   ?1                  	;0
		5   644  GOTO/253                  ?0        ?7                   ?2                  	;0
		6   646  ASSIGN/38                 ?0        16?4                 16?0                	;0
		7   648  ASSIGN/38                 ?1        16?5                 3:array (
)         	;0
		8   649  GOTO/253                  ?0        ?22                  ?4                  	;0
		9   651  BOOL_NOT/13               #9=       16?1                 ?0                  	;0
		10  651  JMPZ_EX/46                #9=       #9                   ?13                 	;0	>>13
		11  651  BOOL_NOT/13               #10=      16?2                 ?0                  	;0
		12  651  BOOL/52                   #9=       #10                  ?0                  	;0
		13  651  BOOL_NOT/13               #11=      #9                   ?0                  	;0	<<10
		14  651  JMPZ/43                   ?0        #11                  ?16                 	;0	>>16
		15  652  GOTO/253                  ?0        ?17                  ?5                  	;0
		16  654  RETURN/62                 ?0        16?0                 ?0                  	;0	<<14
		17  656  JMPZ/43                   ?0        16?3                 ?19                 	;0	>>19
		18  657  GOTO/253                  ?0        ?6                   ?6                  	;0
		19  659  FETCH_DIM_R/81            $12=      16?0                 7:'data'            	;0	<<17
		20  659  ASSIGN/38                 ?6        16?4                 $12                 	;0
		21  660  GOTO/253                  ?0        ?5                   ?8                  	;0
		22  662  BOOL_NOT/13               #14=      16?4                 ?0                  	;0
		23  662  JMPZ/43                   ?0        #14                  ?25                 	;0	>>25
		24  663  GOTO/253                  ?0        ?70                  ?9                  	;0
		25  665  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'array_keys'     	;1	<<23
		26  665  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		27  665  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		28  665  FE_RESET_R/77             $16=      $15                  ?69                 	;0
		29  665  FE_FETCH_R/78             ?0        $16                  16?6                	;69	>>69	<<68
		30  666  NOP/0                     ?0        ?0                   ?0                  	;1
		31  666  GOTO/253                  ?0        ?32                  ?12                 	;0
		32  668  JMPZ/43                   ?0        16?1                 ?35                 	;0	>>35
		33  669  NOP/0                     ?0        ?0                   ?0                  	;1
		34  669  GOTO/253                  ?0        ?53                  ?13                 	;0
		35  671  BOOL_NOT/13               #17=      16?2                 ?0                  	;0	<<32
		36  671  JMPZ/43                   ?0        #17                  ?39                 	;0	>>39
		37  672  NOP/0                     ?0        ?0                   ?0                  	;1
		38  672  GOTO/253                  ?0        ?51                  ?14                 	;0
		39  674  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'in_array'       	;2	<<36
		40  674  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		41  674  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		42  674  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		43  674  JMPZ/43                   ?0        $18                  ?46                 	;0	>>46
		44  675  NOP/0                     ?0        ?0                   ?0                  	;1
		45  675  GOTO/253                  ?0        ?49                  ?17                 	;0
		46  677  FETCH_DIM_R/81            $20=      16?4                 16?6                	;0	<<43
		47  677  ASSIGN_DIM/147            ?12       16?5                 16?6                	;0
		48  677  OP_DATA/137               ?0        $20                  ?0                  	;0
		49  679  NOP/0                     ?0        ?0                   ?0                  	;1
		50  679  GOTO/253                  ?0        ?51                  ?18                 	;0
		51  682  NOP/0                     ?0        ?0                   ?0                  	;1
		52  682  GOTO/253                  ?0        ?66                  ?19                 	;0
		53  684  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'in_array'       	;2
		54  684  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		55  684  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		56  684  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
		57  684  BOOL_NOT/13               #22=      $21                  ?0                  	;0
		58  684  JMPZ/43                   ?0        #22                  ?61                 	;0	>>61
		59  685  NOP/0                     ?0        ?0                   ?0                  	;1
		60  685  GOTO/253                  ?0        ?66                  ?22                 	;0
		61  687  FETCH_DIM_R/81            $24=      16?4                 16?6                	;0	<<58
		62  687  ASSIGN_DIM/147            ?16       16?5                 16?6                	;0
		63  687  OP_DATA/137               ?0        $24                  ?0                  	;0
		64  688  NOP/0                     ?0        ?0                   ?0                  	;1
		65  688  GOTO/253                  ?0        ?66                  ?23                 	;0
		66  693  NOP/0                     ?0        ?0                   ?0                  	;1
		67  693  GOTO/253                  ?0        ?68                  ?24                 	;0
		68  694  JMP/42                    ?0        ?29                  ?0                  	;0	>>29
		69  694  FE_FREE/127               ?0        $16                  ?0                  	;0	<<28
		70  698  JMPZ/43                   ?0        16?3                 ?72                 	;0	>>72
		71  699  GOTO/253                  ?0        ?78                  ?25                 	;0
		72  701  GOTO/253                  ?0        ?74                  ?26                 	;0	<<70
		73  704  GOTO/253                  ?0        ?80                  ?27                 	;0
		74  706  ASSIGN_DIM/147            ?18       16?0                 28:'data'           	;0
		75  706  OP_DATA/137               ?0        16?5                 ?0                  	;0
		76  707  RETURN/62                 ?0        16?0                 ?0                  	;0
		77  708  GOTO/253                  ?0        ?73                  ?29                 	;0
		78  710  RETURN/62                 ?0        16?5                 ?0                  	;0
		79  711  GOTO/253                  ?0        ?73                  ?30                 	;0
		80  713  NOP/0                     ?0        31:NULL              ?0                  	;4294967295
		*/
	}

	static public function filterRows($D8e7681dfae2905b, $C17543903e9aa6ae, $c733678227713664)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   714  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   714  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   714  RECV/63                   16?2=     ?3                   ?4294967294         	;0
		3   716  ASSIGN/38                 ?0        16?3                 0:array (
)         	;0
		4   717  FETCH_DIM_R/81            $6=       16?0                 1:'data'            	;0
		5   717  BOOL_NOT/13               #7=       $6                   ?0                  	;0
		6   717  JMPZ/43                   ?0        #7                   ?8                  	;0	>>8
		7   718  GOTO/253                  ?0        ?21                  ?2                  	;0
		8   720  FETCH_DIM_R/81            $8=       16?0                 3:'data'            	;0	<<6
		9   720  FE_RESET_R/77             $9=       $8                   ?20                 	;0
		10  720  FE_FETCH_R/78             ?0        $9                   16?4                	;20	>>20	<<19
		11  721  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 4:'filterRow'       	;4
		12  721  SEND_VAR/117              ?80       16?4                 ?1                  	;0
		13  721  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		14  721  SEND_VAR/117              ?112      16?2                 ?3                  	;0
		15  721  SEND_VAL/65               ?128      6:true               ?4                  	;0
		16  721  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		17  721  ASSIGN_DIM/147            ?5        16?3                 ?1665525632         	;0
		18  721  OP_DATA/137               ?0        $11                  ?0                  	;0
		19  722  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		20  722  FE_FREE/127               ?0        $9                   ?0                  	;0	<<9
		21  726  RETURN/62                 ?0        16?3                 ?0                  	;0
		22  727  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function TableAPI($Abcb228699a7f743, $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   728  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   728  RECV_INIT/64              16?1=     ?2                   0:0                 	;0
		2   728  RECV_INIT/64              16?2=     ?3                   1:10                	;0
		3   728  RECV_INIT/64              16?3=     ?4                   2:array (
)         	;0
		4   728  RECV_INIT/64              16?4=     ?5                   3:array (
)         	;0
		5   728  RECV_INIT/64              16?5=     ?6                   4:array (
)         	;0
		6   730  GOTO/253                  ?0        ?27                  ?5                  	;0
		7   732  ASSIGN_DIM/147            ?0        16?3                 6:'show_columns'    	;0
		8   732  OP_DATA/137               ?0        16?4                 ?0                  	;0
		9   733  ASSIGN_DIM/147            ?1        16?3                 7:'hide_columns'    	;0
		10  733  OP_DATA/137               ?0        16?5                 ?0                  	;0
		11  734  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'curl_init'       	;0
		12  734  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		13  734  ASSIGN/38                 ?3        16?6                 $11                 	;0
		14  735  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'curl_setopt'    	;3
		15  735  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		16  735  FETCH_CONSTANT/99         #13=      ?0                   12:'CURLOPT_URL'    	;16
		17  735  SEND_VAL_EX/116           ?96       #13                  ?2                  	;0
		18  735  SEND_VAR_EX/66            ?112      16?7                 ?3                  	;0
		19  735  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
		20  736  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'curl_setopt'    	;3
		21  736  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		22  736  FETCH_CONSTANT/99         #15=      ?0                   17:'CURLOPT_POST'   	;16
		23  736  SEND_VAL_EX/116           ?96       #15                  ?2                  	;0
		24  736  SEND_VAL_EX/116           ?112      20:1                 ?3                  	;0
		25  736  DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
		26  737  GOTO/253                  ?0        ?55                  ?21                 	;0
		27  739  FETCH_CONSTANT/99         #18=      ?0                   25:'SERVER_ID'      	;16
		28  739  FETCH_STATIC_PROP_R/173   $17=      22:'rServers'        23:'XUI'            	;0
		29  739  FETCH_DIM_R/81            $19=      $17                  #18                 	;0
		30  739  FETCH_DIM_R/81            $20=      $19                  28:'http_broadcast_port'	;0
		31  739  CONCAT/8                  #21=      29:'http://127.0.0.1:' $20                 	;0
		32  739  CONCAT/8                  #22=      #21                  30:'/'              	;0
		33  739  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'trim'           	;2
		34  739  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'dirname'        	;1
		35  739  FETCH_FUNC_ARG/92         $23=      35:'_SERVER'         ?0                  	;1
		36  739  FETCH_DIM_FUNC_ARG/93     $24=      $23                  36:'PHP_SELF'       	;1
		37  739  SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
		38  739  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
		39  739  SEND_VAR_NO_REF_EX/50     ?80       $25                  ?1                  	;0
		40  739  SEND_VAL_EX/116           ?96       37:'/'               ?2                  	;0
		41  739  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
		42  739  CONCAT/8                  #27=      #22                  $26                 	;0
		43  739  CONCAT/8                  #28=      #27                  38:'/table.php'     	;0
		44  739  ASSIGN/38                 ?20       16?7                 #28                 	;0
		45  740  FETCH_STATIC_PROP_R/173   $31=      40:'rKey'            ?513                	;0
		46  740  ASSIGN_DIM/147            ?21       16?3                 39:'api_key'        	;0
		47  740  OP_DATA/137               ?0        $31                  ?0                  	;0
		48  741  ASSIGN_DIM/147            ?23       16?3                 41:'id'             	;0
		49  741  OP_DATA/137               ?0        16?0                 ?0                  	;0
		50  742  ASSIGN_DIM/147            ?24       16?3                 42:'start'          	;0
		51  742  OP_DATA/137               ?0        16?1                 ?0                  	;0
		52  743  ASSIGN_DIM/147            ?25       16?3                 43:'length'         	;0
		53  743  OP_DATA/137               ?0        16?2                 ?0                  	;0
		54  744  GOTO/253                  ?0        ?7                   ?44                 	;0
		55  746  INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'curl_setopt'    	;3
		56  746  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		57  746  FETCH_CONSTANT/99         #35=      ?0                   47:'CURLOPT_POSTFIELDS'	;16
		58  746  SEND_VAL_EX/116           ?96       #35                  ?2                  	;0
		59  746  INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'http_build_query'	;1
		60  746  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		61  746  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
		62  746  SEND_VAR_NO_REF_EX/50     ?112      $36                  ?3                  	;0
		63  746  DO_FCALL_BY_NAME/131      ?28       ?0                   ?0                  	;0
		64  747  INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'curl_setopt'    	;3
		65  747  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		66  747  FETCH_CONSTANT/99         #38=      ?0                   54:'CURLOPT_RETURNTRANSFER'	;16
		67  747  SEND_VAL_EX/116           ?96       #38                  ?2                  	;0
		68  747  SEND_VAL_EX/116           ?112      57:true              ?3                  	;0
		69  747  DO_FCALL_BY_NAME/131      ?30       ?0                   ?0                  	;0
		70  748  INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'curl_setopt'    	;3
		71  748  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		72  748  FETCH_CONSTANT/99         #40=      ?0                   60:'CURLOPT_HTTPHEADER'	;16
		73  748  SEND_VAL_EX/116           ?96       #40                  ?2                  	;0
		74  748  SEND_VAL_EX/116           ?112      63:array (
  0 => 'X-Requested-With: xmlhttprequest',
) ?3                  	;0
		75  748  DO_FCALL_BY_NAME/131      ?32       ?0                   ?0                  	;0
		76  749  INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'json_decode'    	;2
		77  749  INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'curl_exec'      	;1
		78  749  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		79  749  DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
		80  749  SEND_VAR_NO_REF_EX/50     ?80       $42                  ?1                  	;0
		81  749  SEND_VAL_EX/116           ?96       68:true              ?2                  	;0
		82  749  DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
		83  749  ASSIGN/38                 ?35       16?8                 $43                 	;0
		84  750  INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'curl_close'     	;1
		85  750  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		86  750  DO_FCALL_BY_NAME/131      ?36       ?0                   ?0                  	;0
		87  751  GOTO/253                  ?0        ?88                  ?71                 	;0
		88  753  RETURN/62                 ?0        16?8                 ?0                  	;0
		89  754  GOTO/253                  ?0        ?90                  ?72                 	;0
		90  756  NOP/0                     ?0        73:NULL              ?0                  	;4294967295
		*/
	}

	static public function createSession()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   759  JMP/42                    ?0        ?8                   ?0                  	;0	>>8
		1   761  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'date_default_timezone_set'	;1
		2   761  FETCH_DIM_FUNC_ARG/93     $2=       16?0                 3:'timezone'        	;1
		3   761  SEND_VAR_EX/66            ?80       $2                   ?1                  	;0
		4   761  DO_FCALL_BY_NAME/131      ?1        ?0                   ?0                  	;0
		5   763  RETURN/62                 ?0        4:true               ?0                  	;0
		6   765  RETURN/62                 ?0        5:false              ?0                  	;0
		7   766  GOTO/253                  ?0        ?56                  ?6                  	;0
		8   768  BIND_GLOBAL/168           ?0        16?0                 7:'E59d0debc75e7be8'	;0	<<0
		9   768  BIND_GLOBAL/168           ?0        16?1                 8:'db0a61ef32b89a27'	;0
		10  769  FETCH_STATIC_PROP_R/173   $4=       9:'db'               ?513                	;0
		11  769  INIT_METHOD_CALL/112      ?0        $4                   10:'query'          	;2
		12  769  SEND_VAL_EX/116           ?80       12:'SELECT * FROM `users` LEFT JOIN `users_groups` ON `users_groups`.`group_id` = `users`.`member_group_id` WHERE `api_key` = ? AND LENGTH(`api_key`) > 0 AND `is_admin` = 1 AND `status` = 1;' ?1                  	;0
		13  769  FETCH_STATIC_PROP_FUNC_ARG/177 $5=       13:'rKey'            ?513                	;2
		14  769  SEND_VAR_EX/66            ?96       $5                   ?2                  	;0
		15  769  DO_FCALL/60               ?4        ?0                   ?0                  	;0
		16  770  FETCH_STATIC_PROP_R/173   $7=       14:'db'              ?513                	;0
		17  770  INIT_METHOD_CALL/112      ?0        $7                   15:'num_rows'       	;0
		18  770  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		19  770  IS_SMALLER/19             #9=       17:0                 $8                  	;0
		20  770  BOOL_NOT/13               #10=      #9                   ?0                  	;0
		21  770  JMPZ/43                   ?0        #10                  ?23                 	;0	>>23
		22  771  GOTO/253                  ?0        ?6                   ?18                 	;0
		23  773  FETCH_STATIC_PROP_W/174   $12=      22:'db'              ?513                	;0	<<21
		24  773  MAKE_REF/51               $13=      $12                  ?0                  	;0
		25  773  FETCH_STATIC_PROP_W/174   $11=      19:'db'              20:'API'            	;0
		26  773  ASSIGN_REF/39             ?12       $11                  $13                 	;0
		27  774  INIT_STATIC_METHOD_CALL/113 ?0        23:'API'             25:'init'           	;1
		28  774  FETCH_STATIC_PROP_R/173   $15=      27:'db'              ?513                	;0
		29  774  INIT_METHOD_CALL/112      ?0        $15                  28:'get_row'        	;0
		30  774  DO_FCALL/60               $16=      ?0                   ?0                  	;0
		31  774  SEPARATE/156              $16=      $16                  ?0                  	;0
		32  774  FETCH_DIM_FUNC_ARG/93     $17=      $16                  30:'id'             	;1
		33  774  SEND_VAR_EX/66            ?80       $17                  ?1                  	;0
		34  774  DO_FCALL/60               ?16       ?0                   ?0                  	;0
		35  775  GOTO/253                  ?0        ?36                  ?31                 	;0
		36  777  FETCH_STATIC_PROP_UNSET/178 $19=      32:'rUserInfo'       33:'API'            	;0
		37  777  UNSET_DIM/75              ?0        $19                  35:'password'       	;0
		38  778  FETCH_STATIC_PROP_R/173   $20=      36:'rUserInfo'       37:'API'            	;0
		39  778  ASSIGN/38                 ?19       16?0                 $20                 	;0
		40  779  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'ACeb5cFE4194F4F0'	;1
		41  779  FETCH_DIM_FUNC_ARG/93     $22=      16?0                 41:'member_group_id'	;1
		42  779  SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
		43  779  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
		44  779  ASSIGN/38                 ?22       16?1                 $23                 	;0
		45  780  ASSIGN_DIM/147            ?23       16?1                 42:'advanced'       	;0
		46  780  OP_DATA/137               ?0        43:array (
)         ?0                  	;0
		47  781  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'strlen'         	;1
		48  781  FETCH_DIM_FUNC_ARG/93     $26=      16?0                 46:'timezone'       	;1
		49  781  SEND_VAR_EX/66            ?80       $26                  ?1                  	;0
		50  781  DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
		51  781  IS_SMALLER/19             #28=      47:0                 $27                 	;0
		52  781  BOOL_NOT/13               #29=      #28                  ?0                  	;0
		53  781  JMPZ/43                   ?0        #29                  ?55                 	;0	>>55
		54  782  GOTO/253                  ?0        ?5                   ?48                 	;0
		55  784  GOTO/253                  ?0        ?1                   ?49                 	;0	<<53
		56  786  NOP/0                     ?0        50:NULL              ?0                  	;4294967295
		*/
	}

	static public function Cc988751EeBBF271()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   789  BIND_GLOBAL/168           ?0        16?0                 0:'E59d0debc75e7be8'	;0
		1   789  BIND_GLOBAL/168           ?0        16?1                 1:'db0a61ef32b89a27'	;0
		2   790  INIT_ARRAY/71             #2=       2:'STATUS_SUCCESS'   3:'status'          	;14
		3   790  ADD_ARRAY_ELEMENT/72      #2=       16?0                 4:'data'            	;0
		4   790  ADD_ARRAY_ELEMENT/72      #2=       16?1                 5:'permissions'     	;0
		5   790  RETURN/62                 ?0        #2                   ?0                  	;0
		6   791  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	static public function getLine($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   792  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   794  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'b5aD1d95a92ce732'	;1
		2   794  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   794  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   794  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   794  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6   794  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7   795  GOTO/253                  ?0        ?11                  ?2                  	;0
		8   797  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9   797  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10  797  RETURN/62                 ?0        #5                   ?0                  	;0
		11  799  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12  800  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function createLine($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   801  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   803  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2   803  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3   803  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4   804  GOTO/253                  ?0        ?6                   ?1                  	;0
		5   806  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6   808  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7   808  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'FCCaa0f750Efa5b7'	;1
		8   808  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   808  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10  808  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11  808  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12  808  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13  809  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14  809  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15  809  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16  809  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17  810  GOTO/253                  ?0        ?26                  ?10                 	;0
		18  812  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'getLine'        	;1	<<16
		19  812  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20  812  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21  812  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22  812  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23  812  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24  812  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25  812  OP_DATA/137               ?0        $14                  ?0                  	;0
		26  814  RETURN/62                 ?0        16?1                 ?0                  	;0
		27  815  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editLine($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   816  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   816  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   818  JMP/42                    ?0        ?3                   ?0                  	;0	>>3
		3   820  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 1:'getLine'         	;1	<<2
		4   820  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		5   820  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		6   820  ASSIGN/38                 $5=       16?2                 $4                  	;0
		7   820  JMPZ_EX/46                #6=       $5                   ?10                 	;0	>>10
		8   820  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 3:'data'            	;33554432
		9   820  BOOL/52                   #6=       #7                   ?0                  	;0
		10  820  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<7
		11  820  JMPZ/43                   ?0        #8                   ?13                 	;0	>>13
		12  821  GOTO/253                  ?0        ?22                  ?4                  	;0
		13  823  ASSIGN_DIM/147            ?5        16?1                 5:'edit'            	;0	<<11
		14  823  OP_DATA/137               ?0        16?0                 ?0                  	;0
		15  824  ISSET_ISEMPTY_DIM_OBJ/115 #10=      16?1                 6:'isp_clear'       	;33554432
		16  824  BOOL_NOT/13               #11=      #10                  ?0                  	;0
		17  824  JMPZ/43                   ?0        #11                  ?19                 	;0	>>19
		18  825  GOTO/253                  ?0        ?21                  ?7                  	;0
		19  827  ASSIGN_DIM/147            ?8        16?1                 8:'isp_clear'       	;0	<<17
		20  827  OP_DATA/137               ?0        9:''                 ?0                  	;0
		21  829  GOTO/253                  ?0        ?24                  ?10                 	;0
		22  832  RETURN/62                 ?0        11:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		23  833  GOTO/253                  ?0        ?46                  ?12                 	;0
		24  835  INIT_FCALL/61             ?0        ?240                 13:'parseerror'     	;1
		25  835  INIT_STATIC_METHOD_CALL/113 ?0        14:'API'             16:'FccAA0F750EfA5B7'	;1
		26  835  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		27  835  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		28  835  SEND_VAR/117              ?80       $13                  ?1                  	;0
		29  835  DO_FCALL/60               $14=      ?0                   ?0                  	;0
		30  835  ASSIGN/38                 ?11       16?3                 $14                 	;0
		31  836  FETCH_DIM_IS/90           $16=      16?3                 18:'data'           	;0
		32  836  ISSET_ISEMPTY_DIM_OBJ/115 #17=      $16                  19:'insert_id'      	;33554432
		33  836  BOOL_NOT/13               #18=      #17                  ?0                  	;0
		34  836  JMPZ/43                   ?0        #18                  ?36                 	;0	>>36
		35  837  GOTO/253                  ?0        ?44                  ?20                 	;0
		36  839  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 22:'getLine'        	;1	<<34
		37  839  FETCH_DIM_R/81            $20=      16?3                 24:'data'           	;0
		38  839  FETCH_DIM_R/81            $21=      $20                  25:'insert_id'      	;0
		39  839  SEND_VAR/117              ?80       $21                  ?1                  	;0
		40  839  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		41  839  FETCH_DIM_R/81            $23=      $22                  26:'data'           	;0
		42  839  ASSIGN_DIM/147            ?15       16?3                 21:'data'           	;0
		43  839  OP_DATA/137               ?0        $23                  ?0                  	;0
		44  841  RETURN/62                 ?0        16?3                 ?0                  	;0
		45  842  GOTO/253                  ?0        ?22                  ?27                 	;0
		46  844  NOP/0                     ?0        28:NULL              ?0                  	;4294967295
		*/
	}

	static public function Ca81C8f24C099495($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   845  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   847  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getLine'         	;1
		2   847  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3   847  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   847  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   847  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6   847  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7   847  BOOL/52                   #4=       #5                   ?0                  	;0
		8   847  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9   847  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10  848  GOTO/253                  ?0        ?18                  ?3                  	;0
		11  850  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'c24b1B1fDaD37C5E'	;1	<<9
		12  850  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13  850  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14  850  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15  850  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16  851  GOTO/253                  ?0        ?18                  ?6                  	;0
		17  853  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18  856  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19  857  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function disableLine($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   858  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   860  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getLine'         	;1
		2   860  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3   860  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   860  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   860  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6   860  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7   860  BOOL/52                   #4=       #5                   ?0                  	;0
		8   860  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9   860  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10  861  GOTO/253                  ?0        ?17                  ?3                  	;0
		11  863  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12  863  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13  863  SEND_VAL_EX/116           ?80       7:'UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;' ?1                  	;0
		14  863  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		15  863  DO_FCALL/60               ?6        ?0                   ?0                  	;0
		16  864  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		17  866  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		18  867  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function enableLine($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   868  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   870  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getLine'         	;1
		2   870  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3   870  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   870  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   870  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6   870  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7   870  BOOL/52                   #4=       #5                   ?0                  	;0
		8   870  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9   870  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10  871  GOTO/253                  ?0        ?17                  ?3                  	;0
		11  873  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12  873  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13  873  SEND_VAL_EX/116           ?80       7:'UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;' ?1                  	;0
		14  873  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		15  873  DO_FCALL/60               ?6        ?0                   ?0                  	;0
		16  874  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		17  876  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		18  877  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function banLine($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   878  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   880  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getLine'         	;1
		2   880  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3   880  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   880  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   880  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6   880  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7   880  BOOL/52                   #4=       #5                   ?0                  	;0
		8   880  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9   880  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10  881  GOTO/253                  ?0        ?17                  ?3                  	;0
		11  883  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12  883  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13  883  SEND_VAL_EX/116           ?80       7:'UPDATE `lines` SET `admin_enabled` = 0 WHERE `id` = ?;' ?1                  	;0
		14  883  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		15  883  DO_FCALL/60               ?6        ?0                   ?0                  	;0
		16  884  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		17  886  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		18  887  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function unbanLine($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   888  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   890  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getLine'         	;1
		2   890  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3   890  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   890  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   890  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6   890  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7   890  BOOL/52                   #4=       #5                   ?0                  	;0
		8   890  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9   890  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10  891  GOTO/253                  ?0        ?17                  ?3                  	;0
		11  893  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12  893  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13  893  SEND_VAL_EX/116           ?80       7:'UPDATE `lines` SET `admin_enabled` = 1 WHERE `id` = ?;' ?1                  	;0
		14  893  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		15  893  DO_FCALL/60               ?6        ?0                   ?0                  	;0
		16  894  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		17  896  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		18  897  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function B349523eCB058D86($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   898  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   900  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'BA89228Dc958cE05'	;1
		2   900  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   900  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   900  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   900  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6   900  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7   901  GOTO/253                  ?0        ?11                  ?2                  	;0
		8   903  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9   903  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10  903  RETURN/62                 ?0        #5                   ?0                  	;0
		11  905  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12  906  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function createUser($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   907  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   909  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2   909  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3   909  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4   910  GOTO/253                  ?0        ?6                   ?1                  	;0
		5   912  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6   914  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7   914  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'d3824406Bc4f2a23'	;1
		8   914  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   914  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10  914  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11  914  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12  914  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13  915  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14  915  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15  915  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16  915  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17  916  GOTO/253                  ?0        ?26                  ?10                 	;0
		18  918  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'b349523ecB058d86'	;1	<<16
		19  918  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20  918  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21  918  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22  918  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23  918  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24  918  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25  918  OP_DATA/137               ?0        $14                  ?0                  	;0
		26  920  RETURN/62                 ?0        16?1                 ?0                  	;0
		27  921  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editUser($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   922  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   922  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   924  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'b349523ECb058d86'	;1
		3   924  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4   924  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5   924  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6   924  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7   924  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8   924  BOOL/52                   #6=       #7                   ?0                  	;0
		9   924  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10  924  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11  925  GOTO/253                  ?0        ?35                  ?3                  	;0
		12  927  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13  927  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14  928  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15  928  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'d3824406BC4f2A23'	;1
		16  928  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17  928  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18  928  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19  928  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20  928  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21  929  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22  929  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23  929  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24  929  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25  930  GOTO/253                  ?0        ?34                  ?12                 	;0
		26  932  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'B349523ecb058D86'	;1	<<24
		27  932  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28  932  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29  932  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30  932  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31  932  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32  932  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33  932  OP_DATA/137               ?0        $20                  ?0                  	;0
		34  934  RETURN/62                 ?0        16?3                 ?0                  	;0
		35  936  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36  937  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function D8C5152Aaa448bdD($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   938  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   940  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'b349523EcB058d86'	;1
		2   940  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3   940  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   940  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   940  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6   940  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7   940  BOOL/52                   #4=       #5                   ?0                  	;0
		8   940  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9   940  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10  941  GOTO/253                  ?0        ?18                  ?3                  	;0
		11  943  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'C05365dcB6D79618'	;1	<<9
		12  943  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13  943  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14  943  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15  943  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16  944  GOTO/253                  ?0        ?18                  ?6                  	;0
		17  946  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18  949  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19  950  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function disableUser($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   951  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   953  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'B349523eCb058d86'	;1
		2   953  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3   953  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   953  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   953  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6   953  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7   953  BOOL/52                   #4=       #5                   ?0                  	;0
		8   953  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9   953  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10  954  GOTO/253                  ?0        ?17                  ?3                  	;0
		11  956  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12  956  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13  956  SEND_VAL_EX/116           ?80       7:'UPDATE `users` SET `status` = 0 WHERE `id` = ?;' ?1                  	;0
		14  956  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		15  956  DO_FCALL/60               ?6        ?0                   ?0                  	;0
		16  957  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		17  959  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		18  960  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function enableUser($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   961  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   963  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'b349523ECB058d86'	;1
		2   963  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3   963  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   963  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   963  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6   963  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7   963  BOOL/52                   #4=       #5                   ?0                  	;0
		8   963  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9   963  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10  964  GOTO/253                  ?0        ?17                  ?3                  	;0
		11  966  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12  966  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13  966  SEND_VAL_EX/116           ?80       7:'UPDATE `users` SET `status` = 1 WHERE `id` = ?;' ?1                  	;0
		14  966  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		15  966  DO_FCALL/60               ?6        ?0                   ?0                  	;0
		16  967  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		17  969  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		18  970  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function D6BCc99e8baFA737($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   971  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   973  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'A32D85aEfA28959D'	;1
		2   973  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   973  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   973  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5   973  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6   973  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7   974  GOTO/253                  ?0        ?11                  ?2                  	;0
		8   976  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9   976  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10  976  RETURN/62                 ?0        #5                   ?0                  	;0
		11  978  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12  979  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function createMAG($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   980  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   982  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2   982  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3   982  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4   983  GOTO/253                  ?0        ?6                   ?1                  	;0
		5   985  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6   987  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7   987  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'B087c00f20554A9B'	;1
		8   987  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   987  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10  987  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11  987  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12  987  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13  988  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14  988  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15  988  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16  988  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17  989  GOTO/253                  ?0        ?26                  ?10                 	;0
		18  991  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'d6bcC99e8Bafa737'	;1	<<16
		19  991  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20  991  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21  991  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22  991  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23  991  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24  991  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25  991  OP_DATA/137               ?0        $14                  ?0                  	;0
		26  993  RETURN/62                 ?0        16?1                 ?0                  	;0
		27  994  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editMAG($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    995   RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    995   RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    997   JMP/42                    ?0        ?3                   ?0                  	;0	>>3
		3    999   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 1:'D6BcC99E8baFa737'	;1	<<2
		4    999   SEND_VAR/117              ?80       16?0                 ?1                  	;0
		5    999   DO_FCALL/60               $4=       ?0                   ?0                  	;0
		6    999   ASSIGN/38                 $5=       16?2                 $4                  	;0
		7    999   JMPZ_EX/46                #6=       $5                   ?10                 	;0	>>10
		8    999   ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 3:'data'            	;33554432
		9    999   BOOL/52                   #6=       #7                   ?0                  	;0
		10   999   BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<7
		11   999   JMPZ/43                   ?0        #8                   ?13                 	;0	>>13
		12   1000  GOTO/253                  ?0        ?22                  ?4                  	;0
		13   1002  ASSIGN_DIM/147            ?5        16?1                 5:'edit'            	;0	<<11
		14   1002  OP_DATA/137               ?0        16?0                 ?0                  	;0
		15   1003  ISSET_ISEMPTY_DIM_OBJ/115 #10=      16?1                 6:'isp_clear'       	;33554432
		16   1003  BOOL_NOT/13               #11=      #10                  ?0                  	;0
		17   1003  JMPZ/43                   ?0        #11                  ?19                 	;0	>>19
		18   1004  GOTO/253                  ?0        ?21                  ?7                  	;0
		19   1006  ASSIGN_DIM/147            ?8        16?1                 8:'isp_clear'       	;0	<<17
		20   1006  OP_DATA/137               ?0        9:''                 ?0                  	;0
		21   1008  GOTO/253                  ?0        ?24                  ?10                 	;0
		22   1011  RETURN/62                 ?0        11:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		23   1012  GOTO/253                  ?0        ?46                  ?12                 	;0
		24   1014  INIT_FCALL/61             ?0        ?240                 13:'parseerror'     	;1
		25   1014  INIT_STATIC_METHOD_CALL/113 ?0        14:'API'             16:'b087c00F20554a9B'	;1
		26   1014  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		27   1014  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		28   1014  SEND_VAR/117              ?80       $13                  ?1                  	;0
		29   1014  DO_FCALL/60               $14=      ?0                   ?0                  	;0
		30   1014  ASSIGN/38                 ?11       16?3                 $14                 	;0
		31   1015  FETCH_DIM_IS/90           $16=      16?3                 18:'data'           	;0
		32   1015  ISSET_ISEMPTY_DIM_OBJ/115 #17=      $16                  19:'insert_id'      	;33554432
		33   1015  BOOL_NOT/13               #18=      #17                  ?0                  	;0
		34   1015  JMPZ/43                   ?0        #18                  ?36                 	;0	>>36
		35   1016  GOTO/253                  ?0        ?44                  ?20                 	;0
		36   1018  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 22:'D6bcC99e8bAFa737'	;1	<<34
		37   1018  FETCH_DIM_R/81            $20=      16?3                 24:'data'           	;0
		38   1018  FETCH_DIM_R/81            $21=      $20                  25:'insert_id'      	;0
		39   1018  SEND_VAR/117              ?80       $21                  ?1                  	;0
		40   1018  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		41   1018  FETCH_DIM_R/81            $23=      $22                  26:'data'           	;0
		42   1018  ASSIGN_DIM/147            ?15       16?3                 21:'data'           	;0
		43   1018  OP_DATA/137               ?0        $23                  ?0                  	;0
		44   1020  RETURN/62                 ?0        16?3                 ?0                  	;0
		45   1021  GOTO/253                  ?0        ?22                  ?27                 	;0
		46   1023  NOP/0                     ?0        28:NULL              ?0                  	;4294967295
		*/
	}

	static public function B3e7cdF7aC99ab57($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1024  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1026  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'D6BCc99E8baFa737'	;1
		2    1026  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1026  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1026  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1026  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1026  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1026  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1026  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1026  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1027  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1029  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'dd81518D00A2DD90'	;1	<<9
		12   1029  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   1029  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   1029  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15   1029  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16   1030  GOTO/253                  ?0        ?18                  ?6                  	;0
		17   1032  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18   1035  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1036  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function disableMAG($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1037  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1039  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'D6BcC99e8BAfa737'	;1
		2    1039  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1039  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1039  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1039  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1039  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1039  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1039  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1039  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1040  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1042  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12   1042  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13   1042  SEND_VAL_EX/116           ?80       7:'UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;' ?1                  	;0
		14   1042  FETCH_DIM_FUNC_ARG/93     $8=       16?1                 8:'user_id'         	;2
		15   1042  SEND_VAR_EX/66            ?96       $8                   ?2                  	;0
		16   1042  DO_FCALL/60               ?7        ?0                   ?0                  	;0
		17   1043  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		18   1045  RETURN/62                 ?0        10:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1046  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	static public function enableMAG($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1047  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1049  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'d6BcC99e8bAfA737'	;1
		2    1049  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1049  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1049  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1049  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1049  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1049  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1049  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1049  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1050  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1052  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12   1052  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13   1052  SEND_VAL_EX/116           ?80       7:'UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;' ?1                  	;0
		14   1052  FETCH_DIM_FUNC_ARG/93     $8=       16?1                 8:'user_id'         	;2
		15   1052  SEND_VAR_EX/66            ?96       $8                   ?2                  	;0
		16   1052  DO_FCALL/60               ?7        ?0                   ?0                  	;0
		17   1053  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		18   1055  RETURN/62                 ?0        10:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1056  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	static public function banMAG($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1057  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1059  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'d6BCC99e8bAfa737'	;1
		2    1059  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1059  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1059  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1059  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1059  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1059  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1059  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1059  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1060  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1062  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12   1062  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13   1062  SEND_VAL_EX/116           ?80       7:'UPDATE `lines` SET `admin_enabled` = 0 WHERE `id` = ?;' ?1                  	;0
		14   1062  FETCH_DIM_FUNC_ARG/93     $8=       16?1                 8:'user_id'         	;2
		15   1062  SEND_VAR_EX/66            ?96       $8                   ?2                  	;0
		16   1062  DO_FCALL/60               ?7        ?0                   ?0                  	;0
		17   1063  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		18   1065  RETURN/62                 ?0        10:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1066  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	static public function unbanMAG($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1067  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1069  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'D6BCC99e8BaFa737'	;1
		2    1069  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1069  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1069  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1069  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1069  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1069  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1069  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1069  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1070  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1072  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12   1072  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13   1072  SEND_VAL_EX/116           ?80       7:'UPDATE `lines` SET `admin_enabled` = 1 WHERE `id` = ?;' ?1                  	;0
		14   1072  FETCH_DIM_FUNC_ARG/93     $8=       16?1                 8:'user_id'         	;2
		15   1072  SEND_VAR_EX/66            ?96       $8                   ?2                  	;0
		16   1072  DO_FCALL/60               ?7        ?0                   ?0                  	;0
		17   1073  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		18   1075  RETURN/62                 ?0        10:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1076  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	static public function convertMAG($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1077  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1079  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'D6BCC99e8bafA737'	;1
		2    1079  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1079  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1079  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1079  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1079  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1079  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1079  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1079  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1080  GOTO/253                  ?0        ?24                  ?3                  	;0
		11   1082  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'dd81518D00A2DD90'	;4	<<9
		12   1082  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   1082  SEND_VAL_EX/116           ?96       6:false              ?2                  	;0
		14   1082  SEND_VAL_EX/116           ?112      7:false              ?3                  	;0
		15   1082  SEND_VAL_EX/116           ?128      8:true               ?4                  	;0
		16   1082  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
		17   1083  INIT_ARRAY/71             #8=       9:'STATUS_SUCCESS'   10:'status'         	;10
		18   1083  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 11:'getLine'        	;1
		19   1083  FETCH_DIM_R/81            $9=       16?1                 13:'user_id'        	;0
		20   1083  SEND_VAR/117              ?80       $9                   ?1                  	;0
		21   1083  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		22   1083  ADD_ARRAY_ELEMENT/72      #8=       $10                  14:'data'           	;0
		23   1083  RETURN/62                 ?0        #8                   ?0                  	;0
		24   1085  RETURN/62                 ?0        15:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		25   1086  NOP/0                     ?0        16:NULL              ?0                  	;4294967295
		*/
	}

	static public function aB9dD80290F141De($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1087  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1089  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'Ef70A93e98Fb7ce9'	;1
		2    1089  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1089  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    1089  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1089  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6    1089  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7    1090  GOTO/253                  ?0        ?11                  ?2                  	;0
		8    1092  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9    1092  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10   1092  RETURN/62                 ?0        #5                   ?0                  	;0
		11   1094  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12   1095  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function createEnigma($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1096  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1098  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1098  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1098  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1099  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1101  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1103  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1103  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'f5D44bE8B59f4E62'	;1
		8    1103  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1103  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1103  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1103  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1103  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1104  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1104  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1104  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1104  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1105  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   1107  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'D6BcC99e8baFA737'	;1	<<16
		19   1107  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   1107  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   1107  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   1107  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   1107  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   1107  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   1107  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   1109  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   1110  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editEnigma($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1111  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1111  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    1113  JMP/42                    ?0        ?25                  ?0                  	;0	>>25
		3    1115  INIT_FCALL/61             ?0        ?240                 1:'parseerror'      	;1
		4    1115  INIT_STATIC_METHOD_CALL/113 ?0        2:'API'              4:'F5D44be8B59F4E62'	;1
		5    1115  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		6    1115  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		7    1115  SEND_VAR/117              ?80       $4                   ?1                  	;0
		8    1115  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		9    1115  ASSIGN/38                 ?2        16?2                 $5                  	;0
		10   1116  FETCH_DIM_IS/90           $7=       16?2                 6:'data'            	;0
		11   1116  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   7:'insert_id'       	;33554432
		12   1116  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		13   1116  JMPZ/43                   ?0        #9                   ?15                 	;0	>>15
		14   1117  GOTO/253                  ?0        ?23                  ?8                  	;0
		15   1119  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 10:'d6bcc99e8bafa737'	;1	<<13
		16   1119  FETCH_DIM_R/81            $11=      16?2                 12:'data'           	;0
		17   1119  FETCH_DIM_R/81            $12=      $11                  13:'insert_id'      	;0
		18   1119  SEND_VAR/117              ?80       $12                  ?1                  	;0
		19   1119  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		20   1119  FETCH_DIM_R/81            $14=      $13                  14:'data'           	;0
		21   1119  ASSIGN_DIM/147            ?6        16?2                 9:'data'            	;0
		22   1119  OP_DATA/137               ?0        $14                  ?0                  	;0
		23   1121  RETURN/62                 ?0        16?2                 ?0                  	;0
		24   1122  GOTO/253                  ?0        ?44                  ?15                 	;0
		25   1124  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 16:'AB9DD80290f141dE'	;1	<<2
		26   1124  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		27   1124  DO_FCALL/60               $15=      ?0                   ?0                  	;0
		28   1124  ASSIGN/38                 $16=      16?3                 $15                 	;0
		29   1124  JMPZ_EX/46                #17=      $16                  ?32                 	;0	>>32
		30   1124  ISSET_ISEMPTY_DIM_OBJ/115 #18=      16?3                 18:'data'           	;33554432
		31   1124  BOOL/52                   #17=      #18                  ?0                  	;0
		32   1124  BOOL_NOT/13               #19=      #17                  ?0                  	;0	<<29
		33   1124  JMPZ/43                   ?0        #19                  ?35                 	;0	>>35
		34   1125  GOTO/253                  ?0        ?44                  ?19                 	;0
		35   1127  ASSIGN_DIM/147            ?16       16?1                 20:'edit'           	;0	<<33
		36   1127  OP_DATA/137               ?0        16?0                 ?0                  	;0
		37   1128  ISSET_ISEMPTY_DIM_OBJ/115 #21=      16?1                 21:'isp_clear'      	;33554432
		38   1128  BOOL_NOT/13               #22=      #21                  ?0                  	;0
		39   1128  JMPZ/43                   ?0        #22                  ?41                 	;0	>>41
		40   1129  GOTO/253                  ?0        ?43                  ?22                 	;0
		41   1131  ASSIGN_DIM/147            ?19       16?1                 23:'isp_clear'      	;0	<<39
		42   1131  OP_DATA/137               ?0        24:''                ?0                  	;0
		43   1133  GOTO/253                  ?0        ?3                   ?25                 	;0
		44   1136  RETURN/62                 ?0        26:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		45   1137  GOTO/253                  ?0        ?46                  ?27                 	;0
		46   1139  NOP/0                     ?0        28:NULL              ?0                  	;4294967295
		*/
	}

	static public function Ad38E07A7561ACF3($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1140  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1142  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'AB9DD80290f141DE'	;1
		2    1142  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1142  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1142  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1142  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1142  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1142  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1142  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1142  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1143  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1145  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'A486863E198221Fa'	;1	<<9
		12   1145  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   1145  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   1145  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15   1145  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16   1146  GOTO/253                  ?0        ?18                  ?6                  	;0
		17   1148  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18   1151  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1152  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function disableEnigma($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1153  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1155  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'ab9DD80290f141de'	;1
		2    1155  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1155  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1155  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1155  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1155  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1155  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1155  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1155  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1156  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1158  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12   1158  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13   1158  SEND_VAL_EX/116           ?80       7:'UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;' ?1                  	;0
		14   1158  FETCH_DIM_FUNC_ARG/93     $8=       16?1                 8:'user_id'         	;2
		15   1158  SEND_VAR_EX/66            ?96       $8                   ?2                  	;0
		16   1158  DO_FCALL/60               ?7        ?0                   ?0                  	;0
		17   1159  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		18   1161  RETURN/62                 ?0        10:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1162  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	static public function enableEnigma($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1163  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1165  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'ab9Dd80290f141dE'	;1
		2    1165  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1165  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1165  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1165  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1165  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1165  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1165  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1165  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1166  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1168  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12   1168  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13   1168  SEND_VAL_EX/116           ?80       7:'UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;' ?1                  	;0
		14   1168  FETCH_DIM_FUNC_ARG/93     $8=       16?1                 8:'user_id'         	;2
		15   1168  SEND_VAR_EX/66            ?96       $8                   ?2                  	;0
		16   1168  DO_FCALL/60               ?7        ?0                   ?0                  	;0
		17   1169  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		18   1171  RETURN/62                 ?0        10:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1172  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	static public function banEnigma($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1173  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1175  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'Ab9Dd80290f141DE'	;1
		2    1175  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1175  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1175  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1175  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1175  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1175  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1175  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1175  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1176  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1178  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12   1178  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13   1178  SEND_VAL_EX/116           ?80       7:'UPDATE `lines` SET `admin_enabled` = 0 WHERE `id` = ?;' ?1                  	;0
		14   1178  FETCH_DIM_FUNC_ARG/93     $8=       16?1                 8:'user_id'         	;2
		15   1178  SEND_VAR_EX/66            ?96       $8                   ?2                  	;0
		16   1178  DO_FCALL/60               ?7        ?0                   ?0                  	;0
		17   1179  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		18   1181  RETURN/62                 ?0        10:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1182  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	static public function unbanEnigma($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1183  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1185  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'ab9DD80290f141De'	;1
		2    1185  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1185  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1185  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1185  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1185  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1185  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1185  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1185  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1186  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1188  FETCH_STATIC_PROP_R/173   $7=       4:'db'               ?513                	;0	<<9
		12   1188  INIT_METHOD_CALL/112      ?0        $7                   5:'query'           	;2
		13   1188  SEND_VAL_EX/116           ?80       7:'UPDATE `lines` SET `admin_enabled` = 1 WHERE `id` = ?;' ?1                  	;0
		14   1188  FETCH_DIM_FUNC_ARG/93     $8=       16?1                 8:'user_id'         	;2
		15   1188  SEND_VAR_EX/66            ?96       $8                   ?2                  	;0
		16   1188  DO_FCALL/60               ?7        ?0                   ?0                  	;0
		17   1189  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		18   1191  RETURN/62                 ?0        10:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1192  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	static public function convertEnigma($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1193  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1195  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'ab9DD80290f141dE'	;1
		2    1195  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1195  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1195  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1195  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1195  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1195  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1195  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1195  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1196  GOTO/253                  ?0        ?24                  ?3                  	;0
		11   1198  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'a486863E198221fa'	;4	<<9
		12   1198  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   1198  SEND_VAL_EX/116           ?96       6:false              ?2                  	;0
		14   1198  SEND_VAL_EX/116           ?112      7:false              ?3                  	;0
		15   1198  SEND_VAL_EX/116           ?128      8:true               ?4                  	;0
		16   1198  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
		17   1199  INIT_ARRAY/71             #8=       9:'STATUS_SUCCESS'   10:'status'         	;10
		18   1199  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 11:'getLine'        	;1
		19   1199  FETCH_DIM_R/81            $9=       16?1                 13:'user_id'        	;0
		20   1199  SEND_VAR/117              ?80       $9                   ?1                  	;0
		21   1199  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		22   1199  ADD_ARRAY_ELEMENT/72      #8=       $10                  14:'data'           	;0
		23   1199  RETURN/62                 ?0        #8                   ?0                  	;0
		24   1201  RETURN/62                 ?0        15:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		25   1202  NOP/0                     ?0        16:NULL              ?0                  	;4294967295
		*/
	}

	static public function DE27Bb48f7bFF12d()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1205  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    1205  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'f964b9222b35AdDD'	;0
		2    1205  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    1205  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    1205  RETURN/62                 ?0        #0                   ?0                  	;0
		5    1206  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function a64Ba92a18B425ED($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1207  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1209  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'B47Fb5320E43f112'	;1
		2    1209  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1209  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    1209  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1209  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6    1209  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7    1210  GOTO/253                  ?0        ?11                  ?2                  	;0
		8    1212  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9    1212  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10   1212  RETURN/62                 ?0        #5                   ?0                  	;0
		11   1214  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12   1215  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function createBouquet($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1216  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1218  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1218  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1218  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1219  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1221  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1223  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1223  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'F987238750272AAc'	;1
		8    1223  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1223  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1223  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1223  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1223  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1224  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1224  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1224  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1224  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1225  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   1227  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'A64BA92a18b425Ed'	;1	<<16
		19   1227  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   1227  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   1227  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   1227  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   1227  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   1227  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   1227  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   1229  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   1230  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editBouquet($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1231  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1231  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    1233  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'A64BA92a18B425eD'	;1
		3    1233  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    1233  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    1233  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    1233  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    1233  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    1233  BOOL/52                   #6=       #7                   ?0                  	;0
		9    1233  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   1233  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   1234  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   1236  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   1236  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   1237  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   1237  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'F987238750272AAC'	;1
		16   1237  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   1237  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   1237  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   1237  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   1237  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   1238  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   1238  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   1238  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   1238  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   1239  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   1241  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'a64ba92a18b425eD'	;1	<<24
		27   1241  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   1241  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   1241  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   1241  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   1241  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   1241  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   1241  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   1243  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   1245  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   1246  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function cF129337b2b64858($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1247  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1249  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'a64bA92A18B425ed'	;1
		2    1249  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1249  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1249  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1249  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1249  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1249  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1249  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1249  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1250  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1252  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'aE08cDA9F888114F'	;1	<<9
		12   1252  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   1252  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   1252  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15   1252  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16   1253  GOTO/253                  ?0        ?18                  ?6                  	;0
		17   1255  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18   1258  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1259  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function getAccessCodes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1262  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    1262  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'eFAdb87d8C867176'	;0
		2    1262  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    1262  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    1262  RETURN/62                 ?0        #0                   ?0                  	;0
		5    1263  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function getAccessCode($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1264  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1266  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'EACE9b35c7c59E8a'	;1
		2    1266  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1266  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    1266  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1266  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6    1266  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7    1267  GOTO/253                  ?0        ?11                  ?2                  	;0
		8    1269  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9    1269  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10   1269  RETURN/62                 ?0        #5                   ?0                  	;0
		11   1271  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12   1272  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function createAccessCode($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1273  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1275  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1275  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1275  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1276  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1278  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1280  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1280  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'E791fbD5e55B2260'	;1
		8    1280  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1280  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1280  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1280  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1280  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1281  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1281  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1281  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1281  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1282  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   1284  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'getAccessCode'  	;1	<<16
		19   1284  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   1284  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   1284  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   1284  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   1284  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   1284  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   1284  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   1286  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   1287  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editAccessCode($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1288  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1288  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    1290  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getAccessCode'   	;1
		3    1290  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    1290  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    1290  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    1290  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    1290  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    1290  BOOL/52                   #6=       #7                   ?0                  	;0
		9    1290  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   1290  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   1291  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   1293  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   1293  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   1294  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   1294  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'E791fbd5e55b2260'	;1
		16   1294  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   1294  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   1294  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   1294  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   1294  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   1295  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   1295  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   1295  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   1295  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   1296  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   1298  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'getAccessCode'  	;1	<<24
		27   1298  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   1298  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   1298  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   1298  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   1298  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   1298  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   1298  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   1300  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   1302  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   1303  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function deleteAccessCode($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1304  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1306  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getAccessCode'   	;1
		2    1306  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1306  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1306  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1306  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1306  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1306  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1306  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1306  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1307  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1309  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'BAe6B79F4A41Ee46'	;1	<<9
		12   1309  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   1309  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   1309  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15   1309  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16   1310  GOTO/253                  ?0        ?18                  ?6                  	;0
		17   1312  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18   1315  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1316  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function getHMACs()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1319  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    1319  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'Ab3a786B762a1806'	;0
		2    1319  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    1319  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    1319  RETURN/62                 ?0        #0                   ?0                  	;0
		5    1320  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function getHMAC($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1321  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1323  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'FA460aBDD5DCA199'	;1
		2    1323  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1323  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    1323  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1323  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6    1323  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7    1324  GOTO/253                  ?0        ?11                  ?2                  	;0
		8    1326  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9    1326  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10   1326  RETURN/62                 ?0        #5                   ?0                  	;0
		11   1328  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12   1329  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function createHMAC($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1330  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1332  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1332  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1332  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1333  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1335  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1337  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1337  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'e3784BF595659221'	;1
		8    1337  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1337  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1337  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1337  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1337  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1338  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1338  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1338  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1338  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1339  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   1341  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'getHMAC'        	;1	<<16
		19   1341  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   1341  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   1341  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   1341  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   1341  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   1341  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   1341  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   1343  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   1344  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editHMAC($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1345  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1345  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    1347  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getHMAC'         	;1
		3    1347  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    1347  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    1347  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    1347  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    1347  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    1347  BOOL/52                   #6=       #7                   ?0                  	;0
		9    1347  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   1347  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   1348  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   1350  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   1350  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   1351  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   1351  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'E3784Bf595659221'	;1
		16   1351  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   1351  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   1351  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   1351  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   1351  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   1352  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   1352  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   1352  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   1352  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   1353  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   1355  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'getHMAC'        	;1	<<24
		27   1355  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   1355  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   1355  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   1355  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   1355  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   1355  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   1355  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   1357  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   1359  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   1360  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function DDA4d03970E2cA94($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1361  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1363  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getHMAC'         	;1
		2    1363  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1363  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1363  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1363  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1363  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1363  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1363  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1363  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1364  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1366  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'eB09D3583Fd7e3d6'	;1	<<9
		12   1366  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   1366  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   1366  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15   1366  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16   1367  GOTO/253                  ?0        ?18                  ?6                  	;0
		17   1369  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18   1372  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1373  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function E2cAb4ace32264BB()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1376  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    1376  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'C8E66f17258aC811'	;0
		2    1376  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    1376  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    1376  RETURN/62                 ?0        #0                   ?0                  	;0
		5    1377  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function getEPG($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1378  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1380  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'getEPG'          	;1
		2    1380  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1380  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    1380  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1380  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6    1380  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7    1381  GOTO/253                  ?0        ?11                  ?2                  	;0
		8    1383  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9    1383  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10   1383  RETURN/62                 ?0        #5                   ?0                  	;0
		11   1385  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12   1386  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function createEPG($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1387  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1389  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1389  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1389  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1390  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1392  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1394  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1394  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'DD2CeDE3d30CE0DF'	;1
		8    1394  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1394  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1394  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1394  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1394  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1395  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1395  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1395  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1395  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1396  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   1398  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'getEPG'         	;1	<<16
		19   1398  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   1398  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   1398  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   1398  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   1398  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   1398  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   1398  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   1400  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   1401  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editEPG($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1402  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1402  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    1404  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getEPG'          	;1
		3    1404  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    1404  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    1404  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    1404  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    1404  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    1404  BOOL/52                   #6=       #7                   ?0                  	;0
		9    1404  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   1404  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   1405  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   1407  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   1407  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   1408  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   1408  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'dd2Cede3d30cE0DF'	;1
		16   1408  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   1408  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   1408  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   1408  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   1408  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   1409  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   1409  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   1409  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   1409  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   1410  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   1412  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'getEPG'         	;1	<<24
		27   1412  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   1412  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   1412  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   1412  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   1412  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   1412  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   1412  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   1414  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   1416  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   1417  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function A9c0D3A737017A30($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1418  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1420  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getEPG'          	;1
		2    1420  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1420  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1420  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1420  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1420  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1420  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1420  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1420  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1421  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1423  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'d7eAe25709B24003'	;1	<<9
		12   1423  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   1423  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   1423  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15   1423  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16   1424  GOTO/253                  ?0        ?18                  ?6                  	;0
		17   1426  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18   1429  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1430  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function reloadEPG($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1431  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1    1433  JMPZ/43                   ?0        16?0                 ?3                  	;0	>>3
		2    1434  GOTO/253                  ?0        ?12                  ?1                  	;0
		3    1436  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'shell_exec'      	;1	<<1
		4    1436  FETCH_CONSTANT/99         #1=       ?0                   4:'PHP_BIN'         	;16
		5    1436  CONCAT/8                  #2=       #1                   7:' '               	;0
		6    1436  FETCH_CONSTANT/99         #3=       ?0                   8:'CRON_PATH'       	;16
		7    1436  CONCAT/8                  #4=       #2                   #3                  	;0
		8    1436  CONCAT/8                  #5=       #4                   11:'epg.php > /dev/null 2>/dev/null &'	;0
		9    1436  SEND_VAL_EX/116           ?80       #5                   ?1                  	;0
		10   1436  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
		11   1437  GOTO/253                  ?0        ?25                  ?12                 	;0
		12   1439  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'shell_exec'     	;1
		13   1439  FETCH_CONSTANT/99         #7=       ?0                   15:'PHP_BIN'        	;16
		14   1439  CONCAT/8                  #8=       #7                   18:' '              	;0
		15   1439  FETCH_CONSTANT/99         #9=       ?0                   19:'CRON_PATH'      	;16
		16   1439  CONCAT/8                  #10=      #8                   #9                  	;0
		17   1439  CONCAT/8                  #11=      #10                  22:'epg.php "'      	;0
		18   1439  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'intval'         	;1
		19   1439  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		20   1439  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		21   1439  CONCAT/8                  #13=      #11                  $12                 	;0
		22   1439  CONCAT/8                  #14=      #13                  25:'" > /dev/null 2>/dev/null &'	;0
		23   1439  SEND_VAL_EX/116           ?80       #14                  ?1                  	;0
		24   1439  DO_FCALL_BY_NAME/131      ?14       ?0                   ?0                  	;0
		25   1441  RETURN/62                 ?0        26:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		26   1442  NOP/0                     ?0        27:NULL              ?0                  	;4294967295
		*/
	}

	static public function getProviders()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1445  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    1445  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'getStreamProviders'	;0
		2    1445  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    1445  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    1445  RETURN/62                 ?0        #0                   ?0                  	;0
		5    1446  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function getProvider($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1447  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1449  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'getStreamProvider'	;1
		2    1449  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1449  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    1449  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1449  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6    1449  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7    1450  GOTO/253                  ?0        ?11                  ?2                  	;0
		8    1452  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9    1452  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10   1452  RETURN/62                 ?0        #5                   ?0                  	;0
		11   1454  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12   1455  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function createProvider($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1456  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1458  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1458  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1458  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1459  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1461  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1463  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1463  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'processProvider' 	;1
		8    1463  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1463  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1463  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1463  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1463  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1464  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1464  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1464  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1464  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1465  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   1467  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'getProvider'    	;1	<<16
		19   1467  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   1467  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   1467  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   1467  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   1467  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   1467  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   1467  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   1469  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   1470  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editProvider($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1471  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1471  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    1473  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getProvider'     	;1
		3    1473  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    1473  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    1473  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    1473  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    1473  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    1473  BOOL/52                   #6=       #7                   ?0                  	;0
		9    1473  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   1473  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   1474  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   1476  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   1476  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   1477  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   1477  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'processProvider' 	;1
		16   1477  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   1477  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   1477  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   1477  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   1477  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   1478  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   1478  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   1478  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   1478  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   1479  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   1481  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'getProvider'    	;1	<<24
		27   1481  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   1481  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   1481  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   1481  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   1481  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   1481  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   1481  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   1483  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   1485  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   1486  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function deleteProvider($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1487  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1489  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getProvider'     	;1
		2    1489  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1489  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1489  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1489  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1489  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1489  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1489  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1489  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1490  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1492  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'deleteProvider'  	;1	<<9
		12   1492  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   1492  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   1492  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15   1492  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16   1493  GOTO/253                  ?0        ?18                  ?6                  	;0
		17   1495  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18   1498  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1499  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function reloadProvider($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1500  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1    1502  JMPZ/43                   ?0        16?0                 ?3                  	;0	>>3
		2    1503  GOTO/253                  ?0        ?12                  ?1                  	;0
		3    1505  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'shell_exec'      	;1	<<1
		4    1505  FETCH_CONSTANT/99         #1=       ?0                   4:'PHP_BIN'         	;16
		5    1505  CONCAT/8                  #2=       #1                   7:' '               	;0
		6    1505  FETCH_CONSTANT/99         #3=       ?0                   8:'CRON_PATH'       	;16
		7    1505  CONCAT/8                  #4=       #2                   #3                  	;0
		8    1505  CONCAT/8                  #5=       #4                   11:'providers.php > /dev/null 2>/dev/null &'	;0
		9    1505  SEND_VAL_EX/116           ?80       #5                   ?1                  	;0
		10   1505  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
		11   1506  GOTO/253                  ?0        ?25                  ?12                 	;0
		12   1508  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'shell_exec'     	;1
		13   1508  FETCH_CONSTANT/99         #7=       ?0                   15:'PHP_BIN'        	;16
		14   1508  CONCAT/8                  #8=       #7                   18:' '              	;0
		15   1508  FETCH_CONSTANT/99         #9=       ?0                   19:'CRON_PATH'      	;16
		16   1508  CONCAT/8                  #10=      #8                   #9                  	;0
		17   1508  CONCAT/8                  #11=      #10                  22:'providers.php "'	;0
		18   1508  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'intval'         	;1
		19   1508  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		20   1508  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		21   1508  CONCAT/8                  #13=      #11                  $12                 	;0
		22   1508  CONCAT/8                  #14=      #13                  25:'" > /dev/null 2>/dev/null &'	;0
		23   1508  SEND_VAL_EX/116           ?80       #14                  ?1                  	;0
		24   1508  DO_FCALL_BY_NAME/131      ?14       ?0                   ?0                  	;0
		25   1510  RETURN/62                 ?0        26:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		26   1511  NOP/0                     ?0        27:NULL              ?0                  	;4294967295
		*/
	}

	static public function getGroups()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1514  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    1514  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'aD052A625C6AC011'	;0
		2    1514  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    1514  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    1514  RETURN/62                 ?0        #0                   ?0                  	;0
		5    1515  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function getGroup($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1516  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1518  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'a752238C4005cbBC'	;1
		2    1518  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1518  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    1518  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1518  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6    1518  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7    1519  GOTO/253                  ?0        ?11                  ?2                  	;0
		8    1521  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9    1521  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10   1521  RETURN/62                 ?0        #5                   ?0                  	;0
		11   1523  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12   1524  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function createGroup($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1525  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1527  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1527  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1527  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1528  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1530  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1532  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1532  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'bC0C0df5663423b9'	;1
		8    1532  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1532  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1532  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1532  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1532  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1533  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1533  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1533  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1533  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1534  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   1536  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'getGroup'       	;1	<<16
		19   1536  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   1536  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   1536  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   1536  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   1536  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   1536  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   1536  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   1538  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   1539  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editGroup($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1540  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1540  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    1542  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getGroup'        	;1
		3    1542  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    1542  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    1542  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    1542  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    1542  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    1542  BOOL/52                   #6=       #7                   ?0                  	;0
		9    1542  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   1542  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   1543  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   1545  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   1545  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   1546  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   1546  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'Bc0c0dF5663423b9'	;1
		16   1546  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   1546  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   1546  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   1546  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   1546  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   1547  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   1547  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   1547  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   1547  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   1548  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   1550  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'getGroup'       	;1	<<24
		27   1550  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   1550  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   1550  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   1550  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   1550  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   1550  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   1550  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   1552  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   1554  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   1555  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function BE56e3Da8aED7f8b($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1556  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1558  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getGroup'        	;1
		2    1558  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1558  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1558  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1558  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1558  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1558  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1558  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1558  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1559  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1561  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'b23579Cde727d32f'	;1	<<9
		12   1561  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   1561  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   1561  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15   1561  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16   1562  GOTO/253                  ?0        ?18                  ?6                  	;0
		17   1564  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18   1567  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1568  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function d117e45424fE8F00()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1571  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    1571  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'D8c8284136938Ef0'	;0
		2    1571  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    1571  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    1571  RETURN/62                 ?0        #0                   ?0                  	;0
		5    1572  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function fF68F9EFd227763f($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1573  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1575  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'fddF8DA6Ab3fE47B'	;1
		2    1575  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1575  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    1575  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1575  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6    1575  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7    1576  GOTO/253                  ?0        ?11                  ?2                  	;0
		8    1578  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9    1578  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10   1578  RETURN/62                 ?0        #5                   ?0                  	;0
		11   1580  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12   1581  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function createPackage($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1582  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1584  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1584  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1584  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1585  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1587  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1589  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1589  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'cD3092ad83523301'	;1
		8    1589  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1589  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1589  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1589  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1589  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1590  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1590  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1590  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1590  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1591  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   1593  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'ff68f9eFd227763F'	;1	<<16
		19   1593  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   1593  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   1593  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   1593  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   1593  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   1593  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   1593  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   1595  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   1596  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editPackage($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1597  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1597  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    1599  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'Ff68F9efd227763F'	;1
		3    1599  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    1599  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    1599  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    1599  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    1599  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    1599  BOOL/52                   #6=       #7                   ?0                  	;0
		9    1599  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   1599  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   1600  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   1602  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   1602  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   1603  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   1603  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'cD3092aD83523301'	;1
		16   1603  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   1603  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   1603  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   1603  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   1603  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   1604  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   1604  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   1604  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   1604  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   1605  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   1607  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'ff68F9EfD227763F'	;1	<<24
		27   1607  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   1607  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   1607  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   1607  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   1607  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   1607  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   1607  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   1609  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   1611  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   1612  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function eFc1502D889C4091($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1613  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1615  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'ff68f9EFD227763f'	;1
		2    1615  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1615  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1615  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1615  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1615  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1615  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1615  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1615  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1616  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1618  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'EB37711A9250A829'	;1	<<9
		12   1618  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   1618  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   1618  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15   1618  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16   1619  GOTO/253                  ?0        ?18                  ?6                  	;0
		17   1621  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18   1624  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1625  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function b8b821Fd5B9528D4()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1628  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    1628  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'f93e9343c3d7fd99'	;0
		2    1628  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    1628  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    1628  RETURN/62                 ?0        #0                   ?0                  	;0
		5    1629  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function a9Dc9Bb8f74d8E4d($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1630  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1632  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'B11216Ab01AAa78c'	;1
		2    1632  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1632  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    1632  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1632  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6    1632  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7    1633  GOTO/253                  ?0        ?11                  ?2                  	;0
		8    1635  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9    1635  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10   1635  RETURN/62                 ?0        #5                   ?0                  	;0
		11   1637  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12   1638  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function createTranscodeProfile($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1639  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1641  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1641  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1641  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1642  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1644  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1646  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1646  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'cD25CC90161d1a86'	;1
		8    1646  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1646  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1646  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1646  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1646  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1647  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1647  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1647  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1647  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1648  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   1650  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'a9Dc9BB8f74D8e4d'	;1	<<16
		19   1650  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   1650  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   1650  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   1650  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   1650  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   1650  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   1650  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   1652  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   1653  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editTranscodeProfile($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1654  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1654  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    1656  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'a9dC9BB8F74d8E4D'	;1
		3    1656  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    1656  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    1656  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    1656  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    1656  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    1656  BOOL/52                   #6=       #7                   ?0                  	;0
		9    1656  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   1656  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   1657  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   1659  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   1659  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   1660  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   1660  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'Cd25cC90161d1A86'	;1
		16   1660  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   1660  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   1660  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   1660  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   1660  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   1661  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   1661  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   1661  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   1661  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   1662  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   1664  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'a9dC9bB8F74D8e4d'	;1	<<24
		27   1664  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   1664  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   1664  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   1664  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   1664  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   1664  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   1664  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   1666  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   1668  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   1669  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function deleteTranscodeProfile($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1670  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1672  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'a9DC9Bb8f74d8e4D'	;1
		2    1672  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1672  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1672  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1672  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1672  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1672  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1672  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1672  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1673  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1675  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'e6397083b98CA4b5'	;1	<<9
		12   1675  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   1675  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   1675  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15   1675  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16   1676  GOTO/253                  ?0        ?18                  ?6                  	;0
		17   1678  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18   1681  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1682  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function B5943F8605Dac186()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1685  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    1685  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'d5De20Bca4dd43Ab'	;0
		2    1685  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    1685  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    1685  RETURN/62                 ?0        #0                   ?0                  	;0
		5    1686  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function f6e1A36D39166281($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1687  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1689  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'Dd77C27786C11AaD'	;1
		2    1689  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1689  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    1689  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1689  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6    1689  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7    1690  GOTO/253                  ?0        ?11                  ?2                  	;0
		8    1692  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9    1692  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10   1692  RETURN/62                 ?0        #5                   ?0                  	;0
		11   1694  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12   1695  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function addRTMPIP($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1696  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1698  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1698  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1698  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1699  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1701  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1703  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1703  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'fa73216009424093'	;1
		8    1703  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1703  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1703  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1703  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1703  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1704  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1704  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1704  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1704  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1705  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   1707  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'f6E1A36D39166281'	;1	<<16
		19   1707  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   1707  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   1707  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   1707  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   1707  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   1707  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   1707  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   1709  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   1710  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editRTMPIP($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1711  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1711  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    1713  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'F6E1A36D39166281'	;1
		3    1713  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    1713  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    1713  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    1713  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    1713  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    1713  BOOL/52                   #6=       #7                   ?0                  	;0
		9    1713  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   1713  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   1714  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   1716  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   1716  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   1717  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   1717  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'FA73216009424093'	;1
		16   1717  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   1717  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   1717  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   1717  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   1717  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   1718  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   1718  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   1718  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   1718  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   1719  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   1721  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'f6E1a36d39166281'	;1	<<24
		27   1721  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   1721  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   1721  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   1721  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   1721  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   1721  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   1721  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   1723  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   1725  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   1726  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function c6886fc2197a448c($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1727  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1729  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'F6E1a36D39166281'	;1
		2    1729  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1729  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1729  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1729  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1729  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1729  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1729  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1729  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1730  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1732  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'F2476161e17B4Aa7'	;1	<<9
		12   1732  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   1732  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   1732  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15   1732  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16   1733  GOTO/253                  ?0        ?18                  ?6                  	;0
		17   1735  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18   1738  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1739  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function c721BD954a5F072F()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1742  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    1742  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'f769E3F0C739d1A6'	;0
		2    1742  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    1742  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    1742  RETURN/62                 ?0        #0                   ?0                  	;0
		5    1743  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function A5611693E0A4Ea89($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1744  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1746  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'D1132f737572929c'	;1
		2    1746  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1746  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    1746  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1746  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6    1746  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7    1747  GOTO/253                  ?0        ?11                  ?2                  	;0
		8    1749  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9    1749  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10   1749  RETURN/62                 ?0        #5                   ?0                  	;0
		11   1751  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12   1752  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function createCategory($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1753  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1755  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1755  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1755  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1756  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1758  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1760  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1760  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'Ef92c3EBB0E25473'	;1
		8    1760  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1760  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1760  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1760  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1760  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1761  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1761  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1761  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1761  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1762  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   1764  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'a5611693E0a4Ea89'	;1	<<16
		19   1764  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   1764  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   1764  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   1764  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   1764  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   1764  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   1764  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   1766  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   1767  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editCategory($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1768  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1768  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    1770  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'a5611693E0a4ea89'	;1
		3    1770  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    1770  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    1770  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    1770  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    1770  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    1770  BOOL/52                   #6=       #7                   ?0                  	;0
		9    1770  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   1770  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   1771  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   1773  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   1773  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   1774  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   1774  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'EF92C3eBb0e25473'	;1
		16   1774  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   1774  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   1774  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   1774  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   1774  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   1775  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   1775  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   1775  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   1775  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   1776  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   1778  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'A5611693e0A4ea89'	;1	<<24
		27   1778  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   1778  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   1778  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   1778  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   1778  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   1778  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   1778  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   1780  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   1782  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   1783  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function B293e956aFb2b06B($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1784  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1786  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'a5611693E0a4EA89'	;1
		2    1786  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1786  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1786  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1786  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1786  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1786  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1786  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1786  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1787  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1789  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'D30222255BCfe230'	;1	<<9
		12   1789  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   1789  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   1789  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15   1789  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16   1790  GOTO/253                  ?0        ?18                  ?6                  	;0
		17   1792  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18   1795  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1796  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function b44e34D9Ba4FB8c4()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1799  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    1799  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'dFfCdAFe3A02352C'	;0
		2    1799  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    1799  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    1799  RETURN/62                 ?0        #0                   ?0                  	;0
		5    1800  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function C3A279725b215929($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1801  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1803  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'D8Ec9843fc5457Df'	;1
		2    1803  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1803  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    1803  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1803  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6    1803  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7    1804  GOTO/253                  ?0        ?11                  ?2                  	;0
		8    1806  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9    1806  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10   1806  RETURN/62                 ?0        #5                   ?0                  	;0
		11   1808  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12   1809  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function createWatchFolder($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1810  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1812  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1812  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1812  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1813  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1815  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1817  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1817  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'F2a688c54caF9C4a'	;1
		8    1817  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1817  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1817  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1817  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1817  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1818  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1818  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1818  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1818  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1819  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   1821  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'C3a279725b215929'	;1	<<16
		19   1821  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   1821  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   1821  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   1821  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   1821  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   1821  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   1821  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   1823  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   1824  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editWatchFolder($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1825  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1825  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    1827  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'c3A279725b215929'	;1
		3    1827  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    1827  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    1827  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    1827  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    1827  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    1827  BOOL/52                   #6=       #7                   ?0                  	;0
		9    1827  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   1827  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   1828  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   1830  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   1830  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   1831  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   1831  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'F2A688c54CAf9c4A'	;1
		16   1831  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   1831  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   1831  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   1831  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   1831  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   1832  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   1832  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   1832  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   1832  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   1833  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   1835  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'C3A279725b215929'	;1	<<24
		27   1835  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   1835  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   1835  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   1835  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   1835  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   1835  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   1835  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   1837  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   1839  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   1840  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function A82FF612fe0312c0($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1841  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1843  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'c3a279725b215929'	;1
		2    1843  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    1843  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    1843  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1843  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    1843  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    1843  BOOL/52                   #4=       #5                   ?0                  	;0
		8    1843  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    1843  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   1844  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   1846  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'ed770984CfB04dfa'	;1	<<9
		12   1846  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   1846  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   1846  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15   1846  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16   1847  GOTO/253                  ?0        ?18                  ?6                  	;0
		17   1849  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18   1852  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   1853  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function reloadWatchFolder($C082ca9ed03f473c, $Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1854  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1854  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    1856  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'forceWatch'      	;2
		3    1856  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4    1856  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		5    1856  DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
		6    1857  RETURN/62                 ?0        2:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		7    1858  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	static public function getBlockedISPs()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1861  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    1861  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'E87AdE454d6C69d1'	;0
		2    1861  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    1861  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    1861  RETURN/62                 ?0        #0                   ?0                  	;0
		5    1862  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function addBlockedISP($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1863  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1865  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1865  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1865  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1866  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1868  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1870  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1870  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'da7dc6613EDb583d'	;1
		8    1870  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1870  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1870  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1870  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1870  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1871  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1871  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1871  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1871  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1872  GOTO/253                  ?0        ?22                  ?10                 	;0
		18   1874  FETCH_DIM_R/81            $11=      16?1                 12:'data'           	;0	<<16
		19   1874  FETCH_DIM_R/81            $12=      $11                  13:'insert_id'      	;0
		20   1874  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		21   1874  OP_DATA/137               ?0        $12                  ?0                  	;0
		22   1876  RETURN/62                 ?0        16?1                 ?0                  	;0
		23   1877  NOP/0                     ?0        14:NULL              ?0                  	;4294967295
		*/
	}

	static public function F8A610043421B14e($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1878  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1880  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'eBa75CeCad9d3196'	;1
		2    1880  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1880  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4    1880  BOOL_NOT/13               #2=       $1                   ?0                  	;0
		5    1880  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
		6    1881  GOTO/253                  ?0        ?8                   ?2                  	;0
		7    1883  RETURN/62                 ?0        3:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<5
		8    1885  RETURN/62                 ?0        4:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		9    1886  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function getBlockedUAs()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1889  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    1889  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'eAC02e498611cE84'	;0
		2    1889  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    1889  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    1889  RETURN/62                 ?0        #0                   ?0                  	;0
		5    1890  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function addBlockedUA($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1891  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1893  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1893  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1893  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1894  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1896  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1898  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1898  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'d73A37B0D9b54604'	;1
		8    1898  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1898  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1898  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1898  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1898  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1899  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1899  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1899  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1899  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1900  GOTO/253                  ?0        ?22                  ?10                 	;0
		18   1902  FETCH_DIM_R/81            $11=      16?1                 12:'data'           	;0	<<16
		19   1902  FETCH_DIM_R/81            $12=      $11                  13:'insert_id'      	;0
		20   1902  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		21   1902  OP_DATA/137               ?0        $12                  ?0                  	;0
		22   1904  RETURN/62                 ?0        16?1                 ?0                  	;0
		23   1905  NOP/0                     ?0        14:NULL              ?0                  	;4294967295
		*/
	}

	static public function b40EC96654C66F48($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1906  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1908  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'Ab10108Edd7cE309'	;1
		2    1908  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1908  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4    1908  BOOL_NOT/13               #2=       $1                   ?0                  	;0
		5    1908  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
		6    1909  GOTO/253                  ?0        ?8                   ?2                  	;0
		7    1911  RETURN/62                 ?0        3:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<5
		8    1913  RETURN/62                 ?0        4:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		9    1914  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function ab69ecd4D7705061()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1917  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    1917  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'dC088f5Bec67CE39'	;0
		2    1917  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    1917  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    1917  RETURN/62                 ?0        #0                   ?0                  	;0
		5    1918  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function addBlockedIP($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1919  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1921  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1921  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1921  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1922  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1924  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1926  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1926  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'f7e2383F47283cB7'	;1
		8    1926  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1926  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1926  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1926  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1926  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1927  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1927  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1927  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1927  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1928  GOTO/253                  ?0        ?22                  ?10                 	;0
		18   1930  FETCH_DIM_R/81            $11=      16?1                 12:'data'           	;0	<<16
		19   1930  FETCH_DIM_R/81            $12=      $11                  13:'insert_id'      	;0
		20   1930  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		21   1930  OP_DATA/137               ?0        $12                  ?0                  	;0
		22   1932  RETURN/62                 ?0        16?1                 ?0                  	;0
		23   1933  NOP/0                     ?0        14:NULL              ?0                  	;4294967295
		*/
	}

	static public function C7Ef58C0F7acDB05($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1934  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1936  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'c43C3cE5c5838f3D'	;1
		2    1936  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1936  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4    1936  BOOL_NOT/13               #2=       $1                   ?0                  	;0
		5    1936  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
		6    1937  GOTO/253                  ?0        ?8                   ?2                  	;0
		7    1939  RETURN/62                 ?0        3:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<5
		8    1941  RETURN/62                 ?0        4:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		9    1942  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function flushBlockedIPs()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1945  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'A0C5c8DE2109DD97'	;0
		1    1945  DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
		2    1946  RETURN/62                 ?0        2:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		3    1947  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	static public function cB6Ee16e86F09E61($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1948  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1950  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'F260B7a31f021e39'	;1
		2    1950  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1950  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    1950  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    1950  JMPZ_EX/46                #4=       $3                   ?9                  	;0	>>9
		6    1950  FETCH_DIM_R/81            $5=       16?1                 2:'type'            	;0
		7    1950  IS_EQUAL/17               #6=       $5                   3:1                 	;0
		8    1950  BOOL/52                   #4=       #6                   ?0                  	;0
		9    1950  BOOL_NOT/13               #7=       #4                   ?0                  	;0	<<5
		10   1950  JMPZ/43                   ?0        #7                   ?12                 	;0	>>12
		11   1951  GOTO/253                  ?0        ?15                  ?4                  	;0
		12   1953  INIT_ARRAY/71             #8=       5:'STATUS_SUCCESS'   6:'status'          	;10	<<10
		13   1953  ADD_ARRAY_ELEMENT/72      #8=       16?1                 7:'data'            	;0
		14   1953  RETURN/62                 ?0        #8                   ?0                  	;0
		15   1955  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		16   1956  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function createStream($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1957  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1959  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    1959  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    1959  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    1960  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    1962  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    1964  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    1964  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'C880AaAF942BB5ee'	;1
		8    1964  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1964  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   1964  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   1964  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1964  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   1965  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   1965  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   1965  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   1965  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   1966  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   1968  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'Cb6ee16E86f09E61'	;1	<<16
		19   1968  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   1968  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   1968  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   1968  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   1968  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   1968  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   1968  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   1970  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   1971  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editStream($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1972  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1972  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    1974  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'Cb6ee16E86f09e61'	;1
		3    1974  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    1974  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    1974  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    1974  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    1974  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    1974  BOOL/52                   #6=       #7                   ?0                  	;0
		9    1974  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   1974  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   1975  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   1977  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   1977  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   1978  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   1978  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'c880AaaF942BB5eE'	;1
		16   1978  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   1978  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   1978  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   1978  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   1978  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   1979  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   1979  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   1979  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   1979  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   1980  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   1982  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'cB6Ee16e86F09E61'	;1	<<24
		27   1982  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   1982  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   1982  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   1982  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   1982  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   1982  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   1982  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   1984  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   1986  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   1987  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function e7f8e8ECC8B6667b($Abcb228699a7f743, $C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1988  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1988  RECV_INIT/64              16?1=     ?2                   0:-1                	;0
		2    1990  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 1:'CB6ee16E86F09e61'	;1
		3    1990  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    1990  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		5    1990  ASSIGN/38                 $4=       16?2                 $3                  	;0
		6    1990  JMPZ_EX/46                #5=       $4                   ?9                  	;0	>>9
		7    1990  ISSET_ISEMPTY_DIM_OBJ/115 #6=       16?2                 3:'data'            	;33554432
		8    1990  BOOL/52                   #5=       #6                   ?0                  	;0
		9    1990  BOOL_NOT/13               #7=       #5                   ?0                  	;0	<<6
		10   1990  JMPZ/43                   ?0        #7                   ?12                 	;0	>>12
		11   1991  GOTO/253                  ?0        ?20                  ?4                  	;0
		12   1993  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'fC84E25737908Cb5'	;2	<<10
		13   1993  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		14   1993  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		15   1993  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		16   1993  BOOL_NOT/13               #9=       $8                   ?0                  	;0
		17   1993  JMPZ/43                   ?0        #9                   ?19                 	;0	>>19
		18   1994  GOTO/253                  ?0        ?20                  ?7                  	;0
		19   1996  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<17
		20   1999  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		21   2000  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function ffa26438E002C2B7($Abcb228699a7f743, $C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2001  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2001  RECV_INIT/64              16?1=     ?2                   0:-1                	;0
		2    2003  IS_EQUAL/17               #3=       16?1                 1:-1                	;0
		3    2003  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    2004  GOTO/253                  ?0        ?19                  ?2                  	;0
		5    2006  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'json_decode'     	;2	<<3
		6    2006  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'a730C6DE034BA241'	;2
		7    2006  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		8    2006  INIT_ARRAY/71             #4=       7:'stream'           8:'action'          	;14
		9    2006  INIT_ARRAY/71             #5=       16?0                 ?0                  	;4
		10   2006  ADD_ARRAY_ELEMENT/72      #4=       #5                   9:'stream_ids'      	;0
		11   2006  ADD_ARRAY_ELEMENT/72      #4=       10:'start'           11:'function'       	;0
		12   2006  SEND_VAL_EX/116           ?96       #4                   ?2                  	;0
		13   2006  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		14   2006  SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		15   2006  SEND_VAL_EX/116           ?96       12:true              ?2                  	;0
		16   2006  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		17   2006  ASSIGN/38                 ?5        16?2                 $7                  	;0
		18   2007  GOTO/253                  ?0        ?36                  ?13                 	;0
		19   2009  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'json_decode'    	;2
		20   2009  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'d5612f049a8056a5'	;1
		21   2009  INIT_ARRAY/71             #9=       18:'stream'          19:'action'         	;18
		22   2009  ADD_ARRAY_ELEMENT/72      #9=       20:'start'           21:'sub'            	;0
		23   2009  INIT_ARRAY/71             #10=      16?0                 ?0                  	;4
		24   2009  ADD_ARRAY_ELEMENT/72      #9=       #10                  22:'stream_ids'     	;0
		25   2009  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'array_keys'     	;1
		26   2009  FETCH_STATIC_PROP_FUNC_ARG/177 $11=      25:'rServers'        26:'XUI'            	;1
		27   2009  SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
		28   2009  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		29   2009  ADD_ARRAY_ELEMENT/72      #9=       $12                  28:'servers'        	;0
		30   2009  SEND_VAL_EX/116           ?80       #9                   ?1                  	;0
		31   2009  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		32   2009  SEND_VAR_NO_REF_EX/50     ?80       $13                  ?1                  	;0
		33   2009  SEND_VAL_EX/116           ?96       29:true              ?2                  	;0
		34   2009  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		35   2009  ASSIGN/38                 ?12       16?2                 $14                 	;0
		36   2011  FETCH_DIM_R/81            $16=      16?2                 30:'result'         	;0
		37   2011  BOOL_NOT/13               #17=      $16                  ?0                  	;0
		38   2011  JMPZ/43                   ?0        #17                  ?40                 	;0	>>40
		39   2012  GOTO/253                  ?0        ?41                  ?31                 	;0
		40   2014  RETURN/62                 ?0        32:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<38
		41   2016  RETURN/62                 ?0        33:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		42   2017  NOP/0                     ?0        34:NULL              ?0                  	;4294967295
		*/
	}

	static public function Ee173b194544b3a2($Abcb228699a7f743, $C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2018  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2018  RECV_INIT/64              16?1=     ?2                   0:-1                	;0
		2    2020  IS_EQUAL/17               #3=       16?1                 1:-1                	;0
		3    2020  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    2021  GOTO/253                  ?0        ?19                  ?2                  	;0
		5    2023  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'json_decode'     	;2	<<3
		6    2023  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'A730C6DE034ba241'	;2
		7    2023  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		8    2023  INIT_ARRAY/71             #4=       7:'stream'           8:'action'          	;14
		9    2023  INIT_ARRAY/71             #5=       16?0                 ?0                  	;4
		10   2023  ADD_ARRAY_ELEMENT/72      #4=       #5                   9:'stream_ids'      	;0
		11   2023  ADD_ARRAY_ELEMENT/72      #4=       10:'stop'            11:'function'       	;0
		12   2023  SEND_VAL_EX/116           ?96       #4                   ?2                  	;0
		13   2023  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		14   2023  SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		15   2023  SEND_VAL_EX/116           ?96       12:true              ?2                  	;0
		16   2023  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		17   2023  ASSIGN/38                 ?5        16?2                 $7                  	;0
		18   2024  GOTO/253                  ?0        ?36                  ?13                 	;0
		19   2026  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'json_decode'    	;2
		20   2026  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'D5612F049A8056A5'	;1
		21   2026  INIT_ARRAY/71             #9=       18:'stream'          19:'action'         	;18
		22   2026  ADD_ARRAY_ELEMENT/72      #9=       20:'stop'            21:'sub'            	;0
		23   2026  INIT_ARRAY/71             #10=      16?0                 ?0                  	;4
		24   2026  ADD_ARRAY_ELEMENT/72      #9=       #10                  22:'stream_ids'     	;0
		25   2026  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'array_keys'     	;1
		26   2026  FETCH_STATIC_PROP_FUNC_ARG/177 $11=      25:'rServers'        26:'XUI'            	;1
		27   2026  SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
		28   2026  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		29   2026  ADD_ARRAY_ELEMENT/72      #9=       $12                  28:'servers'        	;0
		30   2026  SEND_VAL_EX/116           ?80       #9                   ?1                  	;0
		31   2026  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		32   2026  SEND_VAR_NO_REF_EX/50     ?80       $13                  ?1                  	;0
		33   2026  SEND_VAL_EX/116           ?96       29:true              ?2                  	;0
		34   2026  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		35   2026  ASSIGN/38                 ?12       16?2                 $14                 	;0
		36   2028  FETCH_DIM_R/81            $16=      16?2                 30:'result'         	;0
		37   2028  BOOL_NOT/13               #17=      $16                  ?0                  	;0
		38   2028  JMPZ/43                   ?0        #17                  ?40                 	;0	>>40
		39   2029  GOTO/253                  ?0        ?41                  ?31                 	;0
		40   2031  RETURN/62                 ?0        32:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<38
		41   2033  RETURN/62                 ?0        33:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		42   2034  NOP/0                     ?0        34:NULL              ?0                  	;4294967295
		*/
	}

	static public function getChannel($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2035  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2037  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'F260b7a31F021e39'	;1
		2    2037  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    2037  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    2037  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    2037  JMPZ_EX/46                #4=       $3                   ?9                  	;0	>>9
		6    2037  FETCH_DIM_R/81            $5=       16?1                 2:'type'            	;0
		7    2037  IS_EQUAL/17               #6=       $5                   3:3                 	;0
		8    2037  BOOL/52                   #4=       #6                   ?0                  	;0
		9    2037  BOOL_NOT/13               #7=       #4                   ?0                  	;0	<<5
		10   2037  JMPZ/43                   ?0        #7                   ?12                 	;0	>>12
		11   2038  GOTO/253                  ?0        ?15                  ?4                  	;0
		12   2040  INIT_ARRAY/71             #8=       5:'STATUS_SUCCESS'   6:'status'          	;10	<<10
		13   2040  ADD_ARRAY_ELEMENT/72      #8=       16?1                 7:'data'            	;0
		14   2040  RETURN/62                 ?0        #8                   ?0                  	;0
		15   2042  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		16   2043  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function c8Ef91e4040ddd07($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2044  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2046  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    2046  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    2046  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    2047  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    2049  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    2051  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    2051  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'f1C265189a2dc086'	;1
		8    2051  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    2051  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   2051  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   2051  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   2051  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   2052  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   2052  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   2052  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   2052  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   2053  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   2055  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'getChannel'     	;1	<<16
		19   2055  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   2055  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   2055  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   2055  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   2055  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   2055  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   2055  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   2057  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   2058  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editChannel($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2059  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2059  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2061  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getChannel'      	;1
		3    2061  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    2061  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    2061  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    2061  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    2061  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    2061  BOOL/52                   #6=       #7                   ?0                  	;0
		9    2061  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   2061  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   2062  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   2064  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   2064  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   2065  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   2065  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'F1C265189a2dc086'	;1
		16   2065  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   2065  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   2065  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   2065  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   2065  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   2066  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   2066  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   2066  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   2066  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   2067  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   2069  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'getChannel'     	;1	<<24
		27   2069  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   2069  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   2069  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   2069  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   2069  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   2069  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   2069  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   2071  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   2073  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   2074  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function deleteChannel($Abcb228699a7f743, $C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2075  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2075  RECV_INIT/64              16?1=     ?2                   0:-1                	;0
		2    2077  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 1:'getChannel'      	;1
		3    2077  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    2077  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		5    2077  ASSIGN/38                 $4=       16?2                 $3                  	;0
		6    2077  JMPZ_EX/46                #5=       $4                   ?9                  	;0	>>9
		7    2077  ISSET_ISEMPTY_DIM_OBJ/115 #6=       16?2                 3:'data'            	;33554432
		8    2077  BOOL/52                   #5=       #6                   ?0                  	;0
		9    2077  BOOL_NOT/13               #7=       #5                   ?0                  	;0	<<6
		10   2077  JMPZ/43                   ?0        #7                   ?12                 	;0	>>12
		11   2078  GOTO/253                  ?0        ?20                  ?4                  	;0
		12   2080  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'FC84e25737908cB5'	;2	<<10
		13   2080  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		14   2080  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		15   2080  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		16   2080  BOOL_NOT/13               #9=       $8                   ?0                  	;0
		17   2080  JMPZ/43                   ?0        #9                   ?19                 	;0	>>19
		18   2081  GOTO/253                  ?0        ?20                  ?7                  	;0
		19   2083  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<17
		20   2086  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		21   2087  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function getStation($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2088  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2090  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'F260B7a31f021E39'	;1
		2    2090  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    2090  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    2090  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    2090  JMPZ_EX/46                #4=       $3                   ?9                  	;0	>>9
		6    2090  FETCH_DIM_R/81            $5=       16?1                 2:'type'            	;0
		7    2090  IS_EQUAL/17               #6=       $5                   3:4                 	;0
		8    2090  BOOL/52                   #4=       #6                   ?0                  	;0
		9    2090  BOOL_NOT/13               #7=       #4                   ?0                  	;0	<<5
		10   2090  JMPZ/43                   ?0        #7                   ?12                 	;0	>>12
		11   2091  GOTO/253                  ?0        ?15                  ?4                  	;0
		12   2093  INIT_ARRAY/71             #8=       5:'STATUS_SUCCESS'   6:'status'          	;10	<<10
		13   2093  ADD_ARRAY_ELEMENT/72      #8=       16?1                 7:'data'            	;0
		14   2093  RETURN/62                 ?0        #8                   ?0                  	;0
		15   2095  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		16   2096  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function createStation($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2097  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2099  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    2099  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    2099  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    2100  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    2102  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    2104  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    2104  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'e584387c6f494C28'	;1
		8    2104  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    2104  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   2104  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   2104  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   2104  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   2105  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   2105  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   2105  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   2105  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   2106  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   2108  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'getStation'     	;1	<<16
		19   2108  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   2108  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   2108  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   2108  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   2108  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   2108  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   2108  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   2110  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   2111  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editStation($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2112  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2112  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2114  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getStation'      	;1
		3    2114  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    2114  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    2114  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    2114  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    2114  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    2114  BOOL/52                   #6=       #7                   ?0                  	;0
		9    2114  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   2114  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   2115  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   2117  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   2117  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   2118  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   2118  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'E584387C6f494c28'	;1
		16   2118  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   2118  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   2118  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   2118  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   2118  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   2119  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   2119  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   2119  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   2119  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   2120  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   2122  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'getStation'     	;1	<<24
		27   2122  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   2122  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   2122  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   2122  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   2122  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   2122  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   2122  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   2124  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   2126  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   2127  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function deleteStation($Abcb228699a7f743, $C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2128  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2128  RECV_INIT/64              16?1=     ?2                   0:-1                	;0
		2    2130  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 1:'getStation'      	;1
		3    2130  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    2130  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		5    2130  ASSIGN/38                 $4=       16?2                 $3                  	;0
		6    2130  JMPZ_EX/46                #5=       $4                   ?9                  	;0	>>9
		7    2130  ISSET_ISEMPTY_DIM_OBJ/115 #6=       16?2                 3:'data'            	;33554432
		8    2130  BOOL/52                   #5=       #6                   ?0                  	;0
		9    2130  BOOL_NOT/13               #7=       #5                   ?0                  	;0	<<6
		10   2130  JMPZ/43                   ?0        #7                   ?12                 	;0	>>12
		11   2131  GOTO/253                  ?0        ?20                  ?4                  	;0
		12   2133  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'FC84E25737908CB5'	;2	<<10
		13   2133  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		14   2133  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		15   2133  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		16   2133  BOOL_NOT/13               #9=       $8                   ?0                  	;0
		17   2133  JMPZ/43                   ?0        #9                   ?19                 	;0	>>19
		18   2134  GOTO/253                  ?0        ?20                  ?7                  	;0
		19   2136  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<17
		20   2139  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		21   2140  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function getMovie($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2141  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2143  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'f260b7a31F021e39'	;1
		2    2143  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    2143  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    2143  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    2143  JMPZ_EX/46                #4=       $3                   ?9                  	;0	>>9
		6    2143  FETCH_DIM_R/81            $5=       16?1                 2:'type'            	;0
		7    2143  IS_EQUAL/17               #6=       $5                   3:2                 	;0
		8    2143  BOOL/52                   #4=       #6                   ?0                  	;0
		9    2143  BOOL_NOT/13               #7=       #4                   ?0                  	;0	<<5
		10   2143  JMPZ/43                   ?0        #7                   ?12                 	;0	>>12
		11   2144  GOTO/253                  ?0        ?15                  ?4                  	;0
		12   2146  INIT_ARRAY/71             #8=       5:'STATUS_SUCCESS'   6:'status'          	;10	<<10
		13   2146  ADD_ARRAY_ELEMENT/72      #8=       16?1                 7:'data'            	;0
		14   2146  RETURN/62                 ?0        #8                   ?0                  	;0
		15   2148  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		16   2149  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function createMovie($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2150  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2152  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    2152  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    2152  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    2153  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    2155  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    2157  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    2157  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'bb0bf26077F756b6'	;1
		8    2157  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    2157  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   2157  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   2157  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   2157  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   2158  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   2158  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   2158  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   2158  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   2159  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   2161  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'getMovie'       	;1	<<16
		19   2161  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   2161  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   2161  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   2161  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   2161  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   2161  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   2161  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   2163  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   2164  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editMovie($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2165  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2165  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2167  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getMovie'        	;1
		3    2167  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    2167  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    2167  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    2167  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    2167  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    2167  BOOL/52                   #6=       #7                   ?0                  	;0
		9    2167  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   2167  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   2168  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   2170  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   2170  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   2171  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   2171  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'Bb0Bf26077F756b6'	;1
		16   2171  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   2171  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   2171  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   2171  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   2171  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   2172  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   2172  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   2172  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   2172  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   2173  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   2175  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'getMovie'       	;1	<<24
		27   2175  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   2175  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   2175  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   2175  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   2175  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   2175  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   2175  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   2177  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   2179  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   2180  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function deleteMovie($Abcb228699a7f743, $C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2181  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2181  RECV_INIT/64              16?1=     ?2                   0:-1                	;0
		2    2183  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 1:'getMovie'        	;1
		3    2183  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    2183  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		5    2183  ASSIGN/38                 $4=       16?2                 $3                  	;0
		6    2183  JMPZ_EX/46                #5=       $4                   ?9                  	;0	>>9
		7    2183  ISSET_ISEMPTY_DIM_OBJ/115 #6=       16?2                 3:'data'            	;33554432
		8    2183  BOOL/52                   #5=       #6                   ?0                  	;0
		9    2183  BOOL_NOT/13               #7=       #5                   ?0                  	;0	<<6
		10   2183  JMPZ/43                   ?0        #7                   ?12                 	;0	>>12
		11   2184  GOTO/253                  ?0        ?20                  ?4                  	;0
		12   2186  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'Fc84e25737908cb5'	;2	<<10
		13   2186  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		14   2186  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		15   2186  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		16   2186  BOOL_NOT/13               #9=       $8                   ?0                  	;0
		17   2186  JMPZ/43                   ?0        #9                   ?19                 	;0	>>19
		18   2187  GOTO/253                  ?0        ?20                  ?7                  	;0
		19   2189  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<17
		20   2192  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		21   2193  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function a0D6dA3165b447b7($Abcb228699a7f743, $C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2194  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2194  RECV_INIT/64              16?1=     ?2                   0:-1                	;0
		2    2196  IS_EQUAL/17               #3=       16?1                 1:-1                	;0
		3    2196  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    2197  GOTO/253                  ?0        ?19                  ?2                  	;0
		5    2199  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'json_decode'     	;2	<<3
		6    2199  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'a730c6de034BA241'	;2
		7    2199  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		8    2199  INIT_ARRAY/71             #4=       7:'vod'              8:'action'          	;14
		9    2199  INIT_ARRAY/71             #5=       16?0                 ?0                  	;4
		10   2199  ADD_ARRAY_ELEMENT/72      #4=       #5                   9:'stream_ids'      	;0
		11   2199  ADD_ARRAY_ELEMENT/72      #4=       10:'start'           11:'function'       	;0
		12   2199  SEND_VAL_EX/116           ?96       #4                   ?2                  	;0
		13   2199  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		14   2199  SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		15   2199  SEND_VAL_EX/116           ?96       12:true              ?2                  	;0
		16   2199  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		17   2199  ASSIGN/38                 ?5        16?2                 $7                  	;0
		18   2200  GOTO/253                  ?0        ?36                  ?13                 	;0
		19   2202  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'json_decode'    	;2
		20   2202  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'d5612f049a8056A5'	;1
		21   2202  INIT_ARRAY/71             #9=       18:'vod'             19:'action'         	;18
		22   2202  ADD_ARRAY_ELEMENT/72      #9=       20:'start'           21:'sub'            	;0
		23   2202  INIT_ARRAY/71             #10=      16?0                 ?0                  	;4
		24   2202  ADD_ARRAY_ELEMENT/72      #9=       #10                  22:'stream_ids'     	;0
		25   2202  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'array_keys'     	;1
		26   2202  FETCH_STATIC_PROP_FUNC_ARG/177 $11=      25:'rServers'        26:'XUI'            	;1
		27   2202  SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
		28   2202  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		29   2202  ADD_ARRAY_ELEMENT/72      #9=       $12                  28:'servers'        	;0
		30   2202  SEND_VAL_EX/116           ?80       #9                   ?1                  	;0
		31   2202  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		32   2202  SEND_VAR_NO_REF_EX/50     ?80       $13                  ?1                  	;0
		33   2202  SEND_VAL_EX/116           ?96       29:true              ?2                  	;0
		34   2202  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		35   2202  ASSIGN/38                 ?12       16?2                 $14                 	;0
		36   2204  FETCH_DIM_R/81            $16=      16?2                 30:'result'         	;0
		37   2204  BOOL_NOT/13               #17=      $16                  ?0                  	;0
		38   2204  JMPZ/43                   ?0        #17                  ?40                 	;0	>>40
		39   2205  GOTO/253                  ?0        ?41                  ?31                 	;0
		40   2207  RETURN/62                 ?0        32:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<38
		41   2209  RETURN/62                 ?0        33:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		42   2210  NOP/0                     ?0        34:NULL              ?0                  	;4294967295
		*/
	}

	static public function d6Cc5A7dE37Fa642($Abcb228699a7f743, $C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2211  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2211  RECV_INIT/64              16?1=     ?2                   0:-1                	;0
		2    2213  IS_EQUAL/17               #3=       16?1                 1:-1                	;0
		3    2213  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    2214  GOTO/253                  ?0        ?19                  ?2                  	;0
		5    2216  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'json_decode'     	;2	<<3
		6    2216  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'A730c6DE034BA241'	;2
		7    2216  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		8    2216  INIT_ARRAY/71             #4=       7:'vod'              8:'action'          	;14
		9    2216  INIT_ARRAY/71             #5=       16?0                 ?0                  	;4
		10   2216  ADD_ARRAY_ELEMENT/72      #4=       #5                   9:'stream_ids'      	;0
		11   2216  ADD_ARRAY_ELEMENT/72      #4=       10:'stop'            11:'function'       	;0
		12   2216  SEND_VAL_EX/116           ?96       #4                   ?2                  	;0
		13   2216  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		14   2216  SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		15   2216  SEND_VAL_EX/116           ?96       12:true              ?2                  	;0
		16   2216  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		17   2216  ASSIGN/38                 ?5        16?2                 $7                  	;0
		18   2217  GOTO/253                  ?0        ?36                  ?13                 	;0
		19   2219  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'json_decode'    	;2
		20   2219  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'d5612F049a8056a5'	;1
		21   2219  INIT_ARRAY/71             #9=       18:'vod'             19:'action'         	;18
		22   2219  ADD_ARRAY_ELEMENT/72      #9=       20:'stop'            21:'sub'            	;0
		23   2219  INIT_ARRAY/71             #10=      16?0                 ?0                  	;4
		24   2219  ADD_ARRAY_ELEMENT/72      #9=       #10                  22:'stream_ids'     	;0
		25   2219  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'array_keys'     	;1
		26   2219  FETCH_STATIC_PROP_FUNC_ARG/177 $11=      25:'rServers'        26:'XUI'            	;1
		27   2219  SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
		28   2219  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		29   2219  ADD_ARRAY_ELEMENT/72      #9=       $12                  28:'servers'        	;0
		30   2219  SEND_VAL_EX/116           ?80       #9                   ?1                  	;0
		31   2219  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		32   2219  SEND_VAR_NO_REF_EX/50     ?80       $13                  ?1                  	;0
		33   2219  SEND_VAL_EX/116           ?96       29:true              ?2                  	;0
		34   2219  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		35   2219  ASSIGN/38                 ?12       16?2                 $14                 	;0
		36   2221  FETCH_DIM_R/81            $16=      16?2                 30:'result'         	;0
		37   2221  BOOL_NOT/13               #17=      $16                  ?0                  	;0
		38   2221  JMPZ/43                   ?0        #17                  ?40                 	;0	>>40
		39   2222  GOTO/253                  ?0        ?41                  ?31                 	;0
		40   2224  RETURN/62                 ?0        32:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<38
		41   2226  RETURN/62                 ?0        33:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		42   2227  NOP/0                     ?0        34:NULL              ?0                  	;4294967295
		*/
	}

	static public function getEpisode($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2228  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2230  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'f260B7a31f021E39'	;1
		2    2230  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    2230  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    2230  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    2230  JMPZ_EX/46                #4=       $3                   ?9                  	;0	>>9
		6    2230  FETCH_DIM_R/81            $5=       16?1                 2:'type'            	;0
		7    2230  IS_EQUAL/17               #6=       $5                   3:5                 	;0
		8    2230  BOOL/52                   #4=       #6                   ?0                  	;0
		9    2230  BOOL_NOT/13               #7=       #4                   ?0                  	;0	<<5
		10   2230  JMPZ/43                   ?0        #7                   ?12                 	;0	>>12
		11   2231  GOTO/253                  ?0        ?15                  ?4                  	;0
		12   2233  INIT_ARRAY/71             #8=       5:'STATUS_SUCCESS'   6:'status'          	;10	<<10
		13   2233  ADD_ARRAY_ELEMENT/72      #8=       16?1                 7:'data'            	;0
		14   2233  RETURN/62                 ?0        #8                   ?0                  	;0
		15   2235  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		16   2236  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function createEpisode($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2237  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2239  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    2239  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    2239  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    2240  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    2242  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    2244  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    2244  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'E87D54803AFcB01e'	;1
		8    2244  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    2244  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   2244  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   2244  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   2244  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   2245  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   2245  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   2245  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   2245  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   2246  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   2248  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'getEpisode'     	;1	<<16
		19   2248  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   2248  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   2248  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   2248  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   2248  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   2248  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   2248  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   2250  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   2251  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editEpisode($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2252  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2252  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2254  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getEpisode'      	;1
		3    2254  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    2254  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    2254  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    2254  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    2254  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    2254  BOOL/52                   #6=       #7                   ?0                  	;0
		9    2254  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   2254  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   2255  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   2257  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   2257  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   2258  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   2258  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'E87D54803AfcB01E'	;1
		16   2258  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   2258  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   2258  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   2258  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   2258  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   2259  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   2259  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   2259  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   2259  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   2260  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   2262  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'getEpisode'     	;1	<<24
		27   2262  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   2262  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   2262  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   2262  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   2262  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   2262  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   2262  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   2264  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   2266  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   2267  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function deleteEpisode($Abcb228699a7f743, $C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2268  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2268  RECV_INIT/64              16?1=     ?2                   0:-1                	;0
		2    2270  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 1:'getEpisode'      	;1
		3    2270  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    2270  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		5    2270  ASSIGN/38                 $4=       16?2                 $3                  	;0
		6    2270  JMPZ_EX/46                #5=       $4                   ?9                  	;0	>>9
		7    2270  ISSET_ISEMPTY_DIM_OBJ/115 #6=       16?2                 3:'data'            	;33554432
		8    2270  BOOL/52                   #5=       #6                   ?0                  	;0
		9    2270  BOOL_NOT/13               #7=       #5                   ?0                  	;0	<<6
		10   2270  JMPZ/43                   ?0        #7                   ?12                 	;0	>>12
		11   2271  GOTO/253                  ?0        ?20                  ?4                  	;0
		12   2273  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'Fc84E25737908cB5'	;2	<<10
		13   2273  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		14   2273  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		15   2273  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		16   2273  BOOL_NOT/13               #9=       $8                   ?0                  	;0
		17   2273  JMPZ/43                   ?0        #9                   ?19                 	;0	>>19
		18   2274  GOTO/253                  ?0        ?20                  ?7                  	;0
		19   2276  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<17
		20   2279  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		21   2280  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function B977eA070B44F074($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2281  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2283  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'a2297542D8bd35F6'	;1
		2    2283  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    2283  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    2283  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    2283  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6    2283  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7    2284  GOTO/253                  ?0        ?11                  ?2                  	;0
		8    2286  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9    2286  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10   2286  RETURN/62                 ?0        #5                   ?0                  	;0
		11   2288  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12   2289  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function createSeries($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2290  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2292  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 0:'edit'            	;33554432
		2    2292  BOOL_NOT/13               #3=       #2                   ?0                  	;0
		3    2292  JMPZ/43                   ?0        #3                   ?5                  	;0	>>5
		4    2293  GOTO/253                  ?0        ?6                   ?1                  	;0
		5    2295  UNSET_DIM/75              ?0        16?0                 2:'edit'            	;0	<<3
		6    2297  INIT_FCALL/61             ?0        ?240                 3:'parseerror'      	;1
		7    2297  INIT_STATIC_METHOD_CALL/113 ?0        4:'API'              6:'DbDD7075f827466E'	;1
		8    2297  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    2297  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		10   2297  SEND_VAR/117              ?80       $4                   ?1                  	;0
		11   2297  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   2297  ASSIGN/38                 ?4        16?1                 $5                  	;0
		13   2298  FETCH_DIM_IS/90           $7=       16?1                 8:'data'            	;0
		14   2298  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   9:'insert_id'       	;33554432
		15   2298  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		16   2298  JMPZ/43                   ?0        #9                   ?18                 	;0	>>18
		17   2299  GOTO/253                  ?0        ?26                  ?10                 	;0
		18   2301  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'b977Ea070b44f074'	;1	<<16
		19   2301  FETCH_DIM_R/81            $11=      16?1                 14:'data'           	;0
		20   2301  FETCH_DIM_R/81            $12=      $11                  15:'insert_id'      	;0
		21   2301  SEND_VAR/117              ?80       $12                  ?1                  	;0
		22   2301  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		23   2301  FETCH_DIM_R/81            $14=      $13                  16:'data'           	;0
		24   2301  ASSIGN_DIM/147            ?8        16?1                 11:'data'           	;0
		25   2301  OP_DATA/137               ?0        $14                  ?0                  	;0
		26   2303  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   2304  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function editSeries($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2305  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2305  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2307  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'B977Ea070b44F074'	;1
		3    2307  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    2307  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    2307  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    2307  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    2307  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    2307  BOOL/52                   #6=       #7                   ?0                  	;0
		9    2307  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   2307  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   2308  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   2310  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   2310  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   2311  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   2311  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'dbdd7075F827466E'	;1
		16   2311  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   2311  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   2311  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   2311  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   2311  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   2312  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   2312  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   2312  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   2312  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   2313  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   2315  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'b977eA070b44F074'	;1	<<24
		27   2315  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   2315  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   2315  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   2315  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   2315  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   2315  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   2315  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   2317  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   2319  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   2320  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function C21831D749Ba3774($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2321  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2323  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'B977ea070B44F074'	;1
		2    2323  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    2323  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    2323  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    2323  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    2323  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    2323  BOOL/52                   #4=       #5                   ?0                  	;0
		8    2323  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    2323  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   2324  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   2326  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'DBBe1508fA3e591f'	;1	<<9
		12   2326  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   2326  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   2326  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15   2326  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16   2327  GOTO/253                  ?0        ?18                  ?6                  	;0
		17   2329  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18   2332  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   2333  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function F76008f8Dfe1898c()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2336  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    2336  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'C6a90bFCd425Eb63'	;0
		2    2336  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    2336  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    2336  RETURN/62                 ?0        #0                   ?0                  	;0
		5    2337  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function getServer($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2338  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2340  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'cBB79F154dB723A8'	;1
		2    2340  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    2340  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    2340  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    2340  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		6    2340  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7    2341  GOTO/253                  ?0        ?11                  ?2                  	;0
		8    2343  INIT_ARRAY/71             #5=       3:'STATUS_SUCCESS'   4:'status'          	;10	<<6
		9    2343  ADD_ARRAY_ELEMENT/72      #5=       16?1                 5:'data'            	;0
		10   2343  RETURN/62                 ?0        #5                   ?0                  	;0
		11   2345  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		12   2346  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	static public function f7B37A01d2B82F24($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2347  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2349  JMP/42                    ?0        ?2                   ?0                  	;0	>>2
		2    2351  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 1:'type'            	;16777216	<<1
		3    2351  JMPNZ_EX/47               #2=       #2                   ?6                  	;0	>>6
		4    2351  ISSET_ISEMPTY_DIM_OBJ/115 #3=       16?0                 2:'ssh_port'        	;16777216
		5    2351  BOOL/52                   #2=       #3                   ?0                  	;0
		6    2351  JMPNZ_EX/47               #2=       #2                   ?9                  	;0	>>9	<<3
		7    2351  ISSET_ISEMPTY_DIM_OBJ/115 #4=       16?0                 3:'root_username'   	;16777216
		8    2351  BOOL/52                   #2=       #4                   ?0                  	;0
		9    2351  JMPNZ_EX/47               #2=       #2                   ?12                 	;0	>>12	<<6
		10   2351  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?0                 4:'root_password'   	;16777216
		11   2351  BOOL/52                   #2=       #5                   ?0                  	;0
		12   2351  BOOL_NOT/13               #6=       #2                   ?0                  	;0	<<9
		13   2351  JMPZ/43                   ?0        #6                   ?15                 	;0	>>15
		14   2352  GOTO/253                  ?0        ?16                  ?5                  	;0
		15   2354  RETURN/62                 ?0        6:array (
  'status' => 'STATUS_INVALID_INPUT',
) ?0                  	;0	<<13
		16   2356  FETCH_DIM_R/81            $7=       16?0                 7:'type'            	;0
		17   2356  IS_EQUAL/17               #8=       $7                   8:1                 	;0
		18   2356  JMPZ_EX/46                #8=       #8                   ?24                 	;0	>>24
		19   2356  ISSET_ISEMPTY_DIM_OBJ/115 #9=       16?0                 9:'type'            	;16777216
		20   2356  JMPNZ_EX/47               #9=       #9                   ?23                 	;0	>>23
		21   2356  ISSET_ISEMPTY_DIM_OBJ/115 #10=      16?0                 10:'ssh_port'       	;16777216
		22   2356  BOOL/52                   #9=       #10                  ?0                  	;0
		23   2356  BOOL/52                   #8=       #9                   ?0                  	;0	<<20
		24   2356  BOOL_NOT/13               #11=      #8                   ?0                  	;0	<<18
		25   2356  JMPZ/43                   ?0        #11                  ?27                 	;0	>>27
		26   2357  GOTO/253                  ?0        ?31                  ?11                 	;0
		27   2359  RETURN/62                 ?0        12:array (
  'status' => 'STATUS_INVALID_INPUT',
) ?0                  	;0	<<25
		28   2360  GOTO/253                  ?0        ?31                  ?13                 	;0
		29   2362  RETURN/62                 ?0        14:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		30   2363  GOTO/253                  ?0        ?51                  ?15                 	;0
		31   2366  INIT_FCALL/61             ?0        ?240                 16:'parseerror'     	;1
		32   2366  INIT_STATIC_METHOD_CALL/113 ?0        17:'API'             19:'f7b37a01d2b82f24'	;1
		33   2366  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		34   2366  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		35   2366  SEND_VAR/117              ?80       $12                  ?1                  	;0
		36   2366  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		37   2366  ASSIGN/38                 ?12       16?1                 $13                 	;0
		38   2367  FETCH_DIM_IS/90           $15=      16?1                 21:'data'           	;0
		39   2367  ISSET_ISEMPTY_DIM_OBJ/115 #16=      $15                  22:'insert_id'      	;33554432
		40   2367  BOOL_NOT/13               #17=      #16                  ?0                  	;0
		41   2367  JMPZ/43                   ?0        #17                  ?43                 	;0	>>43
		42   2368  GOTO/253                  ?0        ?50                  ?23                 	;0
		43   2370  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 25:'getServer'      	;1	<<41
		44   2370  FETCH_DIM_R/81            $19=      16?1                 27:'data'           	;0
		45   2370  FETCH_DIM_R/81            $20=      $19                  28:'insert_id'      	;0
		46   2370  SEND_VAR/117              ?80       $20                  ?1                  	;0
		47   2370  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		48   2370  ASSIGN_DIM/147            ?16       16?1                 24:'data'           	;0
		49   2370  OP_DATA/137               ?0        $21                  ?0                  	;0
		50   2372  GOTO/253                  ?0        ?29                  ?29                 	;0
		51   2374  NOP/0                     ?0        30:NULL              ?0                  	;4294967295
		*/
	}

	static public function editServer($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2375  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2375  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2377  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getServer'       	;1
		3    2377  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    2377  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    2377  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    2377  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    2377  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    2377  BOOL/52                   #6=       #7                   ?0                  	;0
		9    2377  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   2377  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   2378  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   2380  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   2380  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   2381  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   2381  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'e9eB556bBd1E4448'	;1
		16   2381  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   2381  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   2381  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   2381  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   2381  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   2382  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   2382  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   2382  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   2382  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   2383  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   2385  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'getServer'      	;1	<<24
		27   2385  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   2385  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   2385  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   2385  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   2385  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   2385  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   2385  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   2387  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   2389  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   2390  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function editProxy($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2391  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2391  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2393  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getServer'       	;1
		3    2393  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		4    2393  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5    2393  ASSIGN/38                 $5=       16?2                 $4                  	;0
		6    2393  JMPZ_EX/46                #6=       $5                   ?9                  	;0	>>9
		7    2393  ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?2                 2:'data'            	;33554432
		8    2393  BOOL/52                   #6=       #7                   ?0                  	;0
		9    2393  BOOL_NOT/13               #8=       #6                   ?0                  	;0	<<6
		10   2393  JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
		11   2394  GOTO/253                  ?0        ?35                  ?3                  	;0
		12   2396  ASSIGN_DIM/147            ?5        16?1                 4:'edit'            	;0	<<10
		13   2396  OP_DATA/137               ?0        16?0                 ?0                  	;0
		14   2397  INIT_FCALL/61             ?0        ?240                 5:'parseerror'      	;1
		15   2397  INIT_STATIC_METHOD_CALL/113 ?0        6:'API'              8:'dDaC4b7C6F34a02F'	;1
		16   2397  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17   2397  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		18   2397  SEND_VAR/117              ?80       $10                  ?1                  	;0
		19   2397  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		20   2397  ASSIGN/38                 ?8        16?3                 $11                 	;0
		21   2398  FETCH_DIM_IS/90           $13=      16?3                 10:'data'           	;0
		22   2398  ISSET_ISEMPTY_DIM_OBJ/115 #14=      $13                  11:'insert_id'      	;33554432
		23   2398  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		24   2398  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25   2399  GOTO/253                  ?0        ?34                  ?12                 	;0
		26   2401  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'getServer'      	;1	<<24
		27   2401  FETCH_DIM_R/81            $17=      16?3                 16:'data'           	;0
		28   2401  FETCH_DIM_R/81            $18=      $17                  17:'insert_id'      	;0
		29   2401  SEND_VAR/117              ?80       $18                  ?1                  	;0
		30   2401  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   2401  FETCH_DIM_R/81            $20=      $19                  18:'data'           	;0
		32   2401  ASSIGN_DIM/147            ?12       16?3                 13:'data'           	;0
		33   2401  OP_DATA/137               ?0        $20                  ?0                  	;0
		34   2403  RETURN/62                 ?0        16?3                 ?0                  	;0
		35   2405  RETURN/62                 ?0        19:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		36   2406  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function aA735B84Dcbc9D64($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2407  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2409  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getServer'       	;1
		2    2409  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		3    2409  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4    2409  ASSIGN/38                 $3=       16?1                 $2                  	;0
		5    2409  JMPZ_EX/46                #4=       $3                   ?8                  	;0	>>8
		6    2409  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?1                 2:'data'            	;33554432
		7    2409  BOOL/52                   #4=       #5                   ?0                  	;0
		8    2409  BOOL_NOT/13               #6=       #4                   ?0                  	;0	<<5
		9    2409  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
		10   2410  GOTO/253                  ?0        ?18                  ?3                  	;0
		11   2412  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'eFa9379345817B87'	;1	<<9
		12   2412  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   2412  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   2412  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		15   2412  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16   2413  GOTO/253                  ?0        ?18                  ?6                  	;0
		17   2415  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<15
		18   2418  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		19   2419  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function Ac49B56DbE10E52c()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2422  INIT_ARRAY/71             #0=       0:'STATUS_SUCCESS'   1:'status'          	;10
		1    2422  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'cDbe6bc7b26c4902'	;0
		2    2422  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    2422  ADD_ARRAY_ELEMENT/72      #0=       $1                   4:'data'            	;0
		4    2422  RETURN/62                 ?0        #0                   ?0                  	;0
		5    2423  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function d0d0E87fB9ad0543($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2424  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2426  INIT_FCALL/61             ?0        ?240                 0:'parseerror'      	;1
		2    2426  INIT_STATIC_METHOD_CALL/113 ?0        1:'API'              3:'D0D0E87FB9AD0543'	;1
		3    2426  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4    2426  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		5    2426  SEND_VAR/117              ?80       $2                   ?1                  	;0
		6    2426  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		7    2426  ASSIGN/38                 ?2        16?1                 $3                  	;0
		8    2427  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 6:'ac49b56dbE10e52c'	;0
		9    2427  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		10   2427  FETCH_DIM_R/81            $7=       $6                   8:'data'            	;0
		11   2427  ASSIGN_DIM/147            ?3        16?1                 5:'data'            	;0
		12   2427  OP_DATA/137               ?0        $7                   ?0                  	;0
		13   2428  RETURN/62                 ?0        16?1                 ?0                  	;0
		14   2429  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function AFF015C358EB0964($C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2430  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2432  JMP/42                    ?0        ?77                  ?0                  	;0	>>77
		2    2434  INIT_METHOD_CALL/112      ?0        16?2                 2:'get_row'         	;0
		3    2434  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		4    2434  FETCH_DIM_R/81            $5=       $4                   4:'count'           	;0
		5    2434  ASSIGN_DIM/147            ?0        16?1                 1:'total_connections'	;0
		6    2434  OP_DATA/137               ?0        $5                   ?0                  	;0
		7    2436  INIT_METHOD_CALL/112      ?0        16?2                 5:'query'           	;2
		8    2436  SEND_VAL_EX/116           ?80       7:'SELECT `activity_id` FROM `lines_live` WHERE `server_id` = ? AND `hls_end` = 0 GROUP BY `user_id`;' ?1                  	;0
		9    2436  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		10   2436  DO_FCALL/60               ?3        ?0                   ?0                  	;0
		11   2437  INIT_METHOD_CALL/112      ?0        16?2                 8:'num_rows'        	;0
		12   2437  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		13   2437  IS_SMALLER/19             #8=       10:0                 $7                  	;0
		14   2437  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		15   2437  JMPZ/43                   ?0        #9                   ?17                 	;0	>>17
		16   2438  GOTO/253                  ?0        ?22                  ?11                 	;0
		17   2440  INIT_METHOD_CALL/112      ?0        16?2                 13:'num_rows'       	;0	<<15
		18   2440  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		19   2440  ASSIGN_DIM/147            ?7        16?1                 12:'online_users'   	;0
		20   2440  OP_DATA/137               ?0        $11                  ?0                  	;0
		21   2441  GOTO/253                  ?0        ?22                  ?15                 	;0
		22   2444  INIT_METHOD_CALL/112      ?0        16?2                 16:'query'          	;1
		23   2444  SEND_VAL_EX/116           ?80       18:'SELECT `activity_id` FROM `lines_live` WHERE `hls_end` = 0 GROUP BY `user_id`;' ?1                  	;0
		24   2444  DO_FCALL/60               ?9        ?0                   ?0                  	;0
		25   2445  INIT_METHOD_CALL/112      ?0        16?2                 19:'num_rows'       	;0
		26   2445  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		27   2445  IS_SMALLER/19             #14=      21:0                 $13                 	;0
		28   2445  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		29   2445  JMPZ/43                   ?0        #15                  ?31                 	;0	>>31
		30   2446  GOTO/253                  ?0        ?35                  ?22                 	;0
		31   2448  INIT_METHOD_CALL/112      ?0        16?2                 24:'num_rows'       	;0	<<29
		32   2448  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		33   2448  ASSIGN_DIM/147            ?13       16?1                 23:'total_users'    	;0
		34   2448  OP_DATA/137               ?0        $17                  ?0                  	;0
		35   2450  GOTO/253                  ?0        ?57                  ?26                 	;0
		36   2452  INIT_METHOD_CALL/112      ?0        16?2                 27:'num_rows'       	;0
		37   2452  DO_FCALL/60               $18=      ?0                   ?0                  	;0
		38   2452  IS_SMALLER/19             #19=      29:0                 $18                 	;0
		39   2452  BOOL_NOT/13               #20=      #19                  ?0                  	;0
		40   2452  JMPZ/43                   ?0        #20                  ?42                 	;0	>>42
		41   2453  GOTO/253                  ?0        ?47                  ?30                 	;0
		42   2455  INIT_METHOD_CALL/112      ?0        16?2                 32:'get_row'        	;0	<<40
		43   2455  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		44   2455  FETCH_DIM_R/81            $23=      $22                  34:'count'          	;0
		45   2455  ASSIGN_DIM/147            ?18       16?1                 31:'open_connections'	;0
		46   2455  OP_DATA/137               ?0        $23                  ?0                  	;0
		47   2457  INIT_METHOD_CALL/112      ?0        16?2                 35:'query'          	;1
		48   2457  SEND_VAL_EX/116           ?80       37:'SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `hls_end` = 0;' ?1                  	;0
		49   2457  DO_FCALL/60               ?21       ?0                   ?0                  	;0
		50   2458  INIT_METHOD_CALL/112      ?0        16?2                 38:'num_rows'       	;0
		51   2458  DO_FCALL/60               $25=      ?0                   ?0                  	;0
		52   2458  IS_SMALLER/19             #26=      40:0                 $25                 	;0
		53   2458  BOOL_NOT/13               #27=      #26                  ?0                  	;0
		54   2458  JMPZ/43                   ?0        #27                  ?56                 	;0	>>56
		55   2459  GOTO/253                  ?0        ?7                   ?41                 	;0
		56   2461  GOTO/253                  ?0        ?2                   ?42                 	;0	<<54
		57   2463  INIT_METHOD_CALL/112      ?0        16?2                 43:'query'          	;2
		58   2463  SEND_VAL_EX/116           ?80       45:'SELECT COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `server_id` = ? AND `stream_status` <> 2 AND `type` = 1;' ?1                  	;0
		59   2463  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		60   2463  DO_FCALL/60               ?25       ?0                   ?0                  	;0
		61   2464  INIT_METHOD_CALL/112      ?0        16?2                 46:'num_rows'       	;0
		62   2464  DO_FCALL/60               $29=      ?0                   ?0                  	;0
		63   2464  IS_SMALLER/19             #30=      48:0                 $29                 	;0
		64   2464  BOOL_NOT/13               #31=      #30                  ?0                  	;0
		65   2464  JMPZ/43                   ?0        #31                  ?67                 	;0	>>67
		66   2465  GOTO/253                  ?0        ?72                  ?49                 	;0
		67   2467  INIT_METHOD_CALL/112      ?0        16?2                 51:'get_row'        	;0	<<65
		68   2467  DO_FCALL/60               $33=      ?0                   ?0                  	;0
		69   2467  FETCH_DIM_R/81            $34=      $33                  53:'count'          	;0
		70   2467  ASSIGN_DIM/147            ?29       16?1                 50:'total_streams'  	;0
		71   2467  OP_DATA/137               ?0        $34                  ?0                  	;0
		72   2469  INIT_METHOD_CALL/112      ?0        16?2                 54:'query'          	;2
		73   2469  SEND_VAL_EX/116           ?80       56:'SELECT COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `server_id` = ? AND `pid` > 0 AND `type` = 1;' ?1                  	;0
		74   2469  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		75   2469  DO_FCALL/60               ?32       ?0                   ?0                  	;0
		76   2470  GOTO/253                  ?0        ?116                 ?57                 	;0
		77   2472  BIND_GLOBAL/168           ?0        16?2                 58:'b62d6460eb33ea07'	;0	<<1
		78   2473  INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'json_decode'    	;2
		79   2473  INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'A730C6DE034BA241'	;2
		80   2473  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		81   2473  SEND_VAL_EX/116           ?96       63:array (
  'action' => 'stats',
) ?2                  	;0
		82   2473  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
		83   2473  SEND_VAR_NO_REF_EX/50     ?80       $36                  ?1                  	;0
		84   2473  SEND_VAL_EX/116           ?96       64:true              ?2                  	;0
		85   2473  DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
		86   2473  ASSIGN/38                 ?35       16?1                 $37                 	;0
		87   2474  BOOL_NOT/13               #39=      16?1                 ?0                  	;0
		88   2474  JMPZ/43                   ?0        #39                  ?90                 	;0	>>90
		89   2475  GOTO/253                  ?0        ?113                 ?65                 	;0
		90   2477  FETCH_STATIC_PROP_R/173   $41=      67:'rServers'        68:'XUI'            	;0	<<88
		91   2477  FETCH_DIM_R/81            $42=      $41                  16?0                	;0
		92   2477  FETCH_DIM_R/81            $43=      $42                  70:'requests_per_second'	;0
		93   2477  ASSIGN_DIM/147            ?37       16?1                 66:'requests_per_second'	;0
		94   2477  OP_DATA/137               ?0        $43                  ?0                  	;0
		95   2478  INIT_METHOD_CALL/112      ?0        16?2                 71:'query'          	;2
		96   2478  SEND_VAL_EX/116           ?80       73:'SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `server_id` = ? AND `hls_end` = 0;' ?1                  	;0
		97   2478  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		98   2478  DO_FCALL/60               ?41       ?0                   ?0                  	;0
		99   2479  GOTO/253                  ?0        ?36                  ?74                 	;0
		100  2481  INIT_METHOD_CALL/112      ?0        16?2                 76:'get_row'        	;0
		101  2481  DO_FCALL/60               $46=      ?0                   ?0                  	;0
		102  2481  FETCH_DIM_R/81            $47=      $46                  78:'count'          	;0
		103  2481  ASSIGN_DIM/147            ?42       16?1                 75:'offline_streams'	;0
		104  2481  OP_DATA/137               ?0        $47                  ?0                  	;0
		105  2483  FETCH_STATIC_PROP_R/173   $49=      80:'rServers'        81:'XUI'            	;0
		106  2483  FETCH_DIM_R/81            $50=      $49                  16?0                	;0
		107  2483  FETCH_DIM_R/81            $51=      $50                  83:'network_guaranteed_speed'	;0
		108  2483  ASSIGN_DIM/147            ?45       16?1                 79:'network_guaranteed_speed'	;0
		109  2483  OP_DATA/137               ?0        $51                  ?0                  	;0
		110  2484  INIT_ARRAY/71             #52=      84:'STATUS_SUCCESS'  85:'status'         	;10
		111  2484  ADD_ARRAY_ELEMENT/72      #52=      16?1                 86:'data'           	;0
		112  2484  RETURN/62                 ?0        #52                  ?0                  	;0
		113  2486  GOTO/253                  ?0        ?114                 ?87                 	;0
		114  2488  RETURN/62                 ?0        88:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		115  2489  GOTO/253                  ?0        ?138                 ?89                 	;0
		116  2491  INIT_METHOD_CALL/112      ?0        16?2                 90:'num_rows'       	;0
		117  2491  DO_FCALL/60               $53=      ?0                   ?0                  	;0
		118  2491  IS_SMALLER/19             #54=      92:0                 $53                 	;0
		119  2491  BOOL_NOT/13               #55=      #54                  ?0                  	;0
		120  2491  JMPZ/43                   ?0        #55                  ?122                	;0	>>122
		121  2492  GOTO/253                  ?0        ?127                 ?93                 	;0
		122  2494  INIT_METHOD_CALL/112      ?0        16?2                 95:'get_row'        	;0	<<120
		123  2494  DO_FCALL/60               $57=      ?0                   ?0                  	;0
		124  2494  FETCH_DIM_R/81            $58=      $57                  97:'count'          	;0
		125  2494  ASSIGN_DIM/147            ?53       16?1                 94:'total_running_streams'	;0
		126  2494  OP_DATA/137               ?0        $58                  ?0                  	;0
		127  2496  INIT_METHOD_CALL/112      ?0        16?2                 98:'query'          	;2
		128  2496  SEND_VAL_EX/116           ?80       100:'SELECT COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `server_id` = ? AND `type` = 1 AND (`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0) AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` <> 0);' ?1                  	;0
		129  2496  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		130  2496  DO_FCALL/60               ?56       ?0                   ?0                  	;0
		131  2497  INIT_METHOD_CALL/112      ?0        16?2                 101:'num_rows'      	;0
		132  2497  DO_FCALL/60               $60=      ?0                   ?0                  	;0
		133  2497  IS_SMALLER/19             #61=      103:0                $60                 	;0
		134  2497  BOOL_NOT/13               #62=      #61                  ?0                  	;0
		135  2497  JMPZ/43                   ?0        #62                  ?137                	;0	>>137
		136  2498  GOTO/253                  ?0        ?105                 ?104                	;0
		137  2500  GOTO/253                  ?0        ?100                 ?105                	;0	<<135
		138  2502  NOP/0                     ?0        106:NULL             ?0                  	;4294967295
		*/
	}

	static public function getFPMStatus($C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2503  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2505  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'a730c6dE034ba241'	;2
		2    2505  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    2505  SEND_VAL_EX/116           ?96       2:array (
  'action' => 'fpm_status',
) ?2                  	;0
		4    2505  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		5    2505  ASSIGN/38                 ?1        16?1                 $2                  	;0
		6    2506  BOOL_NOT/13               #4=       16?1                 ?0                  	;0
		7    2506  JMPZ/43                   ?0        #4                   ?9                  	;0	>>9
		8    2507  GOTO/253                  ?0        ?12                  ?3                  	;0
		9    2509  INIT_ARRAY/71             #5=       4:'STATUS_SUCCESS'   5:'status'          	;10	<<7
		10   2509  ADD_ARRAY_ELEMENT/72      #5=       16?1                 6:'data'            	;0
		11   2509  RETURN/62                 ?0        #5                   ?0                  	;0
		12   2511  RETURN/62                 ?0        7:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		13   2512  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	static public function E5Af2e0e9aD188b4($C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2513  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2515  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_decode'     	;2
		2    2515  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'A730c6de034BA241'	;2
		3    2515  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4    2515  SEND_VAL_EX/116           ?96       4:array (
  'action' => 'rtmp_stats',
) ?2                  	;0
		5    2515  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6    2515  SEND_VAR_NO_REF_EX/50     ?80       $2                   ?1                  	;0
		7    2515  SEND_VAL_EX/116           ?96       5:true               ?2                  	;0
		8    2515  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		9    2515  ASSIGN/38                 ?2        16?1                 $3                  	;0
		10   2516  BOOL_NOT/13               #5=       16?1                 ?0                  	;0
		11   2516  JMPZ/43                   ?0        #5                   ?13                 	;0	>>13
		12   2517  GOTO/253                  ?0        ?16                  ?6                  	;0
		13   2519  INIT_ARRAY/71             #6=       7:'STATUS_SUCCESS'   8:'status'          	;10	<<11
		14   2519  ADD_ARRAY_ELEMENT/72      #6=       16?1                 9:'data'            	;0
		15   2519  RETURN/62                 ?0        #6                   ?0                  	;0
		16   2521  RETURN/62                 ?0        10:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		17   2522  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	static public function C61402197478cAF1($C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2523  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2525  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_decode'     	;2
		2    2525  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'A730C6DE034BA241'	;2
		3    2525  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4    2525  SEND_VAL_EX/116           ?96       4:array (
  'action' => 'get_free_space',
) ?2                  	;0
		5    2525  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6    2525  SEND_VAR_NO_REF_EX/50     ?80       $2                   ?1                  	;0
		7    2525  SEND_VAL_EX/116           ?96       5:true               ?2                  	;0
		8    2525  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		9    2525  ASSIGN/38                 ?2        16?1                 $3                  	;0
		10   2526  BOOL_NOT/13               #5=       16?1                 ?0                  	;0
		11   2526  JMPZ/43                   ?0        #5                   ?13                 	;0	>>13
		12   2527  GOTO/253                  ?0        ?16                  ?6                  	;0
		13   2529  INIT_ARRAY/71             #6=       7:'STATUS_SUCCESS'   8:'status'          	;10	<<11
		14   2529  ADD_ARRAY_ELEMENT/72      #6=       16?1                 9:'data'            	;0
		15   2529  RETURN/62                 ?0        #6                   ?0                  	;0
		16   2531  RETURN/62                 ?0        10:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		17   2532  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	static public function aC675966591FEE08($C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2533  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2535  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_decode'     	;2
		2    2535  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'a730c6dE034Ba241'	;2
		3    2535  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4    2535  SEND_VAL_EX/116           ?96       4:array (
  'action' => 'get_pids',
) ?2                  	;0
		5    2535  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6    2535  SEND_VAR_NO_REF_EX/50     ?80       $2                   ?1                  	;0
		7    2535  SEND_VAL_EX/116           ?96       5:true               ?2                  	;0
		8    2535  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		9    2535  ASSIGN/38                 ?2        16?1                 $3                  	;0
		10   2536  BOOL_NOT/13               #5=       16?1                 ?0                  	;0
		11   2536  JMPZ/43                   ?0        #5                   ?13                 	;0	>>13
		12   2537  GOTO/253                  ?0        ?16                  ?6                  	;0
		13   2539  INIT_ARRAY/71             #6=       7:'STATUS_SUCCESS'   8:'status'          	;10	<<11
		14   2539  ADD_ARRAY_ELEMENT/72      #6=       16?1                 9:'data'            	;0
		15   2539  RETURN/62                 ?0        #6                   ?0                  	;0
		16   2541  RETURN/62                 ?0        10:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		17   2542  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	static public function d6A9D4057776E78D($C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2543  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2545  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_decode'     	;2
		2    2545  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'A730C6DE034ba241'	;2
		3    2545  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4    2545  SEND_VAL_EX/116           ?96       4:array (
  'action' => 'get_certificate_info',
) ?2                  	;0
		5    2545  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6    2545  SEND_VAR_NO_REF_EX/50     ?80       $2                   ?1                  	;0
		7    2545  SEND_VAL_EX/116           ?96       5:true               ?2                  	;0
		8    2545  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		9    2545  ASSIGN/38                 ?2        16?1                 $3                  	;0
		10   2546  BOOL_NOT/13               #5=       16?1                 ?0                  	;0
		11   2546  JMPZ/43                   ?0        #5                   ?13                 	;0	>>13
		12   2547  GOTO/253                  ?0        ?16                  ?6                  	;0
		13   2549  INIT_ARRAY/71             #6=       7:'STATUS_SUCCESS'   8:'status'          	;10	<<11
		14   2549  ADD_ARRAY_ELEMENT/72      #6=       16?1                 9:'data'            	;0
		15   2549  RETURN/62                 ?0        #6                   ?0                  	;0
		16   2551  RETURN/62                 ?0        10:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		17   2552  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	static public function d69c16FBFb19997C($C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2553  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2555  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'A730C6dE034Ba241'	;2
		2    2555  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    2555  SEND_VAL_EX/116           ?96       2:array (
  'action' => 'reload_nginx',
) ?2                  	;0
		4    2555  DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
		5    2556  RETURN/62                 ?0        3:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		6    2557  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	static public function clearTemp($C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2558  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2560  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_decode'     	;2
		2    2560  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'a730c6de034ba241'	;2
		3    2560  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4    2560  SEND_VAL_EX/116           ?96       4:array (
  'action' => 'free_temp',
) ?2                  	;0
		5    2560  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6    2560  SEND_VAR_NO_REF_EX/50     ?80       $2                   ?1                  	;0
		7    2560  SEND_VAL_EX/116           ?96       5:true               ?2                  	;0
		8    2560  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		9    2560  ASSIGN/38                 ?2        16?1                 $3                  	;0
		10   2561  FETCH_DIM_R/81            $5=       16?1                 6:'result'          	;0
		11   2561  BOOL_NOT/13               #6=       $5                   ?0                  	;0
		12   2561  JMPZ/43                   ?0        #6                   ?14                 	;0	>>14
		13   2562  GOTO/253                  ?0        ?15                  ?7                  	;0
		14   2564  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<12
		15   2566  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		16   2567  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function clearStreams($C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2568  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2570  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_decode'     	;2
		2    2570  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'a730c6dE034BA241'	;2
		3    2570  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4    2570  SEND_VAL_EX/116           ?96       4:array (
  'action' => 'free_streams',
) ?2                  	;0
		5    2570  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6    2570  SEND_VAR_NO_REF_EX/50     ?80       $2                   ?1                  	;0
		7    2570  SEND_VAL_EX/116           ?96       5:true               ?2                  	;0
		8    2570  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		9    2570  ASSIGN/38                 ?2        16?1                 $3                  	;0
		10   2571  FETCH_DIM_R/81            $5=       16?1                 6:'result'          	;0
		11   2571  BOOL_NOT/13               #6=       $5                   ?0                  	;0
		12   2571  JMPZ/43                   ?0        #6                   ?14                 	;0	>>14
		13   2572  GOTO/253                  ?0        ?15                  ?7                  	;0
		14   2574  RETURN/62                 ?0        8:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<12
		15   2576  RETURN/62                 ?0        9:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		16   2577  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function getDirectory($C082ca9ed03f473c, $c13177660204b2bb)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2578  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2578  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2580  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_decode'     	;2
		3    2580  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'a730c6de034Ba241'	;2
		4    2580  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		5    2580  INIT_ARRAY/71             #3=       4:'scandir'          5:'action'          	;10
		6    2580  ADD_ARRAY_ELEMENT/72      #3=       16?1                 6:'dir'             	;0
		7    2580  SEND_VAL_EX/116           ?96       #3                   ?2                  	;0
		8    2580  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		9    2580  SEND_VAR_NO_REF_EX/50     ?80       $4                   ?1                  	;0
		10   2580  SEND_VAL_EX/116           ?96       7:true               ?2                  	;0
		11   2580  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		12   2580  ASSIGN/38                 ?3        16?2                 $5                  	;0
		13   2581  BOOL_NOT/13               #7=       16?2                 ?0                  	;0
		14   2581  JMPZ/43                   ?0        #7                   ?16                 	;0	>>16
		15   2582  GOTO/253                  ?0        ?29                  ?8                  	;0
		16   2584  UNSET_DIM/75              ?0        16?2                 9:'result'          	;0	<<14
		17   2585  ISSET_ISEMPTY_DIM_OBJ/115 #8=       16?2                 10:'result'         	;33554432
		18   2585  JMPZ_EX/46                #8=       #8                   ?22                 	;0	>>22
		19   2585  FETCH_DIM_R/81            $9=       16?2                 11:'result'         	;0
		20   2585  BOOL_NOT/13               #10=      $9                   ?0                  	;0
		21   2585  BOOL/52                   #8=       #10                  ?0                  	;0
		22   2585  BOOL_NOT/13               #11=      #8                   ?0                  	;0	<<18
		23   2585  JMPZ/43                   ?0        #11                  ?25                 	;0	>>25
		24   2586  GOTO/253                  ?0        ?26                  ?12                 	;0
		25   2588  RETURN/62                 ?0        13:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0	<<23
		26   2590  INIT_ARRAY/71             #12=      14:'STATUS_SUCCESS'  15:'status'         	;10
		27   2590  ADD_ARRAY_ELEMENT/72      #12=      16?2                 16:'data'           	;0
		28   2590  RETURN/62                 ?0        #12                  ?0                  	;0
		29   2592  RETURN/62                 ?0        17:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		30   2593  NOP/0                     ?0        18:NULL              ?0                  	;4294967295
		*/
	}

	static public function killPID($C082ca9ed03f473c, $C98e11437faf4199)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2594  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2594  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2596  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_decode'     	;2
		3    2596  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'A730c6DE034ba241'	;2
		4    2596  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		5    2596  INIT_ARRAY/71             #3=       4:'kill_pid'         5:'action'          	;10
		6    2596  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'intval'          	;1
		7    2596  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		8    2596  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		9    2596  ADD_ARRAY_ELEMENT/72      #3=       $4                   8:'pid'             	;0
		10   2596  SEND_VAL_EX/116           ?96       #3                   ?2                  	;0
		11   2596  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		12   2596  SEND_VAR_NO_REF_EX/50     ?80       $5                   ?1                  	;0
		13   2596  SEND_VAL_EX/116           ?96       9:true               ?2                  	;0
		14   2596  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		15   2596  ASSIGN/38                 ?4        16?2                 $6                  	;0
		16   2597  FETCH_DIM_R/81            $8=       16?2                 10:'result'         	;0
		17   2597  BOOL_NOT/13               #9=       $8                   ?0                  	;0
		18   2597  JMPZ/43                   ?0        #9                   ?20                 	;0	>>20
		19   2598  GOTO/253                  ?0        ?21                  ?11                 	;0
		20   2600  RETURN/62                 ?0        12:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<18
		21   2602  RETURN/62                 ?0        13:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		22   2603  NOP/0                     ?0        14:NULL              ?0                  	;4294967295
		*/
	}

	static public function killConnection($C082ca9ed03f473c, $df02d8ad3c0e8f06)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2604  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2604  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2606  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_decode'     	;2
		3    2606  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'a730C6De034bA241'	;2
		4    2606  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		5    2606  INIT_ARRAY/71             #3=       4:'closeConnection'  5:'action'          	;10
		6    2606  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'intval'          	;1
		7    2606  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		8    2606  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		9    2606  ADD_ARRAY_ELEMENT/72      #3=       $4                   8:'activity_id'     	;0
		10   2606  SEND_VAL_EX/116           ?96       #3                   ?2                  	;0
		11   2606  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		12   2606  SEND_VAR_NO_REF_EX/50     ?80       $5                   ?1                  	;0
		13   2606  SEND_VAL_EX/116           ?96       9:true               ?2                  	;0
		14   2606  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		15   2606  ASSIGN/38                 ?4        16?2                 $6                  	;0
		16   2607  FETCH_DIM_R/81            $8=       16?2                 10:'result'         	;0
		17   2607  BOOL_NOT/13               #9=       $8                   ?0                  	;0
		18   2607  JMPZ/43                   ?0        #9                   ?20                 	;0	>>20
		19   2608  GOTO/253                  ?0        ?21                  ?11                 	;0
		20   2610  RETURN/62                 ?0        12:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0	<<18
		21   2612  RETURN/62                 ?0        13:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		22   2613  NOP/0                     ?0        14:NULL              ?0                  	;4294967295
		*/
	}

	static public function adjustCredits($Abcb228699a7f743, $E8f21e009ba7a8c5, $E141f5a434238777)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2614  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2614  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2614  RECV_INIT/64              16?2=     ?3                   0:''                	;0
		3    2616  BIND_GLOBAL/168           ?0        16?3                 1:'b62d6460eb33ea07'	;0
		4    2616  BIND_GLOBAL/168           ?0        16?4                 2:'E59d0debc75e7be8'	;0
		5    2617  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'is_numeric'      	;1
		6    2617  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		7    2617  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		8    2617  JMPZ_EX/46                #7=       $6                   ?14                 	;0	>>14
		9    2617  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 5:'b349523Ecb058d86'	;1
		10   2617  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		11   2617  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		12   2617  ASSIGN/38                 $9=       16?5                 $8                  	;0
		13   2617  BOOL/52                   #7=       $9                   ?0                  	;0
		14   2617  JMPZ_EX/46                #7=       #7                   ?17                 	;0	>>17	<<8
		15   2617  ISSET_ISEMPTY_DIM_OBJ/115 #10=      16?5                 7:'data'            	;33554432
		16   2617  BOOL/52                   #7=       #10                  ?0                  	;0
		17   2617  BOOL_NOT/13               #11=      #7                   ?0                  	;0	<<14
		18   2617  JMPZ/43                   ?0        #11                  ?20                 	;0	>>20
		19   2618  GOTO/253                  ?0        ?51                  ?8                  	;0
		20   2620  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'intval'          	;1	<<18
		21   2620  FETCH_DIM_FUNC_ARG/93     $12=      16?5                 11:'data'           	;1
		22   2620  FETCH_DIM_FUNC_ARG/93     $13=      $12                  12:'credits'        	;1
		23   2620  SEND_VAR_EX/66            ?80       $13                  ?1                  	;0
		24   2620  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		25   2620  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'intval'         	;1
		26   2620  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		27   2620  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		28   2620  ADD/1                     #16=      $14                  $15                 	;0
		29   2620  ASSIGN/38                 ?11       16?1                 #16                 	;0
		30   2621  IS_SMALLER_OR_EQUAL/20    #18=      15:0                 16?1                	;0
		31   2621  BOOL_NOT/13               #19=      #18                  ?0                  	;0
		32   2621  JMPZ/43                   ?0        #19                  ?34                 	;0	>>34
		33   2622  GOTO/253                  ?0        ?51                  ?16                 	;0
		34   2624  INIT_METHOD_CALL/112      ?0        16?3                 17:'query'          	;3	<<32
		35   2624  SEND_VAL_EX/116           ?80       19:'UPDATE `users` SET `credits` = ? WHERE `id` = ?;' ?1                  	;0
		36   2624  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		37   2624  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		38   2624  DO_FCALL/60               ?14       ?0                   ?0                  	;0
		39   2625  INIT_METHOD_CALL/112      ?0        16?3                 20:'query'          	;6
		40   2625  SEND_VAL_EX/116           ?80       22:'INSERT INTO `users_credits_logs`(`target_id`, `admin_id`, `amount`, `date`, `reason`) VALUES(?, ?, ?, ?, ?);' ?1                  	;0
		41   2625  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		42   2625  FETCH_DIM_FUNC_ARG/93     $21=      16?4                 23:'id'             	;3
		43   2625  SEND_VAR_EX/66            ?112      $21                  ?3                  	;0
		44   2625  SEND_VAR_EX/66            ?128      16?1                 ?4                  	;0
		45   2625  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'time'           	;0
		46   2625  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
		47   2625  SEND_VAR_NO_REF_EX/50     ?144      $22                  ?5                  	;0
		48   2625  SEND_VAR_EX/66            ?160      16?2                 ?6                  	;0
		49   2625  DO_FCALL/60               ?17       ?0                   ?0                  	;0
		50   2626  RETURN/62                 ?0        26:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		51   2629  RETURN/62                 ?0        27:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		52   2630  NOP/0                     ?0        28:NULL              ?0                  	;4294967295
		*/
	}

	static public function reloadCache()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2633  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'shell_exec'      	;1
		1    2633  FETCH_CONSTANT/99         #0=       ?0                   2:'PHP_BIN'         	;16
		2    2633  CONCAT/8                  #1=       #0                   5:' '               	;0
		3    2633  FETCH_CONSTANT/99         #2=       ?0                   6:'CRON_PATH'       	;16
		4    2633  CONCAT/8                  #3=       #1                   #2                  	;0
		5    2633  CONCAT/8                  #4=       #3                   9:'cache_engine.php > /dev/null 2>/dev/null &'	;0
		6    2633  SEND_VAL_EX/116           ?80       #4                   ?1                  	;0
		7    2633  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
		8    2634  RETURN/62                 ?0        10:array (
  'status' => 'STATUS_SUCCESS',
) ?0                  	;0
		9    2635  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	static public function runQuery($B91645b8411dc88c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2636  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2638  BIND_GLOBAL/168           ?0        16?1                 0:'b62d6460eb33ea07'	;0
		2    2639  INIT_METHOD_CALL/112      ?0        16?1                 1:'query'           	;1
		3    2639  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4    2639  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		5    2639  BOOL_NOT/13               #3=       $2                   ?0                  	;0
		6    2639  JMPZ/43                   ?0        #3                   ?8                  	;0	>>8
		7    2640  GOTO/253                  ?0        ?16                  ?3                  	;0
		8    2642  INIT_ARRAY/71             #4=       4:'STATUS_SUCCESS'   5:'status'          	;14	<<6
		9    2642  INIT_METHOD_CALL/112      ?0        16?1                 6:'get_rows'        	;0
		10   2642  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		11   2642  ADD_ARRAY_ELEMENT/72      #4=       $5                   8:'data'            	;0
		12   2642  INIT_METHOD_CALL/112      ?0        16?1                 9:'last_insert_id'  	;0
		13   2642  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		14   2642  ADD_ARRAY_ELEMENT/72      #4=       $6                   11:'insert_id'      	;0
		15   2642  RETURN/62                 ?0        #4                   ?0                  	;0
		16   2644  RETURN/62                 ?0        12:array (
  'status' => 'STATUS_FAILURE',
) ?0                  	;0
		17   2645  NOP/0                     ?0        13:NULL              ?0                  	;4294967295
		*/
	}
}

function parseError($F647a429f8089f01)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   621  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   623  BIND_GLOBAL/168           ?0        16?1                 0:'A15af5ebe30b3cdc'	;0
	2   624  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 1:'status'          	;33554432
	3   624  JMPZ_EX/46                #2=       #2                   ?9                  	;0	>>9
	4   624  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_numeric'      	;1
	5   624  FETCH_DIM_FUNC_ARG/93     $3=       16?0                 4:'status'          	;1
	6   624  SEND_VAR_EX/66            ?80       $3                   ?1                  	;0
	7   624  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	8   624  BOOL/52                   #2=       $4                   ?0                  	;0
	9   624  BOOL_NOT/13               #5=       #2                   ?0                  	;0	<<3
	10  624  JMPZ/43                   ?0        #5                   ?12                 	;0	>>12
	11  625  GOTO/253                  ?0        ?16                  ?5                  	;0
	12  627  FETCH_DIM_R/81            $7=       16?0                 7:'status'          	;0	<<10
	13  627  FETCH_DIM_R/81            $8=       16?1                 $7                  	;0
	14  627  ASSIGN_DIM/147            ?4        16?0                 6:'status'          	;0
	15  627  OP_DATA/137               ?0        $8                   ?0                  	;0
	16  629  JMPZ/43                   ?0        16?0                 ?18                 	;0	>>18
	17  630  GOTO/253                  ?0        ?20                  ?8                  	;0
	18  632  ASSIGN_DIM/147            ?7        16?0                 9:'status'          	;0	<<16
	19  632  OP_DATA/137               ?0        10:'STATUS_NO_PERMISSIONS' ?0                  	;0
	20  634  RETURN/62                 ?0        16?0                 ?0                  	;0
	21  635  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?2437                ?0                  	;0	>>2437
1    5     GOTO/253                  ?0        ?9                   ?1                  	;0
2    7     INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'explode'         	;2
3    7     SEND_VAL_EX/116           ?80       4:','                ?1                  	;0
4    7     FETCH_STATIC_PROP_FUNC_ARG/177 $11=      5:'rRequest'         6:'XUI'             	;2
5    7     FETCH_DIM_FUNC_ARG/93     $12=      $11                  8:'show_columns'    	;2
6    7     SEND_VAR_EX/66            ?96       $12                  ?2                  	;0
7    7     DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
8    7     ASSIGN/38                 ?3        16?0                 $13                 	;0
9    9     FETCH_STATIC_PROP_IS/176  $15=      9:'rRequest'         10:'XUI'            	;0
10   9     ISSET_ISEMPTY_DIM_OBJ/115 #16=      $15                  12:'hide_columns'   	;33554432
11   9     JMPZ/43                   ?0        #16                  ?13                 	;0	>>13
12   10    GOTO/253                  ?0        ?2411                ?13                 	;0
13   12    GOTO/253                  ?0        ?2409                ?14                 	;0	<<11
14   14    FETCH_STATIC_PROP_W/174   $17=      15:'db'              16:'APIWrapper'     	;0
15   14    ASSIGN_REF/39             ?7        $17                  16?1                	;0
16   15    FETCH_DIM_R/81            $20=      16?2                 21:'api_key'        	;0
17   15    FETCH_STATIC_PROP_W/174   $19=      18:'rKey'            19:'APIWrapper'     	;0
18   15    ASSIGN/38                 ?10       $19                  $20                 	;0
19   16    FETCH_STATIC_PROP_IS/176  $22=      22:'rRequest'        23:'XUI'            	;0
20   16    ISSET_ISEMPTY_DIM_OBJ/115 #23=      $22                  25:'api_key'        	;16777216
21   16    BOOL_NOT/13               #24=      #23                  ?0                  	;0
22   16    JMPZ_EX/46                #24=      #24                  ?26                 	;0	>>26
23   16    INIT_STATIC_METHOD_CALL/113 ?0        26:'APIWrapper'      28:'createSession'  	;0
24   16    DO_FCALL/60               $25=      ?0                   ?0                  	;0
25   16    BOOL/52                   #24=      $25                  ?0                  	;0
26   16    JMPZ/43                   ?0        #24                  ?28                 	;0	>>28	<<22
27   17    GOTO/253                  ?0        ?2419                ?30                 	;0
28   19    INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'json_encode'    	;1	<<26
29   19    SEND_VAL_EX/116           ?80       33:array (
  'status' => 'STATUS_FAILURE',
  'error' => 'Invalid API key.',
) ?1                  	;0
30   19    DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
31   19    ECHO/40                   ?0        $26                  ?0                  	;0
32   20    GOTO/253                  ?0        ?2451                ?34                 	;0
33   21    GOTO/253                  ?0        ?2419                ?35                 	;0
34   23    SWITCH_STRING/188         ?0        16?3                 36:array (
  'mysql_query' => 398,
  'user_info' => 407,
  'get_lines' => 419,
  'get_mags' => 432,
  'get_enigmas' => 445,
  'get_users' => 458,
  'get_streams' => 471,
  'get_provider_streams' => 484,
  'get_channels' => 497,
  'get_stations' => 512,
  'get_movies' => 525,
  'get_series_list' => 538,
  'get_episodes' => 551,
  'activity_logs' => 564,
  'live_connections' => 577,
  'credit_logs' => 590,
  'client_logs' => 603,
  'user_logs' => 616,
  'stream_errors' => 629,
  'watch_output' => 642,
  'system_logs' => 655,
  'login_logs' => 668,
  'restream_logs' => 681,
  'mag_events' => 694,
  'get_line' => 707,
  'create_line' => 721,
  'edit_line' => 729,
  'delete_line' => 741,
  'disable_line' => 750,
  'enable_line' => 759,
  'unban_line' => 768,
  'ban_line' => 777,
  'get_user' => 786,
  'create_user' => 800,
  'edit_user' => 808,
  'delete_user' => 820,
  'disable_user' => 829,
  'enable_user' => 838,
  'get_mag' => 847,
  'create_mag' => 861,
  'edit_mag' => 869,
  'delete_mag' => 881,
  'disable_mag' => 890,
  'enable_mag' => 899,
  'unban_mag' => 908,
  'ban_mag' => 917,
  'convert_mag' => 926,
  'get_enigma' => 935,
  'create_enigma' => 949,
  'edit_enigma' => 957,
  'delete_enigma' => 969,
  'disable_enigma' => 978,
  'enable_enigma' => 987,
  'unban_enigma' => 996,
  'ban_enigma' => 1005,
  'convert_enigma' => 1014,
  'get_bouquets' => 1023,
  'get_bouquet' => 1035,
  'create_bouquet' => 1049,
  'edit_bouquet' => 1057,
  'delete_bouquet' => 1069,
  'get_access_codes' => 1078,
  'get_access_code' => 1090,
  'create_access_code' => 1104,
  'edit_access_code' => 1112,
  'delete_access_code' => 1124,
  'get_hmacs' => 1133,
  'get_hmac' => 1145,
  'create_hmac' => 1159,
  'edit_hmac' => 1167,
  'delete_hmac' => 1179,
  'get_epgs' => 1188,
  'get_epg' => 1200,
  'create_epg' => 1214,
  'edit_epg' => 1222,
  'delete_epg' => 1234,
  'reload_epg' => 1243,
  'get_providers' => 1260,
  'get_provider' => 1272,
  'create_provider' => 1286,
  'edit_provider' => 1294,
  'delete_provider' => 1306,
  'reload_provider' => 1315,
  'get_groups' => 1332,
  'get_group' => 1344,
  'create_group' => 1358,
  'edit_group' => 1366,
  'delete_group' => 1378,
  'get_packages' => 1387,
  'get_package' => 1399,
  'create_package' => 1413,
  'edit_package' => 1421,
  'delete_package' => 1433,
  'get_transcode_profiles' => 1442,
  'get_transcode_profile' => 1454,
  'create_transcode_profile' => 1468,
  'edit_transcode_profile' => 1476,
  'delete_transcode_profile' => 1488,
  'get_rtmp_ips' => 1497,
  'get_rtmp_ip' => 1509,
  'create_rtmp_ip' => 1523,
  'edit_rtmp_ip' => 1531,
  'delete_rtmp_ip' => 1543,
  'get_categories' => 1552,
  'get_category' => 1564,
  'create_category' => 1578,
  'edit_category' => 1586,
  'delete_category' => 1598,
  'get_watch_folders' => 1607,
  'get_watch_folder' => 1619,
  'create_watch_folder' => 1633,
  'edit_watch_folder' => 1641,
  'delete_watch_folder' => 1653,
  'reload_watch_folder' => 1662,
  'get_blocked_isps' => 1676,
  'add_blocked_isp' => 1688,
  'delete_blocked_isp' => 1697,
  'get_blocked_uas' => 1706,
  'add_blocked_ua' => 1718,
  'delete_blocked_ua' => 1726,
  'get_blocked_ips' => 1735,
  'add_blocked_ip' => 1747,
  'delete_blocked_ip' => 1756,
  'flush_blocked_ips' => 1765,
  'get_stream' => 1772,
  'create_stream' => 1786,
  'edit_stream' => 1794,
  'delete_stream' => 1806,
  'start_station' => 1819,
  'start_channel' => 1819,
  'start_stream' => 1819,
  'stop_station' => 1830,
  'stop_channel' => 1830,
  'stop_stream' => 1830,
  'get_channel' => 1841,
  'create_channel' => 1855,
  'edit_channel' => 1863,
  'delete_channel' => 1875,
  'get_station' => 1888,
  'create_station' => 1902,
  'edit_station' => 1910,
  'delete_station' => 1922,
  'get_movie' => 1935,
  'create_movie' => 1949,
  'edit_movie' => 1957,
  'delete_movie' => 1969,
  'start_episode' => 1982,
  'start_movie' => 1982,
  'stop_episode' => 1993,
  'stop_movie' => 1993,
  'get_episode' => 2004,
  'create_episode' => 2018,
  'edit_episode' => 2026,
  'delete_episode' => 2038,
  'get_series' => 2051,
  'create_series' => 2065,
  'edit_series' => 2073,
  'delete_series' => 2085,
  'get_servers' => 2094,
  'get_server' => 2106,
  'install_server' => 2120,
  'install_proxy' => 2130,
  'edit_server' => 2140,
  'edit_proxy' => 2152,
  'delete_server' => 2164,
  'get_settings' => 2173,
  'edit_settings' => 2185,
  'get_server_stats' => 2193,
  'get_fpm_status' => 2205,
  'get_rtmp_stats' => 2217,
  'get_free_space' => 2229,
  'get_pids' => 2241,
  'get_certificate_info' => 2253,
  'reload_nginx' => 2265,
  'clear_temp' => 2277,
  'clear_streams' => 2289,
  'get_directory' => 2301,
  'kill_pid' => 2315,
  'kill_connection' => 2329,
  'adjust_credits' => 2343,
  'reload_cache' => 2358,
)	;2365
35   24    CASE/48                   #27=      16?3                 37:'mysql_query'    	;0	>>37
36   24    JMPNZ/44                  ?0        #27                  ?398                	;0	>>398
37   27    CASE/48                   #27=      16?3                 38:'user_info'      	;0	>>39	<<35
38   27    JMPNZ/44                  ?0        #27                  ?407                	;0	>>407
39   30    CASE/48                   #27=      16?3                 39:'get_lines'      	;0	>>41	<<37
40   30    JMPNZ/44                  ?0        #27                  ?419                	;0	>>419
41   33    CASE/48                   #27=      16?3                 40:'get_mags'       	;0	>>43	<<39
42   33    JMPNZ/44                  ?0        #27                  ?432                	;0	>>432
43   36    CASE/48                   #27=      16?3                 41:'get_enigmas'    	;0	>>45	<<41
44   36    JMPNZ/44                  ?0        #27                  ?445                	;0	>>445
45   39    CASE/48                   #27=      16?3                 42:'get_users'      	;0	>>47	<<43
46   39    JMPNZ/44                  ?0        #27                  ?458                	;0	>>458
47   42    CASE/48                   #27=      16?3                 43:'get_streams'    	;0	>>49	<<45
48   42    JMPNZ/44                  ?0        #27                  ?471                	;0	>>471
49   45    CASE/48                   #27=      16?3                 44:'get_provider_streams'	;0	>>51	<<47
50   45    JMPNZ/44                  ?0        #27                  ?484                	;0	>>484
51   48    CASE/48                   #27=      16?3                 45:'get_channels'   	;0	>>53	<<49
52   48    JMPNZ/44                  ?0        #27                  ?497                	;0	>>497
53   52    CASE/48                   #27=      16?3                 46:'get_stations'   	;0	>>55	<<51
54   52    JMPNZ/44                  ?0        #27                  ?512                	;0	>>512
55   55    CASE/48                   #27=      16?3                 47:'get_movies'     	;0	>>57	<<53
56   55    JMPNZ/44                  ?0        #27                  ?525                	;0	>>525
57   58    CASE/48                   #27=      16?3                 48:'get_series_list'	;0	>>59	<<55
58   58    JMPNZ/44                  ?0        #27                  ?538                	;0	>>538
59   61    CASE/48                   #27=      16?3                 49:'get_episodes'   	;0	>>61	<<57
60   61    JMPNZ/44                  ?0        #27                  ?551                	;0	>>551
61   64    CASE/48                   #27=      16?3                 50:'activity_logs'  	;0	>>63	<<59
62   64    JMPNZ/44                  ?0        #27                  ?564                	;0	>>564
63   67    CASE/48                   #27=      16?3                 51:'live_connections'	;0	>>65	<<61
64   67    JMPNZ/44                  ?0        #27                  ?577                	;0	>>577
65   70    CASE/48                   #27=      16?3                 52:'credit_logs'    	;0	>>67	<<63
66   70    JMPNZ/44                  ?0        #27                  ?590                	;0	>>590
67   73    CASE/48                   #27=      16?3                 53:'client_logs'    	;0	>>69	<<65
68   73    JMPNZ/44                  ?0        #27                  ?603                	;0	>>603
69   76    CASE/48                   #27=      16?3                 54:'user_logs'      	;0	>>71	<<67
70   76    JMPNZ/44                  ?0        #27                  ?616                	;0	>>616
71   79    CASE/48                   #27=      16?3                 55:'stream_errors'  	;0	>>73	<<69
72   79    JMPNZ/44                  ?0        #27                  ?629                	;0	>>629
73   82    CASE/48                   #27=      16?3                 56:'watch_output'   	;0	>>75	<<71
74   82    JMPNZ/44                  ?0        #27                  ?642                	;0	>>642
75   85    CASE/48                   #27=      16?3                 57:'system_logs'    	;0	>>77	<<73
76   85    JMPNZ/44                  ?0        #27                  ?655                	;0	>>655
77   88    CASE/48                   #27=      16?3                 58:'login_logs'     	;0	>>79	<<75
78   88    JMPNZ/44                  ?0        #27                  ?668                	;0	>>668
79   91    CASE/48                   #27=      16?3                 59:'restream_logs'  	;0	>>81	<<77
80   91    JMPNZ/44                  ?0        #27                  ?681                	;0	>>681
81   94    CASE/48                   #27=      16?3                 60:'mag_events'     	;0	>>83	<<79
82   94    JMPNZ/44                  ?0        #27                  ?694                	;0	>>694
83   97    CASE/48                   #27=      16?3                 61:'get_line'       	;0	>>85	<<81
84   97    JMPNZ/44                  ?0        #27                  ?707                	;0	>>707
85   100   CASE/48                   #27=      16?3                 62:'create_line'    	;0	>>87	<<83
86   100   JMPNZ/44                  ?0        #27                  ?721                	;0	>>721
87   103   CASE/48                   #27=      16?3                 63:'edit_line'      	;0	>>89	<<85
88   103   JMPNZ/44                  ?0        #27                  ?729                	;0	>>729
89   108   CASE/48                   #27=      16?3                 64:'delete_line'    	;0	>>91	<<87
90   108   JMPNZ/44                  ?0        #27                  ?741                	;0	>>741
91   111   CASE/48                   #27=      16?3                 65:'disable_line'   	;0	>>93	<<89
92   111   JMPNZ/44                  ?0        #27                  ?750                	;0	>>750
93   114   CASE/48                   #27=      16?3                 66:'enable_line'    	;0	>>95	<<91
94   114   JMPNZ/44                  ?0        #27                  ?759                	;0	>>759
95   117   CASE/48                   #27=      16?3                 67:'unban_line'     	;0	>>97	<<93
96   117   JMPNZ/44                  ?0        #27                  ?768                	;0	>>768
97   120   CASE/48                   #27=      16?3                 68:'ban_line'       	;0	>>99	<<95
98   120   JMPNZ/44                  ?0        #27                  ?777                	;0	>>777
99   123   CASE/48                   #27=      16?3                 69:'get_user'       	;0	>>101	<<97
100  123   JMPNZ/44                  ?0        #27                  ?786                	;0	>>786
101  126   CASE/48                   #27=      16?3                 70:'create_user'    	;0	>>103	<<99
102  126   JMPNZ/44                  ?0        #27                  ?800                	;0	>>800
103  129   CASE/48                   #27=      16?3                 71:'edit_user'      	;0	>>105	<<101
104  129   JMPNZ/44                  ?0        #27                  ?808                	;0	>>808
105  134   CASE/48                   #27=      16?3                 72:'delete_user'    	;0	>>107	<<103
106  134   JMPNZ/44                  ?0        #27                  ?820                	;0	>>820
107  137   CASE/48                   #27=      16?3                 73:'disable_user'   	;0	>>109	<<105
108  137   JMPNZ/44                  ?0        #27                  ?829                	;0	>>829
109  140   CASE/48                   #27=      16?3                 74:'enable_user'    	;0	>>111	<<107
110  140   JMPNZ/44                  ?0        #27                  ?838                	;0	>>838
111  143   CASE/48                   #27=      16?3                 75:'get_mag'        	;0	>>113	<<109
112  143   JMPNZ/44                  ?0        #27                  ?847                	;0	>>847
113  146   CASE/48                   #27=      16?3                 76:'create_mag'     	;0	>>115	<<111
114  146   JMPNZ/44                  ?0        #27                  ?861                	;0	>>861
115  149   CASE/48                   #27=      16?3                 77:'edit_mag'       	;0	>>117	<<113
116  149   JMPNZ/44                  ?0        #27                  ?869                	;0	>>869
117  154   CASE/48                   #27=      16?3                 78:'delete_mag'     	;0	>>119	<<115
118  154   JMPNZ/44                  ?0        #27                  ?881                	;0	>>881
119  157   CASE/48                   #27=      16?3                 79:'disable_mag'    	;0	>>121	<<117
120  157   JMPNZ/44                  ?0        #27                  ?890                	;0	>>890
121  160   CASE/48                   #27=      16?3                 80:'enable_mag'     	;0	>>123	<<119
122  160   JMPNZ/44                  ?0        #27                  ?899                	;0	>>899
123  163   CASE/48                   #27=      16?3                 81:'unban_mag'      	;0	>>125	<<121
124  163   JMPNZ/44                  ?0        #27                  ?908                	;0	>>908
125  166   CASE/48                   #27=      16?3                 82:'ban_mag'        	;0	>>127	<<123
126  166   JMPNZ/44                  ?0        #27                  ?917                	;0	>>917
127  169   CASE/48                   #27=      16?3                 83:'convert_mag'    	;0	>>129	<<125
128  169   JMPNZ/44                  ?0        #27                  ?926                	;0	>>926
129  172   CASE/48                   #27=      16?3                 84:'get_enigma'     	;0	>>131	<<127
130  172   JMPNZ/44                  ?0        #27                  ?935                	;0	>>935
131  175   CASE/48                   #27=      16?3                 85:'create_enigma'  	;0	>>133	<<129
132  175   JMPNZ/44                  ?0        #27                  ?949                	;0	>>949
133  178   CASE/48                   #27=      16?3                 86:'edit_enigma'    	;0	>>135	<<131
134  178   JMPNZ/44                  ?0        #27                  ?957                	;0	>>957
135  183   CASE/48                   #27=      16?3                 87:'delete_enigma'  	;0	>>137	<<133
136  183   JMPNZ/44                  ?0        #27                  ?969                	;0	>>969
137  186   CASE/48                   #27=      16?3                 88:'disable_enigma' 	;0	>>139	<<135
138  186   JMPNZ/44                  ?0        #27                  ?978                	;0	>>978
139  189   CASE/48                   #27=      16?3                 89:'enable_enigma'  	;0	>>141	<<137
140  189   JMPNZ/44                  ?0        #27                  ?987                	;0	>>987
141  192   CASE/48                   #27=      16?3                 90:'unban_enigma'   	;0	>>143	<<139
142  192   JMPNZ/44                  ?0        #27                  ?996                	;0	>>996
143  195   CASE/48                   #27=      16?3                 91:'ban_enigma'     	;0	>>145	<<141
144  195   JMPNZ/44                  ?0        #27                  ?1005               	;0	>>1005
145  198   CASE/48                   #27=      16?3                 92:'convert_enigma' 	;0	>>147	<<143
146  198   JMPNZ/44                  ?0        #27                  ?1014               	;0	>>1014
147  201   CASE/48                   #27=      16?3                 93:'get_bouquets'   	;0	>>149	<<145
148  201   JMPNZ/44                  ?0        #27                  ?1023               	;0	>>1023
149  204   CASE/48                   #27=      16?3                 94:'get_bouquet'    	;0	>>151	<<147
150  204   JMPNZ/44                  ?0        #27                  ?1035               	;0	>>1035
151  207   CASE/48                   #27=      16?3                 95:'create_bouquet' 	;0	>>153	<<149
152  207   JMPNZ/44                  ?0        #27                  ?1049               	;0	>>1049
153  210   CASE/48                   #27=      16?3                 96:'edit_bouquet'   	;0	>>155	<<151
154  210   JMPNZ/44                  ?0        #27                  ?1057               	;0	>>1057
155  215   CASE/48                   #27=      16?3                 97:'delete_bouquet' 	;0	>>157	<<153
156  215   JMPNZ/44                  ?0        #27                  ?1069               	;0	>>1069
157  218   CASE/48                   #27=      16?3                 98:'get_access_codes'	;0	>>159	<<155
158  218   JMPNZ/44                  ?0        #27                  ?1078               	;0	>>1078
159  221   CASE/48                   #27=      16?3                 99:'get_access_code'	;0	>>161	<<157
160  221   JMPNZ/44                  ?0        #27                  ?1090               	;0	>>1090
161  224   CASE/48                   #27=      16?3                 100:'create_access_code'	;0	>>163	<<159
162  224   JMPNZ/44                  ?0        #27                  ?1104               	;0	>>1104
163  227   CASE/48                   #27=      16?3                 101:'edit_access_code'	;0	>>165	<<161
164  227   JMPNZ/44                  ?0        #27                  ?1112               	;0	>>1112
165  232   CASE/48                   #27=      16?3                 102:'delete_access_code'	;0	>>167	<<163
166  232   JMPNZ/44                  ?0        #27                  ?1124               	;0	>>1124
167  235   CASE/48                   #27=      16?3                 103:'get_hmacs'     	;0	>>169	<<165
168  235   JMPNZ/44                  ?0        #27                  ?1133               	;0	>>1133
169  238   CASE/48                   #27=      16?3                 104:'get_hmac'      	;0	>>171	<<167
170  238   JMPNZ/44                  ?0        #27                  ?1145               	;0	>>1145
171  241   CASE/48                   #27=      16?3                 105:'create_hmac'   	;0	>>173	<<169
172  241   JMPNZ/44                  ?0        #27                  ?1159               	;0	>>1159
173  244   CASE/48                   #27=      16?3                 106:'edit_hmac'     	;0	>>175	<<171
174  244   JMPNZ/44                  ?0        #27                  ?1167               	;0	>>1167
175  249   CASE/48                   #27=      16?3                 107:'delete_hmac'   	;0	>>177	<<173
176  249   JMPNZ/44                  ?0        #27                  ?1179               	;0	>>1179
177  252   CASE/48                   #27=      16?3                 108:'get_epgs'      	;0	>>179	<<175
178  252   JMPNZ/44                  ?0        #27                  ?1188               	;0	>>1188
179  255   CASE/48                   #27=      16?3                 109:'get_epg'       	;0	>>181	<<177
180  255   JMPNZ/44                  ?0        #27                  ?1200               	;0	>>1200
181  258   CASE/48                   #27=      16?3                 110:'create_epg'    	;0	>>183	<<179
182  258   JMPNZ/44                  ?0        #27                  ?1214               	;0	>>1214
183  261   CASE/48                   #27=      16?3                 111:'edit_epg'      	;0	>>185	<<181
184  261   JMPNZ/44                  ?0        #27                  ?1222               	;0	>>1222
185  266   CASE/48                   #27=      16?3                 112:'delete_epg'    	;0	>>187	<<183
186  266   JMPNZ/44                  ?0        #27                  ?1234               	;0	>>1234
187  269   CASE/48                   #27=      16?3                 113:'reload_epg'    	;0	>>189	<<185
188  269   JMPNZ/44                  ?0        #27                  ?1243               	;0	>>1243
189  272   CASE/48                   #27=      16?3                 114:'get_providers' 	;0	>>191	<<187
190  272   JMPNZ/44                  ?0        #27                  ?1260               	;0	>>1260
191  275   CASE/48                   #27=      16?3                 115:'get_provider'  	;0	>>193	<<189
192  275   JMPNZ/44                  ?0        #27                  ?1272               	;0	>>1272
193  278   CASE/48                   #27=      16?3                 116:'create_provider'	;0	>>195	<<191
194  278   JMPNZ/44                  ?0        #27                  ?1286               	;0	>>1286
195  281   CASE/48                   #27=      16?3                 117:'edit_provider' 	;0	>>197	<<193
196  281   JMPNZ/44                  ?0        #27                  ?1294               	;0	>>1294
197  286   CASE/48                   #27=      16?3                 118:'delete_provider'	;0	>>199	<<195
198  286   JMPNZ/44                  ?0        #27                  ?1306               	;0	>>1306
199  289   CASE/48                   #27=      16?3                 119:'reload_provider'	;0	>>201	<<197
200  289   JMPNZ/44                  ?0        #27                  ?1315               	;0	>>1315
201  292   CASE/48                   #27=      16?3                 120:'get_groups'    	;0	>>203	<<199
202  292   JMPNZ/44                  ?0        #27                  ?1332               	;0	>>1332
203  295   CASE/48                   #27=      16?3                 121:'get_group'     	;0	>>205	<<201
204  295   JMPNZ/44                  ?0        #27                  ?1344               	;0	>>1344
205  298   CASE/48                   #27=      16?3                 122:'create_group'  	;0	>>207	<<203
206  298   JMPNZ/44                  ?0        #27                  ?1358               	;0	>>1358
207  301   CASE/48                   #27=      16?3                 123:'edit_group'    	;0	>>209	<<205
208  301   JMPNZ/44                  ?0        #27                  ?1366               	;0	>>1366
209  306   CASE/48                   #27=      16?3                 124:'delete_group'  	;0	>>211	<<207
210  306   JMPNZ/44                  ?0        #27                  ?1378               	;0	>>1378
211  309   CASE/48                   #27=      16?3                 125:'get_packages'  	;0	>>213	<<209
212  309   JMPNZ/44                  ?0        #27                  ?1387               	;0	>>1387
213  312   CASE/48                   #27=      16?3                 126:'get_package'   	;0	>>215	<<211
214  312   JMPNZ/44                  ?0        #27                  ?1399               	;0	>>1399
215  315   CASE/48                   #27=      16?3                 127:'create_package'	;0	>>217	<<213
216  315   JMPNZ/44                  ?0        #27                  ?1413               	;0	>>1413
217  318   CASE/48                   #27=      16?3                 128:'edit_package'  	;0	>>219	<<215
218  318   JMPNZ/44                  ?0        #27                  ?1421               	;0	>>1421
219  323   CASE/48                   #27=      16?3                 129:'delete_package'	;0	>>221	<<217
220  323   JMPNZ/44                  ?0        #27                  ?1433               	;0	>>1433
221  326   CASE/48                   #27=      16?3                 130:'get_transcode_profiles'	;0	>>223	<<219
222  326   JMPNZ/44                  ?0        #27                  ?1442               	;0	>>1442
223  329   CASE/48                   #27=      16?3                 131:'get_transcode_profile'	;0	>>225	<<221
224  329   JMPNZ/44                  ?0        #27                  ?1454               	;0	>>1454
225  332   CASE/48                   #27=      16?3                 132:'create_transcode_profile'	;0	>>227	<<223
226  332   JMPNZ/44                  ?0        #27                  ?1468               	;0	>>1468
227  335   CASE/48                   #27=      16?3                 133:'edit_transcode_profile'	;0	>>229	<<225
228  335   JMPNZ/44                  ?0        #27                  ?1476               	;0	>>1476
229  340   CASE/48                   #27=      16?3                 134:'delete_transcode_profile'	;0	>>231	<<227
230  340   JMPNZ/44                  ?0        #27                  ?1488               	;0	>>1488
231  343   CASE/48                   #27=      16?3                 135:'get_rtmp_ips'  	;0	>>233	<<229
232  343   JMPNZ/44                  ?0        #27                  ?1497               	;0	>>1497
233  346   CASE/48                   #27=      16?3                 136:'get_rtmp_ip'   	;0	>>235	<<231
234  346   JMPNZ/44                  ?0        #27                  ?1509               	;0	>>1509
235  349   CASE/48                   #27=      16?3                 137:'create_rtmp_ip'	;0	>>237	<<233
236  349   JMPNZ/44                  ?0        #27                  ?1523               	;0	>>1523
237  352   CASE/48                   #27=      16?3                 138:'edit_rtmp_ip'  	;0	>>239	<<235
238  352   JMPNZ/44                  ?0        #27                  ?1531               	;0	>>1531
239  357   CASE/48                   #27=      16?3                 139:'delete_rtmp_ip'	;0	>>241	<<237
240  357   JMPNZ/44                  ?0        #27                  ?1543               	;0	>>1543
241  360   CASE/48                   #27=      16?3                 140:'get_categories'	;0	>>243	<<239
242  360   JMPNZ/44                  ?0        #27                  ?1552               	;0	>>1552
243  363   CASE/48                   #27=      16?3                 141:'get_category'  	;0	>>245	<<241
244  363   JMPNZ/44                  ?0        #27                  ?1564               	;0	>>1564
245  366   CASE/48                   #27=      16?3                 142:'create_category'	;0	>>247	<<243
246  366   JMPNZ/44                  ?0        #27                  ?1578               	;0	>>1578
247  369   CASE/48                   #27=      16?3                 143:'edit_category' 	;0	>>249	<<245
248  369   JMPNZ/44                  ?0        #27                  ?1586               	;0	>>1586
249  374   CASE/48                   #27=      16?3                 144:'delete_category'	;0	>>251	<<247
250  374   JMPNZ/44                  ?0        #27                  ?1598               	;0	>>1598
251  377   CASE/48                   #27=      16?3                 145:'get_watch_folders'	;0	>>253	<<249
252  377   JMPNZ/44                  ?0        #27                  ?1607               	;0	>>1607
253  380   CASE/48                   #27=      16?3                 146:'get_watch_folder'	;0	>>255	<<251
254  380   JMPNZ/44                  ?0        #27                  ?1619               	;0	>>1619
255  383   CASE/48                   #27=      16?3                 147:'create_watch_folder'	;0	>>257	<<253
256  383   JMPNZ/44                  ?0        #27                  ?1633               	;0	>>1633
257  386   CASE/48                   #27=      16?3                 148:'edit_watch_folder'	;0	>>259	<<255
258  386   JMPNZ/44                  ?0        #27                  ?1641               	;0	>>1641
259  391   CASE/48                   #27=      16?3                 149:'delete_watch_folder'	;0	>>261	<<257
260  391   JMPNZ/44                  ?0        #27                  ?1653               	;0	>>1653
261  394   CASE/48                   #27=      16?3                 150:'reload_watch_folder'	;0	>>263	<<259
262  394   JMPNZ/44                  ?0        #27                  ?1662               	;0	>>1662
263  397   CASE/48                   #27=      16?3                 151:'get_blocked_isps'	;0	>>265	<<261
264  397   JMPNZ/44                  ?0        #27                  ?1676               	;0	>>1676
265  400   CASE/48                   #27=      16?3                 152:'add_blocked_isp'	;0	>>267	<<263
266  400   JMPNZ/44                  ?0        #27                  ?1688               	;0	>>1688
267  403   CASE/48                   #27=      16?3                 153:'delete_blocked_isp'	;0	>>269	<<265
268  403   JMPNZ/44                  ?0        #27                  ?1697               	;0	>>1697
269  406   CASE/48                   #27=      16?3                 154:'get_blocked_uas'	;0	>>271	<<267
270  406   JMPNZ/44                  ?0        #27                  ?1706               	;0	>>1706
271  409   CASE/48                   #27=      16?3                 155:'add_blocked_ua'	;0	>>273	<<269
272  409   JMPNZ/44                  ?0        #27                  ?1718               	;0	>>1718
273  412   CASE/48                   #27=      16?3                 156:'delete_blocked_ua'	;0	>>275	<<271
274  412   JMPNZ/44                  ?0        #27                  ?1726               	;0	>>1726
275  415   CASE/48                   #27=      16?3                 157:'get_blocked_ips'	;0	>>277	<<273
276  415   JMPNZ/44                  ?0        #27                  ?1735               	;0	>>1735
277  418   CASE/48                   #27=      16?3                 158:'add_blocked_ip'	;0	>>279	<<275
278  418   JMPNZ/44                  ?0        #27                  ?1747               	;0	>>1747
279  421   CASE/48                   #27=      16?3                 159:'delete_blocked_ip'	;0	>>281	<<277
280  421   JMPNZ/44                  ?0        #27                  ?1756               	;0	>>1756
281  424   CASE/48                   #27=      16?3                 160:'flush_blocked_ips'	;0	>>283	<<279
282  424   JMPNZ/44                  ?0        #27                  ?1765               	;0	>>1765
283  427   CASE/48                   #27=      16?3                 161:'get_stream'    	;0	>>285	<<281
284  427   JMPNZ/44                  ?0        #27                  ?1772               	;0	>>1772
285  430   CASE/48                   #27=      16?3                 162:'create_stream' 	;0	>>287	<<283
286  430   JMPNZ/44                  ?0        #27                  ?1786               	;0	>>1786
287  433   CASE/48                   #27=      16?3                 163:'edit_stream'   	;0	>>289	<<285
288  433   JMPNZ/44                  ?0        #27                  ?1794               	;0	>>1794
289  438   CASE/48                   #27=      16?3                 164:'delete_stream' 	;0	>>291	<<287
290  438   JMPNZ/44                  ?0        #27                  ?1806               	;0	>>1806
291  441   CASE/48                   #27=      16?3                 165:'start_station' 	;0	>>293	<<289
292  441   JMPNZ/44                  ?0        #27                  ?1819               	;0	>>1819
293  442   CASE/48                   #27=      16?3                 166:'start_channel' 	;0	>>295	<<291
294  442   JMPNZ/44                  ?0        #27                  ?1819               	;0	>>1819
295  443   CASE/48                   #27=      16?3                 167:'start_stream'  	;0	>>297	<<293
296  443   JMPNZ/44                  ?0        #27                  ?1819               	;0	>>1819
297  446   CASE/48                   #27=      16?3                 168:'stop_station'  	;0	>>299	<<295
298  446   JMPNZ/44                  ?0        #27                  ?1830               	;0	>>1830
299  447   CASE/48                   #27=      16?3                 169:'stop_channel'  	;0	>>301	<<297
300  447   JMPNZ/44                  ?0        #27                  ?1830               	;0	>>1830
301  448   CASE/48                   #27=      16?3                 170:'stop_stream'   	;0	>>303	<<299
302  448   JMPNZ/44                  ?0        #27                  ?1830               	;0	>>1830
303  451   CASE/48                   #27=      16?3                 171:'get_channel'   	;0	>>305	<<301
304  451   JMPNZ/44                  ?0        #27                  ?1841               	;0	>>1841
305  454   CASE/48                   #27=      16?3                 172:'create_channel'	;0	>>307	<<303
306  454   JMPNZ/44                  ?0        #27                  ?1855               	;0	>>1855
307  457   CASE/48                   #27=      16?3                 173:'edit_channel'  	;0	>>309	<<305
308  457   JMPNZ/44                  ?0        #27                  ?1863               	;0	>>1863
309  462   CASE/48                   #27=      16?3                 174:'delete_channel'	;0	>>311	<<307
310  462   JMPNZ/44                  ?0        #27                  ?1875               	;0	>>1875
311  465   CASE/48                   #27=      16?3                 175:'get_station'   	;0	>>313	<<309
312  465   JMPNZ/44                  ?0        #27                  ?1888               	;0	>>1888
313  468   CASE/48                   #27=      16?3                 176:'create_station'	;0	>>315	<<311
314  468   JMPNZ/44                  ?0        #27                  ?1902               	;0	>>1902
315  471   CASE/48                   #27=      16?3                 177:'edit_station'  	;0	>>317	<<313
316  471   JMPNZ/44                  ?0        #27                  ?1910               	;0	>>1910
317  476   CASE/48                   #27=      16?3                 178:'delete_station'	;0	>>319	<<315
318  476   JMPNZ/44                  ?0        #27                  ?1922               	;0	>>1922
319  479   CASE/48                   #27=      16?3                 179:'get_movie'     	;0	>>321	<<317
320  479   JMPNZ/44                  ?0        #27                  ?1935               	;0	>>1935
321  482   CASE/48                   #27=      16?3                 180:'create_movie'  	;0	>>323	<<319
322  482   JMPNZ/44                  ?0        #27                  ?1949               	;0	>>1949
323  485   CASE/48                   #27=      16?3                 181:'edit_movie'    	;0	>>325	<<321
324  485   JMPNZ/44                  ?0        #27                  ?1957               	;0	>>1957
325  490   CASE/48                   #27=      16?3                 182:'delete_movie'  	;0	>>327	<<323
326  490   JMPNZ/44                  ?0        #27                  ?1969               	;0	>>1969
327  493   CASE/48                   #27=      16?3                 183:'start_episode' 	;0	>>329	<<325
328  493   JMPNZ/44                  ?0        #27                  ?1982               	;0	>>1982
329  494   CASE/48                   #27=      16?3                 184:'start_movie'   	;0	>>331	<<327
330  494   JMPNZ/44                  ?0        #27                  ?1982               	;0	>>1982
331  497   CASE/48                   #27=      16?3                 185:'stop_episode'  	;0	>>333	<<329
332  497   JMPNZ/44                  ?0        #27                  ?1993               	;0	>>1993
333  498   CASE/48                   #27=      16?3                 186:'stop_movie'    	;0	>>335	<<331
334  498   JMPNZ/44                  ?0        #27                  ?1993               	;0	>>1993
335  501   CASE/48                   #27=      16?3                 187:'get_episode'   	;0	>>337	<<333
336  501   JMPNZ/44                  ?0        #27                  ?2004               	;0	>>2004
337  504   CASE/48                   #27=      16?3                 188:'create_episode'	;0	>>339	<<335
338  504   JMPNZ/44                  ?0        #27                  ?2018               	;0	>>2018
339  507   CASE/48                   #27=      16?3                 189:'edit_episode'  	;0	>>341	<<337
340  507   JMPNZ/44                  ?0        #27                  ?2026               	;0	>>2026
341  512   CASE/48                   #27=      16?3                 190:'delete_episode'	;0	>>343	<<339
342  512   JMPNZ/44                  ?0        #27                  ?2038               	;0	>>2038
343  515   CASE/48                   #27=      16?3                 191:'get_series'    	;0	>>345	<<341
344  515   JMPNZ/44                  ?0        #27                  ?2051               	;0	>>2051
345  518   CASE/48                   #27=      16?3                 192:'create_series' 	;0	>>347	<<343
346  518   JMPNZ/44                  ?0        #27                  ?2065               	;0	>>2065
347  521   CASE/48                   #27=      16?3                 193:'edit_series'   	;0	>>349	<<345
348  521   JMPNZ/44                  ?0        #27                  ?2073               	;0	>>2073
349  526   CASE/48                   #27=      16?3                 194:'delete_series' 	;0	>>351	<<347
350  526   JMPNZ/44                  ?0        #27                  ?2085               	;0	>>2085
351  529   CASE/48                   #27=      16?3                 195:'get_servers'   	;0	>>353	<<349
352  529   JMPNZ/44                  ?0        #27                  ?2094               	;0	>>2094
353  532   CASE/48                   #27=      16?3                 196:'get_server'    	;0	>>355	<<351
354  532   JMPNZ/44                  ?0        #27                  ?2106               	;0	>>2106
355  535   CASE/48                   #27=      16?3                 197:'install_server'	;0	>>357	<<353
356  535   JMPNZ/44                  ?0        #27                  ?2120               	;0	>>2120
357  539   CASE/48                   #27=      16?3                 198:'install_proxy' 	;0	>>359	<<355
358  539   JMPNZ/44                  ?0        #27                  ?2130               	;0	>>2130
359  543   CASE/48                   #27=      16?3                 199:'edit_server'   	;0	>>361	<<357
360  543   JMPNZ/44                  ?0        #27                  ?2140               	;0	>>2140
361  548   CASE/48                   #27=      16?3                 200:'edit_proxy'    	;0	>>363	<<359
362  548   JMPNZ/44                  ?0        #27                  ?2152               	;0	>>2152
363  553   CASE/48                   #27=      16?3                 201:'delete_server' 	;0	>>365	<<361
364  553   JMPNZ/44                  ?0        #27                  ?2164               	;0	>>2164
365  556   CASE/48                   #27=      16?3                 202:'get_settings'  	;0	>>367	<<363
366  556   JMPNZ/44                  ?0        #27                  ?2173               	;0	>>2173
367  559   CASE/48                   #27=      16?3                 203:'edit_settings' 	;0	>>369	<<365
368  559   JMPNZ/44                  ?0        #27                  ?2185               	;0	>>2185
369  562   CASE/48                   #27=      16?3                 204:'get_server_stats'	;0	>>371	<<367
370  562   JMPNZ/44                  ?0        #27                  ?2193               	;0	>>2193
371  565   CASE/48                   #27=      16?3                 205:'get_fpm_status'	;0	>>373	<<369
372  565   JMPNZ/44                  ?0        #27                  ?2205               	;0	>>2205
373  568   CASE/48                   #27=      16?3                 206:'get_rtmp_stats'	;0	>>375	<<371
374  568   JMPNZ/44                  ?0        #27                  ?2217               	;0	>>2217
375  571   CASE/48                   #27=      16?3                 207:'get_free_space'	;0	>>377	<<373
376  571   JMPNZ/44                  ?0        #27                  ?2229               	;0	>>2229
377  574   CASE/48                   #27=      16?3                 208:'get_pids'      	;0	>>379	<<375
378  574   JMPNZ/44                  ?0        #27                  ?2241               	;0	>>2241
379  577   CASE/48                   #27=      16?3                 209:'get_certificate_info'	;0	>>381	<<377
380  577   JMPNZ/44                  ?0        #27                  ?2253               	;0	>>2253
381  580   CASE/48                   #27=      16?3                 210:'reload_nginx'  	;0	>>383	<<379
382  580   JMPNZ/44                  ?0        #27                  ?2265               	;0	>>2265
383  583   CASE/48                   #27=      16?3                 211:'clear_temp'    	;0	>>385	<<381
384  583   JMPNZ/44                  ?0        #27                  ?2277               	;0	>>2277
385  586   CASE/48                   #27=      16?3                 212:'clear_streams' 	;0	>>387	<<383
386  586   JMPNZ/44                  ?0        #27                  ?2289               	;0	>>2289
387  589   CASE/48                   #27=      16?3                 213:'get_directory' 	;0	>>389	<<385
388  589   JMPNZ/44                  ?0        #27                  ?2301               	;0	>>2301
389  592   CASE/48                   #27=      16?3                 214:'kill_pid'      	;0	>>391	<<387
390  592   JMPNZ/44                  ?0        #27                  ?2315               	;0	>>2315
391  595   CASE/48                   #27=      16?3                 215:'kill_connection'	;0	>>393	<<389
392  595   JMPNZ/44                  ?0        #27                  ?2329               	;0	>>2329
393  598   CASE/48                   #27=      16?3                 216:'adjust_credits'	;0	>>395	<<391
394  598   JMPNZ/44                  ?0        #27                  ?2343               	;0	>>2343
395  601   CASE/48                   #27=      16?3                 217:'reload_cache'  	;0	>>397	<<393
396  601   JMPNZ/44                  ?0        #27                  ?2358               	;0	>>2358
397  601   JMP/42                    ?0        ?2365                ?0                  	;0	>>2365	<<395
398  25    INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'json_encode'   	;1	<<36
399  25    INIT_STATIC_METHOD_CALL/113 ?0        220:'APIWrapper'     222:'runQuery'      	;1
400  25    FETCH_DIM_FUNC_ARG/93     $28=      16?2                 224:'query'         	;1
401  25    SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
402  25    DO_FCALL/60               $29=      ?0                   ?0                  	;0
403  25    SEND_VAR_NO_REF_EX/50     ?80       $29                  ?1                  	;0
404  25    DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
405  25    ECHO/40                   ?0        $30                  ?0                  	;0
406  26    GOTO/253                  ?0        ?2370                ?225                	;0
407  28    INIT_FCALL_BY_NAME/59     ?0        ?0                   226:'json_encode'   	;1	<<38
408  28    INIT_STATIC_METHOD_CALL/113 ?0        228:'APIWrapper'     230:'filterRow'     	;3
409  28    INIT_STATIC_METHOD_CALL/113 ?0        232:'APIWrapper'     234:'CC988751eeBbF271'	;0
410  28    DO_FCALL/60               $31=      ?0                   ?0                  	;0
411  28    SEND_VAR_NO_REF_EX/50     ?80       $31                  ?1                  	;0
412  28    SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
413  28    SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
414  28    DO_FCALL/60               $32=      ?0                   ?0                  	;0
415  28    SEND_VAR_NO_REF_EX/50     ?80       $32                  ?1                  	;0
416  28    DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
417  28    ECHO/40                   ?0        $33                  ?0                  	;0
418  29    GOTO/253                  ?0        ?2370                ?236                	;0
419  31    INIT_FCALL_BY_NAME/59     ?0        ?0                   237:'json_encode'   	;1	<<40
420  31    INIT_STATIC_METHOD_CALL/113 ?0        239:'APIWrapper'     241:'TableAPI'      	;6
421  31    SEND_VAL_EX/116           ?80       243:'lines'          ?1                  	;0
422  31    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
423  31    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
424  31    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
425  31    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
426  31    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
427  31    DO_FCALL/60               $34=      ?0                   ?0                  	;0
428  31    SEND_VAR_NO_REF_EX/50     ?80       $34                  ?1                  	;0
429  31    DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
430  31    ECHO/40                   ?0        $35                  ?0                  	;0
431  32    GOTO/253                  ?0        ?2370                ?244                	;0
432  34    INIT_FCALL_BY_NAME/59     ?0        ?0                   245:'json_encode'   	;1	<<42
433  34    INIT_STATIC_METHOD_CALL/113 ?0        247:'APIWrapper'     249:'TableAPI'      	;6
434  34    SEND_VAL_EX/116           ?80       251:'mags'           ?1                  	;0
435  34    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
436  34    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
437  34    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
438  34    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
439  34    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
440  34    DO_FCALL/60               $36=      ?0                   ?0                  	;0
441  34    SEND_VAR_NO_REF_EX/50     ?80       $36                  ?1                  	;0
442  34    DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
443  34    ECHO/40                   ?0        $37                  ?0                  	;0
444  35    GOTO/253                  ?0        ?2370                ?252                	;0
445  37    INIT_FCALL_BY_NAME/59     ?0        ?0                   253:'json_encode'   	;1	<<44
446  37    INIT_STATIC_METHOD_CALL/113 ?0        255:'APIWrapper'     257:'TableAPI'      	;6
447  37    SEND_VAL_EX/116           ?80       259:'enigmas'        ?1                  	;0
448  37    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
449  37    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
450  37    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
451  37    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
452  37    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
453  37    DO_FCALL/60               $38=      ?0                   ?0                  	;0
454  37    SEND_VAR_NO_REF_EX/50     ?80       $38                  ?1                  	;0
455  37    DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
456  37    ECHO/40                   ?0        $39                  ?0                  	;0
457  38    GOTO/253                  ?0        ?2370                ?260                	;0
458  40    INIT_FCALL_BY_NAME/59     ?0        ?0                   261:'json_encode'   	;1	<<46
459  40    INIT_STATIC_METHOD_CALL/113 ?0        263:'APIWrapper'     265:'TableAPI'      	;6
460  40    SEND_VAL_EX/116           ?80       267:'reg_users'      ?1                  	;0
461  40    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
462  40    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
463  40    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
464  40    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
465  40    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
466  40    DO_FCALL/60               $40=      ?0                   ?0                  	;0
467  40    SEND_VAR_NO_REF_EX/50     ?80       $40                  ?1                  	;0
468  40    DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
469  40    ECHO/40                   ?0        $41                  ?0                  	;0
470  41    GOTO/253                  ?0        ?2370                ?268                	;0
471  43    INIT_FCALL_BY_NAME/59     ?0        ?0                   269:'json_encode'   	;1	<<48
472  43    INIT_STATIC_METHOD_CALL/113 ?0        271:'APIWrapper'     273:'TableAPI'      	;6
473  43    SEND_VAL_EX/116           ?80       275:'streams'        ?1                  	;0
474  43    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
475  43    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
476  43    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
477  43    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
478  43    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
479  43    DO_FCALL/60               $42=      ?0                   ?0                  	;0
480  43    SEND_VAR_NO_REF_EX/50     ?80       $42                  ?1                  	;0
481  43    DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
482  43    ECHO/40                   ?0        $43                  ?0                  	;0
483  44    GOTO/253                  ?0        ?2370                ?276                	;0
484  46    INIT_FCALL_BY_NAME/59     ?0        ?0                   277:'json_encode'   	;1	<<50
485  46    INIT_STATIC_METHOD_CALL/113 ?0        279:'APIWrapper'     281:'TableAPI'      	;6
486  46    SEND_VAL_EX/116           ?80       283:'provider_streams' ?1                  	;0
487  46    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
488  46    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
489  46    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
490  46    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
491  46    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
492  46    DO_FCALL/60               $44=      ?0                   ?0                  	;0
493  46    SEND_VAR_NO_REF_EX/50     ?80       $44                  ?1                  	;0
494  46    DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
495  46    ECHO/40                   ?0        $45                  ?0                  	;0
496  47    GOTO/253                  ?0        ?2370                ?284                	;0
497  49    ASSIGN_DIM/147            ?35       16?2                 285:'created'       	;0	<<52
498  49    OP_DATA/137               ?0        286:true             ?0                  	;0
499  50    INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'json_encode'   	;1
500  50    INIT_STATIC_METHOD_CALL/113 ?0        289:'APIWrapper'     291:'TableAPI'      	;6
501  50    SEND_VAL_EX/116           ?80       293:'streams'        ?1                  	;0
502  50    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
503  50    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
504  50    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
505  50    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
506  50    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
507  50    DO_FCALL/60               $47=      ?0                   ?0                  	;0
508  50    SEND_VAR_NO_REF_EX/50     ?80       $47                  ?1                  	;0
509  50    DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
510  50    ECHO/40                   ?0        $48                  ?0                  	;0
511  51    GOTO/253                  ?0        ?2370                ?294                	;0
512  53    INIT_FCALL_BY_NAME/59     ?0        ?0                   295:'json_encode'   	;1	<<54
513  53    INIT_STATIC_METHOD_CALL/113 ?0        297:'APIWrapper'     299:'TableAPI'      	;6
514  53    SEND_VAL_EX/116           ?80       301:'radios'         ?1                  	;0
515  53    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
516  53    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
517  53    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
518  53    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
519  53    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
520  53    DO_FCALL/60               $49=      ?0                   ?0                  	;0
521  53    SEND_VAR_NO_REF_EX/50     ?80       $49                  ?1                  	;0
522  53    DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
523  53    ECHO/40                   ?0        $50                  ?0                  	;0
524  54    GOTO/253                  ?0        ?2370                ?302                	;0
525  56    INIT_FCALL_BY_NAME/59     ?0        ?0                   303:'json_encode'   	;1	<<56
526  56    INIT_STATIC_METHOD_CALL/113 ?0        305:'APIWrapper'     307:'TableAPI'      	;6
527  56    SEND_VAL_EX/116           ?80       309:'movies'         ?1                  	;0
528  56    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
529  56    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
530  56    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
531  56    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
532  56    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
533  56    DO_FCALL/60               $51=      ?0                   ?0                  	;0
534  56    SEND_VAR_NO_REF_EX/50     ?80       $51                  ?1                  	;0
535  56    DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
536  56    ECHO/40                   ?0        $52                  ?0                  	;0
537  57    GOTO/253                  ?0        ?2370                ?310                	;0
538  59    INIT_FCALL_BY_NAME/59     ?0        ?0                   311:'json_encode'   	;1	<<58
539  59    INIT_STATIC_METHOD_CALL/113 ?0        313:'APIWrapper'     315:'TableAPI'      	;6
540  59    SEND_VAL_EX/116           ?80       317:'series'         ?1                  	;0
541  59    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
542  59    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
543  59    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
544  59    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
545  59    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
546  59    DO_FCALL/60               $53=      ?0                   ?0                  	;0
547  59    SEND_VAR_NO_REF_EX/50     ?80       $53                  ?1                  	;0
548  59    DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
549  59    ECHO/40                   ?0        $54                  ?0                  	;0
550  60    GOTO/253                  ?0        ?2370                ?318                	;0
551  62    INIT_FCALL_BY_NAME/59     ?0        ?0                   319:'json_encode'   	;1	<<60
552  62    INIT_STATIC_METHOD_CALL/113 ?0        321:'APIWrapper'     323:'TableAPI'      	;6
553  62    SEND_VAL_EX/116           ?80       325:'episodes'       ?1                  	;0
554  62    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
555  62    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
556  62    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
557  62    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
558  62    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
559  62    DO_FCALL/60               $55=      ?0                   ?0                  	;0
560  62    SEND_VAR_NO_REF_EX/50     ?80       $55                  ?1                  	;0
561  62    DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
562  62    ECHO/40                   ?0        $56                  ?0                  	;0
563  63    GOTO/253                  ?0        ?2370                ?326                	;0
564  65    INIT_FCALL_BY_NAME/59     ?0        ?0                   327:'json_encode'   	;1	<<62
565  65    INIT_STATIC_METHOD_CALL/113 ?0        329:'APIWrapper'     331:'TableAPI'      	;6
566  65    SEND_VAL_EX/116           ?80       333:'line_activity'  ?1                  	;0
567  65    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
568  65    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
569  65    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
570  65    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
571  65    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
572  65    DO_FCALL/60               $57=      ?0                   ?0                  	;0
573  65    SEND_VAR_NO_REF_EX/50     ?80       $57                  ?1                  	;0
574  65    DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
575  65    ECHO/40                   ?0        $58                  ?0                  	;0
576  66    GOTO/253                  ?0        ?2370                ?334                	;0
577  68    INIT_FCALL_BY_NAME/59     ?0        ?0                   335:'json_encode'   	;1	<<64
578  68    INIT_STATIC_METHOD_CALL/113 ?0        337:'APIWrapper'     339:'TableAPI'      	;6
579  68    SEND_VAL_EX/116           ?80       341:'live_connections' ?1                  	;0
580  68    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
581  68    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
582  68    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
583  68    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
584  68    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
585  68    DO_FCALL/60               $59=      ?0                   ?0                  	;0
586  68    SEND_VAR_NO_REF_EX/50     ?80       $59                  ?1                  	;0
587  68    DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
588  68    ECHO/40                   ?0        $60                  ?0                  	;0
589  69    GOTO/253                  ?0        ?2370                ?342                	;0
590  71    INIT_FCALL_BY_NAME/59     ?0        ?0                   343:'json_encode'   	;1	<<66
591  71    INIT_STATIC_METHOD_CALL/113 ?0        345:'APIWrapper'     347:'TableAPI'      	;6
592  71    SEND_VAL_EX/116           ?80       349:'credits_log'    ?1                  	;0
593  71    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
594  71    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
595  71    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
596  71    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
597  71    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
598  71    DO_FCALL/60               $61=      ?0                   ?0                  	;0
599  71    SEND_VAR_NO_REF_EX/50     ?80       $61                  ?1                  	;0
600  71    DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
601  71    ECHO/40                   ?0        $62                  ?0                  	;0
602  72    GOTO/253                  ?0        ?2370                ?350                	;0
603  74    INIT_FCALL_BY_NAME/59     ?0        ?0                   351:'json_encode'   	;1	<<68
604  74    INIT_STATIC_METHOD_CALL/113 ?0        353:'APIWrapper'     355:'TableAPI'      	;6
605  74    SEND_VAL_EX/116           ?80       357:'client_logs'    ?1                  	;0
606  74    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
607  74    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
608  74    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
609  74    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
610  74    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
611  74    DO_FCALL/60               $63=      ?0                   ?0                  	;0
612  74    SEND_VAR_NO_REF_EX/50     ?80       $63                  ?1                  	;0
613  74    DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
614  74    ECHO/40                   ?0        $64                  ?0                  	;0
615  75    GOTO/253                  ?0        ?2370                ?358                	;0
616  77    INIT_FCALL_BY_NAME/59     ?0        ?0                   359:'json_encode'   	;1	<<70
617  77    INIT_STATIC_METHOD_CALL/113 ?0        361:'APIWrapper'     363:'TableAPI'      	;6
618  77    SEND_VAL_EX/116           ?80       365:'reg_user_logs'  ?1                  	;0
619  77    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
620  77    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
621  77    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
622  77    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
623  77    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
624  77    DO_FCALL/60               $65=      ?0                   ?0                  	;0
625  77    SEND_VAR_NO_REF_EX/50     ?80       $65                  ?1                  	;0
626  77    DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
627  77    ECHO/40                   ?0        $66                  ?0                  	;0
628  78    GOTO/253                  ?0        ?2370                ?366                	;0
629  80    INIT_FCALL_BY_NAME/59     ?0        ?0                   367:'json_encode'   	;1	<<72
630  80    INIT_STATIC_METHOD_CALL/113 ?0        369:'APIWrapper'     371:'TableAPI'      	;6
631  80    SEND_VAL_EX/116           ?80       373:'stream_errors'  ?1                  	;0
632  80    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
633  80    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
634  80    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
635  80    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
636  80    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
637  80    DO_FCALL/60               $67=      ?0                   ?0                  	;0
638  80    SEND_VAR_NO_REF_EX/50     ?80       $67                  ?1                  	;0
639  80    DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
640  80    ECHO/40                   ?0        $68                  ?0                  	;0
641  81    GOTO/253                  ?0        ?2370                ?374                	;0
642  83    INIT_FCALL_BY_NAME/59     ?0        ?0                   375:'json_encode'   	;1	<<74
643  83    INIT_STATIC_METHOD_CALL/113 ?0        377:'APIWrapper'     379:'TableAPI'      	;6
644  83    SEND_VAL_EX/116           ?80       381:'watch_output'   ?1                  	;0
645  83    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
646  83    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
647  83    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
648  83    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
649  83    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
650  83    DO_FCALL/60               $69=      ?0                   ?0                  	;0
651  83    SEND_VAR_NO_REF_EX/50     ?80       $69                  ?1                  	;0
652  83    DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
653  83    ECHO/40                   ?0        $70                  ?0                  	;0
654  84    GOTO/253                  ?0        ?2370                ?382                	;0
655  86    INIT_FCALL_BY_NAME/59     ?0        ?0                   383:'json_encode'   	;1	<<76
656  86    INIT_STATIC_METHOD_CALL/113 ?0        385:'APIWrapper'     387:'TableAPI'      	;6
657  86    SEND_VAL_EX/116           ?80       389:'mysql_syslog'   ?1                  	;0
658  86    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
659  86    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
660  86    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
661  86    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
662  86    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
663  86    DO_FCALL/60               $71=      ?0                   ?0                  	;0
664  86    SEND_VAR_NO_REF_EX/50     ?80       $71                  ?1                  	;0
665  86    DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
666  86    ECHO/40                   ?0        $72                  ?0                  	;0
667  87    GOTO/253                  ?0        ?2370                ?390                	;0
668  89    INIT_FCALL_BY_NAME/59     ?0        ?0                   391:'json_encode'   	;1	<<78
669  89    INIT_STATIC_METHOD_CALL/113 ?0        393:'APIWrapper'     395:'TableAPI'      	;6
670  89    SEND_VAL_EX/116           ?80       397:'login_logs'     ?1                  	;0
671  89    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
672  89    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
673  89    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
674  89    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
675  89    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
676  89    DO_FCALL/60               $73=      ?0                   ?0                  	;0
677  89    SEND_VAR_NO_REF_EX/50     ?80       $73                  ?1                  	;0
678  89    DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
679  89    ECHO/40                   ?0        $74                  ?0                  	;0
680  90    GOTO/253                  ?0        ?2370                ?398                	;0
681  92    INIT_FCALL_BY_NAME/59     ?0        ?0                   399:'json_encode'   	;1	<<80
682  92    INIT_STATIC_METHOD_CALL/113 ?0        401:'APIWrapper'     403:'TableAPI'      	;6
683  92    SEND_VAL_EX/116           ?80       405:'restream_logs'  ?1                  	;0
684  92    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
685  92    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
686  92    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
687  92    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
688  92    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
689  92    DO_FCALL/60               $75=      ?0                   ?0                  	;0
690  92    SEND_VAR_NO_REF_EX/50     ?80       $75                  ?1                  	;0
691  92    DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
692  92    ECHO/40                   ?0        $76                  ?0                  	;0
693  93    GOTO/253                  ?0        ?2370                ?406                	;0
694  95    INIT_FCALL_BY_NAME/59     ?0        ?0                   407:'json_encode'   	;1	<<82
695  95    INIT_STATIC_METHOD_CALL/113 ?0        409:'APIWrapper'     411:'TableAPI'      	;6
696  95    SEND_VAL_EX/116           ?80       413:'mag_events'     ?1                  	;0
697  95    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
698  95    SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
699  95    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
700  95    SEND_VAR_EX/66            ?144      16?0                 ?5                  	;0
701  95    SEND_VAR_EX/66            ?160      16?4                 ?6                  	;0
702  95    DO_FCALL/60               $77=      ?0                   ?0                  	;0
703  95    SEND_VAR_NO_REF_EX/50     ?80       $77                  ?1                  	;0
704  95    DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
705  95    ECHO/40                   ?0        $78                  ?0                  	;0
706  96    GOTO/253                  ?0        ?2370                ?414                	;0
707  98    INIT_FCALL_BY_NAME/59     ?0        ?0                   415:'json_encode'   	;1	<<84
708  98    INIT_STATIC_METHOD_CALL/113 ?0        417:'APIWrapper'     419:'filterRow'     	;3
709  98    INIT_STATIC_METHOD_CALL/113 ?0        421:'APIWrapper'     423:'getLine'       	;1
710  98    FETCH_DIM_FUNC_ARG/93     $79=      16?2                 425:'id'            	;1
711  98    SEND_VAR_EX/66            ?80       $79                  ?1                  	;0
712  98    DO_FCALL/60               $80=      ?0                   ?0                  	;0
713  98    SEND_VAR_NO_REF_EX/50     ?80       $80                  ?1                  	;0
714  98    SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
715  98    SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
716  98    DO_FCALL/60               $81=      ?0                   ?0                  	;0
717  98    SEND_VAR_NO_REF_EX/50     ?80       $81                  ?1                  	;0
718  98    DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
719  98    ECHO/40                   ?0        $82                  ?0                  	;0
720  99    GOTO/253                  ?0        ?2370                ?426                	;0
721  101   INIT_FCALL_BY_NAME/59     ?0        ?0                   427:'json_encode'   	;1	<<86
722  101   INIT_STATIC_METHOD_CALL/113 ?0        429:'APIWrapper'     431:'createLine'    	;1
723  101   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
724  101   DO_FCALL/60               $83=      ?0                   ?0                  	;0
725  101   SEND_VAR_NO_REF_EX/50     ?80       $83                  ?1                  	;0
726  101   DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
727  101   ECHO/40                   ?0        $84                  ?0                  	;0
728  102   GOTO/253                  ?0        ?2370                ?433                	;0
729  104   FETCH_DIM_R/81            $85=      16?2                 434:'id'            	;0	<<88
730  104   ASSIGN/38                 ?75       16?7                 $85                 	;0
731  105   UNSET_DIM/75              ?0        16?2                 435:'id'            	;0
732  106   INIT_FCALL_BY_NAME/59     ?0        ?0                   436:'json_encode'   	;1
733  106   INIT_STATIC_METHOD_CALL/113 ?0        438:'APIWrapper'     440:'editLine'      	;2
734  106   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
735  106   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
736  106   DO_FCALL/60               $87=      ?0                   ?0                  	;0
737  106   SEND_VAR_NO_REF_EX/50     ?80       $87                  ?1                  	;0
738  106   DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
739  106   ECHO/40                   ?0        $88                  ?0                  	;0
740  107   GOTO/253                  ?0        ?2370                ?442                	;0
741  109   INIT_FCALL_BY_NAME/59     ?0        ?0                   443:'json_encode'   	;1	<<90
742  109   INIT_STATIC_METHOD_CALL/113 ?0        445:'APIWrapper'     447:'Ca81C8F24c099495'	;1
743  109   FETCH_DIM_FUNC_ARG/93     $89=      16?2                 449:'id'            	;1
744  109   SEND_VAR_EX/66            ?80       $89                  ?1                  	;0
745  109   DO_FCALL/60               $90=      ?0                   ?0                  	;0
746  109   SEND_VAR_NO_REF_EX/50     ?80       $90                  ?1                  	;0
747  109   DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
748  109   ECHO/40                   ?0        $91                  ?0                  	;0
749  110   GOTO/253                  ?0        ?2370                ?450                	;0
750  112   INIT_FCALL_BY_NAME/59     ?0        ?0                   451:'json_encode'   	;1	<<92
751  112   INIT_STATIC_METHOD_CALL/113 ?0        453:'APIWrapper'     455:'disableLine'   	;1
752  112   FETCH_DIM_FUNC_ARG/93     $92=      16?2                 457:'id'            	;1
753  112   SEND_VAR_EX/66            ?80       $92                  ?1                  	;0
754  112   DO_FCALL/60               $93=      ?0                   ?0                  	;0
755  112   SEND_VAR_NO_REF_EX/50     ?80       $93                  ?1                  	;0
756  112   DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
757  112   ECHO/40                   ?0        $94                  ?0                  	;0
758  113   GOTO/253                  ?0        ?2370                ?458                	;0
759  115   INIT_FCALL_BY_NAME/59     ?0        ?0                   459:'json_encode'   	;1	<<94
760  115   INIT_STATIC_METHOD_CALL/113 ?0        461:'APIWrapper'     463:'enableLine'    	;1
761  115   FETCH_DIM_FUNC_ARG/93     $95=      16?2                 465:'id'            	;1
762  115   SEND_VAR_EX/66            ?80       $95                  ?1                  	;0
763  115   DO_FCALL/60               $96=      ?0                   ?0                  	;0
764  115   SEND_VAR_NO_REF_EX/50     ?80       $96                  ?1                  	;0
765  115   DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
766  115   ECHO/40                   ?0        $97                  ?0                  	;0
767  116   GOTO/253                  ?0        ?2370                ?466                	;0
768  118   INIT_FCALL_BY_NAME/59     ?0        ?0                   467:'json_encode'   	;1	<<96
769  118   INIT_STATIC_METHOD_CALL/113 ?0        469:'APIWrapper'     471:'unbanLine'     	;1
770  118   FETCH_DIM_FUNC_ARG/93     $98=      16?2                 473:'id'            	;1
771  118   SEND_VAR_EX/66            ?80       $98                  ?1                  	;0
772  118   DO_FCALL/60               $99=      ?0                   ?0                  	;0
773  118   SEND_VAR_NO_REF_EX/50     ?80       $99                  ?1                  	;0
774  118   DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
775  118   ECHO/40                   ?0        $100                 ?0                  	;0
776  119   GOTO/253                  ?0        ?2370                ?474                	;0
777  121   INIT_FCALL_BY_NAME/59     ?0        ?0                   475:'json_encode'   	;1	<<98
778  121   INIT_STATIC_METHOD_CALL/113 ?0        477:'APIWrapper'     479:'banLine'       	;1
779  121   FETCH_DIM_FUNC_ARG/93     $101=     16?2                 481:'id'            	;1
780  121   SEND_VAR_EX/66            ?80       $101                 ?1                  	;0
781  121   DO_FCALL/60               $102=     ?0                   ?0                  	;0
782  121   SEND_VAR_NO_REF_EX/50     ?80       $102                 ?1                  	;0
783  121   DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
784  121   ECHO/40                   ?0        $103                 ?0                  	;0
785  122   GOTO/253                  ?0        ?2370                ?482                	;0
786  124   INIT_FCALL_BY_NAME/59     ?0        ?0                   483:'json_encode'   	;1	<<100
787  124   INIT_STATIC_METHOD_CALL/113 ?0        485:'APIWrapper'     487:'filterRow'     	;3
788  124   INIT_STATIC_METHOD_CALL/113 ?0        489:'APIWrapper'     491:'B349523ecb058D86'	;1
789  124   FETCH_DIM_FUNC_ARG/93     $104=     16?2                 493:'id'            	;1
790  124   SEND_VAR_EX/66            ?80       $104                 ?1                  	;0
791  124   DO_FCALL/60               $105=     ?0                   ?0                  	;0
792  124   SEND_VAR_NO_REF_EX/50     ?80       $105                 ?1                  	;0
793  124   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
794  124   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
795  124   DO_FCALL/60               $106=     ?0                   ?0                  	;0
796  124   SEND_VAR_NO_REF_EX/50     ?80       $106                 ?1                  	;0
797  124   DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
798  124   ECHO/40                   ?0        $107                 ?0                  	;0
799  125   GOTO/253                  ?0        ?2370                ?494                	;0
800  127   INIT_FCALL_BY_NAME/59     ?0        ?0                   495:'json_encode'   	;1	<<102
801  127   INIT_STATIC_METHOD_CALL/113 ?0        497:'APIWrapper'     499:'createUser'    	;1
802  127   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
803  127   DO_FCALL/60               $108=     ?0                   ?0                  	;0
804  127   SEND_VAR_NO_REF_EX/50     ?80       $108                 ?1                  	;0
805  127   DO_FCALL_BY_NAME/131      $109=     ?0                   ?0                  	;0
806  127   ECHO/40                   ?0        $109                 ?0                  	;0
807  128   GOTO/253                  ?0        ?2370                ?501                	;0
808  130   FETCH_DIM_R/81            $110=     16?2                 502:'id'            	;0	<<104
809  130   ASSIGN/38                 ?100      16?7                 $110                	;0
810  131   UNSET_DIM/75              ?0        16?2                 503:'id'            	;0
811  132   INIT_FCALL_BY_NAME/59     ?0        ?0                   504:'json_encode'   	;1
812  132   INIT_STATIC_METHOD_CALL/113 ?0        506:'APIWrapper'     508:'editUser'      	;2
813  132   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
814  132   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
815  132   DO_FCALL/60               $112=     ?0                   ?0                  	;0
816  132   SEND_VAR_NO_REF_EX/50     ?80       $112                 ?1                  	;0
817  132   DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
818  132   ECHO/40                   ?0        $113                 ?0                  	;0
819  133   GOTO/253                  ?0        ?2370                ?510                	;0
820  135   INIT_FCALL_BY_NAME/59     ?0        ?0                   511:'json_encode'   	;1	<<106
821  135   INIT_STATIC_METHOD_CALL/113 ?0        513:'APIWrapper'     515:'D8C5152aAa448BdD'	;1
822  135   FETCH_DIM_FUNC_ARG/93     $114=     16?2                 517:'id'            	;1
823  135   SEND_VAR_EX/66            ?80       $114                 ?1                  	;0
824  135   DO_FCALL/60               $115=     ?0                   ?0                  	;0
825  135   SEND_VAR_NO_REF_EX/50     ?80       $115                 ?1                  	;0
826  135   DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
827  135   ECHO/40                   ?0        $116                 ?0                  	;0
828  136   GOTO/253                  ?0        ?2370                ?518                	;0
829  138   INIT_FCALL_BY_NAME/59     ?0        ?0                   519:'json_encode'   	;1	<<108
830  138   INIT_STATIC_METHOD_CALL/113 ?0        521:'APIWrapper'     523:'disableUser'   	;1
831  138   FETCH_DIM_FUNC_ARG/93     $117=     16?2                 525:'id'            	;1
832  138   SEND_VAR_EX/66            ?80       $117                 ?1                  	;0
833  138   DO_FCALL/60               $118=     ?0                   ?0                  	;0
834  138   SEND_VAR_NO_REF_EX/50     ?80       $118                 ?1                  	;0
835  138   DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
836  138   ECHO/40                   ?0        $119                 ?0                  	;0
837  139   GOTO/253                  ?0        ?2370                ?526                	;0
838  141   INIT_FCALL_BY_NAME/59     ?0        ?0                   527:'json_encode'   	;1	<<110
839  141   INIT_STATIC_METHOD_CALL/113 ?0        529:'APIWrapper'     531:'enableUser'    	;1
840  141   FETCH_DIM_FUNC_ARG/93     $120=     16?2                 533:'id'            	;1
841  141   SEND_VAR_EX/66            ?80       $120                 ?1                  	;0
842  141   DO_FCALL/60               $121=     ?0                   ?0                  	;0
843  141   SEND_VAR_NO_REF_EX/50     ?80       $121                 ?1                  	;0
844  141   DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
845  141   ECHO/40                   ?0        $122                 ?0                  	;0
846  142   GOTO/253                  ?0        ?2370                ?534                	;0
847  144   INIT_FCALL_BY_NAME/59     ?0        ?0                   535:'json_encode'   	;1	<<112
848  144   INIT_STATIC_METHOD_CALL/113 ?0        537:'APIWrapper'     539:'filterRow'     	;3
849  144   INIT_STATIC_METHOD_CALL/113 ?0        541:'APIWrapper'     543:'d6BCc99E8BafA737'	;1
850  144   FETCH_DIM_FUNC_ARG/93     $123=     16?2                 545:'id'            	;1
851  144   SEND_VAR_EX/66            ?80       $123                 ?1                  	;0
852  144   DO_FCALL/60               $124=     ?0                   ?0                  	;0
853  144   SEND_VAR_NO_REF_EX/50     ?80       $124                 ?1                  	;0
854  144   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
855  144   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
856  144   DO_FCALL/60               $125=     ?0                   ?0                  	;0
857  144   SEND_VAR_NO_REF_EX/50     ?80       $125                 ?1                  	;0
858  144   DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
859  144   ECHO/40                   ?0        $126                 ?0                  	;0
860  145   GOTO/253                  ?0        ?2370                ?546                	;0
861  147   INIT_FCALL_BY_NAME/59     ?0        ?0                   547:'json_encode'   	;1	<<114
862  147   INIT_STATIC_METHOD_CALL/113 ?0        549:'APIWrapper'     551:'createMAG'     	;1
863  147   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
864  147   DO_FCALL/60               $127=     ?0                   ?0                  	;0
865  147   SEND_VAR_NO_REF_EX/50     ?80       $127                 ?1                  	;0
866  147   DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
867  147   ECHO/40                   ?0        $128                 ?0                  	;0
868  148   GOTO/253                  ?0        ?2370                ?553                	;0
869  150   FETCH_DIM_R/81            $129=     16?2                 554:'id'            	;0	<<116
870  150   ASSIGN/38                 ?119      16?7                 $129                	;0
871  151   UNSET_DIM/75              ?0        16?2                 555:'id'            	;0
872  152   INIT_FCALL_BY_NAME/59     ?0        ?0                   556:'json_encode'   	;1
873  152   INIT_STATIC_METHOD_CALL/113 ?0        558:'APIWrapper'     560:'editMAG'       	;2
874  152   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
875  152   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
876  152   DO_FCALL/60               $131=     ?0                   ?0                  	;0
877  152   SEND_VAR_NO_REF_EX/50     ?80       $131                 ?1                  	;0
878  152   DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
879  152   ECHO/40                   ?0        $132                 ?0                  	;0
880  153   GOTO/253                  ?0        ?2370                ?562                	;0
881  155   INIT_FCALL_BY_NAME/59     ?0        ?0                   563:'json_encode'   	;1	<<118
882  155   INIT_STATIC_METHOD_CALL/113 ?0        565:'APIWrapper'     567:'b3e7cdF7AC99aB57'	;1
883  155   FETCH_DIM_FUNC_ARG/93     $133=     16?2                 569:'id'            	;1
884  155   SEND_VAR_EX/66            ?80       $133                 ?1                  	;0
885  155   DO_FCALL/60               $134=     ?0                   ?0                  	;0
886  155   SEND_VAR_NO_REF_EX/50     ?80       $134                 ?1                  	;0
887  155   DO_FCALL_BY_NAME/131      $135=     ?0                   ?0                  	;0
888  155   ECHO/40                   ?0        $135                 ?0                  	;0
889  156   GOTO/253                  ?0        ?2370                ?570                	;0
890  158   INIT_FCALL_BY_NAME/59     ?0        ?0                   571:'json_encode'   	;1	<<120
891  158   INIT_STATIC_METHOD_CALL/113 ?0        573:'APIWrapper'     575:'disableMAG'    	;1
892  158   FETCH_DIM_FUNC_ARG/93     $136=     16?2                 577:'id'            	;1
893  158   SEND_VAR_EX/66            ?80       $136                 ?1                  	;0
894  158   DO_FCALL/60               $137=     ?0                   ?0                  	;0
895  158   SEND_VAR_NO_REF_EX/50     ?80       $137                 ?1                  	;0
896  158   DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
897  158   ECHO/40                   ?0        $138                 ?0                  	;0
898  159   GOTO/253                  ?0        ?2370                ?578                	;0
899  161   INIT_FCALL_BY_NAME/59     ?0        ?0                   579:'json_encode'   	;1	<<122
900  161   INIT_STATIC_METHOD_CALL/113 ?0        581:'APIWrapper'     583:'enableMAG'     	;1
901  161   FETCH_DIM_FUNC_ARG/93     $139=     16?2                 585:'id'            	;1
902  161   SEND_VAR_EX/66            ?80       $139                 ?1                  	;0
903  161   DO_FCALL/60               $140=     ?0                   ?0                  	;0
904  161   SEND_VAR_NO_REF_EX/50     ?80       $140                 ?1                  	;0
905  161   DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
906  161   ECHO/40                   ?0        $141                 ?0                  	;0
907  162   GOTO/253                  ?0        ?2370                ?586                	;0
908  164   INIT_FCALL_BY_NAME/59     ?0        ?0                   587:'json_encode'   	;1	<<124
909  164   INIT_STATIC_METHOD_CALL/113 ?0        589:'APIWrapper'     591:'unbanMAG'      	;1
910  164   FETCH_DIM_FUNC_ARG/93     $142=     16?2                 593:'id'            	;1
911  164   SEND_VAR_EX/66            ?80       $142                 ?1                  	;0
912  164   DO_FCALL/60               $143=     ?0                   ?0                  	;0
913  164   SEND_VAR_NO_REF_EX/50     ?80       $143                 ?1                  	;0
914  164   DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
915  164   ECHO/40                   ?0        $144                 ?0                  	;0
916  165   GOTO/253                  ?0        ?2370                ?594                	;0
917  167   INIT_FCALL_BY_NAME/59     ?0        ?0                   595:'json_encode'   	;1	<<126
918  167   INIT_STATIC_METHOD_CALL/113 ?0        597:'APIWrapper'     599:'banMAG'        	;1
919  167   FETCH_DIM_FUNC_ARG/93     $145=     16?2                 601:'id'            	;1
920  167   SEND_VAR_EX/66            ?80       $145                 ?1                  	;0
921  167   DO_FCALL/60               $146=     ?0                   ?0                  	;0
922  167   SEND_VAR_NO_REF_EX/50     ?80       $146                 ?1                  	;0
923  167   DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
924  167   ECHO/40                   ?0        $147                 ?0                  	;0
925  168   GOTO/253                  ?0        ?2370                ?602                	;0
926  170   INIT_FCALL_BY_NAME/59     ?0        ?0                   603:'json_encode'   	;1	<<128
927  170   INIT_STATIC_METHOD_CALL/113 ?0        605:'APIWrapper'     607:'convertMAG'    	;1
928  170   FETCH_DIM_FUNC_ARG/93     $148=     16?2                 609:'id'            	;1
929  170   SEND_VAR_EX/66            ?80       $148                 ?1                  	;0
930  170   DO_FCALL/60               $149=     ?0                   ?0                  	;0
931  170   SEND_VAR_NO_REF_EX/50     ?80       $149                 ?1                  	;0
932  170   DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
933  170   ECHO/40                   ?0        $150                 ?0                  	;0
934  171   GOTO/253                  ?0        ?2370                ?610                	;0
935  173   INIT_FCALL_BY_NAME/59     ?0        ?0                   611:'json_encode'   	;1	<<130
936  173   INIT_STATIC_METHOD_CALL/113 ?0        613:'APIWrapper'     615:'filterRow'     	;3
937  173   INIT_STATIC_METHOD_CALL/113 ?0        617:'APIWrapper'     619:'AB9DD80290f141dE'	;1
938  173   FETCH_DIM_FUNC_ARG/93     $151=     16?2                 621:'id'            	;1
939  173   SEND_VAR_EX/66            ?80       $151                 ?1                  	;0
940  173   DO_FCALL/60               $152=     ?0                   ?0                  	;0
941  173   SEND_VAR_NO_REF_EX/50     ?80       $152                 ?1                  	;0
942  173   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
943  173   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
944  173   DO_FCALL/60               $153=     ?0                   ?0                  	;0
945  173   SEND_VAR_NO_REF_EX/50     ?80       $153                 ?1                  	;0
946  173   DO_FCALL_BY_NAME/131      $154=     ?0                   ?0                  	;0
947  173   ECHO/40                   ?0        $154                 ?0                  	;0
948  174   GOTO/253                  ?0        ?2370                ?622                	;0
949  176   INIT_FCALL_BY_NAME/59     ?0        ?0                   623:'json_encode'   	;1	<<132
950  176   INIT_STATIC_METHOD_CALL/113 ?0        625:'APIWrapper'     627:'createEnigma'  	;1
951  176   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
952  176   DO_FCALL/60               $155=     ?0                   ?0                  	;0
953  176   SEND_VAR_NO_REF_EX/50     ?80       $155                 ?1                  	;0
954  176   DO_FCALL_BY_NAME/131      $156=     ?0                   ?0                  	;0
955  176   ECHO/40                   ?0        $156                 ?0                  	;0
956  177   GOTO/253                  ?0        ?2370                ?629                	;0
957  179   FETCH_DIM_R/81            $157=     16?2                 630:'id'            	;0	<<134
958  179   ASSIGN/38                 ?147      16?7                 $157                	;0
959  180   UNSET_DIM/75              ?0        16?2                 631:'id'            	;0
960  181   INIT_FCALL_BY_NAME/59     ?0        ?0                   632:'json_encode'   	;1
961  181   INIT_STATIC_METHOD_CALL/113 ?0        634:'APIWrapper'     636:'editEnigma'    	;2
962  181   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
963  181   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
964  181   DO_FCALL/60               $159=     ?0                   ?0                  	;0
965  181   SEND_VAR_NO_REF_EX/50     ?80       $159                 ?1                  	;0
966  181   DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
967  181   ECHO/40                   ?0        $160                 ?0                  	;0
968  182   GOTO/253                  ?0        ?2370                ?638                	;0
969  184   INIT_FCALL_BY_NAME/59     ?0        ?0                   639:'json_encode'   	;1	<<136
970  184   INIT_STATIC_METHOD_CALL/113 ?0        641:'APIWrapper'     643:'ad38e07a7561ACf3'	;1
971  184   FETCH_DIM_FUNC_ARG/93     $161=     16?2                 645:'id'            	;1
972  184   SEND_VAR_EX/66            ?80       $161                 ?1                  	;0
973  184   DO_FCALL/60               $162=     ?0                   ?0                  	;0
974  184   SEND_VAR_NO_REF_EX/50     ?80       $162                 ?1                  	;0
975  184   DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
976  184   ECHO/40                   ?0        $163                 ?0                  	;0
977  185   GOTO/253                  ?0        ?2370                ?646                	;0
978  187   INIT_FCALL_BY_NAME/59     ?0        ?0                   647:'json_encode'   	;1	<<138
979  187   INIT_STATIC_METHOD_CALL/113 ?0        649:'APIWrapper'     651:'disableEnigma' 	;1
980  187   FETCH_DIM_FUNC_ARG/93     $164=     16?2                 653:'id'            	;1
981  187   SEND_VAR_EX/66            ?80       $164                 ?1                  	;0
982  187   DO_FCALL/60               $165=     ?0                   ?0                  	;0
983  187   SEND_VAR_NO_REF_EX/50     ?80       $165                 ?1                  	;0
984  187   DO_FCALL_BY_NAME/131      $166=     ?0                   ?0                  	;0
985  187   ECHO/40                   ?0        $166                 ?0                  	;0
986  188   GOTO/253                  ?0        ?2370                ?654                	;0
987  190   INIT_FCALL_BY_NAME/59     ?0        ?0                   655:'json_encode'   	;1	<<140
988  190   INIT_STATIC_METHOD_CALL/113 ?0        657:'APIWrapper'     659:'enableEnigma'  	;1
989  190   FETCH_DIM_FUNC_ARG/93     $167=     16?2                 661:'id'            	;1
990  190   SEND_VAR_EX/66            ?80       $167                 ?1                  	;0
991  190   DO_FCALL/60               $168=     ?0                   ?0                  	;0
992  190   SEND_VAR_NO_REF_EX/50     ?80       $168                 ?1                  	;0
993  190   DO_FCALL_BY_NAME/131      $169=     ?0                   ?0                  	;0
994  190   ECHO/40                   ?0        $169                 ?0                  	;0
995  191   GOTO/253                  ?0        ?2370                ?662                	;0
996  193   INIT_FCALL_BY_NAME/59     ?0        ?0                   663:'json_encode'   	;1	<<142
997  193   INIT_STATIC_METHOD_CALL/113 ?0        665:'APIWrapper'     667:'unbanEnigma'   	;1
998  193   FETCH_DIM_FUNC_ARG/93     $170=     16?2                 669:'id'            	;1
999  193   SEND_VAR_EX/66            ?80       $170                 ?1                  	;0
1000 193   DO_FCALL/60               $171=     ?0                   ?0                  	;0
1001 193   SEND_VAR_NO_REF_EX/50     ?80       $171                 ?1                  	;0
1002 193   DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
1003 193   ECHO/40                   ?0        $172                 ?0                  	;0
1004 194   GOTO/253                  ?0        ?2370                ?670                	;0
1005 196   INIT_FCALL_BY_NAME/59     ?0        ?0                   671:'json_encode'   	;1	<<144
1006 196   INIT_STATIC_METHOD_CALL/113 ?0        673:'APIWrapper'     675:'banEnigma'     	;1
1007 196   FETCH_DIM_FUNC_ARG/93     $173=     16?2                 677:'id'            	;1
1008 196   SEND_VAR_EX/66            ?80       $173                 ?1                  	;0
1009 196   DO_FCALL/60               $174=     ?0                   ?0                  	;0
1010 196   SEND_VAR_NO_REF_EX/50     ?80       $174                 ?1                  	;0
1011 196   DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
1012 196   ECHO/40                   ?0        $175                 ?0                  	;0
1013 197   GOTO/253                  ?0        ?2370                ?678                	;0
1014 199   INIT_FCALL_BY_NAME/59     ?0        ?0                   679:'json_encode'   	;1	<<146
1015 199   INIT_STATIC_METHOD_CALL/113 ?0        681:'APIWrapper'     683:'convertEnigma' 	;1
1016 199   FETCH_DIM_FUNC_ARG/93     $176=     16?2                 685:'id'            	;1
1017 199   SEND_VAR_EX/66            ?80       $176                 ?1                  	;0
1018 199   DO_FCALL/60               $177=     ?0                   ?0                  	;0
1019 199   SEND_VAR_NO_REF_EX/50     ?80       $177                 ?1                  	;0
1020 199   DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
1021 199   ECHO/40                   ?0        $178                 ?0                  	;0
1022 200   GOTO/253                  ?0        ?2370                ?686                	;0
1023 202   INIT_FCALL_BY_NAME/59     ?0        ?0                   687:'json_encode'   	;1	<<148
1024 202   INIT_STATIC_METHOD_CALL/113 ?0        689:'APIWrapper'     691:'filterRows'    	;3
1025 202   INIT_STATIC_METHOD_CALL/113 ?0        693:'APIWrapper'     695:'de27bb48f7bfF12d'	;0
1026 202   DO_FCALL/60               $179=     ?0                   ?0                  	;0
1027 202   SEND_VAR_NO_REF_EX/50     ?80       $179                 ?1                  	;0
1028 202   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1029 202   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1030 202   DO_FCALL/60               $180=     ?0                   ?0                  	;0
1031 202   SEND_VAR_NO_REF_EX/50     ?80       $180                 ?1                  	;0
1032 202   DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
1033 202   ECHO/40                   ?0        $181                 ?0                  	;0
1034 203   GOTO/253                  ?0        ?2370                ?697                	;0
1035 205   INIT_FCALL_BY_NAME/59     ?0        ?0                   698:'json_encode'   	;1	<<150
1036 205   INIT_STATIC_METHOD_CALL/113 ?0        700:'APIWrapper'     702:'filterRow'     	;3
1037 205   INIT_STATIC_METHOD_CALL/113 ?0        704:'APIWrapper'     706:'a64bA92a18b425Ed'	;1
1038 205   FETCH_DIM_FUNC_ARG/93     $182=     16?2                 708:'id'            	;1
1039 205   SEND_VAR_EX/66            ?80       $182                 ?1                  	;0
1040 205   DO_FCALL/60               $183=     ?0                   ?0                  	;0
1041 205   SEND_VAR_NO_REF_EX/50     ?80       $183                 ?1                  	;0
1042 205   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1043 205   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1044 205   DO_FCALL/60               $184=     ?0                   ?0                  	;0
1045 205   SEND_VAR_NO_REF_EX/50     ?80       $184                 ?1                  	;0
1046 205   DO_FCALL_BY_NAME/131      $185=     ?0                   ?0                  	;0
1047 205   ECHO/40                   ?0        $185                 ?0                  	;0
1048 206   GOTO/253                  ?0        ?2370                ?709                	;0
1049 208   INIT_FCALL_BY_NAME/59     ?0        ?0                   710:'json_encode'   	;1	<<152
1050 208   INIT_STATIC_METHOD_CALL/113 ?0        712:'APIWrapper'     714:'createBouquet' 	;1
1051 208   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1052 208   DO_FCALL/60               $186=     ?0                   ?0                  	;0
1053 208   SEND_VAR_NO_REF_EX/50     ?80       $186                 ?1                  	;0
1054 208   DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
1055 208   ECHO/40                   ?0        $187                 ?0                  	;0
1056 209   GOTO/253                  ?0        ?2370                ?716                	;0
1057 211   FETCH_DIM_R/81            $188=     16?2                 717:'id'            	;0	<<154
1058 211   ASSIGN/38                 ?178      16?7                 $188                	;0
1059 212   UNSET_DIM/75              ?0        16?2                 718:'id'            	;0
1060 213   INIT_FCALL_BY_NAME/59     ?0        ?0                   719:'json_encode'   	;1
1061 213   INIT_STATIC_METHOD_CALL/113 ?0        721:'APIWrapper'     723:'editBouquet'   	;2
1062 213   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1063 213   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1064 213   DO_FCALL/60               $190=     ?0                   ?0                  	;0
1065 213   SEND_VAR_NO_REF_EX/50     ?80       $190                 ?1                  	;0
1066 213   DO_FCALL_BY_NAME/131      $191=     ?0                   ?0                  	;0
1067 213   ECHO/40                   ?0        $191                 ?0                  	;0
1068 214   GOTO/253                  ?0        ?2370                ?725                	;0
1069 216   INIT_FCALL_BY_NAME/59     ?0        ?0                   726:'json_encode'   	;1	<<156
1070 216   INIT_STATIC_METHOD_CALL/113 ?0        728:'APIWrapper'     730:'Cf129337B2b64858'	;1
1071 216   FETCH_DIM_FUNC_ARG/93     $192=     16?2                 732:'id'            	;1
1072 216   SEND_VAR_EX/66            ?80       $192                 ?1                  	;0
1073 216   DO_FCALL/60               $193=     ?0                   ?0                  	;0
1074 216   SEND_VAR_NO_REF_EX/50     ?80       $193                 ?1                  	;0
1075 216   DO_FCALL_BY_NAME/131      $194=     ?0                   ?0                  	;0
1076 216   ECHO/40                   ?0        $194                 ?0                  	;0
1077 217   GOTO/253                  ?0        ?2370                ?733                	;0
1078 219   INIT_FCALL_BY_NAME/59     ?0        ?0                   734:'json_encode'   	;1	<<158
1079 219   INIT_STATIC_METHOD_CALL/113 ?0        736:'APIWrapper'     738:'filterRows'    	;3
1080 219   INIT_STATIC_METHOD_CALL/113 ?0        740:'APIWrapper'     742:'getAccessCodes'	;0
1081 219   DO_FCALL/60               $195=     ?0                   ?0                  	;0
1082 219   SEND_VAR_NO_REF_EX/50     ?80       $195                 ?1                  	;0
1083 219   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1084 219   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1085 219   DO_FCALL/60               $196=     ?0                   ?0                  	;0
1086 219   SEND_VAR_NO_REF_EX/50     ?80       $196                 ?1                  	;0
1087 219   DO_FCALL_BY_NAME/131      $197=     ?0                   ?0                  	;0
1088 219   ECHO/40                   ?0        $197                 ?0                  	;0
1089 220   GOTO/253                  ?0        ?2370                ?744                	;0
1090 222   INIT_FCALL_BY_NAME/59     ?0        ?0                   745:'json_encode'   	;1	<<160
1091 222   INIT_STATIC_METHOD_CALL/113 ?0        747:'APIWrapper'     749:'filterRow'     	;3
1092 222   INIT_STATIC_METHOD_CALL/113 ?0        751:'APIWrapper'     753:'getAccessCode' 	;1
1093 222   FETCH_DIM_FUNC_ARG/93     $198=     16?2                 755:'id'            	;1
1094 222   SEND_VAR_EX/66            ?80       $198                 ?1                  	;0
1095 222   DO_FCALL/60               $199=     ?0                   ?0                  	;0
1096 222   SEND_VAR_NO_REF_EX/50     ?80       $199                 ?1                  	;0
1097 222   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1098 222   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1099 222   DO_FCALL/60               $200=     ?0                   ?0                  	;0
1100 222   SEND_VAR_NO_REF_EX/50     ?80       $200                 ?1                  	;0
1101 222   DO_FCALL_BY_NAME/131      $201=     ?0                   ?0                  	;0
1102 222   ECHO/40                   ?0        $201                 ?0                  	;0
1103 223   GOTO/253                  ?0        ?2370                ?756                	;0
1104 225   INIT_FCALL_BY_NAME/59     ?0        ?0                   757:'json_encode'   	;1	<<162
1105 225   INIT_STATIC_METHOD_CALL/113 ?0        759:'APIWrapper'     761:'createAccessCode'	;1
1106 225   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1107 225   DO_FCALL/60               $202=     ?0                   ?0                  	;0
1108 225   SEND_VAR_NO_REF_EX/50     ?80       $202                 ?1                  	;0
1109 225   DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
1110 225   ECHO/40                   ?0        $203                 ?0                  	;0
1111 226   GOTO/253                  ?0        ?2370                ?763                	;0
1112 228   FETCH_DIM_R/81            $204=     16?2                 764:'id'            	;0	<<164
1113 228   ASSIGN/38                 ?194      16?7                 $204                	;0
1114 229   UNSET_DIM/75              ?0        16?2                 765:'id'            	;0
1115 230   INIT_FCALL_BY_NAME/59     ?0        ?0                   766:'json_encode'   	;1
1116 230   INIT_STATIC_METHOD_CALL/113 ?0        768:'APIWrapper'     770:'editAccessCode'	;2
1117 230   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1118 230   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1119 230   DO_FCALL/60               $206=     ?0                   ?0                  	;0
1120 230   SEND_VAR_NO_REF_EX/50     ?80       $206                 ?1                  	;0
1121 230   DO_FCALL_BY_NAME/131      $207=     ?0                   ?0                  	;0
1122 230   ECHO/40                   ?0        $207                 ?0                  	;0
1123 231   GOTO/253                  ?0        ?2370                ?772                	;0
1124 233   INIT_FCALL_BY_NAME/59     ?0        ?0                   773:'json_encode'   	;1	<<166
1125 233   INIT_STATIC_METHOD_CALL/113 ?0        775:'APIWrapper'     777:'deleteAccessCode'	;1
1126 233   FETCH_DIM_FUNC_ARG/93     $208=     16?2                 779:'id'            	;1
1127 233   SEND_VAR_EX/66            ?80       $208                 ?1                  	;0
1128 233   DO_FCALL/60               $209=     ?0                   ?0                  	;0
1129 233   SEND_VAR_NO_REF_EX/50     ?80       $209                 ?1                  	;0
1130 233   DO_FCALL_BY_NAME/131      $210=     ?0                   ?0                  	;0
1131 233   ECHO/40                   ?0        $210                 ?0                  	;0
1132 234   GOTO/253                  ?0        ?2370                ?780                	;0
1133 236   INIT_FCALL_BY_NAME/59     ?0        ?0                   781:'json_encode'   	;1	<<168
1134 236   INIT_STATIC_METHOD_CALL/113 ?0        783:'APIWrapper'     785:'filterRows'    	;3
1135 236   INIT_STATIC_METHOD_CALL/113 ?0        787:'APIWrapper'     789:'getHMACs'      	;0
1136 236   DO_FCALL/60               $211=     ?0                   ?0                  	;0
1137 236   SEND_VAR_NO_REF_EX/50     ?80       $211                 ?1                  	;0
1138 236   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1139 236   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1140 236   DO_FCALL/60               $212=     ?0                   ?0                  	;0
1141 236   SEND_VAR_NO_REF_EX/50     ?80       $212                 ?1                  	;0
1142 236   DO_FCALL_BY_NAME/131      $213=     ?0                   ?0                  	;0
1143 236   ECHO/40                   ?0        $213                 ?0                  	;0
1144 237   GOTO/253                  ?0        ?2370                ?791                	;0
1145 239   INIT_FCALL_BY_NAME/59     ?0        ?0                   792:'json_encode'   	;1	<<170
1146 239   INIT_STATIC_METHOD_CALL/113 ?0        794:'APIWrapper'     796:'filterRow'     	;3
1147 239   INIT_STATIC_METHOD_CALL/113 ?0        798:'APIWrapper'     800:'getHMAC'       	;1
1148 239   FETCH_DIM_FUNC_ARG/93     $214=     16?2                 802:'id'            	;1
1149 239   SEND_VAR_EX/66            ?80       $214                 ?1                  	;0
1150 239   DO_FCALL/60               $215=     ?0                   ?0                  	;0
1151 239   SEND_VAR_NO_REF_EX/50     ?80       $215                 ?1                  	;0
1152 239   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1153 239   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1154 239   DO_FCALL/60               $216=     ?0                   ?0                  	;0
1155 239   SEND_VAR_NO_REF_EX/50     ?80       $216                 ?1                  	;0
1156 239   DO_FCALL_BY_NAME/131      $217=     ?0                   ?0                  	;0
1157 239   ECHO/40                   ?0        $217                 ?0                  	;0
1158 240   GOTO/253                  ?0        ?2370                ?803                	;0
1159 242   INIT_FCALL_BY_NAME/59     ?0        ?0                   804:'json_encode'   	;1	<<172
1160 242   INIT_STATIC_METHOD_CALL/113 ?0        806:'APIWrapper'     808:'createHMAC'    	;1
1161 242   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1162 242   DO_FCALL/60               $218=     ?0                   ?0                  	;0
1163 242   SEND_VAR_NO_REF_EX/50     ?80       $218                 ?1                  	;0
1164 242   DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
1165 242   ECHO/40                   ?0        $219                 ?0                  	;0
1166 243   GOTO/253                  ?0        ?2370                ?810                	;0
1167 245   FETCH_DIM_R/81            $220=     16?2                 811:'id'            	;0	<<174
1168 245   ASSIGN/38                 ?210      16?7                 $220                	;0
1169 246   UNSET_DIM/75              ?0        16?2                 812:'id'            	;0
1170 247   INIT_FCALL_BY_NAME/59     ?0        ?0                   813:'json_encode'   	;1
1171 247   INIT_STATIC_METHOD_CALL/113 ?0        815:'APIWrapper'     817:'editHMAC'      	;2
1172 247   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1173 247   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1174 247   DO_FCALL/60               $222=     ?0                   ?0                  	;0
1175 247   SEND_VAR_NO_REF_EX/50     ?80       $222                 ?1                  	;0
1176 247   DO_FCALL_BY_NAME/131      $223=     ?0                   ?0                  	;0
1177 247   ECHO/40                   ?0        $223                 ?0                  	;0
1178 248   GOTO/253                  ?0        ?2370                ?819                	;0
1179 250   INIT_FCALL_BY_NAME/59     ?0        ?0                   820:'json_encode'   	;1	<<176
1180 250   INIT_STATIC_METHOD_CALL/113 ?0        822:'APIWrapper'     824:'dDa4D03970e2cA94'	;1
1181 250   FETCH_DIM_FUNC_ARG/93     $224=     16?2                 826:'id'            	;1
1182 250   SEND_VAR_EX/66            ?80       $224                 ?1                  	;0
1183 250   DO_FCALL/60               $225=     ?0                   ?0                  	;0
1184 250   SEND_VAR_NO_REF_EX/50     ?80       $225                 ?1                  	;0
1185 250   DO_FCALL_BY_NAME/131      $226=     ?0                   ?0                  	;0
1186 250   ECHO/40                   ?0        $226                 ?0                  	;0
1187 251   GOTO/253                  ?0        ?2370                ?827                	;0
1188 253   INIT_FCALL_BY_NAME/59     ?0        ?0                   828:'json_encode'   	;1	<<178
1189 253   INIT_STATIC_METHOD_CALL/113 ?0        830:'APIWrapper'     832:'filterRows'    	;3
1190 253   INIT_STATIC_METHOD_CALL/113 ?0        834:'APIWrapper'     836:'e2cAB4aCe32264bB'	;0
1191 253   DO_FCALL/60               $227=     ?0                   ?0                  	;0
1192 253   SEND_VAR_NO_REF_EX/50     ?80       $227                 ?1                  	;0
1193 253   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1194 253   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1195 253   DO_FCALL/60               $228=     ?0                   ?0                  	;0
1196 253   SEND_VAR_NO_REF_EX/50     ?80       $228                 ?1                  	;0
1197 253   DO_FCALL_BY_NAME/131      $229=     ?0                   ?0                  	;0
1198 253   ECHO/40                   ?0        $229                 ?0                  	;0
1199 254   GOTO/253                  ?0        ?2370                ?838                	;0
1200 256   INIT_FCALL_BY_NAME/59     ?0        ?0                   839:'json_encode'   	;1	<<180
1201 256   INIT_STATIC_METHOD_CALL/113 ?0        841:'APIWrapper'     843:'filterRow'     	;3
1202 256   INIT_STATIC_METHOD_CALL/113 ?0        845:'APIWrapper'     847:'getEPG'        	;1
1203 256   FETCH_DIM_FUNC_ARG/93     $230=     16?2                 849:'id'            	;1
1204 256   SEND_VAR_EX/66            ?80       $230                 ?1                  	;0
1205 256   DO_FCALL/60               $231=     ?0                   ?0                  	;0
1206 256   SEND_VAR_NO_REF_EX/50     ?80       $231                 ?1                  	;0
1207 256   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1208 256   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1209 256   DO_FCALL/60               $232=     ?0                   ?0                  	;0
1210 256   SEND_VAR_NO_REF_EX/50     ?80       $232                 ?1                  	;0
1211 256   DO_FCALL_BY_NAME/131      $233=     ?0                   ?0                  	;0
1212 256   ECHO/40                   ?0        $233                 ?0                  	;0
1213 257   GOTO/253                  ?0        ?2370                ?850                	;0
1214 259   INIT_FCALL_BY_NAME/59     ?0        ?0                   851:'json_encode'   	;1	<<182
1215 259   INIT_STATIC_METHOD_CALL/113 ?0        853:'APIWrapper'     855:'createEPG'     	;1
1216 259   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1217 259   DO_FCALL/60               $234=     ?0                   ?0                  	;0
1218 259   SEND_VAR_NO_REF_EX/50     ?80       $234                 ?1                  	;0
1219 259   DO_FCALL_BY_NAME/131      $235=     ?0                   ?0                  	;0
1220 259   ECHO/40                   ?0        $235                 ?0                  	;0
1221 260   GOTO/253                  ?0        ?2370                ?857                	;0
1222 262   FETCH_DIM_R/81            $236=     16?2                 858:'id'            	;0	<<184
1223 262   ASSIGN/38                 ?226      16?7                 $236                	;0
1224 263   UNSET_DIM/75              ?0        16?2                 859:'id'            	;0
1225 264   INIT_FCALL_BY_NAME/59     ?0        ?0                   860:'json_encode'   	;1
1226 264   INIT_STATIC_METHOD_CALL/113 ?0        862:'APIWrapper'     864:'editEPG'       	;2
1227 264   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1228 264   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1229 264   DO_FCALL/60               $238=     ?0                   ?0                  	;0
1230 264   SEND_VAR_NO_REF_EX/50     ?80       $238                 ?1                  	;0
1231 264   DO_FCALL_BY_NAME/131      $239=     ?0                   ?0                  	;0
1232 264   ECHO/40                   ?0        $239                 ?0                  	;0
1233 265   GOTO/253                  ?0        ?2370                ?866                	;0
1234 267   INIT_FCALL_BY_NAME/59     ?0        ?0                   867:'json_encode'   	;1	<<186
1235 267   INIT_STATIC_METHOD_CALL/113 ?0        869:'APIWrapper'     871:'A9C0d3a737017A30'	;1
1236 267   FETCH_DIM_FUNC_ARG/93     $240=     16?2                 873:'id'            	;1
1237 267   SEND_VAR_EX/66            ?80       $240                 ?1                  	;0
1238 267   DO_FCALL/60               $241=     ?0                   ?0                  	;0
1239 267   SEND_VAR_NO_REF_EX/50     ?80       $241                 ?1                  	;0
1240 267   DO_FCALL_BY_NAME/131      $242=     ?0                   ?0                  	;0
1241 267   ECHO/40                   ?0        $242                 ?0                  	;0
1242 268   GOTO/253                  ?0        ?2370                ?874                	;0
1243 270   INIT_FCALL_BY_NAME/59     ?0        ?0                   875:'json_encode'   	;1	<<188
1244 270   INIT_STATIC_METHOD_CALL/113 ?0        877:'APIWrapper'     879:'reloadEPG'     	;1
1245 270   ISSET_ISEMPTY_DIM_OBJ/115 #243=     16?2                 881:'id'            	;33554432
1246 270   JMPZ/43                   ?0        #243                 ?1253               	;0	>>1253
1247 270   INIT_FCALL_BY_NAME/59     ?0        ?0                   882:'intval'        	;1
1248 270   FETCH_DIM_FUNC_ARG/93     $244=     16?2                 884:'id'            	;1
1249 270   SEND_VAR_EX/66            ?80       $244                 ?1                  	;0
1250 270   DO_FCALL_BY_NAME/131      $245=     ?0                   ?0                  	;0
1251 270   QM_ASSIGN/22              #246=     $245                 ?0                  	;0
1252 270   JMP/42                    ?0        ?1254                ?0                  	;0	>>1254
1253 270   QM_ASSIGN/22              #246=     885:NULL             ?0                  	;0	<<1246
1254 270   SEND_VAL_EX/116           ?80       #246                 ?1                  	;0	<<1252
1255 270   DO_FCALL/60               $247=     ?0                   ?0                  	;0
1256 270   SEND_VAR_NO_REF_EX/50     ?80       $247                 ?1                  	;0
1257 270   DO_FCALL_BY_NAME/131      $248=     ?0                   ?0                  	;0
1258 270   ECHO/40                   ?0        $248                 ?0                  	;0
1259 271   GOTO/253                  ?0        ?2370                ?886                	;0
1260 273   INIT_FCALL_BY_NAME/59     ?0        ?0                   887:'json_encode'   	;1	<<190
1261 273   INIT_STATIC_METHOD_CALL/113 ?0        889:'APIWrapper'     891:'filterRows'    	;3
1262 273   INIT_STATIC_METHOD_CALL/113 ?0        893:'APIWrapper'     895:'getProviders'  	;0
1263 273   DO_FCALL/60               $249=     ?0                   ?0                  	;0
1264 273   SEND_VAR_NO_REF_EX/50     ?80       $249                 ?1                  	;0
1265 273   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1266 273   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1267 273   DO_FCALL/60               $250=     ?0                   ?0                  	;0
1268 273   SEND_VAR_NO_REF_EX/50     ?80       $250                 ?1                  	;0
1269 273   DO_FCALL_BY_NAME/131      $251=     ?0                   ?0                  	;0
1270 273   ECHO/40                   ?0        $251                 ?0                  	;0
1271 274   GOTO/253                  ?0        ?2370                ?897                	;0
1272 276   INIT_FCALL_BY_NAME/59     ?0        ?0                   898:'json_encode'   	;1	<<192
1273 276   INIT_STATIC_METHOD_CALL/113 ?0        900:'APIWrapper'     902:'filterRow'     	;3
1274 276   INIT_STATIC_METHOD_CALL/113 ?0        904:'APIWrapper'     906:'getProvider'   	;1
1275 276   FETCH_DIM_FUNC_ARG/93     $252=     16?2                 908:'id'            	;1
1276 276   SEND_VAR_EX/66            ?80       $252                 ?1                  	;0
1277 276   DO_FCALL/60               $253=     ?0                   ?0                  	;0
1278 276   SEND_VAR_NO_REF_EX/50     ?80       $253                 ?1                  	;0
1279 276   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1280 276   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1281 276   DO_FCALL/60               $254=     ?0                   ?0                  	;0
1282 276   SEND_VAR_NO_REF_EX/50     ?80       $254                 ?1                  	;0
1283 276   DO_FCALL_BY_NAME/131      $255=     ?0                   ?0                  	;0
1284 276   ECHO/40                   ?0        $255                 ?0                  	;0
1285 277   GOTO/253                  ?0        ?2370                ?909                	;0
1286 279   INIT_FCALL_BY_NAME/59     ?0        ?0                   910:'json_encode'   	;1	<<194
1287 279   INIT_STATIC_METHOD_CALL/113 ?0        912:'APIWrapper'     914:'createProvider'	;1
1288 279   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1289 279   DO_FCALL/60               $256=     ?0                   ?0                  	;0
1290 279   SEND_VAR_NO_REF_EX/50     ?80       $256                 ?1                  	;0
1291 279   DO_FCALL_BY_NAME/131      $257=     ?0                   ?0                  	;0
1292 279   ECHO/40                   ?0        $257                 ?0                  	;0
1293 280   GOTO/253                  ?0        ?2370                ?916                	;0
1294 282   FETCH_DIM_R/81            $258=     16?2                 917:'id'            	;0	<<196
1295 282   ASSIGN/38                 ?248      16?7                 $258                	;0
1296 283   UNSET_DIM/75              ?0        16?2                 918:'id'            	;0
1297 284   INIT_FCALL_BY_NAME/59     ?0        ?0                   919:'json_encode'   	;1
1298 284   INIT_STATIC_METHOD_CALL/113 ?0        921:'APIWrapper'     923:'editProvider'  	;2
1299 284   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1300 284   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1301 284   DO_FCALL/60               $260=     ?0                   ?0                  	;0
1302 284   SEND_VAR_NO_REF_EX/50     ?80       $260                 ?1                  	;0
1303 284   DO_FCALL_BY_NAME/131      $261=     ?0                   ?0                  	;0
1304 284   ECHO/40                   ?0        $261                 ?0                  	;0
1305 285   GOTO/253                  ?0        ?2370                ?925                	;0
1306 287   INIT_FCALL_BY_NAME/59     ?0        ?0                   926:'json_encode'   	;1	<<198
1307 287   INIT_STATIC_METHOD_CALL/113 ?0        928:'APIWrapper'     930:'deleteProvider'	;1
1308 287   FETCH_DIM_FUNC_ARG/93     $262=     16?2                 932:'id'            	;1
1309 287   SEND_VAR_EX/66            ?80       $262                 ?1                  	;0
1310 287   DO_FCALL/60               $263=     ?0                   ?0                  	;0
1311 287   SEND_VAR_NO_REF_EX/50     ?80       $263                 ?1                  	;0
1312 287   DO_FCALL_BY_NAME/131      $264=     ?0                   ?0                  	;0
1313 287   ECHO/40                   ?0        $264                 ?0                  	;0
1314 288   GOTO/253                  ?0        ?2370                ?933                	;0
1315 290   INIT_FCALL_BY_NAME/59     ?0        ?0                   934:'json_encode'   	;1	<<200
1316 290   INIT_STATIC_METHOD_CALL/113 ?0        936:'APIWrapper'     938:'reloadProvider'	;1
1317 290   ISSET_ISEMPTY_DIM_OBJ/115 #265=     16?2                 940:'id'            	;33554432
1318 290   JMPZ/43                   ?0        #265                 ?1325               	;0	>>1325
1319 290   INIT_FCALL_BY_NAME/59     ?0        ?0                   941:'intval'        	;1
1320 290   FETCH_DIM_FUNC_ARG/93     $266=     16?2                 943:'id'            	;1
1321 290   SEND_VAR_EX/66            ?80       $266                 ?1                  	;0
1322 290   DO_FCALL_BY_NAME/131      $267=     ?0                   ?0                  	;0
1323 290   QM_ASSIGN/22              #268=     $267                 ?0                  	;0
1324 290   JMP/42                    ?0        ?1326                ?0                  	;0	>>1326
1325 290   QM_ASSIGN/22              #268=     944:NULL             ?0                  	;0	<<1318
1326 290   SEND_VAL_EX/116           ?80       #268                 ?1                  	;0	<<1324
1327 290   DO_FCALL/60               $269=     ?0                   ?0                  	;0
1328 290   SEND_VAR_NO_REF_EX/50     ?80       $269                 ?1                  	;0
1329 290   DO_FCALL_BY_NAME/131      $270=     ?0                   ?0                  	;0
1330 290   ECHO/40                   ?0        $270                 ?0                  	;0
1331 291   GOTO/253                  ?0        ?2370                ?945                	;0
1332 293   INIT_FCALL_BY_NAME/59     ?0        ?0                   946:'json_encode'   	;1	<<202
1333 293   INIT_STATIC_METHOD_CALL/113 ?0        948:'APIWrapper'     950:'filterRows'    	;3
1334 293   INIT_STATIC_METHOD_CALL/113 ?0        952:'APIWrapper'     954:'getGroups'     	;0
1335 293   DO_FCALL/60               $271=     ?0                   ?0                  	;0
1336 293   SEND_VAR_NO_REF_EX/50     ?80       $271                 ?1                  	;0
1337 293   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1338 293   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1339 293   DO_FCALL/60               $272=     ?0                   ?0                  	;0
1340 293   SEND_VAR_NO_REF_EX/50     ?80       $272                 ?1                  	;0
1341 293   DO_FCALL_BY_NAME/131      $273=     ?0                   ?0                  	;0
1342 293   ECHO/40                   ?0        $273                 ?0                  	;0
1343 294   GOTO/253                  ?0        ?2370                ?956                	;0
1344 296   INIT_FCALL_BY_NAME/59     ?0        ?0                   957:'json_encode'   	;1	<<204
1345 296   INIT_STATIC_METHOD_CALL/113 ?0        959:'APIWrapper'     961:'filterRow'     	;3
1346 296   INIT_STATIC_METHOD_CALL/113 ?0        963:'APIWrapper'     965:'getGroup'      	;1
1347 296   FETCH_DIM_FUNC_ARG/93     $274=     16?2                 967:'id'            	;1
1348 296   SEND_VAR_EX/66            ?80       $274                 ?1                  	;0
1349 296   DO_FCALL/60               $275=     ?0                   ?0                  	;0
1350 296   SEND_VAR_NO_REF_EX/50     ?80       $275                 ?1                  	;0
1351 296   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1352 296   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1353 296   DO_FCALL/60               $276=     ?0                   ?0                  	;0
1354 296   SEND_VAR_NO_REF_EX/50     ?80       $276                 ?1                  	;0
1355 296   DO_FCALL_BY_NAME/131      $277=     ?0                   ?0                  	;0
1356 296   ECHO/40                   ?0        $277                 ?0                  	;0
1357 297   GOTO/253                  ?0        ?2370                ?968                	;0
1358 299   INIT_FCALL_BY_NAME/59     ?0        ?0                   969:'json_encode'   	;1	<<206
1359 299   INIT_STATIC_METHOD_CALL/113 ?0        971:'APIWrapper'     973:'createGroup'   	;1
1360 299   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1361 299   DO_FCALL/60               $278=     ?0                   ?0                  	;0
1362 299   SEND_VAR_NO_REF_EX/50     ?80       $278                 ?1                  	;0
1363 299   DO_FCALL_BY_NAME/131      $279=     ?0                   ?0                  	;0
1364 299   ECHO/40                   ?0        $279                 ?0                  	;0
1365 300   GOTO/253                  ?0        ?2370                ?975                	;0
1366 302   FETCH_DIM_R/81            $280=     16?2                 976:'id'            	;0	<<208
1367 302   ASSIGN/38                 ?270      16?7                 $280                	;0
1368 303   UNSET_DIM/75              ?0        16?2                 977:'id'            	;0
1369 304   INIT_FCALL_BY_NAME/59     ?0        ?0                   978:'json_encode'   	;1
1370 304   INIT_STATIC_METHOD_CALL/113 ?0        980:'APIWrapper'     982:'editGroup'     	;2
1371 304   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1372 304   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1373 304   DO_FCALL/60               $282=     ?0                   ?0                  	;0
1374 304   SEND_VAR_NO_REF_EX/50     ?80       $282                 ?1                  	;0
1375 304   DO_FCALL_BY_NAME/131      $283=     ?0                   ?0                  	;0
1376 304   ECHO/40                   ?0        $283                 ?0                  	;0
1377 305   GOTO/253                  ?0        ?2370                ?984                	;0
1378 307   INIT_FCALL_BY_NAME/59     ?0        ?0                   985:'json_encode'   	;1	<<210
1379 307   INIT_STATIC_METHOD_CALL/113 ?0        987:'APIWrapper'     989:'be56e3dA8aeD7F8b'	;1
1380 307   FETCH_DIM_FUNC_ARG/93     $284=     16?2                 991:'id'            	;1
1381 307   SEND_VAR_EX/66            ?80       $284                 ?1                  	;0
1382 307   DO_FCALL/60               $285=     ?0                   ?0                  	;0
1383 307   SEND_VAR_NO_REF_EX/50     ?80       $285                 ?1                  	;0
1384 307   DO_FCALL_BY_NAME/131      $286=     ?0                   ?0                  	;0
1385 307   ECHO/40                   ?0        $286                 ?0                  	;0
1386 308   GOTO/253                  ?0        ?2370                ?992                	;0
1387 310   INIT_FCALL_BY_NAME/59     ?0        ?0                   993:'json_encode'   	;1	<<212
1388 310   INIT_STATIC_METHOD_CALL/113 ?0        995:'APIWrapper'     997:'filterRows'    	;3
1389 310   INIT_STATIC_METHOD_CALL/113 ?0        999:'APIWrapper'     1001:'D117E45424fE8F00'	;0
1390 310   DO_FCALL/60               $287=     ?0                   ?0                  	;0
1391 310   SEND_VAR_NO_REF_EX/50     ?80       $287                 ?1                  	;0
1392 310   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1393 310   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1394 310   DO_FCALL/60               $288=     ?0                   ?0                  	;0
1395 310   SEND_VAR_NO_REF_EX/50     ?80       $288                 ?1                  	;0
1396 310   DO_FCALL_BY_NAME/131      $289=     ?0                   ?0                  	;0
1397 310   ECHO/40                   ?0        $289                 ?0                  	;0
1398 311   GOTO/253                  ?0        ?2370                ?1003               	;0
1399 313   INIT_FCALL_BY_NAME/59     ?0        ?0                   1004:'json_encode'  	;1	<<214
1400 313   INIT_STATIC_METHOD_CALL/113 ?0        1006:'APIWrapper'    1008:'filterRow'    	;3
1401 313   INIT_STATIC_METHOD_CALL/113 ?0        1010:'APIWrapper'    1012:'Ff68F9EFD227763f'	;1
1402 313   FETCH_DIM_FUNC_ARG/93     $290=     16?2                 1014:'id'           	;1
1403 313   SEND_VAR_EX/66            ?80       $290                 ?1                  	;0
1404 313   DO_FCALL/60               $291=     ?0                   ?0                  	;0
1405 313   SEND_VAR_NO_REF_EX/50     ?80       $291                 ?1                  	;0
1406 313   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1407 313   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1408 313   DO_FCALL/60               $292=     ?0                   ?0                  	;0
1409 313   SEND_VAR_NO_REF_EX/50     ?80       $292                 ?1                  	;0
1410 313   DO_FCALL_BY_NAME/131      $293=     ?0                   ?0                  	;0
1411 313   ECHO/40                   ?0        $293                 ?0                  	;0
1412 314   GOTO/253                  ?0        ?2370                ?1015               	;0
1413 316   INIT_FCALL_BY_NAME/59     ?0        ?0                   1016:'json_encode'  	;1	<<216
1414 316   INIT_STATIC_METHOD_CALL/113 ?0        1018:'APIWrapper'    1020:'createPackage'	;1
1415 316   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1416 316   DO_FCALL/60               $294=     ?0                   ?0                  	;0
1417 316   SEND_VAR_NO_REF_EX/50     ?80       $294                 ?1                  	;0
1418 316   DO_FCALL_BY_NAME/131      $295=     ?0                   ?0                  	;0
1419 316   ECHO/40                   ?0        $295                 ?0                  	;0
1420 317   GOTO/253                  ?0        ?2370                ?1022               	;0
1421 319   FETCH_DIM_R/81            $296=     16?2                 1023:'id'           	;0	<<218
1422 319   ASSIGN/38                 ?286      16?7                 $296                	;0
1423 320   UNSET_DIM/75              ?0        16?2                 1024:'id'           	;0
1424 321   INIT_FCALL_BY_NAME/59     ?0        ?0                   1025:'json_encode'  	;1
1425 321   INIT_STATIC_METHOD_CALL/113 ?0        1027:'APIWrapper'    1029:'editPackage'  	;2
1426 321   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1427 321   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1428 321   DO_FCALL/60               $298=     ?0                   ?0                  	;0
1429 321   SEND_VAR_NO_REF_EX/50     ?80       $298                 ?1                  	;0
1430 321   DO_FCALL_BY_NAME/131      $299=     ?0                   ?0                  	;0
1431 321   ECHO/40                   ?0        $299                 ?0                  	;0
1432 322   GOTO/253                  ?0        ?2370                ?1031               	;0
1433 324   INIT_FCALL_BY_NAME/59     ?0        ?0                   1032:'json_encode'  	;1	<<220
1434 324   INIT_STATIC_METHOD_CALL/113 ?0        1034:'APIWrapper'    1036:'EFC1502D889c4091'	;1
1435 324   FETCH_DIM_FUNC_ARG/93     $300=     16?2                 1038:'id'           	;1
1436 324   SEND_VAR_EX/66            ?80       $300                 ?1                  	;0
1437 324   DO_FCALL/60               $301=     ?0                   ?0                  	;0
1438 324   SEND_VAR_NO_REF_EX/50     ?80       $301                 ?1                  	;0
1439 324   DO_FCALL_BY_NAME/131      $302=     ?0                   ?0                  	;0
1440 324   ECHO/40                   ?0        $302                 ?0                  	;0
1441 325   GOTO/253                  ?0        ?2370                ?1039               	;0
1442 327   INIT_FCALL_BY_NAME/59     ?0        ?0                   1040:'json_encode'  	;1	<<222
1443 327   INIT_STATIC_METHOD_CALL/113 ?0        1042:'APIWrapper'    1044:'filterRows'   	;3
1444 327   INIT_STATIC_METHOD_CALL/113 ?0        1046:'APIWrapper'    1048:'b8B821fD5B9528D4'	;0
1445 327   DO_FCALL/60               $303=     ?0                   ?0                  	;0
1446 327   SEND_VAR_NO_REF_EX/50     ?80       $303                 ?1                  	;0
1447 327   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1448 327   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1449 327   DO_FCALL/60               $304=     ?0                   ?0                  	;0
1450 327   SEND_VAR_NO_REF_EX/50     ?80       $304                 ?1                  	;0
1451 327   DO_FCALL_BY_NAME/131      $305=     ?0                   ?0                  	;0
1452 327   ECHO/40                   ?0        $305                 ?0                  	;0
1453 328   GOTO/253                  ?0        ?2370                ?1050               	;0
1454 330   INIT_FCALL_BY_NAME/59     ?0        ?0                   1051:'json_encode'  	;1	<<224
1455 330   INIT_STATIC_METHOD_CALL/113 ?0        1053:'APIWrapper'    1055:'filterRow'    	;3
1456 330   INIT_STATIC_METHOD_CALL/113 ?0        1057:'APIWrapper'    1059:'a9dC9Bb8F74D8e4d'	;1
1457 330   FETCH_DIM_FUNC_ARG/93     $306=     16?2                 1061:'id'           	;1
1458 330   SEND_VAR_EX/66            ?80       $306                 ?1                  	;0
1459 330   DO_FCALL/60               $307=     ?0                   ?0                  	;0
1460 330   SEND_VAR_NO_REF_EX/50     ?80       $307                 ?1                  	;0
1461 330   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1462 330   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1463 330   DO_FCALL/60               $308=     ?0                   ?0                  	;0
1464 330   SEND_VAR_NO_REF_EX/50     ?80       $308                 ?1                  	;0
1465 330   DO_FCALL_BY_NAME/131      $309=     ?0                   ?0                  	;0
1466 330   ECHO/40                   ?0        $309                 ?0                  	;0
1467 331   GOTO/253                  ?0        ?2370                ?1062               	;0
1468 333   INIT_FCALL_BY_NAME/59     ?0        ?0                   1063:'json_encode'  	;1	<<226
1469 333   INIT_STATIC_METHOD_CALL/113 ?0        1065:'APIWrapper'    1067:'createTranscodeProfile'	;1
1470 333   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1471 333   DO_FCALL/60               $310=     ?0                   ?0                  	;0
1472 333   SEND_VAR_NO_REF_EX/50     ?80       $310                 ?1                  	;0
1473 333   DO_FCALL_BY_NAME/131      $311=     ?0                   ?0                  	;0
1474 333   ECHO/40                   ?0        $311                 ?0                  	;0
1475 334   GOTO/253                  ?0        ?2370                ?1069               	;0
1476 336   FETCH_DIM_R/81            $312=     16?2                 1070:'id'           	;0	<<228
1477 336   ASSIGN/38                 ?302      16?7                 $312                	;0
1478 337   UNSET_DIM/75              ?0        16?2                 1071:'id'           	;0
1479 338   INIT_FCALL_BY_NAME/59     ?0        ?0                   1072:'json_encode'  	;1
1480 338   INIT_STATIC_METHOD_CALL/113 ?0        1074:'APIWrapper'    1076:'editTranscodeProfile'	;2
1481 338   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1482 338   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1483 338   DO_FCALL/60               $314=     ?0                   ?0                  	;0
1484 338   SEND_VAR_NO_REF_EX/50     ?80       $314                 ?1                  	;0
1485 338   DO_FCALL_BY_NAME/131      $315=     ?0                   ?0                  	;0
1486 338   ECHO/40                   ?0        $315                 ?0                  	;0
1487 339   GOTO/253                  ?0        ?2370                ?1078               	;0
1488 341   INIT_FCALL_BY_NAME/59     ?0        ?0                   1079:'json_encode'  	;1	<<230
1489 341   INIT_STATIC_METHOD_CALL/113 ?0        1081:'APIWrapper'    1083:'deleteTranscodeProfile'	;1
1490 341   FETCH_DIM_FUNC_ARG/93     $316=     16?2                 1085:'id'           	;1
1491 341   SEND_VAR_EX/66            ?80       $316                 ?1                  	;0
1492 341   DO_FCALL/60               $317=     ?0                   ?0                  	;0
1493 341   SEND_VAR_NO_REF_EX/50     ?80       $317                 ?1                  	;0
1494 341   DO_FCALL_BY_NAME/131      $318=     ?0                   ?0                  	;0
1495 341   ECHO/40                   ?0        $318                 ?0                  	;0
1496 342   GOTO/253                  ?0        ?2370                ?1086               	;0
1497 344   INIT_FCALL_BY_NAME/59     ?0        ?0                   1087:'json_encode'  	;1	<<232
1498 344   INIT_STATIC_METHOD_CALL/113 ?0        1089:'APIWrapper'    1091:'filterRows'   	;3
1499 344   INIT_STATIC_METHOD_CALL/113 ?0        1093:'APIWrapper'    1095:'b5943F8605Dac186'	;0
1500 344   DO_FCALL/60               $319=     ?0                   ?0                  	;0
1501 344   SEND_VAR_NO_REF_EX/50     ?80       $319                 ?1                  	;0
1502 344   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1503 344   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1504 344   DO_FCALL/60               $320=     ?0                   ?0                  	;0
1505 344   SEND_VAR_NO_REF_EX/50     ?80       $320                 ?1                  	;0
1506 344   DO_FCALL_BY_NAME/131      $321=     ?0                   ?0                  	;0
1507 344   ECHO/40                   ?0        $321                 ?0                  	;0
1508 345   GOTO/253                  ?0        ?2370                ?1097               	;0
1509 347   INIT_FCALL_BY_NAME/59     ?0        ?0                   1098:'json_encode'  	;1	<<234
1510 347   INIT_STATIC_METHOD_CALL/113 ?0        1100:'APIWrapper'    1102:'filterRow'    	;3
1511 347   INIT_STATIC_METHOD_CALL/113 ?0        1104:'APIWrapper'    1106:'f6E1a36d39166281'	;1
1512 347   FETCH_DIM_FUNC_ARG/93     $322=     16?2                 1108:'id'           	;1
1513 347   SEND_VAR_EX/66            ?80       $322                 ?1                  	;0
1514 347   DO_FCALL/60               $323=     ?0                   ?0                  	;0
1515 347   SEND_VAR_NO_REF_EX/50     ?80       $323                 ?1                  	;0
1516 347   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1517 347   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1518 347   DO_FCALL/60               $324=     ?0                   ?0                  	;0
1519 347   SEND_VAR_NO_REF_EX/50     ?80       $324                 ?1                  	;0
1520 347   DO_FCALL_BY_NAME/131      $325=     ?0                   ?0                  	;0
1521 347   ECHO/40                   ?0        $325                 ?0                  	;0
1522 348   GOTO/253                  ?0        ?2370                ?1109               	;0
1523 350   INIT_FCALL_BY_NAME/59     ?0        ?0                   1110:'json_encode'  	;1	<<236
1524 350   INIT_STATIC_METHOD_CALL/113 ?0        1112:'APIWrapper'    1114:'addRTMPIP'    	;1
1525 350   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1526 350   DO_FCALL/60               $326=     ?0                   ?0                  	;0
1527 350   SEND_VAR_NO_REF_EX/50     ?80       $326                 ?1                  	;0
1528 350   DO_FCALL_BY_NAME/131      $327=     ?0                   ?0                  	;0
1529 350   ECHO/40                   ?0        $327                 ?0                  	;0
1530 351   GOTO/253                  ?0        ?2370                ?1116               	;0
1531 353   FETCH_DIM_R/81            $328=     16?2                 1117:'id'           	;0	<<238
1532 353   ASSIGN/38                 ?318      16?7                 $328                	;0
1533 354   UNSET_DIM/75              ?0        16?2                 1118:'id'           	;0
1534 355   INIT_FCALL_BY_NAME/59     ?0        ?0                   1119:'json_encode'  	;1
1535 355   INIT_STATIC_METHOD_CALL/113 ?0        1121:'APIWrapper'    1123:'editRTMPIP'   	;2
1536 355   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1537 355   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1538 355   DO_FCALL/60               $330=     ?0                   ?0                  	;0
1539 355   SEND_VAR_NO_REF_EX/50     ?80       $330                 ?1                  	;0
1540 355   DO_FCALL_BY_NAME/131      $331=     ?0                   ?0                  	;0
1541 355   ECHO/40                   ?0        $331                 ?0                  	;0
1542 356   GOTO/253                  ?0        ?2370                ?1125               	;0
1543 358   INIT_FCALL_BY_NAME/59     ?0        ?0                   1126:'json_encode'  	;1	<<240
1544 358   INIT_STATIC_METHOD_CALL/113 ?0        1128:'APIWrapper'    1130:'C6886fC2197A448c'	;1
1545 358   FETCH_DIM_FUNC_ARG/93     $332=     16?2                 1132:'id'           	;1
1546 358   SEND_VAR_EX/66            ?80       $332                 ?1                  	;0
1547 358   DO_FCALL/60               $333=     ?0                   ?0                  	;0
1548 358   SEND_VAR_NO_REF_EX/50     ?80       $333                 ?1                  	;0
1549 358   DO_FCALL_BY_NAME/131      $334=     ?0                   ?0                  	;0
1550 358   ECHO/40                   ?0        $334                 ?0                  	;0
1551 359   GOTO/253                  ?0        ?2370                ?1133               	;0
1552 361   INIT_FCALL_BY_NAME/59     ?0        ?0                   1134:'json_encode'  	;1	<<242
1553 361   INIT_STATIC_METHOD_CALL/113 ?0        1136:'APIWrapper'    1138:'filterRows'   	;3
1554 361   INIT_STATIC_METHOD_CALL/113 ?0        1140:'APIWrapper'    1142:'c721bd954a5f072f'	;0
1555 361   DO_FCALL/60               $335=     ?0                   ?0                  	;0
1556 361   SEND_VAR_NO_REF_EX/50     ?80       $335                 ?1                  	;0
1557 361   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1558 361   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1559 361   DO_FCALL/60               $336=     ?0                   ?0                  	;0
1560 361   SEND_VAR_NO_REF_EX/50     ?80       $336                 ?1                  	;0
1561 361   DO_FCALL_BY_NAME/131      $337=     ?0                   ?0                  	;0
1562 361   ECHO/40                   ?0        $337                 ?0                  	;0
1563 362   GOTO/253                  ?0        ?2370                ?1144               	;0
1564 364   INIT_FCALL_BY_NAME/59     ?0        ?0                   1145:'json_encode'  	;1	<<244
1565 364   INIT_STATIC_METHOD_CALL/113 ?0        1147:'APIWrapper'    1149:'filterRow'    	;3
1566 364   INIT_STATIC_METHOD_CALL/113 ?0        1151:'APIWrapper'    1153:'a5611693E0a4eA89'	;1
1567 364   FETCH_DIM_FUNC_ARG/93     $338=     16?2                 1155:'id'           	;1
1568 364   SEND_VAR_EX/66            ?80       $338                 ?1                  	;0
1569 364   DO_FCALL/60               $339=     ?0                   ?0                  	;0
1570 364   SEND_VAR_NO_REF_EX/50     ?80       $339                 ?1                  	;0
1571 364   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1572 364   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1573 364   DO_FCALL/60               $340=     ?0                   ?0                  	;0
1574 364   SEND_VAR_NO_REF_EX/50     ?80       $340                 ?1                  	;0
1575 364   DO_FCALL_BY_NAME/131      $341=     ?0                   ?0                  	;0
1576 364   ECHO/40                   ?0        $341                 ?0                  	;0
1577 365   GOTO/253                  ?0        ?2370                ?1156               	;0
1578 367   INIT_FCALL_BY_NAME/59     ?0        ?0                   1157:'json_encode'  	;1	<<246
1579 367   INIT_STATIC_METHOD_CALL/113 ?0        1159:'APIWrapper'    1161:'createCategory'	;1
1580 367   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1581 367   DO_FCALL/60               $342=     ?0                   ?0                  	;0
1582 367   SEND_VAR_NO_REF_EX/50     ?80       $342                 ?1                  	;0
1583 367   DO_FCALL_BY_NAME/131      $343=     ?0                   ?0                  	;0
1584 367   ECHO/40                   ?0        $343                 ?0                  	;0
1585 368   GOTO/253                  ?0        ?2370                ?1163               	;0
1586 370   FETCH_DIM_R/81            $344=     16?2                 1164:'id'           	;0	<<248
1587 370   ASSIGN/38                 ?334      16?7                 $344                	;0
1588 371   UNSET_DIM/75              ?0        16?2                 1165:'id'           	;0
1589 372   INIT_FCALL_BY_NAME/59     ?0        ?0                   1166:'json_encode'  	;1
1590 372   INIT_STATIC_METHOD_CALL/113 ?0        1168:'APIWrapper'    1170:'editCategory' 	;2
1591 372   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1592 372   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1593 372   DO_FCALL/60               $346=     ?0                   ?0                  	;0
1594 372   SEND_VAR_NO_REF_EX/50     ?80       $346                 ?1                  	;0
1595 372   DO_FCALL_BY_NAME/131      $347=     ?0                   ?0                  	;0
1596 372   ECHO/40                   ?0        $347                 ?0                  	;0
1597 373   GOTO/253                  ?0        ?2370                ?1172               	;0
1598 375   INIT_FCALL_BY_NAME/59     ?0        ?0                   1173:'json_encode'  	;1	<<250
1599 375   INIT_STATIC_METHOD_CALL/113 ?0        1175:'APIWrapper'    1177:'b293e956AfB2b06B'	;1
1600 375   FETCH_DIM_FUNC_ARG/93     $348=     16?2                 1179:'id'           	;1
1601 375   SEND_VAR_EX/66            ?80       $348                 ?1                  	;0
1602 375   DO_FCALL/60               $349=     ?0                   ?0                  	;0
1603 375   SEND_VAR_NO_REF_EX/50     ?80       $349                 ?1                  	;0
1604 375   DO_FCALL_BY_NAME/131      $350=     ?0                   ?0                  	;0
1605 375   ECHO/40                   ?0        $350                 ?0                  	;0
1606 376   GOTO/253                  ?0        ?2370                ?1180               	;0
1607 378   INIT_FCALL_BY_NAME/59     ?0        ?0                   1181:'json_encode'  	;1	<<252
1608 378   INIT_STATIC_METHOD_CALL/113 ?0        1183:'APIWrapper'    1185:'filterRows'   	;3
1609 378   INIT_STATIC_METHOD_CALL/113 ?0        1187:'APIWrapper'    1189:'B44E34d9BA4fb8C4'	;0
1610 378   DO_FCALL/60               $351=     ?0                   ?0                  	;0
1611 378   SEND_VAR_NO_REF_EX/50     ?80       $351                 ?1                  	;0
1612 378   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1613 378   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1614 378   DO_FCALL/60               $352=     ?0                   ?0                  	;0
1615 378   SEND_VAR_NO_REF_EX/50     ?80       $352                 ?1                  	;0
1616 378   DO_FCALL_BY_NAME/131      $353=     ?0                   ?0                  	;0
1617 378   ECHO/40                   ?0        $353                 ?0                  	;0
1618 379   GOTO/253                  ?0        ?2370                ?1191               	;0
1619 381   INIT_FCALL_BY_NAME/59     ?0        ?0                   1192:'json_encode'  	;1	<<254
1620 381   INIT_STATIC_METHOD_CALL/113 ?0        1194:'APIWrapper'    1196:'filterRow'    	;3
1621 381   INIT_STATIC_METHOD_CALL/113 ?0        1198:'APIWrapper'    1200:'c3a279725b215929'	;1
1622 381   FETCH_DIM_FUNC_ARG/93     $354=     16?2                 1202:'id'           	;1
1623 381   SEND_VAR_EX/66            ?80       $354                 ?1                  	;0
1624 381   DO_FCALL/60               $355=     ?0                   ?0                  	;0
1625 381   SEND_VAR_NO_REF_EX/50     ?80       $355                 ?1                  	;0
1626 381   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1627 381   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1628 381   DO_FCALL/60               $356=     ?0                   ?0                  	;0
1629 381   SEND_VAR_NO_REF_EX/50     ?80       $356                 ?1                  	;0
1630 381   DO_FCALL_BY_NAME/131      $357=     ?0                   ?0                  	;0
1631 381   ECHO/40                   ?0        $357                 ?0                  	;0
1632 382   GOTO/253                  ?0        ?2370                ?1203               	;0
1633 384   INIT_FCALL_BY_NAME/59     ?0        ?0                   1204:'json_encode'  	;1	<<256
1634 384   INIT_STATIC_METHOD_CALL/113 ?0        1206:'APIWrapper'    1208:'createWatchFolder'	;1
1635 384   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1636 384   DO_FCALL/60               $358=     ?0                   ?0                  	;0
1637 384   SEND_VAR_NO_REF_EX/50     ?80       $358                 ?1                  	;0
1638 384   DO_FCALL_BY_NAME/131      $359=     ?0                   ?0                  	;0
1639 384   ECHO/40                   ?0        $359                 ?0                  	;0
1640 385   GOTO/253                  ?0        ?2370                ?1210               	;0
1641 387   FETCH_DIM_R/81            $360=     16?2                 1211:'id'           	;0	<<258
1642 387   ASSIGN/38                 ?350      16?7                 $360                	;0
1643 388   UNSET_DIM/75              ?0        16?2                 1212:'id'           	;0
1644 389   INIT_FCALL_BY_NAME/59     ?0        ?0                   1213:'json_encode'  	;1
1645 389   INIT_STATIC_METHOD_CALL/113 ?0        1215:'APIWrapper'    1217:'editWatchFolder'	;2
1646 389   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1647 389   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1648 389   DO_FCALL/60               $362=     ?0                   ?0                  	;0
1649 389   SEND_VAR_NO_REF_EX/50     ?80       $362                 ?1                  	;0
1650 389   DO_FCALL_BY_NAME/131      $363=     ?0                   ?0                  	;0
1651 389   ECHO/40                   ?0        $363                 ?0                  	;0
1652 390   GOTO/253                  ?0        ?2370                ?1219               	;0
1653 392   INIT_FCALL_BY_NAME/59     ?0        ?0                   1220:'json_encode'  	;1	<<260
1654 392   INIT_STATIC_METHOD_CALL/113 ?0        1222:'APIWrapper'    1224:'A82ff612fe0312C0'	;1
1655 392   FETCH_DIM_FUNC_ARG/93     $364=     16?2                 1226:'id'           	;1
1656 392   SEND_VAR_EX/66            ?80       $364                 ?1                  	;0
1657 392   DO_FCALL/60               $365=     ?0                   ?0                  	;0
1658 392   SEND_VAR_NO_REF_EX/50     ?80       $365                 ?1                  	;0
1659 392   DO_FCALL_BY_NAME/131      $366=     ?0                   ?0                  	;0
1660 392   ECHO/40                   ?0        $366                 ?0                  	;0
1661 393   GOTO/253                  ?0        ?2370                ?1227               	;0
1662 395   INIT_FCALL_BY_NAME/59     ?0        ?0                   1228:'json_encode'  	;1	<<262
1663 395   INIT_STATIC_METHOD_CALL/113 ?0        1230:'APIWrapper'    1232:'reloadWatchFolder'	;2
1664 395   FETCH_DIM_IS/90           $367=     16?2                 1234:'server_id'    	;0
1665 395   COALESCE/169              #368=     $367                 ?1668               	;0
1666 395   FETCH_CONSTANT/99         #369=     ?0                   1235:'SERVER_ID'    	;16
1667 395   QM_ASSIGN/22              #368=     #369                 ?0                  	;0
1668 395   SEND_VAL_EX/116           ?80       #368                 ?1                  	;0
1669 395   FETCH_DIM_FUNC_ARG/93     $370=     16?2                 1238:'id'           	;2
1670 395   SEND_VAR_EX/66            ?96       $370                 ?2                  	;0
1671 395   DO_FCALL/60               $371=     ?0                   ?0                  	;0
1672 395   SEND_VAR_NO_REF_EX/50     ?80       $371                 ?1                  	;0
1673 395   DO_FCALL_BY_NAME/131      $372=     ?0                   ?0                  	;0
1674 395   ECHO/40                   ?0        $372                 ?0                  	;0
1675 396   GOTO/253                  ?0        ?2370                ?1239               	;0
1676 398   INIT_FCALL_BY_NAME/59     ?0        ?0                   1240:'json_encode'  	;1	<<264
1677 398   INIT_STATIC_METHOD_CALL/113 ?0        1242:'APIWrapper'    1244:'filterRow'    	;3
1678 398   INIT_STATIC_METHOD_CALL/113 ?0        1246:'APIWrapper'    1248:'getBlockedISPs'	;0
1679 398   DO_FCALL/60               $373=     ?0                   ?0                  	;0
1680 398   SEND_VAR_NO_REF_EX/50     ?80       $373                 ?1                  	;0
1681 398   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1682 398   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1683 398   DO_FCALL/60               $374=     ?0                   ?0                  	;0
1684 398   SEND_VAR_NO_REF_EX/50     ?80       $374                 ?1                  	;0
1685 398   DO_FCALL_BY_NAME/131      $375=     ?0                   ?0                  	;0
1686 398   ECHO/40                   ?0        $375                 ?0                  	;0
1687 399   GOTO/253                  ?0        ?2370                ?1250               	;0
1688 401   INIT_FCALL_BY_NAME/59     ?0        ?0                   1251:'json_encode'  	;1	<<266
1689 401   INIT_STATIC_METHOD_CALL/113 ?0        1253:'APIWrapper'    1255:'addBlockedISP'	;1
1690 401   FETCH_DIM_FUNC_ARG/93     $376=     16?2                 1257:'id'           	;1
1691 401   SEND_VAR_EX/66            ?80       $376                 ?1                  	;0
1692 401   DO_FCALL/60               $377=     ?0                   ?0                  	;0
1693 401   SEND_VAR_NO_REF_EX/50     ?80       $377                 ?1                  	;0
1694 401   DO_FCALL_BY_NAME/131      $378=     ?0                   ?0                  	;0
1695 401   ECHO/40                   ?0        $378                 ?0                  	;0
1696 402   GOTO/253                  ?0        ?2370                ?1258               	;0
1697 404   INIT_FCALL_BY_NAME/59     ?0        ?0                   1259:'json_encode'  	;1	<<268
1698 404   INIT_STATIC_METHOD_CALL/113 ?0        1261:'APIWrapper'    1263:'F8a610043421b14e'	;1
1699 404   FETCH_DIM_FUNC_ARG/93     $379=     16?2                 1265:'id'           	;1
1700 404   SEND_VAR_EX/66            ?80       $379                 ?1                  	;0
1701 404   DO_FCALL/60               $380=     ?0                   ?0                  	;0
1702 404   SEND_VAR_NO_REF_EX/50     ?80       $380                 ?1                  	;0
1703 404   DO_FCALL_BY_NAME/131      $381=     ?0                   ?0                  	;0
1704 404   ECHO/40                   ?0        $381                 ?0                  	;0
1705 405   GOTO/253                  ?0        ?2370                ?1266               	;0
1706 407   INIT_FCALL_BY_NAME/59     ?0        ?0                   1267:'json_encode'  	;1	<<270
1707 407   INIT_STATIC_METHOD_CALL/113 ?0        1269:'APIWrapper'    1271:'filterRows'   	;3
1708 407   INIT_STATIC_METHOD_CALL/113 ?0        1273:'APIWrapper'    1275:'getBlockedUAs'	;0
1709 407   DO_FCALL/60               $382=     ?0                   ?0                  	;0
1710 407   SEND_VAR_NO_REF_EX/50     ?80       $382                 ?1                  	;0
1711 407   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1712 407   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1713 407   DO_FCALL/60               $383=     ?0                   ?0                  	;0
1714 407   SEND_VAR_NO_REF_EX/50     ?80       $383                 ?1                  	;0
1715 407   DO_FCALL_BY_NAME/131      $384=     ?0                   ?0                  	;0
1716 407   ECHO/40                   ?0        $384                 ?0                  	;0
1717 408   GOTO/253                  ?0        ?2370                ?1277               	;0
1718 410   INIT_FCALL_BY_NAME/59     ?0        ?0                   1278:'json_encode'  	;1	<<272
1719 410   INIT_STATIC_METHOD_CALL/113 ?0        1280:'APIWrapper'    1282:'addBlockedUA' 	;1
1720 410   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1721 410   DO_FCALL/60               $385=     ?0                   ?0                  	;0
1722 410   SEND_VAR_NO_REF_EX/50     ?80       $385                 ?1                  	;0
1723 410   DO_FCALL_BY_NAME/131      $386=     ?0                   ?0                  	;0
1724 410   ECHO/40                   ?0        $386                 ?0                  	;0
1725 411   GOTO/253                  ?0        ?2370                ?1284               	;0
1726 413   INIT_FCALL_BY_NAME/59     ?0        ?0                   1285:'json_encode'  	;1	<<274
1727 413   INIT_STATIC_METHOD_CALL/113 ?0        1287:'APIWrapper'    1289:'b40EC96654c66f48'	;1
1728 413   FETCH_DIM_FUNC_ARG/93     $387=     16?2                 1291:'id'           	;1
1729 413   SEND_VAR_EX/66            ?80       $387                 ?1                  	;0
1730 413   DO_FCALL/60               $388=     ?0                   ?0                  	;0
1731 413   SEND_VAR_NO_REF_EX/50     ?80       $388                 ?1                  	;0
1732 413   DO_FCALL_BY_NAME/131      $389=     ?0                   ?0                  	;0
1733 413   ECHO/40                   ?0        $389                 ?0                  	;0
1734 414   GOTO/253                  ?0        ?2370                ?1292               	;0
1735 416   INIT_FCALL_BY_NAME/59     ?0        ?0                   1293:'json_encode'  	;1	<<276
1736 416   INIT_STATIC_METHOD_CALL/113 ?0        1295:'APIWrapper'    1297:'filterRows'   	;3
1737 416   INIT_STATIC_METHOD_CALL/113 ?0        1299:'APIWrapper'    1301:'Ab69ECd4d7705061'	;0
1738 416   DO_FCALL/60               $390=     ?0                   ?0                  	;0
1739 416   SEND_VAR_NO_REF_EX/50     ?80       $390                 ?1                  	;0
1740 416   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1741 416   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1742 416   DO_FCALL/60               $391=     ?0                   ?0                  	;0
1743 416   SEND_VAR_NO_REF_EX/50     ?80       $391                 ?1                  	;0
1744 416   DO_FCALL_BY_NAME/131      $392=     ?0                   ?0                  	;0
1745 416   ECHO/40                   ?0        $392                 ?0                  	;0
1746 417   GOTO/253                  ?0        ?2370                ?1303               	;0
1747 419   INIT_FCALL_BY_NAME/59     ?0        ?0                   1304:'json_encode'  	;1	<<278
1748 419   INIT_STATIC_METHOD_CALL/113 ?0        1306:'APIWrapper'    1308:'addBlockedIP' 	;1
1749 419   FETCH_DIM_FUNC_ARG/93     $393=     16?2                 1310:'id'           	;1
1750 419   SEND_VAR_EX/66            ?80       $393                 ?1                  	;0
1751 419   DO_FCALL/60               $394=     ?0                   ?0                  	;0
1752 419   SEND_VAR_NO_REF_EX/50     ?80       $394                 ?1                  	;0
1753 419   DO_FCALL_BY_NAME/131      $395=     ?0                   ?0                  	;0
1754 419   ECHO/40                   ?0        $395                 ?0                  	;0
1755 420   GOTO/253                  ?0        ?2370                ?1311               	;0
1756 422   INIT_FCALL_BY_NAME/59     ?0        ?0                   1312:'json_encode'  	;1	<<280
1757 422   INIT_STATIC_METHOD_CALL/113 ?0        1314:'APIWrapper'    1316:'c7EF58c0F7aCdb05'	;1
1758 422   FETCH_DIM_FUNC_ARG/93     $396=     16?2                 1318:'id'           	;1
1759 422   SEND_VAR_EX/66            ?80       $396                 ?1                  	;0
1760 422   DO_FCALL/60               $397=     ?0                   ?0                  	;0
1761 422   SEND_VAR_NO_REF_EX/50     ?80       $397                 ?1                  	;0
1762 422   DO_FCALL_BY_NAME/131      $398=     ?0                   ?0                  	;0
1763 422   ECHO/40                   ?0        $398                 ?0                  	;0
1764 423   GOTO/253                  ?0        ?2370                ?1319               	;0
1765 425   INIT_FCALL_BY_NAME/59     ?0        ?0                   1320:'json_encode'  	;1	<<282
1766 425   INIT_STATIC_METHOD_CALL/113 ?0        1322:'APIWrapper'    1324:'flushBlockedIPs'	;0
1767 425   DO_FCALL/60               $399=     ?0                   ?0                  	;0
1768 425   SEND_VAR_NO_REF_EX/50     ?80       $399                 ?1                  	;0
1769 425   DO_FCALL_BY_NAME/131      $400=     ?0                   ?0                  	;0
1770 425   ECHO/40                   ?0        $400                 ?0                  	;0
1771 426   GOTO/253                  ?0        ?2370                ?1326               	;0
1772 428   INIT_FCALL_BY_NAME/59     ?0        ?0                   1327:'json_encode'  	;1	<<284
1773 428   INIT_STATIC_METHOD_CALL/113 ?0        1329:'APIWrapper'    1331:'filterRow'    	;3
1774 428   INIT_STATIC_METHOD_CALL/113 ?0        1333:'APIWrapper'    1335:'cB6ee16e86F09E61'	;1
1775 428   FETCH_DIM_FUNC_ARG/93     $401=     16?2                 1337:'id'           	;1
1776 428   SEND_VAR_EX/66            ?80       $401                 ?1                  	;0
1777 428   DO_FCALL/60               $402=     ?0                   ?0                  	;0
1778 428   SEND_VAR_NO_REF_EX/50     ?80       $402                 ?1                  	;0
1779 428   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1780 428   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1781 428   DO_FCALL/60               $403=     ?0                   ?0                  	;0
1782 428   SEND_VAR_NO_REF_EX/50     ?80       $403                 ?1                  	;0
1783 428   DO_FCALL_BY_NAME/131      $404=     ?0                   ?0                  	;0
1784 428   ECHO/40                   ?0        $404                 ?0                  	;0
1785 429   GOTO/253                  ?0        ?2370                ?1338               	;0
1786 431   INIT_FCALL_BY_NAME/59     ?0        ?0                   1339:'json_encode'  	;1	<<286
1787 431   INIT_STATIC_METHOD_CALL/113 ?0        1341:'APIWrapper'    1343:'createStream' 	;1
1788 431   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1789 431   DO_FCALL/60               $405=     ?0                   ?0                  	;0
1790 431   SEND_VAR_NO_REF_EX/50     ?80       $405                 ?1                  	;0
1791 431   DO_FCALL_BY_NAME/131      $406=     ?0                   ?0                  	;0
1792 431   ECHO/40                   ?0        $406                 ?0                  	;0
1793 432   GOTO/253                  ?0        ?2370                ?1345               	;0
1794 434   FETCH_DIM_R/81            $407=     16?2                 1346:'id'           	;0	<<288
1795 434   ASSIGN/38                 ?397      16?7                 $407                	;0
1796 435   UNSET_DIM/75              ?0        16?2                 1347:'id'           	;0
1797 436   INIT_FCALL_BY_NAME/59     ?0        ?0                   1348:'json_encode'  	;1
1798 436   INIT_STATIC_METHOD_CALL/113 ?0        1350:'APIWrapper'    1352:'editStream'   	;2
1799 436   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1800 436   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1801 436   DO_FCALL/60               $409=     ?0                   ?0                  	;0
1802 436   SEND_VAR_NO_REF_EX/50     ?80       $409                 ?1                  	;0
1803 436   DO_FCALL_BY_NAME/131      $410=     ?0                   ?0                  	;0
1804 436   ECHO/40                   ?0        $410                 ?0                  	;0
1805 437   GOTO/253                  ?0        ?2370                ?1354               	;0
1806 439   INIT_FCALL_BY_NAME/59     ?0        ?0                   1355:'json_encode'  	;1	<<290
1807 439   INIT_STATIC_METHOD_CALL/113 ?0        1357:'APIWrapper'    1359:'e7f8e8Ecc8B6667B'	;2
1808 439   FETCH_DIM_FUNC_ARG/93     $411=     16?2                 1361:'id'           	;1
1809 439   SEND_VAR_EX/66            ?80       $411                 ?1                  	;0
1810 439   FETCH_DIM_IS/90           $412=     16?2                 1362:'server_id'    	;0
1811 439   COALESCE/169              #413=     $412                 ?1813               	;0
1812 439   QM_ASSIGN/22              #413=     1363:-1              ?0                  	;0
1813 439   SEND_VAL_EX/116           ?96       #413                 ?2                  	;0
1814 439   DO_FCALL/60               $414=     ?0                   ?0                  	;0
1815 439   SEND_VAR_NO_REF_EX/50     ?80       $414                 ?1                  	;0
1816 439   DO_FCALL_BY_NAME/131      $415=     ?0                   ?0                  	;0
1817 439   ECHO/40                   ?0        $415                 ?0                  	;0
1818 440   GOTO/253                  ?0        ?2370                ?1364               	;0
1819 444   INIT_FCALL_BY_NAME/59     ?0        ?0                   1365:'json_encode'  	;1	<<292,294,296
1820 444   INIT_STATIC_METHOD_CALL/113 ?0        1367:'APIWrapper'    1369:'fFa26438E002c2b7'	;2
1821 444   FETCH_DIM_FUNC_ARG/93     $416=     16?2                 1371:'id'           	;1
1822 444   SEND_VAR_EX/66            ?80       $416                 ?1                  	;0
1823 444   FETCH_DIM_FUNC_ARG/93     $417=     16?2                 1372:'server_id'    	;2
1824 444   SEND_VAR_EX/66            ?96       $417                 ?2                  	;0
1825 444   DO_FCALL/60               $418=     ?0                   ?0                  	;0
1826 444   SEND_VAR_NO_REF_EX/50     ?80       $418                 ?1                  	;0
1827 444   DO_FCALL_BY_NAME/131      $419=     ?0                   ?0                  	;0
1828 444   ECHO/40                   ?0        $419                 ?0                  	;0
1829 445   GOTO/253                  ?0        ?2370                ?1373               	;0
1830 449   INIT_FCALL_BY_NAME/59     ?0        ?0                   1374:'json_encode'  	;1	<<298,300,302
1831 449   INIT_STATIC_METHOD_CALL/113 ?0        1376:'APIWrapper'    1378:'eE173b194544b3a2'	;2
1832 449   FETCH_DIM_FUNC_ARG/93     $420=     16?2                 1380:'id'           	;1
1833 449   SEND_VAR_EX/66            ?80       $420                 ?1                  	;0
1834 449   FETCH_DIM_FUNC_ARG/93     $421=     16?2                 1381:'server_id'    	;2
1835 449   SEND_VAR_EX/66            ?96       $421                 ?2                  	;0
1836 449   DO_FCALL/60               $422=     ?0                   ?0                  	;0
1837 449   SEND_VAR_NO_REF_EX/50     ?80       $422                 ?1                  	;0
1838 449   DO_FCALL_BY_NAME/131      $423=     ?0                   ?0                  	;0
1839 449   ECHO/40                   ?0        $423                 ?0                  	;0
1840 450   GOTO/253                  ?0        ?2370                ?1382               	;0
1841 452   INIT_FCALL_BY_NAME/59     ?0        ?0                   1383:'json_encode'  	;1	<<304
1842 452   INIT_STATIC_METHOD_CALL/113 ?0        1385:'APIWrapper'    1387:'filterRow'    	;3
1843 452   INIT_STATIC_METHOD_CALL/113 ?0        1389:'APIWrapper'    1391:'getChannel'   	;1
1844 452   FETCH_DIM_FUNC_ARG/93     $424=     16?2                 1393:'id'           	;1
1845 452   SEND_VAR_EX/66            ?80       $424                 ?1                  	;0
1846 452   DO_FCALL/60               $425=     ?0                   ?0                  	;0
1847 452   SEND_VAR_NO_REF_EX/50     ?80       $425                 ?1                  	;0
1848 452   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1849 452   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1850 452   DO_FCALL/60               $426=     ?0                   ?0                  	;0
1851 452   SEND_VAR_NO_REF_EX/50     ?80       $426                 ?1                  	;0
1852 452   DO_FCALL_BY_NAME/131      $427=     ?0                   ?0                  	;0
1853 452   ECHO/40                   ?0        $427                 ?0                  	;0
1854 453   GOTO/253                  ?0        ?2370                ?1394               	;0
1855 455   INIT_FCALL_BY_NAME/59     ?0        ?0                   1395:'json_encode'  	;1	<<306
1856 455   INIT_STATIC_METHOD_CALL/113 ?0        1397:'APIWrapper'    1399:'C8EF91e4040dDd07'	;1
1857 455   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1858 455   DO_FCALL/60               $428=     ?0                   ?0                  	;0
1859 455   SEND_VAR_NO_REF_EX/50     ?80       $428                 ?1                  	;0
1860 455   DO_FCALL_BY_NAME/131      $429=     ?0                   ?0                  	;0
1861 455   ECHO/40                   ?0        $429                 ?0                  	;0
1862 456   GOTO/253                  ?0        ?2370                ?1401               	;0
1863 458   FETCH_DIM_R/81            $430=     16?2                 1402:'id'           	;0	<<308
1864 458   ASSIGN/38                 ?420      16?7                 $430                	;0
1865 459   UNSET_DIM/75              ?0        16?2                 1403:'id'           	;0
1866 460   INIT_FCALL_BY_NAME/59     ?0        ?0                   1404:'json_encode'  	;1
1867 460   INIT_STATIC_METHOD_CALL/113 ?0        1406:'APIWrapper'    1408:'editChannel'  	;2
1868 460   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1869 460   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1870 460   DO_FCALL/60               $432=     ?0                   ?0                  	;0
1871 460   SEND_VAR_NO_REF_EX/50     ?80       $432                 ?1                  	;0
1872 460   DO_FCALL_BY_NAME/131      $433=     ?0                   ?0                  	;0
1873 460   ECHO/40                   ?0        $433                 ?0                  	;0
1874 461   GOTO/253                  ?0        ?2370                ?1410               	;0
1875 463   INIT_FCALL_BY_NAME/59     ?0        ?0                   1411:'json_encode'  	;1	<<310
1876 463   INIT_STATIC_METHOD_CALL/113 ?0        1413:'APIWrapper'    1415:'deleteChannel'	;2
1877 463   FETCH_DIM_FUNC_ARG/93     $434=     16?2                 1417:'id'           	;1
1878 463   SEND_VAR_EX/66            ?80       $434                 ?1                  	;0
1879 463   FETCH_DIM_IS/90           $435=     16?2                 1418:'server_id'    	;0
1880 463   COALESCE/169              #436=     $435                 ?1882               	;0
1881 463   QM_ASSIGN/22              #436=     1419:-1              ?0                  	;0
1882 463   SEND_VAL_EX/116           ?96       #436                 ?2                  	;0
1883 463   DO_FCALL/60               $437=     ?0                   ?0                  	;0
1884 463   SEND_VAR_NO_REF_EX/50     ?80       $437                 ?1                  	;0
1885 463   DO_FCALL_BY_NAME/131      $438=     ?0                   ?0                  	;0
1886 463   ECHO/40                   ?0        $438                 ?0                  	;0
1887 464   GOTO/253                  ?0        ?2370                ?1420               	;0
1888 466   INIT_FCALL_BY_NAME/59     ?0        ?0                   1421:'json_encode'  	;1	<<312
1889 466   INIT_STATIC_METHOD_CALL/113 ?0        1423:'APIWrapper'    1425:'filterRow'    	;3
1890 466   INIT_STATIC_METHOD_CALL/113 ?0        1427:'APIWrapper'    1429:'getStation'   	;1
1891 466   FETCH_DIM_FUNC_ARG/93     $439=     16?2                 1431:'id'           	;1
1892 466   SEND_VAR_EX/66            ?80       $439                 ?1                  	;0
1893 466   DO_FCALL/60               $440=     ?0                   ?0                  	;0
1894 466   SEND_VAR_NO_REF_EX/50     ?80       $440                 ?1                  	;0
1895 466   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1896 466   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1897 466   DO_FCALL/60               $441=     ?0                   ?0                  	;0
1898 466   SEND_VAR_NO_REF_EX/50     ?80       $441                 ?1                  	;0
1899 466   DO_FCALL_BY_NAME/131      $442=     ?0                   ?0                  	;0
1900 466   ECHO/40                   ?0        $442                 ?0                  	;0
1901 467   GOTO/253                  ?0        ?2370                ?1432               	;0
1902 469   INIT_FCALL_BY_NAME/59     ?0        ?0                   1433:'json_encode'  	;1	<<314
1903 469   INIT_STATIC_METHOD_CALL/113 ?0        1435:'APIWrapper'    1437:'createStation'	;1
1904 469   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1905 469   DO_FCALL/60               $443=     ?0                   ?0                  	;0
1906 469   SEND_VAR_NO_REF_EX/50     ?80       $443                 ?1                  	;0
1907 469   DO_FCALL_BY_NAME/131      $444=     ?0                   ?0                  	;0
1908 469   ECHO/40                   ?0        $444                 ?0                  	;0
1909 470   GOTO/253                  ?0        ?2370                ?1439               	;0
1910 472   FETCH_DIM_R/81            $445=     16?2                 1440:'id'           	;0	<<316
1911 472   ASSIGN/38                 ?435      16?7                 $445                	;0
1912 473   UNSET_DIM/75              ?0        16?2                 1441:'id'           	;0
1913 474   INIT_FCALL_BY_NAME/59     ?0        ?0                   1442:'json_encode'  	;1
1914 474   INIT_STATIC_METHOD_CALL/113 ?0        1444:'APIWrapper'    1446:'editStation'  	;2
1915 474   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1916 474   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1917 474   DO_FCALL/60               $447=     ?0                   ?0                  	;0
1918 474   SEND_VAR_NO_REF_EX/50     ?80       $447                 ?1                  	;0
1919 474   DO_FCALL_BY_NAME/131      $448=     ?0                   ?0                  	;0
1920 474   ECHO/40                   ?0        $448                 ?0                  	;0
1921 475   GOTO/253                  ?0        ?2370                ?1448               	;0
1922 477   INIT_FCALL_BY_NAME/59     ?0        ?0                   1449:'json_encode'  	;1	<<318
1923 477   INIT_STATIC_METHOD_CALL/113 ?0        1451:'APIWrapper'    1453:'deleteStation'	;2
1924 477   FETCH_DIM_FUNC_ARG/93     $449=     16?2                 1455:'id'           	;1
1925 477   SEND_VAR_EX/66            ?80       $449                 ?1                  	;0
1926 477   FETCH_DIM_IS/90           $450=     16?2                 1456:'server_id'    	;0
1927 477   COALESCE/169              #451=     $450                 ?1929               	;0
1928 477   QM_ASSIGN/22              #451=     1457:-1              ?0                  	;0
1929 477   SEND_VAL_EX/116           ?96       #451                 ?2                  	;0
1930 477   DO_FCALL/60               $452=     ?0                   ?0                  	;0
1931 477   SEND_VAR_NO_REF_EX/50     ?80       $452                 ?1                  	;0
1932 477   DO_FCALL_BY_NAME/131      $453=     ?0                   ?0                  	;0
1933 477   ECHO/40                   ?0        $453                 ?0                  	;0
1934 478   GOTO/253                  ?0        ?2370                ?1458               	;0
1935 480   INIT_FCALL_BY_NAME/59     ?0        ?0                   1459:'json_encode'  	;1	<<320
1936 480   INIT_STATIC_METHOD_CALL/113 ?0        1461:'APIWrapper'    1463:'filterRow'    	;3
1937 480   INIT_STATIC_METHOD_CALL/113 ?0        1465:'APIWrapper'    1467:'getMovie'     	;1
1938 480   FETCH_DIM_FUNC_ARG/93     $454=     16?2                 1469:'id'           	;1
1939 480   SEND_VAR_EX/66            ?80       $454                 ?1                  	;0
1940 480   DO_FCALL/60               $455=     ?0                   ?0                  	;0
1941 480   SEND_VAR_NO_REF_EX/50     ?80       $455                 ?1                  	;0
1942 480   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1943 480   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
1944 480   DO_FCALL/60               $456=     ?0                   ?0                  	;0
1945 480   SEND_VAR_NO_REF_EX/50     ?80       $456                 ?1                  	;0
1946 480   DO_FCALL_BY_NAME/131      $457=     ?0                   ?0                  	;0
1947 480   ECHO/40                   ?0        $457                 ?0                  	;0
1948 481   GOTO/253                  ?0        ?2370                ?1470               	;0
1949 483   INIT_FCALL_BY_NAME/59     ?0        ?0                   1471:'json_encode'  	;1	<<322
1950 483   INIT_STATIC_METHOD_CALL/113 ?0        1473:'APIWrapper'    1475:'createMovie'  	;1
1951 483   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1952 483   DO_FCALL/60               $458=     ?0                   ?0                  	;0
1953 483   SEND_VAR_NO_REF_EX/50     ?80       $458                 ?1                  	;0
1954 483   DO_FCALL_BY_NAME/131      $459=     ?0                   ?0                  	;0
1955 483   ECHO/40                   ?0        $459                 ?0                  	;0
1956 484   GOTO/253                  ?0        ?2370                ?1477               	;0
1957 486   FETCH_DIM_R/81            $460=     16?2                 1478:'id'           	;0	<<324
1958 486   ASSIGN/38                 ?450      16?7                 $460                	;0
1959 487   UNSET_DIM/75              ?0        16?2                 1479:'id'           	;0
1960 488   INIT_FCALL_BY_NAME/59     ?0        ?0                   1480:'json_encode'  	;1
1961 488   INIT_STATIC_METHOD_CALL/113 ?0        1482:'APIWrapper'    1484:'editMovie'    	;2
1962 488   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1963 488   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
1964 488   DO_FCALL/60               $462=     ?0                   ?0                  	;0
1965 488   SEND_VAR_NO_REF_EX/50     ?80       $462                 ?1                  	;0
1966 488   DO_FCALL_BY_NAME/131      $463=     ?0                   ?0                  	;0
1967 488   ECHO/40                   ?0        $463                 ?0                  	;0
1968 489   GOTO/253                  ?0        ?2370                ?1486               	;0
1969 491   INIT_FCALL_BY_NAME/59     ?0        ?0                   1487:'json_encode'  	;1	<<326
1970 491   INIT_STATIC_METHOD_CALL/113 ?0        1489:'APIWrapper'    1491:'deleteMovie'  	;2
1971 491   FETCH_DIM_FUNC_ARG/93     $464=     16?2                 1493:'id'           	;1
1972 491   SEND_VAR_EX/66            ?80       $464                 ?1                  	;0
1973 491   FETCH_DIM_IS/90           $465=     16?2                 1494:'server_id'    	;0
1974 491   COALESCE/169              #466=     $465                 ?1976               	;0
1975 491   QM_ASSIGN/22              #466=     1495:-1              ?0                  	;0
1976 491   SEND_VAL_EX/116           ?96       #466                 ?2                  	;0
1977 491   DO_FCALL/60               $467=     ?0                   ?0                  	;0
1978 491   SEND_VAR_NO_REF_EX/50     ?80       $467                 ?1                  	;0
1979 491   DO_FCALL_BY_NAME/131      $468=     ?0                   ?0                  	;0
1980 491   ECHO/40                   ?0        $468                 ?0                  	;0
1981 492   GOTO/253                  ?0        ?2370                ?1496               	;0
1982 495   INIT_FCALL_BY_NAME/59     ?0        ?0                   1497:'json_encode'  	;1	<<328,330
1983 495   INIT_STATIC_METHOD_CALL/113 ?0        1499:'APIWrapper'    1501:'A0d6Da3165b447b7'	;2
1984 495   FETCH_DIM_FUNC_ARG/93     $469=     16?2                 1503:'id'           	;1
1985 495   SEND_VAR_EX/66            ?80       $469                 ?1                  	;0
1986 495   FETCH_DIM_FUNC_ARG/93     $470=     16?2                 1504:'server_id'    	;2
1987 495   SEND_VAR_EX/66            ?96       $470                 ?2                  	;0
1988 495   DO_FCALL/60               $471=     ?0                   ?0                  	;0
1989 495   SEND_VAR_NO_REF_EX/50     ?80       $471                 ?1                  	;0
1990 495   DO_FCALL_BY_NAME/131      $472=     ?0                   ?0                  	;0
1991 495   ECHO/40                   ?0        $472                 ?0                  	;0
1992 496   GOTO/253                  ?0        ?2370                ?1505               	;0
1993 499   INIT_FCALL_BY_NAME/59     ?0        ?0                   1506:'json_encode'  	;1	<<332,334
1994 499   INIT_STATIC_METHOD_CALL/113 ?0        1508:'APIWrapper'    1510:'d6CC5a7De37FA642'	;2
1995 499   FETCH_DIM_FUNC_ARG/93     $473=     16?2                 1512:'id'           	;1
1996 499   SEND_VAR_EX/66            ?80       $473                 ?1                  	;0
1997 499   FETCH_DIM_FUNC_ARG/93     $474=     16?2                 1513:'server_id'    	;2
1998 499   SEND_VAR_EX/66            ?96       $474                 ?2                  	;0
1999 499   DO_FCALL/60               $475=     ?0                   ?0                  	;0
2000 499   SEND_VAR_NO_REF_EX/50     ?80       $475                 ?1                  	;0
2001 499   DO_FCALL_BY_NAME/131      $476=     ?0                   ?0                  	;0
2002 499   ECHO/40                   ?0        $476                 ?0                  	;0
2003 500   GOTO/253                  ?0        ?2370                ?1514               	;0
2004 502   INIT_FCALL_BY_NAME/59     ?0        ?0                   1515:'json_encode'  	;1	<<336
2005 502   INIT_STATIC_METHOD_CALL/113 ?0        1517:'APIWrapper'    1519:'filterRow'    	;3
2006 502   INIT_STATIC_METHOD_CALL/113 ?0        1521:'APIWrapper'    1523:'getEpisode'   	;1
2007 502   FETCH_DIM_FUNC_ARG/93     $477=     16?2                 1525:'id'           	;1
2008 502   SEND_VAR_EX/66            ?80       $477                 ?1                  	;0
2009 502   DO_FCALL/60               $478=     ?0                   ?0                  	;0
2010 502   SEND_VAR_NO_REF_EX/50     ?80       $478                 ?1                  	;0
2011 502   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
2012 502   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
2013 502   DO_FCALL/60               $479=     ?0                   ?0                  	;0
2014 502   SEND_VAR_NO_REF_EX/50     ?80       $479                 ?1                  	;0
2015 502   DO_FCALL_BY_NAME/131      $480=     ?0                   ?0                  	;0
2016 502   ECHO/40                   ?0        $480                 ?0                  	;0
2017 503   GOTO/253                  ?0        ?2370                ?1526               	;0
2018 505   INIT_FCALL_BY_NAME/59     ?0        ?0                   1527:'json_encode'  	;1	<<338
2019 505   INIT_STATIC_METHOD_CALL/113 ?0        1529:'APIWrapper'    1531:'createEpisode'	;1
2020 505   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2021 505   DO_FCALL/60               $481=     ?0                   ?0                  	;0
2022 505   SEND_VAR_NO_REF_EX/50     ?80       $481                 ?1                  	;0
2023 505   DO_FCALL_BY_NAME/131      $482=     ?0                   ?0                  	;0
2024 505   ECHO/40                   ?0        $482                 ?0                  	;0
2025 506   GOTO/253                  ?0        ?2370                ?1533               	;0
2026 508   FETCH_DIM_R/81            $483=     16?2                 1534:'id'           	;0	<<340
2027 508   ASSIGN/38                 ?473      16?7                 $483                	;0
2028 509   UNSET_DIM/75              ?0        16?2                 1535:'id'           	;0
2029 510   INIT_FCALL_BY_NAME/59     ?0        ?0                   1536:'json_encode'  	;1
2030 510   INIT_STATIC_METHOD_CALL/113 ?0        1538:'APIWrapper'    1540:'editEpisode'  	;2
2031 510   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
2032 510   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
2033 510   DO_FCALL/60               $485=     ?0                   ?0                  	;0
2034 510   SEND_VAR_NO_REF_EX/50     ?80       $485                 ?1                  	;0
2035 510   DO_FCALL_BY_NAME/131      $486=     ?0                   ?0                  	;0
2036 510   ECHO/40                   ?0        $486                 ?0                  	;0
2037 511   GOTO/253                  ?0        ?2370                ?1542               	;0
2038 513   INIT_FCALL_BY_NAME/59     ?0        ?0                   1543:'json_encode'  	;1	<<342
2039 513   INIT_STATIC_METHOD_CALL/113 ?0        1545:'APIWrapper'    1547:'deleteEpisode'	;2
2040 513   FETCH_DIM_FUNC_ARG/93     $487=     16?2                 1549:'id'           	;1
2041 513   SEND_VAR_EX/66            ?80       $487                 ?1                  	;0
2042 513   FETCH_DIM_IS/90           $488=     16?2                 1550:'server_id'    	;0
2043 513   COALESCE/169              #489=     $488                 ?2045               	;0
2044 513   QM_ASSIGN/22              #489=     1551:-1              ?0                  	;0
2045 513   SEND_VAL_EX/116           ?96       #489                 ?2                  	;0
2046 513   DO_FCALL/60               $490=     ?0                   ?0                  	;0
2047 513   SEND_VAR_NO_REF_EX/50     ?80       $490                 ?1                  	;0
2048 513   DO_FCALL_BY_NAME/131      $491=     ?0                   ?0                  	;0
2049 513   ECHO/40                   ?0        $491                 ?0                  	;0
2050 514   GOTO/253                  ?0        ?2370                ?1552               	;0
2051 516   INIT_FCALL_BY_NAME/59     ?0        ?0                   1553:'json_encode'  	;1	<<344
2052 516   INIT_STATIC_METHOD_CALL/113 ?0        1555:'APIWrapper'    1557:'filterRow'    	;3
2053 516   INIT_STATIC_METHOD_CALL/113 ?0        1559:'APIWrapper'    1561:'B977eA070b44f074'	;1
2054 516   FETCH_DIM_FUNC_ARG/93     $492=     16?2                 1563:'id'           	;1
2055 516   SEND_VAR_EX/66            ?80       $492                 ?1                  	;0
2056 516   DO_FCALL/60               $493=     ?0                   ?0                  	;0
2057 516   SEND_VAR_NO_REF_EX/50     ?80       $493                 ?1                  	;0
2058 516   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
2059 516   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
2060 516   DO_FCALL/60               $494=     ?0                   ?0                  	;0
2061 516   SEND_VAR_NO_REF_EX/50     ?80       $494                 ?1                  	;0
2062 516   DO_FCALL_BY_NAME/131      $495=     ?0                   ?0                  	;0
2063 516   ECHO/40                   ?0        $495                 ?0                  	;0
2064 517   GOTO/253                  ?0        ?2370                ?1564               	;0
2065 519   INIT_FCALL_BY_NAME/59     ?0        ?0                   1565:'json_encode'  	;1	<<346
2066 519   INIT_STATIC_METHOD_CALL/113 ?0        1567:'APIWrapper'    1569:'createSeries' 	;1
2067 519   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2068 519   DO_FCALL/60               $496=     ?0                   ?0                  	;0
2069 519   SEND_VAR_NO_REF_EX/50     ?80       $496                 ?1                  	;0
2070 519   DO_FCALL_BY_NAME/131      $497=     ?0                   ?0                  	;0
2071 519   ECHO/40                   ?0        $497                 ?0                  	;0
2072 520   GOTO/253                  ?0        ?2370                ?1571               	;0
2073 522   FETCH_DIM_R/81            $498=     16?2                 1572:'id'           	;0	<<348
2074 522   ASSIGN/38                 ?488      16?7                 $498                	;0
2075 523   UNSET_DIM/75              ?0        16?2                 1573:'id'           	;0
2076 524   INIT_FCALL_BY_NAME/59     ?0        ?0                   1574:'json_encode'  	;1
2077 524   INIT_STATIC_METHOD_CALL/113 ?0        1576:'APIWrapper'    1578:'editSeries'   	;2
2078 524   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
2079 524   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
2080 524   DO_FCALL/60               $500=     ?0                   ?0                  	;0
2081 524   SEND_VAR_NO_REF_EX/50     ?80       $500                 ?1                  	;0
2082 524   DO_FCALL_BY_NAME/131      $501=     ?0                   ?0                  	;0
2083 524   ECHO/40                   ?0        $501                 ?0                  	;0
2084 525   GOTO/253                  ?0        ?2370                ?1580               	;0
2085 527   INIT_FCALL_BY_NAME/59     ?0        ?0                   1581:'json_encode'  	;1	<<350
2086 527   INIT_STATIC_METHOD_CALL/113 ?0        1583:'APIWrapper'    1585:'c21831D749bA3774'	;1
2087 527   FETCH_DIM_FUNC_ARG/93     $502=     16?2                 1587:'id'           	;1
2088 527   SEND_VAR_EX/66            ?80       $502                 ?1                  	;0
2089 527   DO_FCALL/60               $503=     ?0                   ?0                  	;0
2090 527   SEND_VAR_NO_REF_EX/50     ?80       $503                 ?1                  	;0
2091 527   DO_FCALL_BY_NAME/131      $504=     ?0                   ?0                  	;0
2092 527   ECHO/40                   ?0        $504                 ?0                  	;0
2093 528   GOTO/253                  ?0        ?2370                ?1588               	;0
2094 530   INIT_FCALL_BY_NAME/59     ?0        ?0                   1589:'json_encode'  	;1	<<352
2095 530   INIT_STATIC_METHOD_CALL/113 ?0        1591:'APIWrapper'    1593:'filterRows'   	;3
2096 530   INIT_STATIC_METHOD_CALL/113 ?0        1595:'APIWrapper'    1597:'F76008f8dFe1898C'	;0
2097 530   DO_FCALL/60               $505=     ?0                   ?0                  	;0
2098 530   SEND_VAR_NO_REF_EX/50     ?80       $505                 ?1                  	;0
2099 530   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
2100 530   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
2101 530   DO_FCALL/60               $506=     ?0                   ?0                  	;0
2102 530   SEND_VAR_NO_REF_EX/50     ?80       $506                 ?1                  	;0
2103 530   DO_FCALL_BY_NAME/131      $507=     ?0                   ?0                  	;0
2104 530   ECHO/40                   ?0        $507                 ?0                  	;0
2105 531   GOTO/253                  ?0        ?2370                ?1599               	;0
2106 533   INIT_FCALL_BY_NAME/59     ?0        ?0                   1600:'json_encode'  	;1	<<354
2107 533   INIT_STATIC_METHOD_CALL/113 ?0        1602:'APIWrapper'    1604:'filterRow'    	;3
2108 533   INIT_STATIC_METHOD_CALL/113 ?0        1606:'APIWrapper'    1608:'getServer'    	;1
2109 533   FETCH_DIM_FUNC_ARG/93     $508=     16?2                 1610:'id'           	;1
2110 533   SEND_VAR_EX/66            ?80       $508                 ?1                  	;0
2111 533   DO_FCALL/60               $509=     ?0                   ?0                  	;0
2112 533   SEND_VAR_NO_REF_EX/50     ?80       $509                 ?1                  	;0
2113 533   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
2114 533   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
2115 533   DO_FCALL/60               $510=     ?0                   ?0                  	;0
2116 533   SEND_VAR_NO_REF_EX/50     ?80       $510                 ?1                  	;0
2117 533   DO_FCALL_BY_NAME/131      $511=     ?0                   ?0                  	;0
2118 533   ECHO/40                   ?0        $511                 ?0                  	;0
2119 534   GOTO/253                  ?0        ?2370                ?1611               	;0
2120 536   ASSIGN_DIM/147            ?501      16?2                 1612:'type'         	;0	<<356
2121 536   OP_DATA/137               ?0        1613:0               ?0                  	;0
2122 537   INIT_FCALL_BY_NAME/59     ?0        ?0                   1614:'json_encode'  	;1
2123 537   INIT_STATIC_METHOD_CALL/113 ?0        1616:'APIWrapper'    1618:'F7b37A01d2B82F24'	;1
2124 537   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2125 537   DO_FCALL/60               $513=     ?0                   ?0                  	;0
2126 537   SEND_VAR_NO_REF_EX/50     ?80       $513                 ?1                  	;0
2127 537   DO_FCALL_BY_NAME/131      $514=     ?0                   ?0                  	;0
2128 537   ECHO/40                   ?0        $514                 ?0                  	;0
2129 538   GOTO/253                  ?0        ?2370                ?1620               	;0
2130 540   ASSIGN_DIM/147            ?504      16?2                 1621:'type'         	;0	<<358
2131 540   OP_DATA/137               ?0        1622:1               ?0                  	;0
2132 541   INIT_FCALL_BY_NAME/59     ?0        ?0                   1623:'json_encode'  	;1
2133 541   INIT_STATIC_METHOD_CALL/113 ?0        1625:'APIWrapper'    1627:'f7B37A01D2b82f24'	;1
2134 541   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2135 541   DO_FCALL/60               $516=     ?0                   ?0                  	;0
2136 541   SEND_VAR_NO_REF_EX/50     ?80       $516                 ?1                  	;0
2137 541   DO_FCALL_BY_NAME/131      $517=     ?0                   ?0                  	;0
2138 541   ECHO/40                   ?0        $517                 ?0                  	;0
2139 542   GOTO/253                  ?0        ?2370                ?1629               	;0
2140 544   FETCH_DIM_R/81            $518=     16?2                 1630:'id'           	;0	<<360
2141 544   ASSIGN/38                 ?508      16?7                 $518                	;0
2142 545   UNSET_DIM/75              ?0        16?2                 1631:'id'           	;0
2143 546   INIT_FCALL_BY_NAME/59     ?0        ?0                   1632:'json_encode'  	;1
2144 546   INIT_STATIC_METHOD_CALL/113 ?0        1634:'APIWrapper'    1636:'editServer'   	;2
2145 546   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
2146 546   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
2147 546   DO_FCALL/60               $520=     ?0                   ?0                  	;0
2148 546   SEND_VAR_NO_REF_EX/50     ?80       $520                 ?1                  	;0
2149 546   DO_FCALL_BY_NAME/131      $521=     ?0                   ?0                  	;0
2150 546   ECHO/40                   ?0        $521                 ?0                  	;0
2151 547   GOTO/253                  ?0        ?2370                ?1638               	;0
2152 549   FETCH_DIM_R/81            $522=     16?2                 1639:'id'           	;0	<<362
2153 549   ASSIGN/38                 ?512      16?7                 $522                	;0
2154 550   UNSET_DIM/75              ?0        16?2                 1640:'id'           	;0
2155 551   INIT_FCALL_BY_NAME/59     ?0        ?0                   1641:'json_encode'  	;1
2156 551   INIT_STATIC_METHOD_CALL/113 ?0        1643:'APIWrapper'    1645:'editProxy'    	;2
2157 551   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
2158 551   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
2159 551   DO_FCALL/60               $524=     ?0                   ?0                  	;0
2160 551   SEND_VAR_NO_REF_EX/50     ?80       $524                 ?1                  	;0
2161 551   DO_FCALL_BY_NAME/131      $525=     ?0                   ?0                  	;0
2162 551   ECHO/40                   ?0        $525                 ?0                  	;0
2163 552   GOTO/253                  ?0        ?2370                ?1647               	;0
2164 554   INIT_FCALL_BY_NAME/59     ?0        ?0                   1648:'json_encode'  	;1	<<364
2165 554   INIT_STATIC_METHOD_CALL/113 ?0        1650:'APIWrapper'    1652:'aA735B84dcbc9D64'	;1
2166 554   FETCH_DIM_FUNC_ARG/93     $526=     16?2                 1654:'id'           	;1
2167 554   SEND_VAR_EX/66            ?80       $526                 ?1                  	;0
2168 554   DO_FCALL/60               $527=     ?0                   ?0                  	;0
2169 554   SEND_VAR_NO_REF_EX/50     ?80       $527                 ?1                  	;0
2170 554   DO_FCALL_BY_NAME/131      $528=     ?0                   ?0                  	;0
2171 554   ECHO/40                   ?0        $528                 ?0                  	;0
2172 555   GOTO/253                  ?0        ?2370                ?1655               	;0
2173 557   INIT_FCALL_BY_NAME/59     ?0        ?0                   1656:'json_encode'  	;1	<<366
2174 557   INIT_STATIC_METHOD_CALL/113 ?0        1658:'APIWrapper'    1660:'filterRow'    	;3
2175 557   INIT_STATIC_METHOD_CALL/113 ?0        1662:'APIWrapper'    1664:'ac49B56dbe10E52C'	;0
2176 557   DO_FCALL/60               $529=     ?0                   ?0                  	;0
2177 557   SEND_VAR_NO_REF_EX/50     ?80       $529                 ?1                  	;0
2178 557   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
2179 557   SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
2180 557   DO_FCALL/60               $530=     ?0                   ?0                  	;0
2181 557   SEND_VAR_NO_REF_EX/50     ?80       $530                 ?1                  	;0
2182 557   DO_FCALL_BY_NAME/131      $531=     ?0                   ?0                  	;0
2183 557   ECHO/40                   ?0        $531                 ?0                  	;0
2184 558   GOTO/253                  ?0        ?2370                ?1666               	;0
2185 560   INIT_FCALL_BY_NAME/59     ?0        ?0                   1667:'json_encode'  	;1	<<368
2186 560   INIT_STATIC_METHOD_CALL/113 ?0        1669:'APIWrapper'    1671:'d0d0e87FB9aD0543'	;1
2187 560   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2188 560   DO_FCALL/60               $532=     ?0                   ?0                  	;0
2189 560   SEND_VAR_NO_REF_EX/50     ?80       $532                 ?1                  	;0
2190 560   DO_FCALL_BY_NAME/131      $533=     ?0                   ?0                  	;0
2191 560   ECHO/40                   ?0        $533                 ?0                  	;0
2192 561   GOTO/253                  ?0        ?2370                ?1673               	;0
2193 563   INIT_FCALL_BY_NAME/59     ?0        ?0                   1674:'json_encode'  	;1	<<370
2194 563   INIT_STATIC_METHOD_CALL/113 ?0        1676:'APIWrapper'    1678:'afF015C358eb0964'	;1
2195 563   FETCH_DIM_IS/90           $534=     16?2                 1680:'server_id'    	;0
2196 563   COALESCE/169              #535=     $534                 ?2199               	;0
2197 563   FETCH_CONSTANT/99         #536=     ?0                   1681:'SERVER_ID'    	;16
2198 563   QM_ASSIGN/22              #535=     #536                 ?0                  	;0
2199 563   SEND_VAL_EX/116           ?80       #535                 ?1                  	;0
2200 563   DO_FCALL/60               $537=     ?0                   ?0                  	;0
2201 563   SEND_VAR_NO_REF_EX/50     ?80       $537                 ?1                  	;0
2202 563   DO_FCALL_BY_NAME/131      $538=     ?0                   ?0                  	;0
2203 563   ECHO/40                   ?0        $538                 ?0                  	;0
2204 564   GOTO/253                  ?0        ?2370                ?1684               	;0
2205 566   INIT_FCALL_BY_NAME/59     ?0        ?0                   1685:'json_encode'  	;1	<<372
2206 566   INIT_STATIC_METHOD_CALL/113 ?0        1687:'APIWrapper'    1689:'getFPMStatus' 	;1
2207 566   FETCH_DIM_IS/90           $539=     16?2                 1691:'server_id'    	;0
2208 566   COALESCE/169              #540=     $539                 ?2211               	;0
2209 566   FETCH_CONSTANT/99         #541=     ?0                   1692:'SERVER_ID'    	;16
2210 566   QM_ASSIGN/22              #540=     #541                 ?0                  	;0
2211 566   SEND_VAL_EX/116           ?80       #540                 ?1                  	;0
2212 566   DO_FCALL/60               $542=     ?0                   ?0                  	;0
2213 566   SEND_VAR_NO_REF_EX/50     ?80       $542                 ?1                  	;0
2214 566   DO_FCALL_BY_NAME/131      $543=     ?0                   ?0                  	;0
2215 566   ECHO/40                   ?0        $543                 ?0                  	;0
2216 567   GOTO/253                  ?0        ?2370                ?1695               	;0
2217 569   INIT_FCALL_BY_NAME/59     ?0        ?0                   1696:'json_encode'  	;1	<<374
2218 569   INIT_STATIC_METHOD_CALL/113 ?0        1698:'APIWrapper'    1700:'E5aF2E0e9Ad188B4'	;1
2219 569   FETCH_DIM_IS/90           $544=     16?2                 1702:'server_id'    	;0
2220 569   COALESCE/169              #545=     $544                 ?2223               	;0
2221 569   FETCH_CONSTANT/99         #546=     ?0                   1703:'SERVER_ID'    	;16
2222 569   QM_ASSIGN/22              #545=     #546                 ?0                  	;0
2223 569   SEND_VAL_EX/116           ?80       #545                 ?1                  	;0
2224 569   DO_FCALL/60               $547=     ?0                   ?0                  	;0
2225 569   SEND_VAR_NO_REF_EX/50     ?80       $547                 ?1                  	;0
2226 569   DO_FCALL_BY_NAME/131      $548=     ?0                   ?0                  	;0
2227 569   ECHO/40                   ?0        $548                 ?0                  	;0
2228 570   GOTO/253                  ?0        ?2370                ?1706               	;0
2229 572   INIT_FCALL_BY_NAME/59     ?0        ?0                   1707:'json_encode'  	;1	<<376
2230 572   INIT_STATIC_METHOD_CALL/113 ?0        1709:'APIWrapper'    1711:'c61402197478CaF1'	;1
2231 572   FETCH_DIM_IS/90           $549=     16?2                 1713:'server_id'    	;0
2232 572   COALESCE/169              #550=     $549                 ?2235               	;0
2233 572   FETCH_CONSTANT/99         #551=     ?0                   1714:'SERVER_ID'    	;16
2234 572   QM_ASSIGN/22              #550=     #551                 ?0                  	;0
2235 572   SEND_VAL_EX/116           ?80       #550                 ?1                  	;0
2236 572   DO_FCALL/60               $552=     ?0                   ?0                  	;0
2237 572   SEND_VAR_NO_REF_EX/50     ?80       $552                 ?1                  	;0
2238 572   DO_FCALL_BY_NAME/131      $553=     ?0                   ?0                  	;0
2239 572   ECHO/40                   ?0        $553                 ?0                  	;0
2240 573   GOTO/253                  ?0        ?2370                ?1717               	;0
2241 575   INIT_FCALL_BY_NAME/59     ?0        ?0                   1718:'json_encode'  	;1	<<378
2242 575   INIT_STATIC_METHOD_CALL/113 ?0        1720:'APIWrapper'    1722:'aC675966591fEe08'	;1
2243 575   FETCH_DIM_IS/90           $554=     16?2                 1724:'server_id'    	;0
2244 575   COALESCE/169              #555=     $554                 ?2247               	;0
2245 575   FETCH_CONSTANT/99         #556=     ?0                   1725:'SERVER_ID'    	;16
2246 575   QM_ASSIGN/22              #555=     #556                 ?0                  	;0
2247 575   SEND_VAL_EX/116           ?80       #555                 ?1                  	;0
2248 575   DO_FCALL/60               $557=     ?0                   ?0                  	;0
2249 575   SEND_VAR_NO_REF_EX/50     ?80       $557                 ?1                  	;0
2250 575   DO_FCALL_BY_NAME/131      $558=     ?0                   ?0                  	;0
2251 575   ECHO/40                   ?0        $558                 ?0                  	;0
2252 576   GOTO/253                  ?0        ?2370                ?1728               	;0
2253 578   INIT_FCALL_BY_NAME/59     ?0        ?0                   1729:'json_encode'  	;1	<<380
2254 578   INIT_STATIC_METHOD_CALL/113 ?0        1731:'APIWrapper'    1733:'d6a9D4057776E78d'	;1
2255 578   FETCH_DIM_IS/90           $559=     16?2                 1735:'server_id'    	;0
2256 578   COALESCE/169              #560=     $559                 ?2259               	;0
2257 578   FETCH_CONSTANT/99         #561=     ?0                   1736:'SERVER_ID'    	;16
2258 578   QM_ASSIGN/22              #560=     #561                 ?0                  	;0
2259 578   SEND_VAL_EX/116           ?80       #560                 ?1                  	;0
2260 578   DO_FCALL/60               $562=     ?0                   ?0                  	;0
2261 578   SEND_VAR_NO_REF_EX/50     ?80       $562                 ?1                  	;0
2262 578   DO_FCALL_BY_NAME/131      $563=     ?0                   ?0                  	;0
2263 578   ECHO/40                   ?0        $563                 ?0                  	;0
2264 579   GOTO/253                  ?0        ?2370                ?1739               	;0
2265 581   INIT_FCALL_BY_NAME/59     ?0        ?0                   1740:'json_encode'  	;1	<<382
2266 581   INIT_STATIC_METHOD_CALL/113 ?0        1742:'APIWrapper'    1744:'D69C16Fbfb19997C'	;1
2267 581   FETCH_DIM_IS/90           $564=     16?2                 1746:'server_id'    	;0
2268 581   COALESCE/169              #565=     $564                 ?2271               	;0
2269 581   FETCH_CONSTANT/99         #566=     ?0                   1747:'SERVER_ID'    	;16
2270 581   QM_ASSIGN/22              #565=     #566                 ?0                  	;0
2271 581   SEND_VAL_EX/116           ?80       #565                 ?1                  	;0
2272 581   DO_FCALL/60               $567=     ?0                   ?0                  	;0
2273 581   SEND_VAR_NO_REF_EX/50     ?80       $567                 ?1                  	;0
2274 581   DO_FCALL_BY_NAME/131      $568=     ?0                   ?0                  	;0
2275 581   ECHO/40                   ?0        $568                 ?0                  	;0
2276 582   GOTO/253                  ?0        ?2370                ?1750               	;0
2277 584   INIT_FCALL_BY_NAME/59     ?0        ?0                   1751:'json_encode'  	;1	<<384
2278 584   INIT_STATIC_METHOD_CALL/113 ?0        1753:'APIWrapper'    1755:'clearTemp'    	;1
2279 584   FETCH_DIM_IS/90           $569=     16?2                 1757:'server_id'    	;0
2280 584   COALESCE/169              #570=     $569                 ?2283               	;0
2281 584   FETCH_CONSTANT/99         #571=     ?0                   1758:'SERVER_ID'    	;16
2282 584   QM_ASSIGN/22              #570=     #571                 ?0                  	;0
2283 584   SEND_VAL_EX/116           ?80       #570                 ?1                  	;0
2284 584   DO_FCALL/60               $572=     ?0                   ?0                  	;0
2285 584   SEND_VAR_NO_REF_EX/50     ?80       $572                 ?1                  	;0
2286 584   DO_FCALL_BY_NAME/131      $573=     ?0                   ?0                  	;0
2287 584   ECHO/40                   ?0        $573                 ?0                  	;0
2288 585   GOTO/253                  ?0        ?2370                ?1761               	;0
2289 587   INIT_FCALL_BY_NAME/59     ?0        ?0                   1762:'json_encode'  	;1	<<386
2290 587   INIT_STATIC_METHOD_CALL/113 ?0        1764:'APIWrapper'    1766:'clearStreams' 	;1
2291 587   FETCH_DIM_IS/90           $574=     16?2                 1768:'server_id'    	;0
2292 587   COALESCE/169              #575=     $574                 ?2295               	;0
2293 587   FETCH_CONSTANT/99         #576=     ?0                   1769:'SERVER_ID'    	;16
2294 587   QM_ASSIGN/22              #575=     #576                 ?0                  	;0
2295 587   SEND_VAL_EX/116           ?80       #575                 ?1                  	;0
2296 587   DO_FCALL/60               $577=     ?0                   ?0                  	;0
2297 587   SEND_VAR_NO_REF_EX/50     ?80       $577                 ?1                  	;0
2298 587   DO_FCALL_BY_NAME/131      $578=     ?0                   ?0                  	;0
2299 587   ECHO/40                   ?0        $578                 ?0                  	;0
2300 588   GOTO/253                  ?0        ?2370                ?1772               	;0
2301 590   INIT_FCALL_BY_NAME/59     ?0        ?0                   1773:'json_encode'  	;1	<<388
2302 590   INIT_STATIC_METHOD_CALL/113 ?0        1775:'APIWrapper'    1777:'getDirectory' 	;2
2303 590   FETCH_DIM_IS/90           $579=     16?2                 1779:'server_id'    	;0
2304 590   COALESCE/169              #580=     $579                 ?2307               	;0
2305 590   FETCH_CONSTANT/99         #581=     ?0                   1780:'SERVER_ID'    	;16
2306 590   QM_ASSIGN/22              #580=     #581                 ?0                  	;0
2307 590   SEND_VAL_EX/116           ?80       #580                 ?1                  	;0
2308 590   FETCH_DIM_FUNC_ARG/93     $582=     16?2                 1783:'dir'          	;2
2309 590   SEND_VAR_EX/66            ?96       $582                 ?2                  	;0
2310 590   DO_FCALL/60               $583=     ?0                   ?0                  	;0
2311 590   SEND_VAR_NO_REF_EX/50     ?80       $583                 ?1                  	;0
2312 590   DO_FCALL_BY_NAME/131      $584=     ?0                   ?0                  	;0
2313 590   ECHO/40                   ?0        $584                 ?0                  	;0
2314 591   GOTO/253                  ?0        ?2370                ?1784               	;0
2315 593   INIT_FCALL_BY_NAME/59     ?0        ?0                   1785:'json_encode'  	;1	<<390
2316 593   INIT_STATIC_METHOD_CALL/113 ?0        1787:'APIWrapper'    1789:'killPID'      	;2
2317 593   FETCH_DIM_IS/90           $585=     16?2                 1791:'server_id'    	;0
2318 593   COALESCE/169              #586=     $585                 ?2321               	;0
2319 593   FETCH_CONSTANT/99         #587=     ?0                   1792:'SERVER_ID'    	;16
2320 593   QM_ASSIGN/22              #586=     #587                 ?0                  	;0
2321 593   SEND_VAL_EX/116           ?80       #586                 ?1                  	;0
2322 593   FETCH_DIM_FUNC_ARG/93     $588=     16?2                 1795:'pid'          	;2
2323 593   SEND_VAR_EX/66            ?96       $588                 ?2                  	;0
2324 593   DO_FCALL/60               $589=     ?0                   ?0                  	;0
2325 593   SEND_VAR_NO_REF_EX/50     ?80       $589                 ?1                  	;0
2326 593   DO_FCALL_BY_NAME/131      $590=     ?0                   ?0                  	;0
2327 593   ECHO/40                   ?0        $590                 ?0                  	;0
2328 594   GOTO/253                  ?0        ?2370                ?1796               	;0
2329 596   INIT_FCALL_BY_NAME/59     ?0        ?0                   1797:'json_encode'  	;1	<<392
2330 596   INIT_STATIC_METHOD_CALL/113 ?0        1799:'APIWrapper'    1801:'killConnection'	;2
2331 596   FETCH_DIM_IS/90           $591=     16?2                 1803:'server_id'    	;0
2332 596   COALESCE/169              #592=     $591                 ?2335               	;0
2333 596   FETCH_CONSTANT/99         #593=     ?0                   1804:'SERVER_ID'    	;16
2334 596   QM_ASSIGN/22              #592=     #593                 ?0                  	;0
2335 596   SEND_VAL_EX/116           ?80       #592                 ?1                  	;0
2336 596   FETCH_DIM_FUNC_ARG/93     $594=     16?2                 1807:'activity_id'  	;2
2337 596   SEND_VAR_EX/66            ?96       $594                 ?2                  	;0
2338 596   DO_FCALL/60               $595=     ?0                   ?0                  	;0
2339 596   SEND_VAR_NO_REF_EX/50     ?80       $595                 ?1                  	;0
2340 596   DO_FCALL_BY_NAME/131      $596=     ?0                   ?0                  	;0
2341 596   ECHO/40                   ?0        $596                 ?0                  	;0
2342 597   GOTO/253                  ?0        ?2370                ?1808               	;0
2343 599   INIT_FCALL_BY_NAME/59     ?0        ?0                   1809:'json_encode'  	;1	<<394
2344 599   INIT_STATIC_METHOD_CALL/113 ?0        1811:'APIWrapper'    1813:'adjustCredits'	;3
2345 599   FETCH_DIM_FUNC_ARG/93     $597=     16?2                 1815:'id'           	;1
2346 599   SEND_VAR_EX/66            ?80       $597                 ?1                  	;0
2347 599   FETCH_DIM_FUNC_ARG/93     $598=     16?2                 1816:'credits'      	;2
2348 599   SEND_VAR_EX/66            ?96       $598                 ?2                  	;0
2349 599   FETCH_DIM_IS/90           $599=     16?2                 1817:'reason'       	;0
2350 599   COALESCE/169              #600=     $599                 ?2352               	;0
2351 599   QM_ASSIGN/22              #600=     1818:''              ?0                  	;0
2352 599   SEND_VAL_EX/116           ?112      #600                 ?3                  	;0
2353 599   DO_FCALL/60               $601=     ?0                   ?0                  	;0
2354 599   SEND_VAR_NO_REF_EX/50     ?80       $601                 ?1                  	;0
2355 599   DO_FCALL_BY_NAME/131      $602=     ?0                   ?0                  	;0
2356 599   ECHO/40                   ?0        $602                 ?0                  	;0
2357 600   GOTO/253                  ?0        ?2370                ?1819               	;0
2358 602   INIT_FCALL_BY_NAME/59     ?0        ?0                   1820:'json_encode'  	;1	<<396
2359 602   INIT_STATIC_METHOD_CALL/113 ?0        1822:'APIWrapper'    1824:'reloadCache'  	;0
2360 602   DO_FCALL/60               $603=     ?0                   ?0                  	;0
2361 602   SEND_VAR_NO_REF_EX/50     ?80       $603                 ?1                  	;0
2362 602   DO_FCALL_BY_NAME/131      $604=     ?0                   ?0                  	;0
2363 602   ECHO/40                   ?0        $604                 ?0                  	;0
2364 603   GOTO/253                  ?0        ?2370                ?1826               	;0
2365 605   INIT_FCALL_BY_NAME/59     ?0        ?0                   1827:'json_encode'  	;1	<<397
2366 605   SEND_VAL_EX/116           ?80       1829:array (
  'status' => 'STATUS_FAILURE',
  'error' => 'Invalid action.',
) ?1                  	;0
2367 605   DO_FCALL_BY_NAME/131      $605=     ?0                   ?0                  	;0
2368 605   ECHO/40                   ?0        $605                 ?0                  	;0
2369 606   GOTO/253                  ?0        ?2370                ?1830               	;0
2370 610   GOTO/253                  ?0        ?2451                ?1831               	;0
2371 612   INIT_FCALL_BY_NAME/59     ?0        ?0                   1832:'get_defined_constants'	;1
2372 612   SEND_VAL_EX/116           ?80       1834:true            ?1                  	;0
2373 612   DO_FCALL_BY_NAME/131      $606=     ?0                   ?0                  	;0
2374 612   FETCH_DIM_R/81            $607=     $606                 1835:'user'         	;0
2375 612   FE_RESET_R/77             $608=     $607                 ?2394               	;0
2376 612   FE_FETCH_R/78             #609=     $608                 16?8                	;2394	>>2394	<<2393
2377 612   ASSIGN/38                 ?599      16?9                 #609                	;0
2378 613   INIT_FCALL_BY_NAME/59     ?0        ?0                   1836:'substr'       	;3
2379 613   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
2380 613   SEND_VAL_EX/116           ?96       1838:0               ?2                  	;0
2381 613   SEND_VAL_EX/116           ?112      1839:7               ?3                  	;0
2382 613   DO_FCALL_BY_NAME/131      $611=     ?0                   ?0                  	;0
2383 613   IS_EQUAL/17               #612=     $611                 1840:'STATUS_'      	;0
2384 613   BOOL_NOT/13               #613=     #612                 ?0                  	;0
2385 613   JMPZ/43                   ?0        #613                 ?2388               	;0	>>2388
2386 614   NOP/0                     ?0        ?0                   ?0                  	;1
2387 614   GOTO/253                  ?0        ?2393                ?1841               	;0
2388 616   INIT_FCALL_BY_NAME/59     ?0        ?0                   1842:'intval'       	;1	<<2385
2389 616   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
2390 616   DO_FCALL_BY_NAME/131      $614=     ?0                   ?0                  	;0
2391 616   ASSIGN_DIM/147            ?604      16?10                $614                	;0
2392 616   OP_DATA/137               ?0        16?9                 ?0                  	;0
2393 618   JMP/42                    ?0        ?2376                ?0                  	;0	>>2376
2394 618   FE_FREE/127               ?0        $608                 ?0                  	;0	<<2375
2395 621   NOP/0                     ?0        ?0                   ?0                  	;0
2396 636   NOP/0                     ?0        ?0                   ?0                  	;0
2397 2647  FETCH_STATIC_PROP_R/173   $617=     1844:'rRequest'      1845:'XUI'          	;0
2398 2647  ASSIGN/38                 ?607      16?2                 $617                	;0
2399 2648  GOTO/253                  ?0        ?14                  ?1847               	;0
2400 2650  UNSET_DIM/75              ?0        16?2                 1848:'action'       	;0
2401 2651  UNSET_DIM/75              ?0        16?2                 1849:'start'        	;0
2402 2652  UNSET_DIM/75              ?0        16?2                 1850:'limit'        	;0
2403 2653  FETCH_STATIC_PROP_IS/176  $619=     1851:'rRequest'      1852:'XUI'          	;0
2404 2653  ISSET_ISEMPTY_DIM_OBJ/115 #620=     $619                 1854:'show_columns' 	;33554432
2405 2653  JMPZ/43                   ?0        #620                 ?2407               	;0	>>2407
2406 2654  GOTO/253                  ?0        ?2                   ?1855               	;0
2407 2656  ASSIGN/38                 ?610      16?0                 1856:NULL           	;0	<<2405
2408 2657  GOTO/253                  ?0        ?1                   ?1857               	;0
2409 2659  ASSIGN/38                 ?611      16?4                 1858:NULL           	;0
2410 2660  GOTO/253                  ?0        ?2418                ?1859               	;0
2411 2662  INIT_FCALL_BY_NAME/59     ?0        ?0                   1860:'explode'      	;2
2412 2662  SEND_VAL_EX/116           ?80       1862:','             ?1                  	;0
2413 2662  FETCH_STATIC_PROP_FUNC_ARG/177 $623=     1863:'rRequest'      1864:'XUI'          	;2
2414 2662  FETCH_DIM_FUNC_ARG/93     $624=     $623                 1866:'hide_columns' 	;2
2415 2662  SEND_VAR_EX/66            ?96       $624                 ?2                  	;0
2416 2662  DO_FCALL_BY_NAME/131      $625=     ?0                   ?0                  	;0
2417 2662  ASSIGN/38                 ?615      16?4                 $625                	;0
2418 2664  GOTO/253                  ?0        ?34                  ?1867               	;0
2419 2667  FETCH_DIM_R/81            $627=     16?2                 1868:'action'       	;0
2420 2667  ASSIGN/38                 ?617      16?3                 $627                	;0
2421 2668  INIT_FCALL_BY_NAME/59     ?0        ?0                   1869:'intval'       	;1
2422 2668  FETCH_DIM_FUNC_ARG/93     $629=     16?2                 1871:'start'        	;1
2423 2668  SEND_VAR_EX/66            ?80       $629                 ?1                  	;0
2424 2668  DO_FCALL_BY_NAME/131      $630=     ?0                   ?0                  	;0
2425 2668  JMP_SET/152               #631=     $630                 ?2427               	;0
2426 2668  QM_ASSIGN/22              #631=     1872:0               ?0                  	;0
2427 2668  ASSIGN/38                 ?621      16?5                 #631                	;0
2428 2669  INIT_FCALL_BY_NAME/59     ?0        ?0                   1873:'intval'       	;1
2429 2669  FETCH_DIM_FUNC_ARG/93     $633=     16?2                 1875:'limit'        	;1
2430 2669  SEND_VAR_EX/66            ?80       $633                 ?1                  	;0
2431 2669  DO_FCALL_BY_NAME/131      $634=     ?0                   ?0                  	;0
2432 2669  JMP_SET/152               #635=     $634                 ?2434               	;0
2433 2669  QM_ASSIGN/22              #635=     1876:50              ?0                  	;0
2434 2669  ASSIGN/38                 ?625      16?6                 #635                	;0
2435 2670  UNSET_DIM/75              ?0        16?2                 1877:'api_key'      	;0
2436 2671  GOTO/253                  ?0        ?2400                ?1878               	;0
2437 2673  INIT_FCALL_BY_NAME/59     ?0        ?0                   1879:'defined'      	;1	<<0
2438 2673  SEND_VAL_EX/116           ?80       1881:'XUI_HOME'      ?1                  	;0
2439 2673  DO_FCALL_BY_NAME/131      $637=     ?0                   ?0                  	;0
2440 2673  JMPZ/43                   ?0        $637                 ?2442               	;0	>>2442
2441 2674  GOTO/253                  ?0        ?2446                ?1882               	;0
2442 2676  INIT_FCALL_BY_NAME/59     ?0        ?0                   1883:'define'       	;2	<<2440
2443 2676  SEND_VAL_EX/116           ?80       1885:'XUI_HOME'      ?1                  	;0
2444 2676  SEND_VAL_EX/116           ?96       1886:'/home/xui/'    ?2                  	;0
2445 2676  DO_FCALL_BY_NAME/131      ?627      ?0                   ?0                  	;0
2446 2678  FETCH_CONSTANT/99         #639=     ?0                   1887:'XUI_HOME'     	;16
2447 2678  CONCAT/8                  #640=     #639                 1890:'includes/admin.php'	;0
2448 2678  INCLUDE_OR_EVAL/73        ?630      #640                 ?0                  	;16
2449 2679  ASSIGN/38                 ?631      16?10                1891:array (
)      	;0
2450 2680  GOTO/253                  ?0        ?2371                ?1892               	;0
2451 2683  NOP/0                     ?0        1893:1               ?0                  	;4294967295
*/

?>