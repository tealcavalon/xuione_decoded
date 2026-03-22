<?php


function ab8369074Df2aAa3()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   27   JMP/42                    ?0        ?83                  ?0                  	;0	>>83
	1   29   EXIT/79                   ?0        ?0                   ?0                  	;0
	2   31   INIT_METHOD_CALL/112      ?0        16?0                 1:'query'           	;1
	3   31   SEND_VAL_EX/116           ?80       3:'SELECT `id`, `stream_display_name`, `series_no`, `stream_source` FROM `streams` WHERE `type` = 3 AND `series_no` <> 0;' ?1                  	;0
	4   31   DO_FCALL/60               ?0        ?0                   ?0                  	;0
	5   32   INIT_METHOD_CALL/112      ?0        16?0                 4:'num_rows'        	;0
	6   32   DO_FCALL/60               $7=       ?0                   ?0                  	;0
	7   32   IS_SMALLER/19             #8=       6:0                  $7                  	;0
	8   32   BOOL_NOT/13               #9=       #8                   ?0                  	;0
	9   32   JMPZ/43                   ?0        #9                   ?11                 	;0	>>11
	10  33   GOTO/253                  ?0        ?80                  ?7                  	;0
	11  35   INIT_METHOD_CALL/112      ?0        16?0                 8:'get_rows'        	;0	<<9
	12  35   DO_FCALL/60               $10=      ?0                   ?0                  	;0
	13  35   FE_RESET_R/77             $11=      $10                  ?78                 	;0
	14  35   FE_FETCH_R/78             ?0        $11                  16?1                	;78	>>78	<<77
	15  36   NOP/0                     ?0        ?0                   ?0                  	;1
	16  36   GOTO/253                  ?0        ?39                  ?10                 	;0
	17  39   BOOL_NOT/13               #12=      16?2                 ?0                  	;0
	18  39   JMPZ/43                   ?0        #12                  ?21                 	;0	>>21
	19  40   NOP/0                     ?0        ?0                   ?0                  	;1
	20  40   GOTO/253                  ?0        ?37                  ?11                 	;0
	21  42   INIT_METHOD_CALL/112      ?0        16?0                 12:'query'          	;3	<<18
	22  42   SEND_VAL_EX/116           ?80       14:'UPDATE `streams` SET `stream_source` = ? WHERE `id` = ?;' ?1                  	;0
	23  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'json_encode'    	;2
	24  42   FETCH_DIM_FUNC_ARG/93     $13=      16?3                 17:'sources'        	;1
	25  42   SEND_VAR_EX/66            ?80       $13                  ?1                  	;0
	26  42   FETCH_CONSTANT/99         #14=      ?0                   18:'JSON_UNESCAPED_UNICODE'	;16
	27  42   SEND_VAL_EX/116           ?96       #14                  ?2                  	;0
	28  42   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	29  42   SEND_VAR_NO_REF_EX/50     ?96       $15                  ?2                  	;0
	30  42   FETCH_DIM_FUNC_ARG/93     $16=      16?1                 21:'id'             	;3
	31  42   SEND_VAR_EX/66            ?112      $16                  ?3                  	;0
	32  42   DO_FCALL/60               ?11       ?0                   ?0                  	;0
	33  43   FETCH_DIM_R/81            $18=      16?1                 22:'stream_display_name'	;0
	34  43   CONCAT/8                  #19=      23:'Updated: '       $18                 	;0
	35  43   CONCAT/8                  #20=      #19                  24:'
