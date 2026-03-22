<?php


function ab8369074DF2aaA3()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   10   JMP/42                    ?0        ?63                  ?0                  	;0	>>63
	1   12   INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'rtrim'           	;2
	2   12   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   12   SEND_VAL_EX/116           ?96       3:','                ?2                  	;0
	4   12   DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	5   12   ASSIGN/38                 ?1        16?0                 $8                  	;0
	6   13   ISSET_ISEMPTY_CV/197      #10=      16?0                 ?0                  	;16777216
	7   13   JMPZ/43                   ?0        #10                  ?9                  	;0	>>9
	8   14   GOTO/253                  ?0        ?15                  ?4                  	;0
	9   16   INIT_METHOD_CALL/112      ?0        16?1                 5:'query'           	;1	<<7
	10  16   ROPE_INIT/54              #12=      ?0                   7:'INSERT INTO `lines`(`id`,`last_ip`,`last_activity`,`last_activity_array`) VALUES '	;3
	11  16   ROPE_ADD/55               #12=      #12                  16?0                	;1
	12  16   ROPE_END/56               #11=      #12                  8:' ON DUPLICATE KEY UPDATE `id`=VALUES(`id`), `last_ip`=VALUES(`last_ip`), `last_activity`=VALUES(`last_activity`), `last_activity_array`=VALUES(`last_activity_array`);'	;2
	13  16   SEND_VAL_EX/116           ?80       #11                  ?1                  	;0
	14  16   DO_FCALL/60               ?6        ?0                   ?0                  	;0
	15  18   GOTO/253                  ?0        ?101                 ?9                  	;0
	16  20   GOTO/253                  ?0        ?72                  ?10                 	;0
	17  25   GOTO/253                  ?0        ?1                   ?11                 	;0
	18  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'rtrim'          	;2
	19  27   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	20  27   SEND_VAL_EX/116           ?96       14:','               ?2                  	;0
	21  27   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	22  27   ASSIGN/38                 ?8        16?2                 $15                 	;0
	23  28   ISSET_ISEMPTY_CV/197      #17=      16?2                 ?0                  	;16777216
	24  28   JMPZ/43                   ?0        #17                  ?26                 	;0	>>26
	25  29   GOTO/253                  ?0        ?17                  ?15                 	;0
	26  31   INIT_METHOD_CALL/112      ?0        16?1                 16:'query'          	;1	<<24
	27  31   NOP/0                     ?0        ?0                   ?0                  	;0
	28  31   FAST_CONCAT/53            #18=      18:'INSERT INTO `lines_activity` (`server_id`,`proxy_id`,`user_id`,`isp`,`external_device`,`stream_id`,`date_start`,`user_agent`,`user_ip`,`date_end`,`container`,`geoip_country_code`,`divergence`,`hmac_id`,`hmac_identifier`) VALUES ' 16?2                	;0
	29  31   SEND_VAL_EX/116           ?80       #18                  ?1                  	;0
	30  31   DO_FCALL/60               $19=      ?0                   ?0                  	;0
	31  31   BOOL_NOT/13               #20=      $19                  ?0                  	;0
	32  31   JMPZ/43                   ?0        #20                  ?34                 	;0	>>34
	33  32   GOTO/253                  ?0        ?17                  ?19                 	;0
	34  34   INIT_METHOD_CALL/112      ?0        16?1                 20:'last_insert_id' 	;0	<<32
	35  34   DO_FCALL/60               $21=      ?0                   ?0                  	;0
	36  34   ASSIGN/38                 ?14       16?3                 $21                 	;0
	37  35   ASSIGN/38                 ?15       16?4                 22:0                	;0
	38  36   GOTO/253                  ?0        ?72                  ?23                 	;0
	39  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'file_exists'    	;1
	40  38   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	41  38   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
	42  38   BOOL_NOT/13               #25=      $24                  ?0                  	;0
	43  38   JMPZ/43                   ?0        #25                  ?45                 	;0	>>45
	44  39   GOTO/253                  ?0        ?58                  ?26                 	;0
	45  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'b7e8E5D6f40567f4'	;1	<<43
	46  41   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	47  41   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
	48  41   FETCH_LIST/98             $27=      $26                  29:0                	;0
	49  41   ASSIGN/38                 ?20       16?2                 $27                 	;0
	50  41   FETCH_LIST/98             $29=      $26                  30:1                	;0
	51  41   ASSIGN/38                 ?22       16?6                 $29                 	;0
	52  41   FETCH_LIST/98             $31=      $26                  31:2                	;0
	53  41   ASSIGN/38                 ?24       16?7                 $31                 	;0
	54  41   FREE/70                   ?0        $26                  ?0                  	;0
	55  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'unlink'         	;1
	56  42   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	57  42   DO_FCALL_BY_NAME/131      ?25       ?0                   ?0                  	;0
	58  44   IS_SMALLER/19             #34=      34:0                 16?7                	;0
	59  44   BOOL_NOT/13               #35=      #34                  ?0                  	;0
	60  44   JMPZ/43                   ?0        #35                  ?62                 	;0	>>62
	61  45   GOTO/253                  ?0        ?17                  ?35                 	;0
	62  47   GOTO/253                  ?0        ?18                  ?36                 	;0	<<60
	63  49   BIND_GLOBAL/168           ?0        16?1                 37:'b62d6460eb33ea07'	;0	<<0
	64  50   FETCH_CONSTANT/99         #36=      ?0                   38:'LOGS_TMP_PATH'  	;16
	65  50   CONCAT/8                  #37=      #36                  41:'activity'       	;0
	66  50   ASSIGN/38                 ?30       16?5                 #37                 	;0
	67  51   ASSIGN/38                 $39=      16?2                 42:''               	;0
	68  51   ASSIGN/38                 ?32       16?0                 $39                 	;0
	69  52   ASSIGN/38                 ?33       16?6                 43:array (
)        	;0
	70  53   ASSIGN/38                 ?34       16?7                 44:0                	;0
	71  54   GOTO/253                  ?0        ?39                  ?45                 	;0
	72  57   IS_SMALLER/19             #43=      16?4                 16?7                	;0
	73  57   BOOL_NOT/13               #44=      #43                  ?0                  	;0
	74  57   JMPZ/43                   ?0        #44                  ?76                 	;0	>>76
	75  58   GOTO/253                  ?0        ?17                  ?46                 	;0
	76  60   FETCH_DIM_R/81            $45=      16?6                 16?4                	;0	<<74
	77  60   FETCH_DIM_R/81            $46=      $45                  47:0                	;0
	78  60   CONCAT/8                  #47=      48:'('               $46                 	;0
	79  60   CONCAT/8                  #48=      #47                  49:','              	;0
	80  60   INIT_METHOD_CALL/112      ?0        16?1                 50:'escape'         	;1
	81  60   FETCH_DIM_FUNC_ARG/93     $49=      16?6                 16?4                	;1
	82  60   FETCH_DIM_FUNC_ARG/93     $50=      $49                  52:1                	;1
	83  60   SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
	84  60   DO_FCALL/60               $51=      ?0                   ?0                  	;0
	85  60   CONCAT/8                  #52=      #48                  $51                 	;0
	86  60   CONCAT/8                  #53=      #52                  53:','              	;0
	87  60   ADD/1                     #54=      16?3                 16?4                	;0
	88  60   CONCAT/8                  #55=      #53                  #54                 	;0
	89  60   CONCAT/8                  #56=      #55                  54:','              	;0
	90  60   INIT_METHOD_CALL/112      ?0        16?1                 55:'escape'         	;1
	91  60   FETCH_DIM_FUNC_ARG/93     $57=      16?6                 16?4                	;1
	92  60   FETCH_DIM_FUNC_ARG/93     $58=      $57                  57:2                	;1
	93  60   SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
	94  60   DO_FCALL/60               $59=      ?0                   ?0                  	;0
	95  60   CONCAT/8                  #60=      #56                  $59                 	;0
	96  60   CONCAT/8                  #61=      #60                  58:'),'             	;0
	97  60   ASSIGN_CONCAT/30          ?54       16?0                 #61                 	;0
	98  62   POST_INC/36               #63=      16?4                 ?0                  	;0
	99  62   FREE/70                   ?0        #63                  ?0                  	;0
	100 63   GOTO/253                  ?0        ?16                  ?59                 	;0
	101 65   NOP/0                     ?0        60:NULL              ?0                  	;4294967295
	*/
}

