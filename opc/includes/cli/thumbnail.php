<?php


function Ed8dBf4549416Fa2()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  28  JMP/42                    ?0        ?1                   ?0                  	;0	>>1
	1  30  BIND_GLOBAL/168           ?0        16?0                 1:'b62d6460eb33ea07'	;0	<<0
	2  30  BIND_GLOBAL/168           ?0        16?1                 2:'ee6d1fc5d801b43f'	;0
	3  31  INIT_METHOD_CALL/112      ?0        16?0                 3:'query'           	;3
	4  31  SEND_VAL_EX/116           ?80       5:'SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t1.id = t2.stream_id AND t2.server_id = t1.vframes_server_id WHERE t1.`id` = ? AND t1.`vframes_server_id` = ?' ?1                  	;0
	5  31  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	6  31  FETCH_CONSTANT/99         #3=       ?0                   6:'SERVER_ID'       	;16
	7  31  SEND_VAL_EX/116           ?112      #3                   ?3                  	;0
	8  31  DO_FCALL/60               ?1        ?0                   ?0                  	;0
	9  32  INIT_METHOD_CALL/112      ?0        16?0                 9:'num_rows'        	;0
	10 32  DO_FCALL/60               $5=       ?0                   ?0                  	;0
	11 32  IS_SMALLER/19             #6=       11:0                 $5                  	;0
	12 32  JMPZ/43                   ?0        #6                   ?14                 	;0	>>14
	13 33  GOTO/253                  ?0        ?46                  ?12                 	;0
	14 35  EXIT/79                   ?0        ?0                   ?0                  	;0	<<12
	15 36  GOTO/253                  ?0        ?59                  ?13                 	;0
	16 37  GOTO/253                  ?0        ?46                  ?14                 	;0
	17 39  INIT_METHOD_CALL/112      ?0        16?0                 15:'close_mysql'    	;0
	18 39  DO_FCALL/60               ?4        ?0                   ?0                  	;0
	19 41  INIT_STATIC_METHOD_CALL/113 ?0        17:'XUI'             19:'B4AB2A8Eb0aA68Ee'	;2
	20 41  FETCH_DIM_FUNC_ARG/93     $8=       16?2                 21:'pid'            	;1
	21 41  SEND_VAR_EX/66            ?80       $8                   ?1                  	;0
	22 41  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	23 41  DO_FCALL/60               $9=       ?0                   ?0                  	;0
	24 41  BOOL_NOT/13               #10=      $9                   ?0                  	;0
	25 41  JMPZ/43                   ?0        #10                  ?27                 	;0	>>27
	26 42  GOTO/253                  ?0        ?45                  ?22                 	;0
	27 44  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'shell_exec'     	;1	<<25
	28 44  FETCH_STATIC_PROP_R/173   $11=      25:'rFFMPEG_CPU'     26:'XUI'            	;0
	29 44  CONCAT/8                  #12=      $11                  28:' -y -i "'       	;0
	30 44  FETCH_CONSTANT/99         #13=      ?0                   29:'STREAMS_PATH'   	;16
	31 44  CONCAT/8                  #14=      #12                  #13                 	;0
	32 44  CONCAT/8                  #15=      #14                  16?1                	;0
	33 44  CONCAT/8                  #16=      #15                  32:'_.m3u8" -qscale:v 4 -frames:v 1 "'	;0
	34 44  FETCH_CONSTANT/99         #17=      ?0                   33:'STREAMS_PATH'   	;16
	35 44  CONCAT/8                  #18=      #16                  #17                 	;0
	36 44  CONCAT/8                  #19=      #18                  16?1                	;0
	37 44  CONCAT/8                  #20=      #19                  36:'_.jpg" >/dev/null 2>/dev/null &'	;0
	38 44  SEND_VAL_EX/116           ?80       #20                  ?1                  	;0
	39 44  DO_FCALL_BY_NAME/131      ?18       ?0                   ?0                  	;0
	40 45  INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'sleep'          	;1
	41 45  SEND_VAL_EX/116           ?80       39:5                 ?1                  	;0
	42 45  DO_FCALL_BY_NAME/131      ?19       ?0                   ?0                  	;0
	43 46  GOTO/253                  ?0        ?44                  ?40                 	;0
	44 48  GOTO/253                  ?0        ?19                  ?41                 	;0
	45 50  GOTO/253                  ?0        ?60                  ?42                 	;0
	46 53  INIT_METHOD_CALL/112      ?0        16?0                 43:'get_row'        	;0
	47 53  DO_FCALL/60               $23=      ?0                   ?0                  	;0
	48 53  ASSIGN/38                 ?21       16?2                 $23                 	;0
	49 54  INIT_METHOD_CALL/112      ?0        16?0                 45:'query'          	;3
	50 54  SEND_VAL_EX/116           ?80       47:'UPDATE `streams` SET `vframes_pid` = ? WHERE `id` = ?' ?1                  	;0
	51 54  INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'getmypid'       	;0
	52 54  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
	53 54  SEND_VAR_NO_REF_EX/50     ?96       $25                  ?2                  	;0
	54 54  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
	55 54  DO_FCALL/60               ?23       ?0                   ?0                  	;0
	56 55  INIT_STATIC_METHOD_CALL/113 ?0        50:'XUI'             52:'CAc325153a658C37'	;1
	57 55  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	58 55  DO_FCALL/60               ?24       ?0                   ?0                  	;0
	59 57  GOTO/253                  ?0        ?17                  ?54                 	;0
	60 59  NOP/0                     ?0        55:NULL              ?0                  	;4294967295
	*/
}

