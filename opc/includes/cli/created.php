<?php


function c7Cc2f0dd6f71EBb($ee6d1fc5d801b43f)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   113  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   115  JMP/42                    ?0        ?51                  ?0                  	;0	>>51
	2   118  GOTO/253                  ?0        ?11                  ?1                  	;0
	3   120  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'shell_exec'      	;1
	4   120  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'intval'          	;1
	5   120  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	6   120  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
	7   120  CONCAT/8                  #4=       6:'kill -9 `ps -ef | grep \'XUICreate\\[' $3                  	;0
	8   120  CONCAT/8                  #5=       #4                   7:'\\]\' | grep -v grep | awk \'{print $2}\'`;'	;0
	9   120  SEND_VAL_EX/116           ?80       #5                   ?1                  	;0
	10  120  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
	11  122  GOTO/253                  ?0        ?41                  ?8                  	;0
	12  124  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'file_exists'     	;1
	13  124  CONCAT/8                  #7=       11:'/proc/'          16?1                	;0
	14  124  SEND_VAL_EX/116           ?80       #7                   ?1                  	;0
	15  124  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	16  124  BOOL_NOT/13               #9=       $8                   ?0                  	;0
	17  124  JMPZ/43                   ?0        #9                   ?19                 	;0	>>19
	18  125  GOTO/253                  ?0        ?2                   ?12                 	;0
	19  127  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'trim'           	;1	<<17
	20  127  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'file_get_contents'	;1
	21  127  ROPE_INIT/54              #11=      ?0                   17:'/proc/'         	;3
	22  127  ROPE_ADD/55               #11=      #11                  16?1                	;1
	23  127  ROPE_END/56               #10=      #11                  18:'/cmdline'       	;2
	24  127  SEND_VAL_EX/116           ?80       #10                  ?1                  	;0
	25  127  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
	26  127  SEND_VAR_NO_REF_EX/50     ?80       $13                  ?1                  	;0
	27  127  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
	28  127  ASSIGN/38                 ?12       16?2                 $14                 	;0
	29  128  ROPE_INIT/54              #17=      ?0                   19:'XUICreate['     	;3
	30  128  ROPE_ADD/55               #17=      #17                  16?0                	;1
	31  128  ROPE_END/56               #16=      #17                  20:']'              	;2
	32  128  IS_EQUAL/17               #19=      16?2                 #16                 	;0
	33  128  BOOL_NOT/13               #20=      #19                  ?0                  	;0
	34  128  JMPZ/43                   ?0        #20                  ?36                 	;0	>>36
	35  129  GOTO/253                  ?0        ?40                  ?21                 	;0
	36  131  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'posix_kill'     	;2	<<34
	37  131  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	38  131  SEND_VAL_EX/116           ?96       24:9                 ?2                  	;0
	39  131  DO_FCALL_BY_NAME/131      ?18       ?0                   ?0                  	;0
	40  133  GOTO/253                  ?0        ?2                   ?25                 	;0
	41  135  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'file_put_contents'	;2
	42  135  FETCH_CONSTANT/99         #22=      ?0                   28:'CREATED_PATH'   	;16
	43  135  CONCAT/8                  #23=      #22                  16?0                	;0
	44  135  CONCAT/8                  #24=      #23                  31:'_.create'       	;0
	45  135  SEND_VAL_EX/116           ?80       #24                  ?1                  	;0
	46  135  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'getmypid'       	;0
	47  135  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
	48  135  SEND_VAR_NO_REF_EX/50     ?96       $25                  ?2                  	;0
	49  135  DO_FCALL_BY_NAME/131      ?23       ?0                   ?0                  	;0
	50  136  GOTO/253                  ?0        ?77                  ?34                 	;0
	51  138  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'clearstatcache' 	;1	<<1
	52  138  SEND_VAL_EX/116           ?80       37:true              ?1                  	;0
	53  138  DO_FCALL_BY_NAME/131      ?24       ?0                   ?0                  	;0
	54  139  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'file_exists'    	;1
	55  139  FETCH_CONSTANT/99         #28=      ?0                   40:'CREATED_PATH'   	;16
	56  139  CONCAT/8                  #29=      #28                  16?0                	;0
	57  139  CONCAT/8                  #30=      #29                  43:'_.create'       	;0
	58  139  SEND_VAL_EX/116           ?80       #30                  ?1                  	;0
	59  139  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
	60  139  BOOL_NOT/13               #32=      $31                  ?0                  	;0
	61  139  JMPZ/43                   ?0        #32                  ?63                 	;0	>>63
	62  140  GOTO/253                  ?0        ?73                  ?44                 	;0
	63  142  INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'intval'         	;1	<<61
	64  142  INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'file_get_contents'	;1
	65  142  FETCH_CONSTANT/99         #33=      ?0                   49:'CREATED_PATH'   	;16
	66  142  CONCAT/8                  #34=      #33                  16?0                	;0
	67  142  CONCAT/8                  #35=      #34                  52:'_.create'       	;0
	68  142  SEND_VAL_EX/116           ?80       #35                  ?1                  	;0
	69  142  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	70  142  SEND_VAR_NO_REF_EX/50     ?80       $36                  ?1                  	;0
	71  142  DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
	72  142  ASSIGN/38                 ?35       16?1                 $37                 	;0
	73  144  ISSET_ISEMPTY_CV/197      #39=      16?1                 ?0                  	;16777216
	74  144  JMPZ/43                   ?0        #39                  ?76                 	;0	>>76
	75  145  GOTO/253                  ?0        ?3                   ?53                 	;0
	76  147  GOTO/253                  ?0        ?12                  ?54                 	;0	<<74
	77  149  NOP/0                     ?0        55:NULL              ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   215  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   216  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
	2   216  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   216  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4   216  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5   216  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6   217  GOTO/253                  ?0        ?9                   ?3                  	;0
	7   219  INIT_METHOD_CALL/112      ?0        16?0                 4:'close_mysql'     	;0	<<5
	8   219  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	9   221  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?305                 ?0                  	;0	>>305
