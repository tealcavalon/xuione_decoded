<?php


function b7e8E5D6F40567f4($Ee6546c7961a39a7)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  15  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  17  JMP/42                    ?0        ?2                   ?0                  	;0	>>2
	2  19  ASSIGN/38                 ?0        16?1                 1:''                	;0	<<1
	3  20  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'file_exists'     	;1
	4  20  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	5  20  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
	6  20  BOOL_NOT/13               #6=       $5                   ?0                  	;0
	7  20  JMPZ/43                   ?0        #6                   ?9                  	;0	>>9
	8  21  GOTO/253                  ?0        ?68                  ?4                  	;0
	9  23  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'fopen'           	;2	<<7
	10 23  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	11 23  SEND_VAL_EX/116           ?96       7:'r'                ?2                  	;0
	12 23  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	13 23  ASSIGN/38                 ?4        16?2                 $7                  	;0
	14 25  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'feof'            	;1
	15 25  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	16 25  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	17 25  JMPZ/43                   ?0        $9                   ?19                 	;0	>>19
	18 26  GOTO/253                  ?0        ?64                  ?10                 	;0
	19 28  GOTO/253                  ?0        ?20                  ?11                 	;0	<<17
	20 30  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'trim'           	;1
	21 30  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'fgets'          	;1
	22 30  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	23 30  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	24 30  SEND_VAR_NO_REF_EX/50     ?80       $10                  ?1                  	;0
	25 30  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	26 30  ASSIGN/38                 ?8        16?3                 $11                 	;0
	27 31  ISSET_ISEMPTY_CV/197      #13=      16?3                 ?0                  	;16777216
	28 31  BOOL_NOT/13               #14=      #13                  ?0                  	;0
	29 31  JMPZ/43                   ?0        #14                  ?31                 	;0	>>31
	30 32  GOTO/253                  ?0        ?32                  ?16                 	;0
	31 34  GOTO/253                  ?0        ?64                  ?17                 	;0	<<29
	32 36  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'json_decode'    	;2
	33 36  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'base64_decode'  	;1
	34 36  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	35 36  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	36 36  SEND_VAR_NO_REF_EX/50     ?80       $15                  ?1                  	;0
	37 36  SEND_VAL_EX/116           ?96       22:true              ?2                  	;0
	38 36  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	39 36  ASSIGN/38                 ?13       16?3                 $16                 	;0
	40 37  GOTO/253                  ?0        ?41                  ?23                 	;0
	41 39  FETCH_DIM_R/81            $18=      16?3                 24:'stream_id'      	;0
	42 39  BOOL_NOT/13               #19=      $18                  ?0                  	;0
	43 39  JMPZ/43                   ?0        #19                  ?45                 	;0	>>45
	44 40  GOTO/253                  ?0        ?63                  ?25                 	;0
	45 42  FETCH_DIM_R/81            $20=      16?3                 26:'stream_id'      	;0	<<43
	46 42  ROPE_INIT/54              #22=      ?0                   27:'('              	;3
	47 42  ROPE_ADD/55               #22=      #22                  $20                 	;1
	48 42  ROPE_END/56               #21=      #22                  28:','              	;2
	49 42  FETCH_CONSTANT/99         #24=      ?0                   29:'SERVER_ID'      	;16
	50 42  CONCAT/8                  #25=      #21                  #24                 	;0
	51 42  FETCH_DIM_R/81            $26=      16?3                 32:'action'         	;0
	52 42  ROPE_INIT/54              #30=      ?0                   33:',\''            	;7
	53 42  ROPE_ADD/55               #30=      #30                  $26                 	;1
	54 42  FETCH_DIM_R/81            $27=      16?3                 34:'source'         	;0
	55 42  ROPE_ADD/55               #30=      #30                  35:'\',\''          	;2
	56 42  ROPE_ADD/55               #30=      #30                  $27                 	;3
	57 42  FETCH_DIM_R/81            $28=      16?3                 36:'time'           	;0
	58 42  ROPE_ADD/55               #30=      #30                  37:'\',\''          	;4
	59 42  ROPE_ADD/55               #30=      #30                  $28                 	;5
	60 42  ROPE_END/56               #29=      #30                  38:'\'),'           	;6
	61 42  CONCAT/8                  #34=      #25                  #29                 	;0
	62 42  ASSIGN_CONCAT/30          ?31       16?1                 #34                 	;0
	63 44  GOTO/253                  ?0        ?14                  ?39                 	;0
	64 46  GOTO/253                  ?0        ?65                  ?40                 	;0
	65 48  INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'fclose'         	;1
	66 48  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	67 48  DO_FCALL_BY_NAME/131      ?32       ?0                   ?0                  	;0
	68 50  RETURN/62                 ?0        16?1                 ?0                  	;0
	69 51  GOTO/253                  ?0        ?70                  ?43                 	;0
	70 53  NOP/0                     ?0        44:NULL              ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  85  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1  85  BIND_GLOBAL/168           ?0        16?1                 1:'F2db9d2971f5c8c4'	;0
	2  86  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_object'       	;1
	3  86  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4  86  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	5  86  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	6  86  JMPZ/43                   ?0        #3                   ?8                  	;0	>>8
	7  87  GOTO/253                  ?0        ?10                  ?4                  	;0
	8  89  INIT_METHOD_CALL/112      ?0        16?0                 5:'close_mysql'     	;0	<<6
	9  89  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	10 91  BEGIN_SILENCE/57          #5=       ?0                   ?0                  	;0
	11 91  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'unlink'          	;1
	12 91  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13 91  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	14 91  END_SILENCE/58            ?0        #5                   ?0                  	;0
	15 92  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?65                  ?0                  	;0	>>65