'              	;0
	36  43   ECHO/40                   ?0        #20                  ?0                  	;0
	37  45   NOP/0                     ?0        ?0                   ?0                  	;1
	38  45   GOTO/253                  ?0        ?75                  ?25                 	;0
	39  47   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'CDA6Bf7272fceBB4'	;1
	40  47   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'intval'         	;1
	41  47   FETCH_DIM_FUNC_ARG/93     $21=      16?1                 30:'series_no'      	;1
	42  47   SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
	43  47   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
	44  47   SEND_VAR_NO_REF_EX/50     ?80       $22                  ?1                  	;0
	45  47   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
	46  47   ASSIGN/38                 ?18       16?3                 $23                 	;0
	47  48   FETCH_DIM_R/81            $25=      16?3                 31:'success'        	;0
	48  48   BOOL_NOT/13               #26=      $25                  ?0                  	;0
	49  48   JMPZ/43                   ?0        #26                  ?52                 	;0	>>52
	50  49   NOP/0                     ?0        ?0                   ?0                  	;1
	51  49   GOTO/253                  ?0        ?75                  ?32                 	;0
	52  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'json_decode'    	;2	<<49
	53  51   FETCH_DIM_FUNC_ARG/93     $27=      16?1                 35:'stream_source'  	;1
	54  51   SEND_VAR_EX/66            ?80       $27                  ?1                  	;0
	55  51   SEND_VAL_EX/116           ?96       36:true              ?2                  	;0
	56  51   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
	57  51   ASSIGN/38                 ?23       16?4                 $28                 	;0
	58  52   ASSIGN/38                 ?24       16?2                 37:false            	;0
	59  53   FETCH_DIM_R/81            $31=      16?3                 38:'sources'        	;0
	60  53   FE_RESET_R/77             $32=      $31                  ?72                 	;0
	61  53   FE_FETCH_R/78             ?0        $32                  16?5                	;72	>>72	<<71
	62  54   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'in_array'       	;2
	63  54   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	64  54   SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
	65  54   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
	66  54   JMPZ/43                   ?0        $33                  ?70                 	;0	>>70
	67  55   NOP/0                     ?0        ?0                   ?0                  	;1
	68  55   NOP/0                     ?0        ?0                   ?0                  	;1
	69  55   GOTO/253                  ?0        ?71                  ?41                 	;0
	70  57   ASSIGN/38                 ?28       16?2                 42:true             	;0	<<66
	71  59   JMP/42                    ?0        ?61                  ?0                  	;0	>>61
	72  59   FE_FREE/127               ?0        $32                  ?0                  	;0	<<60
	73  61   NOP/0                     ?0        ?0                   ?0                  	;1
	74  61   GOTO/253                  ?0        ?17                  ?43                 	;0
	75  65   NOP/0                     ?0        ?0                   ?0                  	;1
	76  65   GOTO/253                  ?0        ?77                  ?44                 	;0
	77  66   JMP/42                    ?0        ?14                  ?0                  	;0	>>14
	78  66   FE_FREE/127               ?0        $11                  ?0                  	;0	<<13
	79  68   GOTO/253                  ?0        ?80                  ?45                 	;0
	80  72   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'D537D94b49D06806'	;0
	81  72   DO_FCALL_BY_NAME/131      ?29       ?0                   ?0                  	;0
	82  73   GOTO/253                  ?0        ?100                 ?48                 	;0
	83  75   BIND_GLOBAL/168           ?0        16?0                 49:'b62d6460eb33ea07'	;0	<<0
	84  76   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'time'           	;0
	85  76   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	86  76   FETCH_STATIC_PROP_R/173   $37=      52:'rSettings'       53:'XUI'            	;0
	87  76   FETCH_DIM_R/81            $38=      $37                  55:'cc_time'        	;0
	88  76   SUB/2                     #39=      $36                  $38                 	;0
	89  76   IS_SMALLER/19             #40=      #39                  56:3600             	;0
	90  76   JMPZ/43                   ?0        #40                  ?92                 	;0	>>92
	91  77   GOTO/253                  ?0        ?99                  ?57                 	;0
	92  79   INIT_METHOD_CALL/112      ?0        16?0                 58:'query'          	;2	<<90
	93  79   SEND_VAL_EX/116           ?80       60:'UPDATE `settings` SET `cc_time` = ?;' ?1                  	;0
	94  79   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'time'           	;0
	95  79   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
	96  79   SEND_VAR_NO_REF_EX/50     ?96       $41                  ?2                  	;0
	97  79   DO_FCALL/60               ?36       ?0                   ?0                  	;0
	98  80   GOTO/253                  ?0        ?2                   ?63                 	;0
	99  82   GOTO/253                  ?0        ?1                   ?64                 	;0
	100 84   NOP/0                     ?0        65:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?26                  ?0                  	;0	>>26