1   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'register_shutdown_function'	;1
2   6    SEND_VAL_EX/116           ?80       3:'shutdown'         ?1                  	;0
3   6    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
4   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'str_replace'     	;3
5   7    SEND_VAL_EX/116           ?80       6:'\\'               ?1                  	;0
6   7    SEND_VAL_EX/116           ?96       7:'/'                ?2                  	;0
7   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'dirname'         	;1
8   7    FETCH_DIM_FUNC_ARG/93     $23=      16?0                 10:0                	;1
9   7    SEND_VAR_EX/66            ?80       $23                  ?1                  	;0
10  7    DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
11  7    SEND_VAR_NO_REF_EX/50     ?112      $24                  ?3                  	;0
12  7    DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
13  7    CONCAT/8                  #26=      $25                  11:'/../../www/init.php'	;0
14  7    INCLUDE_OR_EVAL/73        ?5        #26                  ?0                  	;8
15  8    INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'intval'         	;1
16  8    FETCH_DIM_FUNC_ARG/93     $28=      16?0                 14:1                	;1
17  8    SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
18  8    DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
19  8    ASSIGN/38                 ?8        16?1                 $29                 	;0
20  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'c7CC2f0DD6f71ebb'	;1
21  9    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
22  9    DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
23  10   GOTO/253                  ?0        ?399                 ?17                 	;0
24  12   ISSET_ISEMPTY_CV/197      #32=      16?2                 ?0                  	;16777216
25  12   BOOL_NOT/13               #33=      #32                  ?0                  	;0
26  12   JMPNZ_EX/47               #33=      #33                  ?31                 	;0	>>31
27  12   FETCH_DIM_R/81            $34=      16?3                 18:'stream_source'  	;0
28  12   FETCH_DIM_R/81            $35=      16?4                 19:'cchannel_rsources'	;0
29  12   IS_NOT_IDENTICAL/16       #36=      $34                  $35                 	;0
30  12   BOOL/52                   #33=      #36                  ?0                  	;0
31  12   BOOL_NOT/13               #37=      #33                  ?0                  	;0	<<26
32  12   JMPZ/43                   ?0        #37                  ?34                 	;0	>>34
33  13   GOTO/253                  ?0        ?290                 ?20                 	;0
34  15   FE_RESET_R/77             $38=      16?2                 ?167                	;0	<<32
35  15   FE_FETCH_R/78             ?0        $38                  16?5                	;167	>>167	<<166
36  16   NOP/0                     ?0        ?0                   ?0                  	;1
37  16   GOTO/253                  ?0        ?51                  ?21                 	;0
38  20   ROPE_INIT/54              #40=      ?0                   22:'Processing source: '	;3
39  20   ROPE_ADD/55               #40=      #40                  16?5                	;1
40  20   ROPE_END/56               #39=      #40                  23:'...
'           	;2
41  20   ECHO/40                   ?0        #39                  ?0                  	;0
42  21   INIT_STATIC_METHOD_CALL/113 ?0        24:'XUI'             26:'e462180Cf8B466f4'	;2
43  21   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
44  21   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
45  21   DO_FCALL/60               $42=      ?0                   ?0                  	;0
46  21   ASSIGN/38                 ?21       16?6                 $42                 	;0
47  22   INIT_METHOD_CALL/112      ?0        16?7                 28:'close_mysql'    	;0
48  22   DO_FCALL/60               ?22       ?0                   ?0                  	;0
49  23   NOP/0                     ?0        ?0                   ?0                  	;1
50  23   GOTO/253                  ?0        ?148                 ?30                 	;0
51  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'md5'            	;1
52  25   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
53  25   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
54  25   ASSIGN/38                 ?24       16?8                 $45                 	;0
55  26   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'file_exists'    	;1
56  26   FETCH_CONSTANT/99         #47=      ?0                   35:'CREATED_PATH'   	;16
57  26   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'intval'         	;1
58  26   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
59  26   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
60  26   CONCAT/8                  #49=      #47                  $48                 	;0
61  26   ROPE_INIT/54              #51=      ?0                   40:'_'              	;3
62  26   ROPE_ADD/55               #51=      #51                  16?8                	;1
63  26   ROPE_END/56               #50=      #51                  41:'.pid'           	;2
64  26   CONCAT/8                  #53=      #49                  #50                 	;0
65  26   SEND_VAL_EX/116           ?80       #53                  ?1                  	;0
66  26   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
67  26   BOOL_NOT/13               #55=      $54                  ?0                  	;0
68  26   JMPZ/43                   ?0        #55                  ?71                 	;0	>>71
69  27   NOP/0                     ?0        ?0                   ?0                  	;1
70  27   GOTO/253                  ?0        ?38                  ?42                 	;0
71  29   INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'intval'         	;1	<<68
72  29   INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'file_get_contents'	;1
73  29   FETCH_CONSTANT/99         #56=      ?0                   47:'CREATED_PATH'   	;16
74  29   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'intval'         	;1
75  29   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
76  29   DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
77  29   CONCAT/8                  #58=      #56                  $57                 	;0
78  29   ROPE_INIT/54              #60=      ?0                   52:'_'              	;3
79  29   ROPE_ADD/55               #60=      #60                  16?8                	;1
80  29   ROPE_END/56               #59=      #60                  53:'.pid'           	;2
81  29   CONCAT/8                  #62=      #58                  #59                 	;0
82  29   SEND_VAL_EX/116           ?80       #62                  ?1                  	;0
83  29   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
84  29   SEND_VAR_NO_REF_EX/50     ?80       $63                  ?1                  	;0
85  29   DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
86  29   ASSIGN/38                 ?43       16?9                 $64                 	;0
87  30   INIT_STATIC_METHOD_CALL/113 ?0        54:'XUI'             56:'a633007d15904f34'	;3
88  30   FETCH_CONSTANT/99         #66=      ?0                   58:'SERVER_ID'      	;16
89  30   SEND_VAL_EX/116           ?80       #66                  ?1                  	;0
90  30   SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
91  30   FETCH_STATIC_PROP_FUNC_ARG/177 $67=      61:'rFFMPEG_CPU'     62:'XUI'            	;3
92  30   SEND_VAR_EX/66            ?112      $67                  ?3                  	;0
93  30   DO_FCALL/60               $68=      ?0                   ?0                  	;0
94  30   BOOL_NOT/13               #69=      $68                  ?0                  	;0
95  30   JMPZ/43                   ?0        #69                  ?98                 	;0	>>98
96  31   NOP/0                     ?0        ?0                   ?0                  	;1
97  31   GOTO/253                  ?0        ?38                  ?64                 	;0
98  33   INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'exec'           	;1	<<95
99  33   NOP/0                     ?0        ?0                   ?0                  	;0
100 33   FAST_CONCAT/53            #70=      67:'kill -9 '        16?9                	;0
101 33   SEND_VAL_EX/116           ?80       #70                  ?1                  	;0
102 33   DO_FCALL_BY_NAME/131      ?49       ?0                   ?0                  	;0
103 34   NOP/0                     ?0        ?0                   ?0                  	;1
104 34   GOTO/253                  ?0        ?38                  ?68                 	;0
105 37   NOP/0                     ?0        ?0                   ?0                  	;1
106 37   GOTO/253                  ?0        ?166                 ?69                 	;0
107 39   FETCH_DIM_W/84            $72=      16?4                 70:'cchannel_rsources'	;0
108 39   ASSIGN_DIM/147            ?51       $72                  ?4442274            	;0
109 39   OP_DATA/137               ?0        16?5                 ?0                  	;0
110 40   INIT_METHOD_CALL/112      ?0        16?7                 71:'db_connect'     	;0
111 40   DO_FCALL/60               ?52       ?0                   ?0                  	;0
112 41   INIT_METHOD_CALL/112      ?0        16?7                 73:'query'          	;3
113 41   SEND_VAL_EX/116           ?80       75:'UPDATE `streams_servers` SET `cchannel_rsources` = ? WHERE `server_stream_id` = ?' ?1                  	;0
114 41   INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'json_encode'    	;1
115 41   FETCH_DIM_FUNC_ARG/93     $75=      16?4                 78:'cchannel_rsources'	;1
116 41   SEND_VAR_EX/66            ?80       $75                  ?1                  	;0
117 41   DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
118 41   SEND_VAR_NO_REF_EX/50     ?96       $76                  ?2                  	;0
119 41   FETCH_DIM_FUNC_ARG/93     $77=      16?4                 79:'server_stream_id'	;3
120 41   SEND_VAR_EX/66            ?112      $77                  ?3                  	;0
121 41   DO_FCALL/60               ?56       ?0                   ?0                  	;0
122 42   INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'unlink'         	;1
123 42   FETCH_CONSTANT/99         #79=      ?0                   82:'CREATED_PATH'   	;16
124 42   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'intval'         	;1
125 42   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
126 42   DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
127 42   CONCAT/8                  #81=      #79                  $80                 	;0
128 42   ROPE_INIT/54              #83=      ?0                   87:'_'              	;3
129 42   ROPE_ADD/55               #83=      #83                  16?8                	;1
130 42   ROPE_END/56               #82=      #83                  88:'.pid'           	;2
131 42   CONCAT/8                  #85=      #81                  #82                 	;0
132 42   SEND_VAL_EX/116           ?80       #85                  ?1                  	;0
133 42   DO_FCALL_BY_NAME/131      ?64       ?0                   ?0                  	;0
134 43   INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'unlink'         	;1
135 43   FETCH_CONSTANT/99         #87=      ?0                   91:'CREATED_PATH'   	;16
136 43   INIT_FCALL_BY_NAME/59     ?0        ?0                   94:'intval'         	;1
137 43   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
138 43   DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
139 43   CONCAT/8                  #89=      #87                  $88                 	;0
140 43   ROPE_INIT/54              #91=      ?0                   96:'_'              	;3
141 43   ROPE_ADD/55               #91=      #91                  16?8                	;1
142 43   ROPE_END/56               #90=      #91                  97:'.errors'        	;2
143 43   CONCAT/8                  #93=      #89                  #90                 	;0
144 43   SEND_VAL_EX/116           ?80       #93                  ?1                  	;0
145 43   DO_FCALL_BY_NAME/131      ?72       ?0                   ?0                  	;0
146 44   NOP/0                     ?0        ?0                   ?0                  	;1
147 44   GOTO/253                  ?0        ?105                 ?98                 	;0
148 47   INIT_STATIC_METHOD_CALL/113 ?0        99:'XUI'             101:'A633007D15904F34'	;3
149 47   FETCH_CONSTANT/99         #95=      ?0                   103:'SERVER_ID'     	;16
150 47   SEND_VAL_EX/116           ?80       #95                  ?1                  	;0
151 47   SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
152 47   FETCH_STATIC_PROP_FUNC_ARG/177 $96=      106:'rFFMPEG_CPU'    107:'XUI'           	;3
153 47   SEND_VAR_EX/66            ?112      $96                  ?3                  	;0
154 47   DO_FCALL/60               $97=      ?0                   ?0                  	;0
155 47   BOOL_NOT/13               #98=      $97                  ?0                  	;0
156 47   JMPZ/43                   ?0        #98                  ?159                	;0	>>159
157 48   NOP/0                     ?0        ?0                   ?0                  	;1
158 48   GOTO/253                  ?0        ?164                 ?109                	;0
159 50   INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'sleep'         	;1	<<156
160 50   SEND_VAL_EX/116           ?80       112:1                ?1                  	;0
161 50   DO_FCALL_BY_NAME/131      ?77       ?0                   ?0                  	;0
162 51   NOP/0                     ?0        ?0                   ?0                  	;1
163 51   GOTO/253                  ?0        ?148                 ?113                	;0
164 53   NOP/0                     ?0        ?0                   ?0                  	;1
165 53   GOTO/253                  ?0        ?107                 ?114                	;0
166 54   JMP/42                    ?0        ?35                  ?0                  	;0	>>35
167 54   FE_FREE/127               ?0        $38                  ?0                  	;0	<<34
168 57   ASSIGN/38                 ?78       16?10                115:''              	;0
169 58   FETCH_DIM_R/81            $101=     16?3                 116:'stream_source' 	;0
170 58   FE_RESET_R/77             $102=     $101                 ?261                	;0
171 58   FE_FETCH_R/78             ?0        $102                 16?5                	;261	>>261	<<260
172 59   NOP/0                     ?0        ?0                   ?0                  	;1
173 59   GOTO/253                  ?0        ?204                 ?117                	;0
174 62   INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'file_exists'   	;1
175 62   FETCH_CONSTANT/99         #103=     ?0                   120:'CREATED_PATH'  	;16
176 62   CONCAT/8                  #104=     #103                 16?1                	;0
177 62   CONCAT/8                  #105=     #104                 123:'_'             	;0
178 62   INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'md5'           	;1
179 62   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
180 62   DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
181 62   CONCAT/8                  #107=     #105                 $106                	;0
182 62   CONCAT/8                  #108=     #107                 126:'.'             	;0
183 62   CONCAT/8                  #109=     #108                 16?11               	;0
184 62   SEND_VAL_EX/116           ?80       #109                 ?1                  	;0
185 62   DO_FCALL_BY_NAME/131      $110=     ?0                   ?0                  	;0
186 62   BOOL_NOT/13               #111=     $110                 ?0                  	;0
187 62   JMPZ/43                   ?0        #111                 ?190                	;0	>>190
188 63   NOP/0                     ?0        ?0                   ?0                  	;1
189 63   GOTO/253                  ?0        ?202                 ?127                	;0
190 65   FETCH_CONSTANT/99         #112=     ?0                   128:'CREATED_PATH'  	;16	<<187
191 65   CONCAT/8                  #113=     131:'file \''        #112                	;0
192 65   CONCAT/8                  #114=     #113                 16?1                	;0
193 65   CONCAT/8                  #115=     #114                 132:'_'             	;0
194 65   INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'md5'           	;1
195 65   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
196 65   DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
197 65   CONCAT/8                  #117=     #115                 $116                	;0
198 65   CONCAT/8                  #118=     #117                 135:'.'             	;0
199 65   CONCAT/8                  #119=     #118                 16?11               	;0
200 65   CONCAT/8                  #120=     #119                 136:'\'
'           	;0
201 65   ASSIGN_CONCAT/30          ?99       16?10                #120                	;0
202 68   NOP/0                     ?0        ?0                   ?0                  	;1
203 68   GOTO/253                  ?0        ?260                 ?137                	;0
204 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'substr'        	;3
205 70   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
206 70   SEND_VAL_EX/116           ?96       140:0                ?2                  	;0
207 70   SEND_VAL_EX/116           ?112      141:2                ?3                  	;0
208 70   DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
209 70   IS_EQUAL/17               #123=     $122                 142:'s:'            	;0
210 70   JMPZ/43                   ?0        #123                 ?213                	;0	>>213
211 71   NOP/0                     ?0        ?0                   ?0                  	;1
212 71   GOTO/253                  ?0        ?217                 ?143                	;0
213 73   FETCH_CONSTANT/99         #124=     ?0                   144:'SERVER_ID'     	;16	<<210
214 73   ASSIGN/38                 ?103      16?12                #124                	;0
215 74   NOP/0                     ?0        ?0                   ?0                  	;1
216 74   GOTO/253                  ?0        ?246                 ?147                	;0
217 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'explode'       	;3
218 76   SEND_VAL_EX/116           ?80       150:':'              ?1                  	;0
219 76   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
220 76   SEND_VAL_EX/116           ?112      151:3                ?3                  	;0
221 76   DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
222 76   ASSIGN/38                 ?105      16?13                $126                	;0
223 77   NOP/0                     ?0        ?0                   ?0                  	;1
224 77   GOTO/253                  ?0        ?241                 ?152                	;0
225 80   INIT_FCALL_BY_NAME/59     ?0        ?0                   153:'pathinfo'      	;1
226 80   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
227 80   DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
228 80   FETCH_DIM_R/81            $129=     $128                 155:'extension'     	;0
229 80   ASSIGN/38                 ?108      16?11                $129                	;0
230 81   INIT_FCALL_BY_NAME/59     ?0        ?0                   156:'strlen'        	;1
231 81   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
232 81   DO_FCALL_BY_NAME/131      $131=     ?0                   ?0                  	;0
233 81   IS_EQUAL/17               #132=     $131                 158:0               	;0
234 81   BOOL_NOT/13               #133=     #132                 ?0                  	;0
235 81   JMPZ/43                   ?0        #133                 ?238                	;0	>>238
236 82   NOP/0                     ?0        ?0                   ?0                  	;1
237 82   GOTO/253                  ?0        ?239                 ?159                	;0
238 84   ASSIGN/38                 ?112      16?11                160:'mp4'           	;0	<<235
239 86   NOP/0                     ?0        ?0                   ?0                  	;1
240 86   GOTO/253                  ?0        ?174                 ?161                	;0
241 88   INIT_FCALL_BY_NAME/59     ?0        ?0                   162:'intval'        	;1
242 88   FETCH_DIM_FUNC_ARG/93     $135=     16?13                164:1               	;1
243 88   SEND_VAR_EX/66            ?80       $135                 ?1                  	;0
244 88   DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
245 88   ASSIGN/38                 ?115      16?12                $136                	;0
246 90   FETCH_CONSTANT/99         #138=     ?0                   165:'SERVER_ID'     	;16
247 90   IS_EQUAL/17               #139=     16?12                #138                	;0
248 90   JMPZ_EX/46                #139=     #139                 ?252                	;0	>>252
249 90   FETCH_DIM_R/81            $140=     16?3                 168:'movie_symlink' 	;0
250 90   IS_EQUAL/17               #141=     $140                 169:1               	;0
251 90   BOOL/52                   #139=     #141                 ?0                  	;0
252 90   JMPZ/43                   ?0        #139                 ?255                	;0	>>255	<<248
253 91   NOP/0                     ?0        ?0                   ?0                  	;1
254 91   GOTO/253                  ?0        ?225                 ?170                	;0
255 93   ASSIGN/38                 ?120      16?11                171:'ts'            	;0	<<252
256 94   NOP/0                     ?0        ?0                   ?0                  	;1
257 94   GOTO/253                  ?0        ?174                 ?172                	;0
258 95   NOP/0                     ?0        ?0                   ?0                  	;1
259 95   GOTO/253                  ?0        ?225                 ?173                	;0
260 96   JMP/42                    ?0        ?171                 ?0                  	;0	>>171
261 96   FE_FREE/127               ?0        $102                 ?0                  	;0	<<170
262 98   GOTO/253                  ?0        ?420                 ?174                	;0
263 100  EXIT/79                   ?0        ?0                   ?0                  	;0
264 102  INIT_METHOD_CALL/112      ?0        16?7                 175:'get_row'       	;0
265 102  DO_FCALL/60               $143=     ?0                   ?0                  	;0
266 102  ASSIGN/38                 ?122      16?3                 $143                	;0
267 103  INIT_METHOD_CALL/112      ?0        16?7                 177:'query'         	;3
268 103  SEND_VAL_EX/116           ?80       179:'SELECT * FROM `streams_servers` WHERE stream_id  = ? AND `server_id` = ? AND `parent_id` IS NULL' ?1                  	;0
269 103  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
270 103  FETCH_CONSTANT/99         #145=     ?0                   180:'SERVER_ID'     	;16
271 103  SEND_VAL_EX/116           ?112      #145                 ?3                  	;0
272 103  DO_FCALL/60               ?124      ?0                   ?0                  	;0
273 104  INIT_METHOD_CALL/112      ?0        16?7                 183:'num_rows'      	;0
274 104  DO_FCALL/60               $147=     ?0                   ?0                  	;0
275 104  IS_EQUAL/17               #148=     $147                 185:0               	;0
276 104  BOOL_NOT/13               #149=     #148                 ?0                  	;0
277 104  JMPZ/43                   ?0        #149                 ?279                	;0	>>279
278 105  GOTO/253                  ?0        ?294                 ?186                	;0
279 107  GOTO/253                  ?0        ?292                 ?187                	;0	<<277
280 109  ECHO/40                   ?0        188:'Completed!
'    ?0                  	;0
281 110  INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'unlink'        	;2
282 110  FETCH_CONSTANT/99         #150=     ?0                   191:'CREATED_PATH'  	;16
283 110  CONCAT/8                  #151=     #150                 16?1                	;0
284 110  CONCAT/8                  #152=     #151                 194:'_.create'      	;0
285 110  SEND_VAL_EX/116           ?80       #152                 ?1                  	;0
286 110  INIT_FCALL_BY_NAME/59     ?0        ?0                   195:'getmypid'      	;0
287 110  DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
288 110  SEND_VAR_NO_REF_EX/50     ?96       $153                 ?2                  	;0
289 110  DO_FCALL_BY_NAME/131      ?132      ?0                   ?0                  	;0
290 113  NOP/0                     ?0        ?0                   ?0                  	;0
291 150  GOTO/253                  ?0        ?463                 ?197                	;0
292 152  ECHO/40                   ?0        198:'Channel doesn\'t exist on this server.
' ?0                  	;0
293 153  EXIT/79                   ?0        ?0                   ?0                  	;0
294 155  INIT_METHOD_CALL/112      ?0        16?7                 199:'get_row'       	;0
295 155  DO_FCALL/60               $155=     ?0                   ?0                  	;0
296 155  ASSIGN/38                 ?134      16?4                 $155                	;0
297 156  INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'json_decode'   	;2
298 156  FETCH_DIM_FUNC_ARG/93     $158=     16?3                 204:'stream_source' 	;1
299 156  SEND_VAR_EX/66            ?80       $158                 ?1                  	;0
300 156  SEND_VAL_EX/116           ?96       205:true             ?2                  	;0
301 156  DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
302 156  ASSIGN_DIM/147            ?135      16?3                 201:'stream_source' 	;0
303 156  OP_DATA/137               ?0        $159                 ?0                  	;0
304 157  GOTO/253                  ?0        ?443                 ?206                	;0
305 159  INIT_FCALL_BY_NAME/59     ?0        ?0                   207:'posix_getpwuid'	;1	<<0
306 159  INIT_FCALL_BY_NAME/59     ?0        ?0                   209:'posix_geteuid' 	;0
307 159  DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
308 159  SEND_VAR_NO_REF_EX/50     ?80       $160                 ?1                  	;0
309 159  DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
310 159  FETCH_DIM_R/81            $162=     $161                 211:'name'          	;0
311 159  IS_NOT_EQUAL/18           #163=     $162                 212:'xui'           	;0
312 159  BOOL_NOT/13               #164=     #163                 ?0                  	;0
313 159  JMPZ/43                   ?0        #164                 ?315                	;0	>>315
314 160  GOTO/253                  ?0        ?316                 ?213                	;0
315 162  EXIT/79                   ?0        214:'Please run as XUI!
' ?0                  	;0	<<313
316 164  BEGIN_SILENCE/57          #165=     ?0                   ?0                  	;0
317 164  FETCH_R/80                $166=     215:'argc'           ?0                  	;268435456
318 164  END_SILENCE/58            ?0        #165                 ?0                  	;0
319 164  BOOL_NOT/13               #167=     $166                 ?0                  	;0
320 164  JMPNZ_EX/47               #167=     #167                 ?323                	;0	>>323
321 164  IS_SMALLER_OR_EQUAL/20    #168=     16?14                216:1               	;0
322 164  BOOL/52                   #167=     #168                 ?0                  	;0
323 164  BOOL_NOT/13               #169=     #167                 ?0                  	;0	<<320
324 164  JMPZ/43                   ?0        #169                 ?326                	;0	>>326
325 165  GOTO/253                  ?0        ?1                   ?217                	;0
326 167  EXIT/79                   ?0        218:0                ?0                  	;0	<<324
327 168  GOTO/253                  ?0        ?1                   ?219                	;0
328 170  INIT_FCALL_BY_NAME/59     ?0        ?0                   220:'explode'       	;2
329 170  SEND_VAL_EX/116           ?80       222:'
'              ?1                  	;0
330 170  INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'file_get_contents'	;1
331 170  FETCH_CONSTANT/99         #170=     ?0                   225:'CREATED_PATH'  	;16
332 170  CONCAT/8                  #171=     #170                 16?1                	;0
333 170  CONCAT/8                  #172=     #171                 228:'_.list'        	;0
334 170  SEND_VAL_EX/116           ?80       #172                 ?1                  	;0
335 170  DO_FCALL_BY_NAME/131      $173=     ?0                   ?0                  	;0
336 170  SEND_VAR_NO_REF_EX/50     ?96       $173                 ?2                  	;0
337 170  DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
338 170  ASSIGN/38                 ?153      16?15                $174                	;0
339 171  ASSIGN/38                 ?154      16?16                229:array (
)       	;0
340 172  FE_RESET_R/77             $177=     16?15                ?385                	;0
341 172  FE_FETCH_R/78             ?0        $177                 16?17               	;385	>>385	<<384
342 173  INIT_FCALL_BY_NAME/59     ?0        ?0                   230:'explode'       	;2
343 173  SEND_VAL_EX/116           ?80       232:'\''             ?1                  	;0
344 173  INIT_FCALL_BY_NAME/59     ?0        ?0                   233:'explode'       	;2
345 173  SEND_VAL_EX/116           ?80       235:'\''             ?1                  	;0
346 173  SEND_VAR_EX/66            ?96       16?17                ?2                  	;0
347 173  DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
348 173  SEPARATE/156              $178=     $178                 ?0                  	;0
349 173  FETCH_DIM_FUNC_ARG/93     $179=     $178                 236:1               	;2
350 173  SEND_VAR_EX/66            ?96       $179                 ?2                  	;0
351 173  DO_FCALL_BY_NAME/131      $180=     ?0                   ?0                  	;0
352 173  FETCH_DIM_R/81            $181=     $180                 237:0               	;0
353 173  ASSIGN/38                 ?160      16?18                $181                	;0
354 174  INIT_FCALL_BY_NAME/59     ?0        ?0                   238:'file_exists'   	;1
355 174  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
356 174  DO_FCALL_BY_NAME/131      $183=     ?0                   ?0                  	;0
357 174  BOOL_NOT/13               #184=     $183                 ?0                  	;0
358 174  JMPZ/43                   ?0        #184                 ?361                	;0	>>361
359 175  NOP/0                     ?0        ?0                   ?0                  	;1
360 175  GOTO/253                  ?0        ?384                 ?240                	;0
361 177  INIT_STATIC_METHOD_CALL/113 ?0        241:'XUI'            243:'e57006536CD5655D'	;1	<<358
362 177  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
363 177  DO_FCALL/60               $185=     ?0                   ?0                  	;0
364 177  ASSIGN/38                 ?164      16?19                $185                	;0
365 178  INIT_ARRAY/71             #188=     16?20                245:'position'      	;30
366 178  INIT_FCALL_BY_NAME/59     ?0        ?0                   246:'basename'      	;1
367 178  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
368 178  DO_FCALL_BY_NAME/131      $189=     ?0                   ?0                  	;0
369 178  ADD_ARRAY_ELEMENT/72      #188=     $189                 248:'filename'      	;0
370 178  ADD_ARRAY_ELEMENT/72      #188=     16?18                249:'path'          	;0
371 178  ADD_ARRAY_ELEMENT/72      #188=     16?19                250:'stream_info'   	;0
372 178  FETCH_DIM_R/81            $190=     16?19                251:'of_duration'   	;0
373 178  ADD_ARRAY_ELEMENT/72      #188=     $190                 252:'seconds'       	;0
374 178  ADD_ARRAY_ELEMENT/72      #188=     16?21                253:'start'         	;0
375 178  FETCH_DIM_R/81            $191=     16?19                254:'of_duration'   	;0
376 178  ADD/1                     #192=     16?21                $191                	;0
377 178  ADD_ARRAY_ELEMENT/72      #188=     #192                 255:'finish'        	;0
378 178  ASSIGN_DIM/147            ?165      16?16                ?2670194880         	;0
379 178  OP_DATA/137               ?0        #188                 ?0                  	;0
380 179  FETCH_DIM_R/81            $193=     16?19                256:'of_duration'   	;0
381 179  ASSIGN_ADD/23             ?172      16?21                $193                	;0
382 180  POST_INC/36               #195=     16?20                ?0                  	;0
383 180  FREE/70                   ?0        #195                 ?0                  	;0
384 182  JMP/42                    ?0        ?341                 ?0                  	;0	>>341
385 182  FE_FREE/127               ?0        $177                 ?0                  	;0	<<340
386 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   257:'file_put_contents'	;2
387 185  FETCH_CONSTANT/99         #196=     ?0                   259:'CREATED_PATH'  	;16
388 185  CONCAT/8                  #197=     #196                 16?1                	;0
389 185  CONCAT/8                  #198=     #197                 262:'_.info'        	;0
390 185  SEND_VAL_EX/116           ?80       #198                 ?1                  	;0
391 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   263:'json_encode'   	;2
392 185  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
393 185  FETCH_CONSTANT/99         #199=     ?0                   265:'JSON_UNESCAPED_UNICODE'	;16
394 185  SEND_VAL_EX/116           ?96       #199                 ?2                  	;0
395 185  DO_FCALL_BY_NAME/131      $200=     ?0                   ?0                  	;0
396 185  SEND_VAR_NO_REF_EX/50     ?96       $200                 ?2                  	;0
397 185  DO_FCALL_BY_NAME/131      ?179      ?0                   ?0                  	;0
398 186  GOTO/253                  ?0        ?280                 ?268                	;0
399 188  INIT_FCALL_BY_NAME/59     ?0        ?0                   269:'set_time_limit'	;1
400 188  SEND_VAL_EX/116           ?80       271:0                ?1                  	;0
401 188  DO_FCALL_BY_NAME/131      ?180      ?0                   ?0                  	;0
402 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'cli_set_process_title'	;1
403 189  ROPE_INIT/54              #204=     ?0                   274:'XUICreate['    	;3
404 189  ROPE_ADD/55               #204=     #204                 16?1                	;1
405 189  ROPE_END/56               #203=     #204                 275:']'             	;2
406 189  SEND_VAL_EX/116           ?80       #203                 ?1                  	;0
407 189  DO_FCALL_BY_NAME/131      ?184      ?0                   ?0                  	;0
408 190  INIT_METHOD_CALL/112      ?0        16?7                 276:'query'         	;2
409 190  SEND_VAL_EX/116           ?80       278:'SELECT * FROM `streams` t1 LEFT JOIN `profiles` t3 ON t1.transcode_profile_id = t3.profile_id WHERE t1.`id` = ?' ?1                  	;0
410 190  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
411 190  DO_FCALL/60               ?185      ?0                   ?0                  	;0
412 191  INIT_METHOD_CALL/112      ?0        16?7                 279:'num_rows'      	;0
413 191  DO_FCALL/60               $208=     ?0                   ?0                  	;0
414 191  IS_EQUAL/17               #209=     $208                 281:0               	;0
415 191  BOOL_NOT/13               #210=     #209                 ?0                  	;0
416 191  JMPZ/43                   ?0        #210                 ?418                	;0	>>418
417 192  GOTO/253                  ?0        ?264                 ?282                	;0
418 194  ECHO/40                   ?0        283:'Channel doesn\'t exist.
' ?0                  	;0	<<416
419 195  GOTO/253                  ?0        ?263                 ?284                	;0
420 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   285:'base64_encode' 	;1
421 198  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
422 198  DO_FCALL_BY_NAME/131      $211=     ?0                   ?0                  	;0
423 198  ASSIGN/38                 ?190      16?10                $211                	;0
424 199  INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'shell_exec'    	;1
425 199  ROPE_INIT/54              #214=     ?0                   289:'echo '         	;3
426 199  ROPE_ADD/55               #214=     #214                 16?10               	;1
427 199  ROPE_END/56               #213=     #214                 290:' | base64 --decode > "'	;2
428 199  FETCH_CONSTANT/99         #216=     ?0                   291:'CREATED_PATH'  	;16
429 199  CONCAT/8                  #217=     #213                 #216                	;0
430 199  INIT_FCALL_BY_NAME/59     ?0        ?0                   294:'intval'        	;1
431 199  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
432 199  DO_FCALL_BY_NAME/131      $218=     ?0                   ?0                  	;0
433 199  CONCAT/8                  #219=     #217                 $218                	;0
434 199  CONCAT/8                  #220=     #219                 296:'_.list"'       	;0
435 199  SEND_VAL_EX/116           ?80       #220                 ?1                  	;0
436 199  DO_FCALL_BY_NAME/131      ?199      ?0                   ?0                  	;0
437 200  INIT_STATIC_METHOD_CALL/113 ?0        297:'XUI'            299:'caC325153a658C37'	;1
438 200  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
439 200  DO_FCALL/60               ?200      ?0                   ?0                  	;0
440 201  ASSIGN/38                 $223=     16?21                301:0               	;0
441 201  ASSIGN/38                 ?202      16?20                $223                	;0
442 202  GOTO/253                  ?0        ?328                 ?302                	;0
443 204  INIT_FCALL_BY_NAME/59     ?0        ?0                   304:'json_decode'   	;2
444 204  FETCH_DIM_FUNC_ARG/93     $226=     16?4                 306:'cchannel_rsources'	;1
445 204  SEND_VAR_EX/66            ?80       $226                 ?1                  	;0
446 204  SEND_VAL_EX/116           ?96       307:true             ?2                  	;0
447 204  DO_FCALL_BY_NAME/131      $227=     ?0                   ?0                  	;0
448 204  ASSIGN_DIM/147            ?203      16?4                 303:'cchannel_rsources'	;0
449 204  OP_DATA/137               ?0        $227                 ?0                  	;0
450 205  FETCH_DIM_R/81            $228=     16?4                 308:'cchannel_rsources'	;0
451 205  JMPZ/43                   ?0        $228                 ?453                	;0	>>453
452 206  GOTO/253                  ?0        ?455                 ?309                	;0
453 208  ASSIGN_DIM/147            ?207      16?4                 310:'cchannel_rsources'	;0	<<451
454 208  OP_DATA/137               ?0        311:array (
)        ?0                  	;0
455 210  INIT_FCALL_BY_NAME/59     ?0        ?0                   312:'array_diff'    	;2
456 210  FETCH_DIM_FUNC_ARG/93     $230=     16?3                 314:'stream_source' 	;1
457 210  SEND_VAR_EX/66            ?80       $230                 ?1                  	;0
458 210  FETCH_DIM_FUNC_ARG/93     $231=     16?4                 315:'cchannel_rsources'	;2
459 210  SEND_VAR_EX/66            ?96       $231                 ?2                  	;0
460 210  DO_FCALL_BY_NAME/131      $232=     ?0                   ?0                  	;0
461 210  ASSIGN/38                 ?211      16?2                 $232                	;0
462 211  GOTO/253                  ?0        ?24                  ?316                	;0
463 213  NOP/0                     ?0        ?0                   ?0                  	;0
464 222  NOP/0                     ?0        317:1                ?0                  	;4294967295
*/

?>