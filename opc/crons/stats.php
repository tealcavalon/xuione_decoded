<?php


function ab8369074Df2aaA3()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   33   BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   34   FETCH_CONSTANT/99         #11=      ?0                   4:'SERVER_ID'       	;16
	2   34   FETCH_STATIC_PROP_R/173   $10=      1:'rServers'         2:'XUI'             	;0
	3   34   FETCH_DIM_R/81            $12=      $10                  #11                 	;0
	4   34   FETCH_DIM_R/81            $13=      $12                  7:'is_main'         	;0
	5   34   BOOL_NOT/13               #14=      $13                  ?0                  	;0
	6   34   JMPZ/43                   ?0        #14                  ?8                  	;0	>>8
	7   35   GOTO/253                  ?0        ?129                 ?8                  	;0
	8   37   INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'time'            	;0	<<6
	9   37   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	10  37   ASSIGN/38                 ?6        16?1                 $15                 	;0
	11  38   SUB/2                     #17=      16?1                 11:86400            	;0
	12  38   INIT_ARRAY/71             #18=      #17                  ?0                  	;8
	13  38   ADD_ARRAY_ELEMENT/72      #18=      16?1                 ?0                  	;0
	14  38   INIT_ARRAY/71             #19=      #18                  12:'today'          	;18
	15  38   SUB/2                     #20=      16?1                 13:604800           	;0
	16  38   INIT_ARRAY/71             #21=      #20                  ?0                  	;8
	17  38   ADD_ARRAY_ELEMENT/72      #21=      16?1                 ?0                  	;0
	18  38   ADD_ARRAY_ELEMENT/72      #19=      #21                  14:'week'           	;0
	19  38   SUB/2                     #22=      16?1                 15:2592000          	;0
	20  38   INIT_ARRAY/71             #23=      #22                  ?0                  	;8
	21  38   ADD_ARRAY_ELEMENT/72      #23=      16?1                 ?0                  	;0
	22  38   ADD_ARRAY_ELEMENT/72      #19=      #23                  16:'month'          	;0
	23  38   INIT_ARRAY/71             #24=      17:0                 ?0                  	;8
	24  38   ADD_ARRAY_ELEMENT/72      #24=      16?1                 ?0                  	;0
	25  38   ADD_ARRAY_ELEMENT/72      #19=      #24                  18:'all'            	;0
	26  38   ASSIGN/38                 ?15       16?2                 #19                 	;0
	27  39   INIT_METHOD_CALL/112      ?0        16?0                 19:'query'          	;1
	28  39   SEND_VAL_EX/116           ?80       21:'TRUNCATE `streams_stats`;' ?1                  	;0
	29  39   DO_FCALL/60               ?16       ?0                   ?0                  	;0
	30  40   FE_RESET_R/77             $27=      16?2                 ?128                	;0
	31  40   FE_FETCH_R/78             #28=      $27                  16?3                	;128	>>128	<<127
	32  40   ASSIGN/38                 ?19       16?4                 #28                 	;0
	33  41   NOP/0                     ?0        ?0                   ?0                  	;1
	34  41   GOTO/253                  ?0        ?55                  ?22                 	;0
	35  45   FE_RESET_R/77             $30=      16?5                 ?52                 	;0
	36  45   FE_FETCH_R/78             #31=      $30                  16?6                	;52	>>52	<<51
	37  45   ASSIGN/38                 ?22       16?7                 #31                 	;0
	38  46   INIT_METHOD_CALL/112      ?0        16?0                 23:'query'          	;7
	39  46   SEND_VAL_EX/116           ?80       25:'INSERT INTO `streams_stats`(`stream_id`, `rank`, `time`, `connections`, `users`, `type`) VALUES(?, ?, ?, ?, ?, ?);' ?1                  	;0
	40  46   SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
	41  46   FETCH_DIM_FUNC_ARG/93     $33=      16?6                 26:'rank'           	;3
	42  46   SEND_VAR_EX/66            ?112      $33                  ?3                  	;0
	43  46   FETCH_DIM_FUNC_ARG/93     $34=      16?6                 27:'time'           	;4
	44  46   SEND_VAR_EX/66            ?128      $34                  ?4                  	;0
	45  46   FETCH_DIM_FUNC_ARG/93     $35=      16?6                 28:'connections'    	;5
	46  46   SEND_VAR_EX/66            ?144      $35                  ?5                  	;0
	47  46   FETCH_DIM_FUNC_ARG/93     $36=      16?6                 29:'users'          	;6
	48  46   SEND_VAR_EX/66            ?160      $36                  ?6                  	;0
	49  46   SEND_VAR_EX/66            ?176      16?4                 ?7                  	;0
	50  46   DO_FCALL/60               ?27       ?0                   ?0                  	;0
	51  47   JMP/42                    ?0        ?36                  ?0                  	;0	>>36
	52  47   FE_FREE/127               ?0        $30                  ?0                  	;0	<<35
	53  51   NOP/0                     ?0        ?0                   ?0                  	;1
	54  51   GOTO/253                  ?0        ?127                 ?30                 	;0
	55  53   ASSIGN/38                 ?28       16?5                 31:array (
)        	;0
	56  54   INIT_METHOD_CALL/112      ?0        16?0                 32:'query'          	;3
	57  54   SEND_VAL_EX/116           ?80       34:'SELECT `stream_id`, COUNT(*) AS `connections`, SUM(`date_end` - `date_start`) AS `time`, COUNT(DISTINCT(`user_id`)) AS `users` FROM `lines_activity` LEFT JOIN `streams` ON `streams`.`id` = `lines_activity`.`stream_id` WHERE `date_start` > ? AND `date_end` <= ? GROUP BY `stream_id`;' ?1                  	;0
	58  54   FETCH_DIM_FUNC_ARG/93     $39=      16?3                 35:0                	;2
	59  54   SEND_VAR_EX/66            ?96       $39                  ?2                  	;0
	60  54   FETCH_DIM_FUNC_ARG/93     $40=      16?3                 36:1                	;3
	61  54   SEND_VAR_EX/66            ?112      $40                  ?3                  	;0
	62  54   DO_FCALL/60               ?31       ?0                   ?0                  	;0
	63  55   INIT_METHOD_CALL/112      ?0        16?0                 37:'num_rows'       	;0
	64  55   DO_FCALL/60               $42=      ?0                   ?0                  	;0
	65  55   IS_SMALLER/19             #43=      39:0                 $42                 	;0
	66  55   BOOL_NOT/13               #44=      #43                  ?0                  	;0
	67  55   JMPZ/43                   ?0        #44                  ?70                 	;0	>>70
	68  56   NOP/0                     ?0        ?0                   ?0                  	;1
	69  56   GOTO/253                  ?0        ?91                  ?40                 	;0
	70  58   INIT_METHOD_CALL/112      ?0        16?0                 41:'get_rows'       	;0	<<67
	71  58   DO_FCALL/60               $45=      ?0                   ?0                  	;0
	72  58   FE_RESET_R/77             $46=      $45                  ?88                 	;0
	73  58   FE_FETCH_R/78             ?0        $46                  16?8                	;88	>>88	<<87
	74  59   FETCH_DIM_R/81            $47=      16?8                 43:'stream_id'      	;0
	75  59   INIT_ARRAY/71             #49=      44:0                 45:'rank'           	;18
	76  59   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'intval'         	;1
	77  59   FETCH_DIM_FUNC_ARG/93     $50=      16?8                 48:'time'           	;1
	78  59   SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
	79  59   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
	80  59   ADD_ARRAY_ELEMENT/72      #49=      $51                  49:'time'           	;0
	81  59   FETCH_DIM_R/81            $52=      16?8                 50:'connections'    	;0
	82  59   ADD_ARRAY_ELEMENT/72      #49=      $52                  51:'connections'    	;0
	83  59   FETCH_DIM_R/81            $53=      16?8                 52:'users'          	;0
	84  59   ADD_ARRAY_ELEMENT/72      #49=      $53                  53:'users'          	;0
	85  59   ASSIGN_DIM/147            ?38       16?5                 $47                 	;0
	86  59   OP_DATA/137               ?0        #49                  ?0                  	;0
	87  60   JMP/42                    ?0        ?73                  ?0                  	;0	>>73
	88  60   FE_FREE/127               ?0        $46                  ?0                  	;0	<<72
	89  63   NOP/0                     ?0        ?0                   ?0                  	;1
	90  63   GOTO/253                  ?0        ?91                  ?54                 	;0
	91  66   INIT_METHOD_CALL/112      ?0        16?0                 55:'query'          	;3
	92  66   SEND_VAL_EX/116           ?80       57:'SELECT `stream_id`, SUM(`date_end` - `date_start`) AS `time` FROM `lines_activity` LEFT JOIN `streams` ON `streams`.`id` = `lines_activity`.`stream_id` WHERE `date_start` > ? AND `date_end` <= ? GROUP BY `stream_id` ORDER BY `time` DESC, `stream_id` DESC;' ?1                  	;0
	93  66   FETCH_DIM_FUNC_ARG/93     $54=      16?3                 58:0                	;2
	94  66   SEND_VAR_EX/66            ?96       $54                  ?2                  	;0
	95  66   FETCH_DIM_FUNC_ARG/93     $55=      16?3                 59:1                	;3
	96  66   SEND_VAR_EX/66            ?112      $55                  ?3                  	;0
	97  66   DO_FCALL/60               ?46       ?0                   ?0                  	;0
	98  67   INIT_METHOD_CALL/112      ?0        16?0                 60:'num_rows'       	;0
	99  67   DO_FCALL/60               $57=      ?0                   ?0                  	;0
	100 67   IS_SMALLER/19             #58=      62:0                 $57                 	;0
	101 67   BOOL_NOT/13               #59=      #58                  ?0                  	;0
	102 67   JMPZ/43                   ?0        #59                  ?105                	;0	>>105
	103 68   NOP/0                     ?0        ?0                   ?0                  	;1
	104 68   GOTO/253                  ?0        ?35                  ?63                 	;0
	105 70   ASSIGN/38                 ?50       16?9                 64:1                	;0	<<102
	106 71   INIT_METHOD_CALL/112      ?0        16?0                 65:'get_rows'       	;0
	107 71   DO_FCALL/60               $61=      ?0                   ?0                  	;0
	108 71   FE_RESET_R/77             $62=      $61                  ?124                	;0
	109 71   FE_FETCH_R/78             ?0        $62                  16?8                	;124	>>124	<<123
	110 72   FETCH_DIM_R/81            $63=      16?8                 67:'stream_id'      	;0
	111 72   ISSET_ISEMPTY_DIM_OBJ/115 #64=      16?5                 $63                 	;33554432
	112 72   BOOL_NOT/13               #65=      #64                  ?0                  	;0
	113 72   JMPZ/43                   ?0        #65                  ?117                	;0	>>117
	114 73   NOP/0                     ?0        ?0                   ?0                  	;1
	115 73   NOP/0                     ?0        ?0                   ?0                  	;1
	116 73   GOTO/253                  ?0        ?123                 ?68                 	;0
	117 75   FETCH_DIM_R/81            $66=      16?8                 69:'stream_id'      	;0	<<113
	118 75   FETCH_DIM_W/84            $67=      16?5                 $66                 	;0
	119 75   ASSIGN_DIM/147            ?58       $67                  70:'rank'           	;0
	120 75   OP_DATA/137               ?0        16?9                 ?0                  	;0
	121 76   POST_INC/36               #69=      16?9                 ?0                  	;0
	122 76   FREE/70                   ?0        #69                  ?0                  	;0
	123 78   JMP/42                    ?0        ?109                 ?0                  	;0	>>109
	124 78   FE_FREE/127               ?0        $62                  ?0                  	;0	<<108
	125 80   NOP/0                     ?0        ?0                   ?0                  	;1
	126 80   GOTO/253                  ?0        ?35                  ?71                 	;0
	127 81   JMP/42                    ?0        ?31                  ?0                  	;0	>>31
	128 81   FE_FREE/127               ?0        $27                  ?0                  	;0	<<30
	129 85   NOP/0                     ?0        72:NULL              ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  90  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1  90  BIND_GLOBAL/168           ?0        16?1                 1:'F2db9d2971f5c8c4'	;0
	2  91  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_object'       	;1
	3  91  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4  91  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	5  91  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	6  91  JMPZ/43                   ?0        #3                   ?8                  	;0	>>8
	7  92  GOTO/253                  ?0        ?10                  ?4                  	;0
	8  94  INIT_METHOD_CALL/112      ?0        16?0                 5:'close_mysql'     	;0	<<6
	9  94  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	10 96  BEGIN_SILENCE/57          #5=       ?0                   ?0                  	;0
	11 96  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'unlink'          	;1
	12 96  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13 96  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	14 96  END_SILENCE/58            ?0        #5                   ?0                  	;0
	15 97  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?1                   ?0                  	;0	>>1
