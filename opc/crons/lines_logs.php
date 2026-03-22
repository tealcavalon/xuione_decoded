<?php


function aB8369074Df2AAa3()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  10  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1  11  FETCH_CONSTANT/99         #3=       ?0                   1:'LOGS_TMP_PATH'   	;16
	2  11  CONCAT/8                  #4=       #3                   4:'client_request.log'	;0
	3  11  ASSIGN/38                 ?2        16?1                 #4                  	;0
	4  12  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'file_exists'     	;1
	5  12  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	6  12  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
	7  12  BOOL_NOT/13               #7=       $6                   ?0                  	;0
	8  12  JMPZ/43                   ?0        #7                   ?10                 	;0	>>10
	9  13  GOTO/253                  ?0        ?30                  ?7                  	;0
	10 15  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'rtrim'           	;2	<<8
	11 15  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'B7e8E5d6F40567F4'	;1
	12 15  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13 15  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	14 15  SEND_VAR_NO_REF_EX/50     ?80       $8                   ?1                  	;0
	15 15  SEND_VAL_EX/116           ?96       12:','               ?2                  	;0
	16 15  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	17 15  ASSIGN/38                 ?7        16?2                 $9                  	;0
	18 16  ISSET_ISEMPTY_CV/197      #11=      16?2                 ?0                  	;16777216
	19 16  JMPZ/43                   ?0        #11                  ?21                 	;0	>>21
	20 17  GOTO/253                  ?0        ?27                  ?13                 	;0
	21 19  INIT_METHOD_CALL/112      ?0        16?0                 14:'query'          	;1	<<19
	22 19  ROPE_INIT/54              #13=      ?0                   16:'INSERT INTO `lines_logs` (`stream_id`,`user_id`,`client_status`,`query_string`,`user_agent`,`ip`,`extra_data`,`date`) VALUES '	;3
	23 19  ROPE_ADD/55               #13=      #13                  16?2                	;1
	24 19  ROPE_END/56               #12=      #13                  17:';'              	;2
	25 19  SEND_VAL_EX/116           ?80       #12                  ?1                  	;0
	26 19  DO_FCALL/60               ?12       ?0                   ?0                  	;0
	27 21  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'unlink'         	;1
	28 21  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	29 21  DO_FCALL_BY_NAME/131      ?13       ?0                   ?0                  	;0
	30 23  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
	*/
}