function c7cc2f0dd6F71ebB($ee6d1fc5d801b43f)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  62  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  64  JMP/42                    ?0        ?39                  ?0                  	;0	>>39
	2  66  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'file_exists'     	;1
	3  66  CONCAT/8                  #3=       3:'/proc/'           16?1                	;0
	4  66  SEND_VAL_EX/116           ?80       #3                   ?1                  	;0
	5  66  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	6  66  BOOL_NOT/13               #5=       $4                   ?0                  	;0
	7  66  JMPZ/43                   ?0        #5                   ?9                  	;0	>>9
	8  67  GOTO/253                  ?0        ?75                  ?4                  	;0
	9  69  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'trim'            	;1	<<7
	10 69  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'file_get_contents'	;1
	11 69  ROPE_INIT/54              #7=       ?0                   9:'/proc/'          	;3
	12 69  ROPE_ADD/55               #7=       #7                   16?1                	;1
	13 69  ROPE_END/56               #6=       #7                   10:'/cmdline'       	;2
	14 69  SEND_VAL_EX/116           ?80       #6                   ?1                  	;0
	15 69  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	16 69  SEND_VAR_NO_REF_EX/50     ?80       $9                   ?1                  	;0
	17 69  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	18 69  ASSIGN/38                 ?8        16?2                 $10                 	;0
	19 70  ROPE_INIT/54              #13=      ?0                   11:'Thumbnail['     	;3
	20 70  ROPE_ADD/55               #13=      #13                  16?0                	;1
	21 70  ROPE_END/56               #12=      #13                  12:']'              	;2
	22 70  IS_EQUAL/17               #15=      16?2                 #12                 	;0
	23 70  JMPZ_EX/46                #15=      #15                  ?28                 	;0	>>28
	24 70  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'is_numeric'     	;1
	25 70  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	26 70  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	27 70  BOOL/52                   #15=      $16                  ?0                  	;0
	28 70  JMPZ_EX/46                #15=      #15                  ?31                 	;0	>>31	<<23
	29 70  IS_SMALLER/19             #17=      15:0                 16?1                	;0
	30 70  BOOL/52                   #15=      #17                  ?0                  	;0
	31 70  BOOL_NOT/13               #18=      #15                  ?0                  	;0	<<28
	32 70  JMPZ/43                   ?0        #18                  ?34                 	;0	>>34
	33 71  GOTO/253                  ?0        ?38                  ?16                 	;0
	34 73  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'posix_kill'     	;2	<<32
	35 73  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	36 73  SEND_VAL_EX/116           ?96       19:9                 ?2                  	;0
	37 73  DO_FCALL_BY_NAME/131      ?16       ?0                   ?0                  	;0
	38 75  GOTO/253                  ?0        ?75                  ?20                 	;0
	39 77  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'clearstatcache' 	;1	<<1
	40 77  SEND_VAL_EX/116           ?80       23:true              ?1                  	;0
	41 77  DO_FCALL_BY_NAME/131      ?17       ?0                   ?0                  	;0
	42 78  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'file_exists'    	;1
	43 78  FETCH_CONSTANT/99         #21=      ?0                   26:'STREAMS_PATH'   	;16
	44 78  CONCAT/8                  #22=      #21                  16?0                	;0
	45 78  CONCAT/8                  #23=      #22                  29:'_.thumb'        	;0
	46 78  SEND_VAL_EX/116           ?80       #23                  ?1                  	;0
	47 78  DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
	48 78  BOOL_NOT/13               #25=      $24                  ?0                  	;0
	49 78  JMPZ/43                   ?0        #25                  ?51                 	;0	>>51
	50 79  GOTO/253                  ?0        ?61                  ?30                 	;0
	51 81  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'intval'         	;1	<<49
	52 81  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'file_get_contents'	;1
	53 81  FETCH_CONSTANT/99         #26=      ?0                   35:'STREAMS_PATH'   	;16
	54 81  CONCAT/8                  #27=      #26                  16?0                	;0
	55 81  CONCAT/8                  #28=      #27                  38:'_.thumb'        	;0
	56 81  SEND_VAL_EX/116           ?80       #28                  ?1                  	;0
	57 81  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
	58 81  SEND_VAR_NO_REF_EX/50     ?80       $29                  ?1                  	;0
	59 81  DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
	60 81  ASSIGN/38                 ?28       16?1                 $30                 	;0
	61 83  ISSET_ISEMPTY_CV/197      #32=      16?1                 ?0                  	;16777216
	62 83  JMPZ/43                   ?0        #32                  ?64                 	;0	>>64
	63 84  GOTO/253                  ?0        ?76                  ?39                 	;0
	64 86  GOTO/253                  ?0        ?2                   ?40                 	;0	<<62
	65 88  INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'file_put_contents'	;2
	66 88  FETCH_CONSTANT/99         #33=      ?0                   43:'STREAMS_PATH'   	;16
	67 88  CONCAT/8                  #34=      #33                  16?0                	;0
	68 88  CONCAT/8                  #35=      #34                  46:'_.thumb'        	;0
	69 88  SEND_VAL_EX/116           ?80       #35                  ?1                  	;0
	70 88  INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'getmypid'       	;0
	71 88  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	72 88  SEND_VAR_NO_REF_EX/50     ?96       $36                  ?2                  	;0
	73 88  DO_FCALL_BY_NAME/131      ?34       ?0                   ?0                  	;0
	74 89  GOTO/253                  ?0        ?83                  ?49                 	;0
	75 92  GOTO/253                  ?0        ?82                  ?50                 	;0
	76 94  INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'shell_exec'     	;1
	77 94  ROPE_INIT/54              #39=      ?0                   53:'kill -9 `ps -ef | grep \'Thumbnail\\['	;3
	78 94  ROPE_ADD/55               #39=      #39                  16?0                	;1
	79 94  ROPE_END/56               #38=      #39                  54:'\\]\' | grep -v grep | awk \'{print $2}\'`;'	;2
	80 94  SEND_VAL_EX/116           ?80       #38                  ?1                  	;0
	81 94  DO_FCALL_BY_NAME/131      ?38       ?0                   ?0                  	;0
	82 96  GOTO/253                  ?0        ?65                  ?55                 	;0
	83 98  NOP/0                     ?0        56:NULL              ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   103  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   104  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
	2   104  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   104  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4   104  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5   104  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6   105  GOTO/253                  ?0        ?9                   ?3                  	;0
	7   107  INIT_METHOD_CALL/112      ?0        16?0                 4:'close_mysql'     	;0	<<5
	8   107  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	9   109  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?1                   ?0                  	;0	>>1
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'posix_getpwuid'  	;1	<<0
2   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'posix_geteuid'   	;0
3   5    DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
4   5    SEND_VAR_NO_REF_EX/50     ?80       $3                   ?1                  	;0
5   5    DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
6   5    FETCH_DIM_R/81            $5=       $4                   5:'name'            	;0
7   5    IS_NOT_EQUAL/18           #6=       $5                   6:'xui'             	;0
8   5    BOOL_NOT/13               #7=       #6                   ?0                  	;0
9   5    JMPZ/43                   ?0        #7                   ?11                 	;0	>>11
10  6    GOTO/253                  ?0        ?12                  ?7                  	;0
11  8    EXIT/79                   ?0        8:'Please run as XUI!
' ?0                  	;0	<<9
12  10   BEGIN_SILENCE/57          #8=       ?0                   ?0                  	;0
13  10   FETCH_R/80                $9=       9:'argc'             ?0                  	;268435456
14  10   END_SILENCE/58            ?0        #8                   ?0                  	;0
15  10   BOOL_NOT/13               #10=      $9                   ?0                  	;0
16  10   JMPNZ_EX/47               #10=      #10                  ?19                 	;0	>>19
17  10   IS_NOT_EQUAL/18           #11=      16?0                 10:2                	;0
18  10   BOOL/52                   #10=      #11                  ?0                  	;0
19  10   BOOL_NOT/13               #12=      #10                  ?0                  	;0	<<16
20  10   JMPZ/43                   ?0        #12                  ?22                 	;0	>>22
21  11   GOTO/253                  ?0        ?24                  ?11                 	;0
22  13   EXIT/79                   ?0        12:0                 ?0                  	;0	<<20
23  14   GOTO/253                  ?0        ?24                  ?13                 	;0
24  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'register_shutdown_function'	;1
25  17   SEND_VAL_EX/116           ?80       16:'shutdown'        ?1                  	;0
26  17   DO_FCALL_BY_NAME/131      ?10       ?0                   ?0                  	;0
27  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'str_replace'    	;3
28  18   SEND_VAL_EX/116           ?80       19:'\\'              ?1                  	;0
29  18   SEND_VAL_EX/116           ?96       20:'/'               ?2                  	;0
30  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'dirname'        	;1
31  18   FETCH_DIM_FUNC_ARG/93     $14=      16?1                 23:0                	;1
32  18   SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
33  18   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
34  18   SEND_VAR_NO_REF_EX/50     ?112      $15                  ?3                  	;0
35  18   DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
36  18   CONCAT/8                  #17=      $16                  24:'/../../www/init.php'	;0
37  18   INCLUDE_OR_EVAL/73        ?15       #17                  ?0                  	;8
38  19   INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'intval'         	;1
39  19   FETCH_DIM_FUNC_ARG/93     $19=      16?1                 27:1                	;1
40  19   SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
41  19   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
42  19   ASSIGN/38                 ?18       16?2                 $20                 	;0
43  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'C7cC2F0dD6F71EBB'	;1
44  20   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
45  20   DO_FCALL_BY_NAME/131      ?19       ?0                   ?0                  	;0
46  21   GOTO/253                  ?0        ?47                  ?30                 	;0
47  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'set_time_limit' 	;1
48  23   SEND_VAL_EX/116           ?80       33:0                 ?1                  	;0
49  23   DO_FCALL_BY_NAME/131      ?20       ?0                   ?0                  	;0
50  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'cli_set_process_title'	;1
51  24   ROPE_INIT/54              #25=      ?0                   36:'Thumbnail['     	;3
52  24   ROPE_ADD/55               #25=      #25                  16?2                	;1
53  24   ROPE_END/56               #24=      #25                  37:']'              	;2
54  24   SEND_VAL_EX/116           ?80       #24                  ?1                  	;0
55  24   DO_FCALL_BY_NAME/131      ?24       ?0                   ?0                  	;0
56  26   NOP/0                     ?0        ?0                   ?0                  	;0
57  60   INIT_FCALL/61             ?0        ?528                 38:'ed8dbf4549416fa2'	;0
58  60   DO_FCALL/60               ?25       ?0                   ?0                  	;0
59  62   NOP/0                     ?0        ?0                   ?0                  	;0
60  99   GOTO/253                  ?0        ?61                  ?39                 	;0
61  101  NOP/0                     ?0        ?0                   ?0                  	;0
62  110  NOP/0                     ?0        40:1                 ?0                  	;4294967295
*/

?>