function b7e8E5d6F40567f4($D6be258a9043b749)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   68   RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   70   JMP/42                    ?0        ?61                  ?0                  	;0	>>61
	2   72   GOTO/253                  ?0        ?72                  ?1                  	;0
	3   74   INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'json_decode'     	;2
	4   74   INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'base64_decode'   	;1
	5   74   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	6   74   DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	7   74   SEND_VAR_NO_REF_EX/50     ?80       $7                   ?1                  	;0
	8   74   SEND_VAL_EX/116           ?96       6:true               ?2                  	;0
	9   74   DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	10  74   ASSIGN/38                 ?2        16?1                 $8                  	;0
	11  75   FETCH_DIM_R/81            $10=      16?1                 7:'server_id'       	;0
	12  75   JMPZ_EX/46                #11=      $10                  ?15                 	;0	>>15
	13  75   FETCH_DIM_R/81            $12=      16?1                 8:'user_id'         	;0
	14  75   BOOL/52                   #11=      $12                  ?0                  	;0
	15  75   JMPZ_EX/46                #11=      #11                  ?18                 	;0	>>18	<<12
	16  75   FETCH_DIM_R/81            $13=      16?1                 9:'stream_id'       	;0
	17  75   BOOL/52                   #11=      $13                  ?0                  	;0
	18  75   JMPZ_EX/46                #11=      #11                  ?21                 	;0	>>21	<<15
	19  75   FETCH_DIM_R/81            $14=      16?1                 10:'user_ip'        	;0
	20  75   BOOL/52                   #11=      $14                  ?0                  	;0
	21  75   BOOL_NOT/13               #15=      #11                  ?0                  	;0	<<18
	22  75   JMPZ/43                   ?0        #15                  ?24                 	;0	>>24
	23  76   GOTO/253                  ?0        ?136                 ?11                 	;0
	24  78   FETCH_DIM_R/81            $17=      16?1                 12:'user_id'        	;0	<<22
	25  78   INIT_ARRAY/71             #18=      $17                  ?0                  	;12
	26  78   FETCH_DIM_R/81            $19=      16?1                 13:'user_ip'        	;0
	27  78   ADD_ARRAY_ELEMENT/72      #18=      $19                  ?0                  	;0
	28  78   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'json_encode'    	;1
	29  78   FETCH_DIM_R/81            $20=      16?1                 16:'date_end'       	;0
	30  78   INIT_ARRAY/71             #21=      $20                  17:'date_end'       	;10
	31  78   FETCH_DIM_R/81            $22=      16?1                 18:'stream_id'      	;0
	32  78   ADD_ARRAY_ELEMENT/72      #21=      $22                  19:'stream_id'      	;0
	33  78   SEND_VAL_EX/116           ?80       #21                  ?1                  	;0
	34  78   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
	35  78   ADD_ARRAY_ELEMENT/72      #18=      $23                  ?0                  	;0
	36  78   ASSIGN_DIM/147            ?9        16?2                 ?4397406            	;0
	37  78   OP_DATA/137               ?0        #18                  ?0                  	;0
	38  79   GOTO/253                  ?0        ?80                  ?20                 	;0
	39  81   INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'fopen'          	;2
	40  81   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	41  81   SEND_VAL_EX/116           ?96       23:'r'               ?2                  	;0
	42  81   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
	43  81   ASSIGN/38                 ?18       16?3                 $24                 	;0
	44  83   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'feof'           	;1
	45  83   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	46  83   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
	47  83   JMPZ/43                   ?0        $26                  ?49                 	;0	>>49
	48  84   GOTO/253                  ?0        ?72                  ?26                 	;0
	49  86   INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'trim'           	;1	<<47
	50  86   INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'fgets'          	;1
	51  86   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	52  86   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
	53  86   SEND_VAR_NO_REF_EX/50     ?80       $27                  ?1                  	;0
	54  86   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
	55  86   ASSIGN/38                 ?22       16?1                 $28                 	;0
	56  87   ISSET_ISEMPTY_CV/197      #30=      16?1                 ?0                  	;16777216
	57  87   BOOL_NOT/13               #31=      #30                  ?0                  	;0
	58  87   JMPZ/43                   ?0        #31                  ?60                 	;0	>>60
	59  88   GOTO/253                  ?0        ?3                   ?31                 	;0
	60  90   GOTO/253                  ?0        ?2                   ?32                 	;0	<<58
	61  92   BIND_GLOBAL/168           ?0        16?4                 33:'b62d6460eb33ea07'	;0	<<1
	62  93   ASSIGN/38                 ?25       16?5                 34:''               	;0
	63  94   ASSIGN/38                 ?26       16?2                 35:array (
)        	;0
	64  95   ASSIGN/38                 ?27       16?6                 36:0                	;0
	65  96   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'file_exists'    	;1
	66  96   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	67  96   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
	68  96   BOOL_NOT/13               #36=      $35                  ?0                  	;0
	69  96   JMPZ/43                   ?0        #36                  ?71                 	;0	>>71
	70  97   GOTO/253                  ?0        ?75                  ?39                 	;0
	71  99   GOTO/253                  ?0        ?39                  ?40                 	;0	<<69
	72  102  INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'fclose'         	;1
	73  102  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	74  102  DO_FCALL_BY_NAME/131      ?30       ?0                   ?0                  	;0
	75  104  INIT_ARRAY/71             #38=      16?5                 ?0                  	;12
	76  104  ADD_ARRAY_ELEMENT/72      #38=      16?2                 ?0                  	;0
	77  104  ADD_ARRAY_ELEMENT/72      #38=      16?6                 ?0                  	;0
	78  104  RETURN/62                 ?0        #38                  ?0                  	;0
	79  105  GOTO/253                  ?0        ?138                 ?43                 	;0
	80  107  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'array_map'      	;2
	81  107  INIT_ARRAY/71             #39=      16?4                 ?0                  	;8
	82  107  ADD_ARRAY_ELEMENT/72      #39=      46:'escape'          ?0                  	;0
	83  107  SEND_VAL_EX/116           ?80       #39                  ?1                  	;0
	84  107  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	85  107  DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
	86  107  ASSIGN/38                 ?34       16?1                 $40                 	;0
	87  108  FETCH_DIM_R/81            $42=      16?1                 47:'server_id'      	;0
	88  108  ROPE_INIT/54              #58=      ?0                   48:'('              	;31
	89  108  ROPE_ADD/55               #58=      #58                  $42                 	;1
	90  108  FETCH_DIM_R/81            $43=      16?1                 49:'proxy_id'       	;0
	91  108  ROPE_ADD/55               #58=      #58                  50:','              	;2
	92  108  ROPE_ADD/55               #58=      #58                  $43                 	;3
	93  108  FETCH_DIM_R/81            $44=      16?1                 51:'user_id'        	;0
	94  108  ROPE_ADD/55               #58=      #58                  52:','              	;4
	95  108  ROPE_ADD/55               #58=      #58                  $44                 	;5
	96  108  FETCH_DIM_R/81            $45=      16?1                 53:'isp'            	;0
	97  108  ROPE_ADD/55               #58=      #58                  54:','              	;6
	98  108  ROPE_ADD/55               #58=      #58                  $45                 	;7
	99  108  FETCH_DIM_R/81            $46=      16?1                 55:'external_device'	;0
	100 108  ROPE_ADD/55               #58=      #58                  56:','              	;8
	101 108  ROPE_ADD/55               #58=      #58                  $46                 	;9
	102 108  FETCH_DIM_R/81            $47=      16?1                 57:'stream_id'      	;0
	103 108  ROPE_ADD/55               #58=      #58                  58:','              	;10
	104 108  ROPE_ADD/55               #58=      #58                  $47                 	;11
	105 108  FETCH_DIM_R/81            $48=      16?1                 59:'date_start'     	;0
	106 108  ROPE_ADD/55               #58=      #58                  60:','              	;12
	107 108  ROPE_ADD/55               #58=      #58                  $48                 	;13
	108 108  FETCH_DIM_R/81            $49=      16?1                 61:'user_agent'     	;0
	109 108  ROPE_ADD/55               #58=      #58                  62:','              	;14
	110 108  ROPE_ADD/55               #58=      #58                  $49                 	;15
	111 108  FETCH_DIM_R/81            $50=      16?1                 63:'user_ip'        	;0
	112 108  ROPE_ADD/55               #58=      #58                  64:','              	;16
	113 108  ROPE_ADD/55               #58=      #58                  $50                 	;17
	114 108  FETCH_DIM_R/81            $51=      16?1                 65:'date_end'       	;0
	115 108  ROPE_ADD/55               #58=      #58                  66:','              	;18
	116 108  ROPE_ADD/55               #58=      #58                  $51                 	;19
	117 108  FETCH_DIM_R/81            $52=      16?1                 67:'container'      	;0
	118 108  ROPE_ADD/55               #58=      #58                  68:','              	;20
	119 108  ROPE_ADD/55               #58=      #58                  $52                 	;21
	120 108  FETCH_DIM_R/81            $53=      16?1                 69:'geoip_country_code'	;0
	121 108  ROPE_ADD/55               #58=      #58                  70:','              	;22
	122 108  ROPE_ADD/55               #58=      #58                  $53                 	;23
	123 108  FETCH_DIM_R/81            $54=      16?1                 71:'divergence'     	;0
	124 108  ROPE_ADD/55               #58=      #58                  72:','              	;24
	125 108  ROPE_ADD/55               #58=      #58                  $54                 	;25
	126 108  FETCH_DIM_R/81            $55=      16?1                 73:'hmac_id'        	;0
	127 108  ROPE_ADD/55               #58=      #58                  74:','              	;26
	128 108  ROPE_ADD/55               #58=      #58                  $55                 	;27
	129 108  FETCH_DIM_R/81            $56=      16?1                 75:'hmac_identifier'	;0
	130 108  ROPE_ADD/55               #58=      #58                  76:','              	;28
	131 108  ROPE_ADD/55               #58=      #58                  $56                 	;29
	132 108  ROPE_END/56               #57=      #58                  77:'),'             	;30
	133 108  ASSIGN_CONCAT/30          ?67       16?5                 #57                 	;0
	134 109  POST_INC/36               #75=      16?6                 ?0                  	;0
	135 109  FREE/70                   ?0        #75                  ?0                  	;0
	136 111  GOTO/253                  ?0        ?44                  ?78                 	;0
	137 112  GOTO/253                  ?0        ?72                  ?79                 	;0
	138 114  NOP/0                     ?0        80:NULL              ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   137  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   137  BIND_GLOBAL/168           ?0        16?1                 1:'F2db9d2971f5c8c4'	;0
	2   138  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_object'       	;1
	3   138  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4   138  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	5   138  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	6   138  JMPZ/43                   ?0        #3                   ?8                  	;0	>>8
	7   139  GOTO/253                  ?0        ?10                  ?4                  	;0
	8   141  INIT_METHOD_CALL/112      ?0        16?0                 5:'close_mysql'     	;0	<<6
	9   141  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	10  143  BEGIN_SILENCE/57          #5=       ?0                   ?0                  	;0
	11  143  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'unlink'          	;1
	12  143  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13  143  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	14  143  END_SILENCE/58            ?0        #5                   ?0                  	;0
	15  144  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?18                  ?0                  	;0	>>18