function B7e8E5D6F40567F4($Ee6546c7961a39a7)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  26  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  28  JMP/42                    ?0        ?25                  ?0                  	;0	>>25
	2  30  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'trim'            	;1
	3  30  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'fgets'           	;1
	4  30  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	5  30  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
	6  30  SEND_VAR_NO_REF_EX/50     ?80       $5                   ?1                  	;0
	7  30  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
	8  30  ASSIGN/38                 ?2        16?1                 $6                  	;0
	9  31  ISSET_ISEMPTY_CV/197      #8=       16?1                 ?0                  	;16777216
	10 31  BOOL_NOT/13               #9=       #8                   ?0                  	;0
	11 31  JMPZ/43                   ?0        #9                   ?13                 	;0	>>13
	12 32  GOTO/253                  ?0        ?14                  ?5                  	;0
	13 34  GOTO/253                  ?0        ?72                  ?6                  	;0	<<11
	14 36  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'json_decode'     	;2
	15 36  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'base64_decode'   	;1
	16 36  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	17 36  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	18 36  SEND_VAR_NO_REF_EX/50     ?80       $10                  ?1                  	;0
	19 36  SEND_VAL_EX/116           ?96       11:true              ?2                  	;0
	20 36  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	21 36  ASSIGN/38                 ?7        16?1                 $11                 	;0
	22 37  GOTO/253                  ?0        ?38                  ?12                 	;0
	23 39  RETURN/62                 ?0        16?3                 ?0                  	;0
	24 40  GOTO/253                  ?0        ?76                  ?13                 	;0
	25 42  BIND_GLOBAL/168           ?0        16?4                 14:'b62d6460eb33ea07'	;0	<<1
	26 43  ASSIGN/38                 ?8        16?3                 15:''               	;0
	27 44  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'fopen'          	;2
	28 44  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	29 44  SEND_VAL_EX/116           ?96       18:'r'               ?2                  	;0
	30 44  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
	31 44  ASSIGN/38                 ?10       16?2                 $14                 	;0
	32 46  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'feof'           	;1
	33 46  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	34 46  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	35 46  JMPZ/43                   ?0        $16                  ?37                 	;0	>>37
	36 47  GOTO/253                  ?0        ?72                  ?21                 	;0
	37 49  GOTO/253                  ?0        ?2                   ?22                 	;0	<<35
	38 51  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'array_map'      	;2
	39 51  INIT_ARRAY/71             #17=      16?4                 ?0                  	;8
	40 51  ADD_ARRAY_ELEMENT/72      #17=      25:'escape'          ?0                  	;0
	41 51  SEND_VAL_EX/116           ?80       #17                  ?1                  	;0
	42 51  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	43 51  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
	44 51  ASSIGN/38                 ?14       16?1                 $18                 	;0
	45 52  FETCH_DIM_R/81            $20=      16?1                 26:'stream_id'      	;0
	46 52  ROPE_INIT/54              #29=      ?0                   27:'('              	;17
	47 52  ROPE_ADD/55               #29=      #29                  $20                 	;1
	48 52  FETCH_DIM_R/81            $21=      16?1                 28:'user_id'        	;0
	49 52  ROPE_ADD/55               #29=      #29                  29:','              	;2
	50 52  ROPE_ADD/55               #29=      #29                  $21                 	;3
	51 52  FETCH_DIM_R/81            $22=      16?1                 30:'action'         	;0
	52 52  ROPE_ADD/55               #29=      #29                  31:','              	;4
	53 52  ROPE_ADD/55               #29=      #29                  $22                 	;5
	54 52  FETCH_DIM_R/81            $23=      16?1                 32:'query_string'   	;0
	55 52  ROPE_ADD/55               #29=      #29                  33:','              	;6
	56 52  ROPE_ADD/55               #29=      #29                  $23                 	;7
	57 52  FETCH_DIM_R/81            $24=      16?1                 34:'user_agent'     	;0
	58 52  ROPE_ADD/55               #29=      #29                  35:','              	;8
	59 52  ROPE_ADD/55               #29=      #29                  $24                 	;9
	60 52  FETCH_DIM_R/81            $25=      16?1                 36:'user_ip'        	;0
	61 52  ROPE_ADD/55               #29=      #29                  37:','              	;10
	62 52  ROPE_ADD/55               #29=      #29                  $25                 	;11
	63 52  FETCH_DIM_R/81            $26=      16?1                 38:'extra_data'     	;0
	64 52  ROPE_ADD/55               #29=      #29                  39:','              	;12
	65 52  ROPE_ADD/55               #29=      #29                  $26                 	;13
	66 52  FETCH_DIM_R/81            $27=      16?1                 40:'time'           	;0
	67 52  ROPE_ADD/55               #29=      #29                  41:','              	;14
	68 52  ROPE_ADD/55               #29=      #29                  $27                 	;15
	69 52  ROPE_END/56               #28=      #29                  42:'),'             	;16
	70 52  ASSIGN_CONCAT/30          ?33       16?3                 #28                 	;0
	71 53  GOTO/253                  ?0        ?32                  ?43                 	;0
	72 55  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'fclose'         	;1
	73 55  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	74 55  DO_FCALL_BY_NAME/131      ?34       ?0                   ?0                  	;0
	75 56  GOTO/253                  ?0        ?23                  ?46                 	;0
	76 58  NOP/0                     ?0        47:NULL              ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  81  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1  81  BIND_GLOBAL/168           ?0        16?1                 1:'F2db9d2971f5c8c4'	;0
	2  82  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_object'       	;1
	3  82  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4  82  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	5  82  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	6  82  JMPZ/43                   ?0        #3                   ?8                  	;0	>>8
	7  83  GOTO/253                  ?0        ?10                  ?4                  	;0
	8  85  INIT_METHOD_CALL/112      ?0        16?0                 5:'close_mysql'     	;0	<<6
	9  85  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	10 87  BEGIN_SILENCE/57          #5=       ?0                   ?0                  	;0
	11 87  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'unlink'          	;1
	12 87  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13 87  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	14 87  END_SILENCE/58            ?0        #5                   ?0                  	;0
	15 88  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?37                  ?0                  	;0	>>37