1  5   FETCH_CONSTANT/99         #5=       ?0                   1:'CRONS_TMP_PATH'  	;16
2  5   INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'md5'             	;1
3  5   INIT_STATIC_METHOD_CALL/113 ?0        6:'XUI'              8:'A336B0DAd3eAF634'	;0
4  5   DO_FCALL/60               $6=       ?0                   ?0                  	;0
5  5   CONCAT/8                  #7=       $6                   10:'crons\\streams_logs.php'	;0
6  5   SEND_VAL_EX/116           ?80       #7                   ?1                  	;0
7  5   DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
8  5   CONCAT/8                  #9=       #5                   $8                  	;0
9  5   ASSIGN/38                 ?5        16?0                 #9                  	;0
10 6   INIT_STATIC_METHOD_CALL/113 ?0        11:'XUI'             13:'a3cf732C257BD804'	;1
11 6   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
12 6   DO_FCALL/60               ?6        ?0                   ?0                  	;0
13 7   FETCH_CONSTANT/99         #12=      ?0                   15:'LOGS_TMP_PATH'  	;16
14 7   CONCAT/8                  #13=      #12                  18:'stream_log.log' 	;0
15 7   ASSIGN/38                 ?9        16?1                 #13                 	;0
16 8   INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'file_exists'    	;1
17 8   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
18 8   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
19 8   BOOL_NOT/13               #16=      $15                  ?0                  	;0
20 8   JMPZ/43                   ?0        #16                  ?22                 	;0	>>22
21 9   GOTO/253                  ?0        ?64                  ?21                 	;0
22 11  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'rtrim'          	;2	<<20
23 11  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'B7E8E5D6F40567F4'	;1
24 11  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
25 11  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
26 11  SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
27 11  SEND_VAL_EX/116           ?96       26:','               ?2                  	;0
28 11  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
29 11  ASSIGN/38                 ?14       16?2                 $18                 	;0
30 12  GOTO/253                  ?0        ?52                  ?27                 	;0
31 15  NOP/0                     ?0        ?0                   ?0                  	;0
32 54  GOTO/253                  ?0        ?85                  ?28                 	;0
33 56  EXIT/79                   ?0        29:0                 ?0                  	;0
34 58  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'register_shutdown_function'	;1
35 58  SEND_VAL_EX/116           ?80       32:'shutdown'        ?1                  	;0
36 58  DO_FCALL_BY_NAME/131      ?15       ?0                   ?0                  	;0
37 59  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'str_replace'    	;3
38 59  SEND_VAL_EX/116           ?80       35:'\\'              ?1                  	;0
39 59  SEND_VAL_EX/116           ?96       36:'/'               ?2                  	;0
40 59  INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'dirname'        	;1
41 59  FETCH_DIM_FUNC_ARG/93     $21=      16?3                 39:0                	;1
42 59  SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
43 59  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
44 59  SEND_VAR_NO_REF_EX/50     ?112      $22                  ?3                  	;0
45 59  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
46 59  CONCAT/8                  #24=      $23                  40:'/../www/init.php'	;0
47 59  INCLUDE_OR_EVAL/73        ?20       #24                  ?0                  	;8
48 60  INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'cli_set_process_title'	;1
49 60  SEND_VAL_EX/116           ?80       43:'XUI[Stream Logs]' ?1                  	;0
50 60  DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
51 61  GOTO/253                  ?0        ?1                   ?44                 	;0
52 63  ISSET_ISEMPTY_CV/197      #27=      16?2                 ?0                  	;16777216
53 63  JMPZ/43                   ?0        #27                  ?55                 	;0	>>55
54 64  GOTO/253                  ?0        ?61                  ?45                 	;0
55 66  INIT_METHOD_CALL/112      ?0        16?4                 46:'query'          	;1	<<53
56 66  ROPE_INIT/54              #29=      ?0                   48:'INSERT INTO `streams_logs` (`stream_id`,`server_id`,`action`,`source`,`date`) VALUES '	;3
57 66  ROPE_ADD/55               #29=      #29                  16?2                	;1
58 66  ROPE_END/56               #28=      #29                  49:';'              	;2
59 66  SEND_VAL_EX/116           ?80       #28                  ?1                  	;0
60 66  DO_FCALL/60               ?26       ?0                   ?0                  	;0
61 68  INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'unlink'         	;1
62 68  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
63 68  DO_FCALL_BY_NAME/131      ?27       ?0                   ?0                  	;0
64 70  GOTO/253                  ?0        ?31                  ?52                 	;0
65 72  INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'posix_getpwuid' 	;1	<<0
66 72  INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'posix_geteuid'  	;0
67 72  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
68 72  SEND_VAR_NO_REF_EX/50     ?80       $33                  ?1                  	;0
69 72  DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
70 72  FETCH_DIM_R/81            $35=      $34                  57:'name'           	;0
71 72  IS_NOT_EQUAL/18           #36=      $35                  58:'xui'            	;0
72 72  BOOL_NOT/13               #37=      #36                  ?0                  	;0
73 72  JMPZ/43                   ?0        #37                  ?75                 	;0	>>75
74 73  GOTO/253                  ?0        ?76                  ?59                 	;0
75 75  EXIT/79                   ?0        60:'Please run as XUI!
' ?0                  	;0	<<73
76 77  INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'set_time_limit' 	;1
77 77  SEND_VAL_EX/116           ?80       63:0                 ?1                  	;0
78 77  DO_FCALL_BY_NAME/131      ?33       ?0                   ?0                  	;0
79 78  BEGIN_SILENCE/57          #39=      ?0                   ?0                  	;0
80 78  FETCH_R/80                $40=      64:'argc'            ?0                  	;268435456
81 78  END_SILENCE/58            ?0        #39                  ?0                  	;0
82 78  JMPZ/43                   ?0        $40                  ?84                 	;0	>>84
83 79  GOTO/253                  ?0        ?34                  ?65                 	;0
84 81  GOTO/253                  ?0        ?33                  ?66                 	;0	<<82
85 83  NOP/0                     ?0        ?0                   ?0                  	;0
86 93  NOP/0                     ?0        67:1                 ?0                  	;4294967295
*/

?>