1  5   EXIT/79                   ?0        1:0                  ?0                  	;0
2  7   INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'str_replace'     	;3
3  7   SEND_VAL_EX/116           ?80       4:'\\'               ?1                  	;0
4  7   SEND_VAL_EX/116           ?96       5:'/'                ?2                  	;0
5  7   INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'dirname'         	;1
6  7   FETCH_DIM_FUNC_ARG/93     $2=       16?0                 8:0                 	;1
7  7   SEND_VAR_EX/66            ?80       $2                   ?1                  	;0
8  7   DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
9  7   SEND_VAR_NO_REF_EX/50     ?112      $3                   ?3                  	;0
10 7   DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
11 7   CONCAT/8                  #5=       $4                   9:'/../includes/admin.php'	;0
12 7   INCLUDE_OR_EVAL/73        ?4        #5                   ?0                  	;8
13 8   INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'cli_set_process_title'	;1
14 8   SEND_VAL_EX/116           ?80       12:'XUI[Series]'     ?1                  	;0
15 8   DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
16 9   FETCH_CONSTANT/99         #8=       ?0                   13:'CRONS_TMP_PATH' 	;16
17 9   INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'md5'            	;1
18 9   INIT_STATIC_METHOD_CALL/113 ?0        18:'XUI'             20:'a336B0daD3eAf634'	;0
19 9   DO_FCALL/60               $9=       ?0                   ?0                  	;0
20 9   CONCAT/8                  #10=      $9                   22:'crons\\series.php'	;0
21 9   SEND_VAL_EX/116           ?80       #10                  ?1                  	;0
22 9   DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
23 9   CONCAT/8                  #12=      #8                   $11                 	;0
24 9   ASSIGN/38                 ?11       16?1                 #12                 	;0
25 10  GOTO/253                  ?0        ?46                  ?23                 	;0
26 12  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'posix_getpwuid' 	;1	<<0
27 12  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'posix_geteuid'  	;0
28 12  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
29 12  SEND_VAR_NO_REF_EX/50     ?80       $14                  ?1                  	;0
30 12  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
31 12  FETCH_DIM_R/81            $16=      $15                  28:'name'           	;0
32 12  IS_NOT_EQUAL/18           #17=      $16                  29:'xui'            	;0
33 12  BOOL_NOT/13               #18=      #17                  ?0                  	;0
34 12  JMPZ/43                   ?0        #18                  ?36                 	;0	>>36
35 13  GOTO/253                  ?0        ?37                  ?30                 	;0
36 15  EXIT/79                   ?0        31:'Please run as XUI!
' ?0                  	;0	<<34
37 17  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'set_time_limit' 	;1
38 17  SEND_VAL_EX/116           ?80       34:0                 ?1                  	;0
39 17  DO_FCALL_BY_NAME/131      ?17       ?0                   ?0                  	;0
40 18  BEGIN_SILENCE/57          #20=      ?0                   ?0                  	;0
41 18  FETCH_R/80                $21=      35:'argc'            ?0                  	;268435456
42 18  END_SILENCE/58            ?0        #20                  ?0                  	;0
43 18  JMPZ/43                   ?0        $21                  ?45                 	;0	>>45
44 19  GOTO/253                  ?0        ?2                   ?36                 	;0
45 21  GOTO/253                  ?0        ?1                   ?37                 	;0	<<43
46 23  INIT_STATIC_METHOD_CALL/113 ?0        38:'XUI'             40:'a3cf732c257bd804'	;1
47 23  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
48 23  DO_FCALL/60               ?20       ?0                   ?0                  	;0
49 25  NOP/0                     ?0        ?0                   ?0                  	;0
50 85  INIT_FCALL/61             ?0        ?768                 42:'ab8369074df2aaa3'	;0
51 85  DO_FCALL/60               ?21       ?0                   ?0                  	;0
52 86  GOTO/253                  ?0        ?53                  ?43                 	;0
53 88  BEGIN_SILENCE/57          #24=      ?0                   ?0                  	;0
54 88  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'unlink'         	;1
55 88  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
56 88  DO_FCALL_BY_NAME/131      ?23       ?0                   ?0                  	;0
57 88  END_SILENCE/58            ?0        #24                  ?0                  	;0
58 89  NOP/0                     ?0        46:1                 ?0                  	;4294967295
*/

?>