1  5   FETCH_CONSTANT/99         #2=       ?0                   1:'CRONS_TMP_PATH'  	;16
2  5   INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'md5'             	;1
3  5   INIT_STATIC_METHOD_CALL/113 ?0        6:'XUI'              8:'a336b0daD3eAF634'	;0
4  5   DO_FCALL/60               $3=       ?0                   ?0                  	;0
5  5   CONCAT/8                  #4=       $3                   10:'crons\\lines_logs.php'	;0
6  5   SEND_VAL_EX/116           ?80       #4                   ?1                  	;0
7  5   DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
8  5   CONCAT/8                  #6=       #2                   $5                  	;0
9  5   ASSIGN/38                 ?5        16?0                 #6                  	;0
10 6   INIT_STATIC_METHOD_CALL/113 ?0        11:'XUI'             13:'a3cf732c257bd804'	;1
11 6   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
12 6   DO_FCALL/60               ?6        ?0                   ?0                  	;0
13 8   NOP/0                     ?0        ?0                   ?0                  	;0
14 24  INIT_FCALL/61             ?0        ?352                 15:'ab8369074df2aaa3'	;0
15 24  DO_FCALL/60               ?7        ?0                   ?0                  	;0
16 26  NOP/0                     ?0        ?0                   ?0                  	;0
17 59  GOTO/253                  ?0        ?57                  ?16                 	;0
18 61  EXIT/79                   ?0        17:0                 ?0                  	;0
19 63  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'register_shutdown_function'	;1
20 63  SEND_VAL_EX/116           ?80       20:'shutdown'        ?1                  	;0
21 63  DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
22 64  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'str_replace'    	;3
23 64  SEND_VAL_EX/116           ?80       23:'\\'              ?1                  	;0
24 64  SEND_VAL_EX/116           ?96       24:'/'               ?2                  	;0
25 64  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'dirname'        	;1
26 64  FETCH_DIM_FUNC_ARG/93     $11=      16?1                 27:0                	;1
27 64  SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
28 64  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
29 64  SEND_VAR_NO_REF_EX/50     ?112      $12                  ?3                  	;0
30 64  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
31 64  CONCAT/8                  #14=      $13                  28:'/../www/init.php'	;0
32 64  INCLUDE_OR_EVAL/73        ?13       #14                  ?0                  	;8
33 65  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'cli_set_process_title'	;1
34 65  SEND_VAL_EX/116           ?80       31:'XUI[Lines Logs]' ?1                  	;0
35 65  DO_FCALL_BY_NAME/131      ?14       ?0                   ?0                  	;0
36 66  GOTO/253                  ?0        ?1                   ?32                 	;0
37 68  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'posix_getpwuid' 	;1	<<0
38 68  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'posix_geteuid'  	;0
39 68  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
40 68  SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
41 68  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
42 68  FETCH_DIM_R/81            $19=      $18                  37:'name'           	;0
43 68  IS_NOT_EQUAL/18           #20=      $19                  38:'xui'            	;0
44 68  BOOL_NOT/13               #21=      #20                  ?0                  	;0
45 68  JMPZ/43                   ?0        #21                  ?47                 	;0	>>47
46 69  GOTO/253                  ?0        ?48                  ?39                 	;0
47 71  EXIT/79                   ?0        40:'Please run as XUI!
' ?0                  	;0	<<45
48 73  INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'set_time_limit' 	;1
49 73  SEND_VAL_EX/116           ?80       43:0                 ?1                  	;0
50 73  DO_FCALL_BY_NAME/131      ?20       ?0                   ?0                  	;0
51 74  BEGIN_SILENCE/57          #23=      ?0                   ?0                  	;0
52 74  FETCH_R/80                $24=      44:'argc'            ?0                  	;268435456
53 74  END_SILENCE/58            ?0        #23                  ?0                  	;0
54 74  JMPZ/43                   ?0        $24                  ?56                 	;0	>>56
55 75  GOTO/253                  ?0        ?19                  ?45                 	;0
56 77  GOTO/253                  ?0        ?18                  ?46                 	;0	<<54
57 79  NOP/0                     ?0        ?0                   ?0                  	;0
58 89  NOP/0                     ?0        47:1                 ?0                  	;4294967295
*/

?>