1  5   INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'posix_getpwuid'  	;1	<<0
2  5   INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'posix_geteuid'   	;0
3  5   DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
4  5   SEND_VAR_NO_REF_EX/50     ?80       $3                   ?1                  	;0
5  5   DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
6  5   FETCH_DIM_R/81            $5=       $4                   5:'name'            	;0
7  5   IS_NOT_EQUAL/18           #6=       $5                   6:'xui'             	;0
8  5   BOOL_NOT/13               #7=       #6                   ?0                  	;0
9  5   JMPZ/43                   ?0        #7                   ?11                 	;0	>>11
10 6   GOTO/253                  ?0        ?12                  ?7                  	;0
11 8   EXIT/79                   ?0        8:'Please run as XUI!
' ?0                  	;0	<<9
12 10  BEGIN_SILENCE/57          #8=       ?0                   ?0                  	;0
13 10  FETCH_R/80                $9=       9:'argc'             ?0                  	;268435456
14 10  END_SILENCE/58            ?0        #8                   ?0                  	;0
15 10  JMPZ/43                   ?0        $9                   ?17                 	;0	>>17
16 11  GOTO/253                  ?0        ?19                  ?10                 	;0
17 13  EXIT/79                   ?0        11:0                 ?0                  	;0	<<15
18 14  GOTO/253                  ?0        ?19                  ?12                 	;0
19 17  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'register_shutdown_function'	;1
20 17  SEND_VAL_EX/116           ?80       15:'shutdown'        ?1                  	;0
21 17  DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
22 18  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'str_replace'    	;3
23 18  SEND_VAL_EX/116           ?80       18:'\\'              ?1                  	;0
24 18  SEND_VAL_EX/116           ?96       19:'/'               ?2                  	;0
25 18  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'dirname'        	;1
26 18  FETCH_DIM_FUNC_ARG/93     $11=      16?0                 22:0                	;1
27 18  SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
28 18  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
29 18  SEND_VAR_NO_REF_EX/50     ?112      $12                  ?3                  	;0
30 18  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
31 18  CONCAT/8                  #14=      $13                  23:'/../www/init.php'	;0
32 18  INCLUDE_OR_EVAL/73        ?12       #14                  ?0                  	;8
33 19  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'cli_set_process_title'	;1
34 19  SEND_VAL_EX/116           ?80       26:'XUI[Stats]'      ?1                  	;0
35 19  DO_FCALL_BY_NAME/131      ?13       ?0                   ?0                  	;0
36 20  FETCH_CONSTANT/99         #17=      ?0                   27:'CRONS_TMP_PATH' 	;16
37 20  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'md5'            	;1
38 20  INIT_STATIC_METHOD_CALL/113 ?0        32:'XUI'             34:'A336B0dad3eaF634'	;0
39 20  DO_FCALL/60               $18=      ?0                   ?0                  	;0
40 20  CONCAT/8                  #19=      $18                  36:'crons\\stats.php'	;0
41 20  SEND_VAL_EX/116           ?80       #19                  ?1                  	;0
42 20  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
43 20  CONCAT/8                  #21=      #17                  $20                 	;0
44 20  ASSIGN/38                 ?19       16?1                 #21                 	;0
45 21  GOTO/253                  ?0        ?49                  ?37                 	;0
46 23  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'AB8369074Df2aaa3'	;0
47 23  DO_FCALL_BY_NAME/131      ?20       ?0                   ?0                  	;0
48 24  GOTO/253                  ?0        ?62                  ?40                 	;0
49 26  INIT_STATIC_METHOD_CALL/113 ?0        41:'XUI'             43:'a3cF732c257Bd804'	;1
50 26  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
51 26  DO_FCALL/60               ?21       ?0                   ?0                  	;0
52 27  ASSIGN/38                 ?22       16?2                 45:60               	;0
53 28  INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'set_time_limit' 	;1
54 28  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
55 28  DO_FCALL_BY_NAME/131      ?23       ?0                   ?0                  	;0
56 29  INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'ini_set'        	;2
57 29  SEND_VAL_EX/116           ?80       50:'max_execution_time' ?1                  	;0
58 29  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
59 29  DO_FCALL_BY_NAME/131      ?24       ?0                   ?0                  	;0
60 31  NOP/0                     ?0        ?0                   ?0                  	;0
61 86  GOTO/253                  ?0        ?46                  ?51                 	;0
62 88  NOP/0                     ?0        ?0                   ?0                  	;0
63 98  NOP/0                     ?0        52:1                 ?0                  	;4294967295
*/

?>