1   5    FETCH_CONSTANT/99         #2=       ?0                   1:'CRONS_TMP_PATH'  	;16
2   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'md5'             	;1
3   5    INIT_STATIC_METHOD_CALL/113 ?0        6:'XUI'              8:'A336b0DaD3eaf634'	;0
4   5    DO_FCALL/60               $3=       ?0                   ?0                  	;0
5   5    CONCAT/8                  #4=       $3                   10:'crons\\activity.php'	;0
6   5    SEND_VAL_EX/116           ?80       #4                   ?1                  	;0
7   5    DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
8   5    CONCAT/8                  #6=       #2                   $5                  	;0
9   5    ASSIGN/38                 ?5        16?0                 #6                  	;0
10  6    INIT_STATIC_METHOD_CALL/113 ?0        11:'XUI'             13:'A3CF732c257Bd804'	;1
11  6    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
12  6    DO_FCALL/60               ?6        ?0                   ?0                  	;0
13  8    NOP/0                     ?0        ?0                   ?0                  	;0
14  66   INIT_FCALL/61             ?0        ?1104                15:'ab8369074df2aaa3'	;0
15  66   DO_FCALL/60               ?7        ?0                   ?0                  	;0
16  68   NOP/0                     ?0        ?0                   ?0                  	;0
17  115  GOTO/253                  ?0        ?57                  ?16                 	;0
18  117  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'posix_getpwuid' 	;1	<<0
19  117  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'posix_geteuid'  	;0
20  117  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
21  117  SEND_VAR_NO_REF_EX/50     ?80       $10                  ?1                  	;0
22  117  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
23  117  FETCH_DIM_R/81            $12=      $11                  21:'name'           	;0
24  117  IS_NOT_EQUAL/18           #13=      $12                  22:'xui'            	;0
25  117  BOOL_NOT/13               #14=      #13                  ?0                  	;0
26  117  JMPZ/43                   ?0        #14                  ?28                 	;0	>>28
27  118  GOTO/253                  ?0        ?29                  ?23                 	;0
28  120  EXIT/79                   ?0        24:'Please run as XUI!
' ?0                  	;0	<<26
29  122  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'set_time_limit' 	;1
30  122  SEND_VAL_EX/116           ?80       27:0                 ?1                  	;0
31  122  DO_FCALL_BY_NAME/131      ?13       ?0                   ?0                  	;0
32  123  BEGIN_SILENCE/57          #16=      ?0                   ?0                  	;0
33  123  FETCH_R/80                $17=      28:'argc'            ?0                  	;268435456
34  123  END_SILENCE/58            ?0        #16                  ?0                  	;0
35  123  JMPZ/43                   ?0        $17                  ?37                 	;0	>>37
36  124  GOTO/253                  ?0        ?39                  ?29                 	;0
37  126  GOTO/253                  ?0        ?38                  ?30                 	;0	<<35
38  128  EXIT/79                   ?0        31:0                 ?0                  	;0
39  130  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'register_shutdown_function'	;1
40  130  SEND_VAL_EX/116           ?80       34:'shutdown'        ?1                  	;0
41  130  DO_FCALL_BY_NAME/131      ?16       ?0                   ?0                  	;0
42  131  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'str_replace'    	;3
43  131  SEND_VAL_EX/116           ?80       37:'\\'              ?1                  	;0
44  131  SEND_VAL_EX/116           ?96       38:'/'               ?2                  	;0
45  131  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'dirname'        	;1
46  131  FETCH_DIM_FUNC_ARG/93     $19=      16?1                 41:0                	;1
47  131  SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
48  131  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
49  131  SEND_VAR_NO_REF_EX/50     ?112      $20                  ?3                  	;0
50  131  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
51  131  CONCAT/8                  #22=      $21                  42:'/../www/init.php'	;0
52  131  INCLUDE_OR_EVAL/73        ?21       #22                  ?0                  	;8
53  132  INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'cli_set_process_title'	;1
54  132  SEND_VAL_EX/116           ?80       45:'XUI[Activity]'   ?1                  	;0
55  132  DO_FCALL_BY_NAME/131      ?22       ?0                   ?0                  	;0
56  133  GOTO/253                  ?0        ?1                   ?46                 	;0
57  135  NOP/0                     ?0        ?0                   ?0                  	;0
58  145  NOP/0                     ?0        47:1                 ?0                  	;4294967295
*/

?>