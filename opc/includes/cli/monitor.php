<?php


function c7CC2F0dd6F71EBB($ee6d1fc5d801b43f)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   871  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   873  JMP/42                    ?0        ?2                   ?0                  	;0	>>2
	2   875  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'clearstatcache'  	;1	<<1
	3   875  SEND_VAL_EX/116           ?80       3:true               ?1                  	;0
	4   875  DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
	5   876  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'file_exists'     	;1
	6   876  FETCH_CONSTANT/99         #4=       ?0                   6:'STREAMS_PATH'    	;16
	7   876  CONCAT/8                  #5=       #4                   16?0                	;0
	8   876  CONCAT/8                  #6=       #5                   9:'_.monitor'       	;0
	9   876  SEND_VAL_EX/116           ?80       #6                   ?1                  	;0
	10  876  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	11  876  BOOL_NOT/13               #8=       $7                   ?0                  	;0
	12  876  JMPZ/43                   ?0        #8                   ?14                 	;0	>>14
	13  877  GOTO/253                  ?0        ?24                  ?10                 	;0
	14  879  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'intval'         	;1	<<12
	15  879  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'file_get_contents'	;1
	16  879  FETCH_CONSTANT/99         #9=       ?0                   15:'STREAMS_PATH'   	;16
	17  879  CONCAT/8                  #10=      #9                   16?0                	;0
	18  879  CONCAT/8                  #11=      #10                  18:'_.monitor'      	;0
	19  879  SEND_VAL_EX/116           ?80       #11                  ?1                  	;0
	20  879  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
	21  879  SEND_VAR_NO_REF_EX/50     ?80       $12                  ?1                  	;0
	22  879  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
	23  879  ASSIGN/38                 ?11       16?1                 $13                 	;0
	24  881  ISSET_ISEMPTY_CV/197      #15=      16?1                 ?0                  	;16777216
	25  881  JMPZ/43                   ?0        #15                  ?27                 	;0	>>27
	26  882  GOTO/253                  ?0        ?29                  ?19                 	;0
	27  884  GOTO/253                  ?0        ?38                  ?20                 	;0	<<25
	28  887  GOTO/253                  ?0        ?37                  ?21                 	;0
	29  889  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'shell_exec'     	;1
	30  889  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'intval'         	;1
	31  889  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	32  889  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	33  889  CONCAT/8                  #17=      26:'kill -9 `ps -ef | grep \'XUI\\[' $16                 	;0
	34  889  CONCAT/8                  #18=      #17                  27:'\\]\' | grep -v grep | awk \'{print $2}\'`;'	;0
	35  889  SEND_VAL_EX/116           ?80       #18                  ?1                  	;0
	36  889  DO_FCALL_BY_NAME/131      ?16       ?0                   ?0                  	;0
	37  891  GOTO/253                  ?0        ?75                  ?28                 	;0
	38  893  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'file_exists'    	;1
	39  893  CONCAT/8                  #20=      31:'/proc/'          16?1                	;0
	40  893  SEND_VAL_EX/116           ?80       #20                  ?1                  	;0
	41  893  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
	42  893  BOOL_NOT/13               #22=      $21                  ?0                  	;0
	43  893  JMPZ/43                   ?0        #22                  ?45                 	;0	>>45
	44  894  GOTO/253                  ?0        ?28                  ?32                 	;0
	45  896  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'trim'           	;1	<<43
	46  896  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'file_get_contents'	;1
	47  896  ROPE_INIT/54              #24=      ?0                   37:'/proc/'         	;3
	48  896  ROPE_ADD/55               #24=      #24                  16?1                	;1
	49  896  ROPE_END/56               #23=      #24                  38:'/cmdline'       	;2
	50  896  SEND_VAL_EX/116           ?80       #23                  ?1                  	;0
	51  896  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
	52  896  SEND_VAR_NO_REF_EX/50     ?80       $26                  ?1                  	;0
	53  896  DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
	54  896  ASSIGN/38                 ?25       16?2                 $27                 	;0
	55  897  ROPE_INIT/54              #30=      ?0                   39:'XUI['           	;3
	56  897  ROPE_ADD/55               #30=      #30                  16?0                	;1
	57  897  ROPE_END/56               #29=      #30                  40:']'              	;2
	58  897  IS_EQUAL/17               #32=      16?2                 #29                 	;0
	59  897  JMPZ_EX/46                #32=      #32                  ?64                 	;0	>>64
	60  897  INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'is_numeric'     	;1
	61  897  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	62  897  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
	63  897  BOOL/52                   #32=      $33                  ?0                  	;0
	64  897  JMPZ_EX/46                #32=      #32                  ?67                 	;0	>>67	<<59
	65  897  IS_SMALLER/19             #34=      43:0                 16?1                	;0
	66  897  BOOL/52                   #32=      #34                  ?0                  	;0
	67  897  BOOL_NOT/13               #35=      #32                  ?0                  	;0	<<64
	68  897  JMPZ/43                   ?0        #35                  ?70                 	;0	>>70
	69  898  GOTO/253                  ?0        ?74                  ?44                 	;0
	70  900  INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'posix_kill'     	;2	<<68
	71  900  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	72  900  SEND_VAL_EX/116           ?96       47:9                 ?2                  	;0
	73  900  DO_FCALL_BY_NAME/131      ?33       ?0                   ?0                  	;0
	74  902  GOTO/253                  ?0        ?28                  ?48                 	;0
	75  904  NOP/0                     ?0        49:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?686                 ?0                  	;0	>>686
1    5     FETCH_DIM_IS/90           $64=      16?0                 1:'codecs'          	;0
2    5     ISSET_ISEMPTY_DIM_OBJ/115 #65=      $64                  2:'audio'           	;33554432
3    5     BOOL_NOT/13               #66=      #65                  ?0                  	;0
4    5     JMPNZ_EX/47               #66=      #66                  ?8                  	;0	>>8
5    5     FETCH_DIM_IS/90           $67=      16?0                 3:'codecs'          	;0
6    5     ISSET_ISEMPTY_DIM_OBJ/115 #68=      $67                  4:'audio'           	;16777216
7    5     BOOL/52                   #66=      #68                  ?0                  	;0
8    5     BOOL_NOT/13               #69=      #66                  ?0                  	;0	<<4
9    5     JMPZ/43                   ?0        #69                  ?11                 	;0	>>11
10   6     GOTO/253                  ?0        ?20                  ?5                  	;0
11   8     ECHO/40                   ?0        6:'Lost audio! Break
' ?0                  	;0	<<9
12   9     INIT_STATIC_METHOD_CALL/113 ?0        7:'XUI'              9:'d242dF32bD80320f'	;4
13   9     SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
14   9     FETCH_CONSTANT/99         #70=      ?0                   11:'SERVER_ID'      	;16
15   9     SEND_VAL_EX/116           ?96       #70                  ?2                  	;0
16   9     SEND_VAL_EX/116           ?112      14:'AUDIO_LOSS'      ?3                  	;0
17   9     SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
18   9     DO_FCALL/60               ?7        ?0                   ?0                  	;0
19   10    GOTO/253                  ?0        ?957                 ?15                 	;0
20   12    GOTO/253                  ?0        ?330                 ?16                 	;0
21   15    GOTO/253                  ?0        ?1780                ?17                 	;0
22   17    ECHO/40                   ?0        18:'Playlist exists!
' ?0                  	;0
23   18    GOTO/253                  ?0        ?524                 ?19                 	;0
24   19    GOTO/253                  ?0        ?1780                ?20                 	;0
25   21    INIT_STATIC_METHOD_CALL/113 ?0        21:'XUI'             23:'cac325153a658c37'	;1
26   21    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
27   21    DO_FCALL/60               ?8        ?0                   ?0                  	;0
28   23    INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'file_exists'    	;1
29   23    FETCH_CONSTANT/99         #73=      ?0                   27:'STREAMS_PATH'   	;16
30   23    CONCAT/8                  #74=      #73                  16?1                	;0
31   23    CONCAT/8                  #75=      #74                  30:'_.pid'          	;0
32   23    SEND_VAL_EX/116           ?80       #75                  ?1                  	;0
33   23    DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
34   23    JMPZ/43                   ?0        $76                  ?46                 	;0	>>46
35   23    INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'intval'         	;1
36   23    INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'file_get_contents'	;1
37   23    FETCH_CONSTANT/99         #77=      ?0                   35:'STREAMS_PATH'   	;16
38   23    CONCAT/8                  #78=      #77                  16?1                	;0
39   23    CONCAT/8                  #79=      #78                  38:'_.pid'          	;0
40   23    SEND_VAL_EX/116           ?80       #79                  ?1                  	;0
41   23    DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
42   23    SEND_VAR_NO_REF_EX/50     ?80       $80                  ?1                  	;0
43   23    DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
44   23    QM_ASSIGN/22              #82=      $81                  ?0                  	;0
45   23    JMP/42                    ?0        ?48                  ?0                  	;0	>>48
46   23    FETCH_DIM_R/81            $83=      16?4                 39:'pid'            	;0	<<34
47   23    QM_ASSIGN/22              #82=      $83                  ?0                  	;0
48   23    ASSIGN/38                 ?20       16?3                 #82                 	;0	<<45
49   24    INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'json_decode'    	;2
50   24    FETCH_DIM_FUNC_ARG/93     $85=      16?4                 42:'auto_restart'   	;1
51   24    SEND_VAR_EX/66            ?80       $85                  ?1                  	;0
52   24    SEND_VAL_EX/116           ?96       43:true              ?2                  	;0
53   24    DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
54   24    ASSIGN/38                 ?23       16?5                 $86                 	;0
55   25    FETCH_CONSTANT/99         #88=      ?0                   44:'STREAMS_PATH'   	;16
56   25    CONCAT/8                  #89=      #88                  16?1                	;0
57   25    CONCAT/8                  #90=      #89                  47:'_.m3u8'         	;0
58   25    ASSIGN/38                 ?27       16?6                 #90                 	;0
59   26    GOTO/253                  ?0        ?1405                ?48                 	;0
60   28    JMPZ_EX/46                #92=      16?7                 ?63                 	;0	>>63
61   28    FETCH_DIM_R/81            $93=      16?4                 49:'stream_info'    	;0
62   28    BOOL/52                   #92=      $93                  ?0                  	;0
63   28    JMPZ_EX/46                #92=      #92                  ?66                 	;0	>>66	<<60
64   28    FETCH_DIM_R/81            $94=      16?4                 50:'on_demand'      	;0
65   28    BOOL/52                   #92=      $94                  ?0                  	;0
66   28    JMPZ/43                   ?0        #92                  ?68                 	;0	>>68	<<63
67   29    GOTO/253                  ?0        ?405                 ?51                 	;0
68   31    FETCH_DIM_R/81            $95=      16?4                 52:'stream_info'    	;0	<<66
69   31    JMPZ/43                   ?0        $95                  ?71                 	;0	>>71
70   32    GOTO/253                  ?0        ?81                  ?53                 	;0
71   34    INIT_METHOD_CALL/112      ?0        16?8                 54:'query'          	;3	<<69
72   34    SEND_VAL_EX/116           ?80       56:'UPDATE `streams_servers` SET `stream_status` = 0, `stream_info` = NULL, `compatible` = 0, `audio_codec` = NULL, `video_codec` = NULL, `resolution` = NULL, `stream_started` = ? WHERE `server_stream_id` = ?' ?1                  	;0
73   34    INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'time'           	;0
74   34    DO_FCALL_BY_NAME/131      $96=      ?0                   ?0                  	;0
75   34    SUB/2                     #97=      $96                  16?9                	;0
76   34    SEND_VAL_EX/116           ?96       #97                  ?2                  	;0
77   34    FETCH_DIM_FUNC_ARG/93     $98=      16?4                 59:'server_stream_id'	;3
78   34    SEND_VAR_EX/66            ?112      $98                  ?3                  	;0
79   34    DO_FCALL/60               ?35       ?0                   ?0                  	;0
80   35    GOTO/253                  ?0        ?404                 ?60                 	;0
81   37    GOTO/253                  ?0        ?385                 ?61                 	;0
82   39    INIT_FCALL_BY_NAME/59     ?0        ?0                   62:'trim'           	;2
83   39    FETCH_DIM_FUNC_ARG/93     $100=     16?10                64:'stream_source'  	;1
84   39    SEND_VAR_EX/66            ?80       $100                 ?1                  	;0
85   39    SEND_VAL_EX/116           ?96       65:'\'"'             ?2                  	;0
86   39    DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
87   39    ASSIGN/38                 ?38       16?2                 $101                	;0
88   40    GOTO/253                  ?0        ?91                  ?66                 	;0
89   42    CONCAT/8                  #103=     67:'Loopback: #'     16?11               	;0
90   42    ASSIGN/38                 ?40       16?2                 #103                	;0
91   44    GOTO/253                  ?0        ?1314                ?68                 	;0
92   47    FETCH_STATIC_PROP_R/173   $105=     69:'rSettings'       70:'XUI'            	;0
93   47    FETCH_DIM_R/81            $106=     $105                 72:'fps_check_type' 	;0
94   47    IS_EQUAL/17               #107=     $106                 73:1                	;0
95   47    JMPZ/43                   ?0        #107                 ?97                 	;0	>>97
96   48    GOTO/253                  ?0        ?99                  ?74                 	;0
97   50    ASSIGN/38                 ?44       16?12                16?13               	;0	<<95
98   51    GOTO/253                  ?0        ?555                 ?75                 	;0
99   53    GOTO/253                  ?0        ?483                 ?76                 	;0
100  55    INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'usleep'         	;1
101  55    SEND_VAL_EX/116           ?80       79:50000             ?1                  	;0
102  55    DO_FCALL_BY_NAME/131      ?45       ?0                   ?0                  	;0
103  56    ASSIGN/38                 $110=     16?3                 80:0                	;0
104  56    ASSIGN/38                 ?47       16?14                $110                	;0
105  59    FETCH_STATIC_PROP_R/173   $112=     81:'rSettings'       82:'XUI'            	;0
106  59    FETCH_DIM_R/81            $113=     $112                 84:'kill_rogue_ffmpeg'	;0
107  59    BOOL_NOT/13               #114=     $113                 ?0                  	;0
108  59    JMPZ/43                   ?0        #114                 ?110                	;0	>>110
109  60    GOTO/253                  ?0        ?329                 ?85                 	;0
110  62    GOTO/253                  ?0        ?290                 ?86                 	;0	<<108
111  64    INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'is_numeric'     	;1
112  64    SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
113  64    DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
114  64    JMPZ_EX/46                #116=     $115                 ?117                	;0	>>117
115  64    IS_SMALLER/19             #117=     89:0                 16?14               	;0
116  64    BOOL/52                   #116=     #117                 ?0                  	;0
117  64    BOOL_NOT/13               #118=     #116                 ?0                  	;0	<<114
118  64    JMPZ/43                   ?0        #118                 ?120                	;0	>>120
119  65    GOTO/253                  ?0        ?127                 ?90                 	;0
120  67    INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'shell_exec'     	;1	<<118
121  67    INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'intval'         	;1
122  67    SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
123  67    DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
124  67    CONCAT/8                  #120=     95:'kill -9 '        $119                	;0
125  67    SEND_VAL_EX/116           ?80       #120                 ?1                  	;0
126  67    DO_FCALL_BY_NAME/131      ?57       ?0                   ?0                  	;0
127  69    INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'usleep'         	;1
128  69    SEND_VAL_EX/116           ?80       98:50000             ?1                  	;0
129  69    DO_FCALL_BY_NAME/131      ?58       ?0                   ?0                  	;0
130  71    GOTO/253                  ?0        ?149                 ?99                 	;0
131  74    ASSIGN/38                 $123=     16?16                100:NULL            	;0
132  74    ASSIGN/38                 ?60       16?15                $123                	;0
133  75    INIT_METHOD_CALL/112      ?0        16?8                 101:'query'         	;2
134  75    SEND_VAL_EX/116           ?80       103:'SELECT t1.*, t2.* FROM `streams_options` t1, `streams_arguments` t2 WHERE t1.stream_id = ? AND t1.argument_id = t2.id' ?1                  	;0
135  75    SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
136  75    DO_FCALL/60               ?61       ?0                   ?0                  	;0
137  76    INIT_METHOD_CALL/112      ?0        16?8                 104:'get_rows'      	;0
138  76    DO_FCALL/60               $126=     ?0                   ?0                  	;0
139  76    ASSIGN/38                 ?63       16?17                $126                	;0
140  77    FETCH_DIM_R/81            $128=     16?4                 106:'delay_minutes' 	;0
141  77    IS_SMALLER/19             #129=     107:0                $128                	;0
142  77    JMPZ_EX/46                #129=     #129                 ?146                	;0	>>146
143  77    FETCH_DIM_R/81            $130=     16?4                 108:'parent_id'     	;0
144  77    IS_EQUAL/17               #131=     $130                 109:0               	;0
145  77    BOOL/52                   #129=     #131                 ?0                  	;0
146  77    JMPZ/43                   ?0        #129                 ?148                	;0	>>148	<<142
147  78    GOTO/253                  ?0        ?1129                ?110                	;0
148  80    GOTO/253                  ?0        ?1125                ?111                	;0	<<146
149  83    INIT_STATIC_METHOD_CALL/113 ?0        112:'XUI'            114:'b4AB2A8Eb0AA68Ee'	;2
150  83    SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
151  83    SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
152  83    DO_FCALL/60               $132=     ?0                   ?0                  	;0
153  83    JMPZ/43                   ?0        $132                 ?155                	;0	>>155
154  84    GOTO/253                  ?0        ?383                 ?116                	;0
155  86    ASSIGN/38                 ?69       16?18                117:false           	;0	<<153
156  87    ECHO/40                   ?0        118:'Restarting...
' ?0                  	;0
157  88    INIT_FCALL_BY_NAME/59     ?0        ?0                   119:'shell_exec'    	;1
158  88    FETCH_CONSTANT/99         #134=     ?0                   121:'STREAMS_PATH'  	;16
159  88    CONCAT/8                  #135=     124:'rm -f '         #134                	;0
160  88    INIT_FCALL_BY_NAME/59     ?0        ?0                   125:'intval'        	;1
161  88    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
162  88    DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
163  88    CONCAT/8                  #137=     #135                 $136                	;0
164  88    CONCAT/8                  #138=     #137                 127:'_*'            	;0
165  88    SEND_VAL_EX/116           ?80       #138                 ?1                  	;0
166  88    DO_FCALL_BY_NAME/131      ?75       ?0                   ?0                  	;0
167  89    GOTO/253                  ?0        ?1697                ?128                	;0
168  93    JMPZ/43                   ?0        129:false            ?170                	;0	>>170
169  94    GOTO/253                  ?0        ?524                 ?130                	;0
170  96    ADD/1                     #140=     16?19                131:1               	;0	<<168
171  96    CONCAT/8                  #141=     132:'Checking for playlist ' #140                	;0
172  96    ROPE_INIT/54              #143=     ?0                   133:'/'             	;3
173  96    ROPE_ADD/55               #143=     #143                 16?20               	;1
174  96    ROPE_END/56               #142=     #143                 134:'...
'          	;2
175  96    CONCAT/8                  #145=     #141                 #142                	;0
176  96    ECHO/40                   ?0        #145                 ?0                  	;0
177  97    INIT_STATIC_METHOD_CALL/113 ?0        135:'XUI'            137:'b4Ab2A8EB0aA68EE'	;2
178  97    SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
179  97    SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
180  97    DO_FCALL/60               $146=     ?0                   ?0                  	;0
181  97    JMPZ/43                   ?0        $146                 ?183                	;0	>>183
182  98    GOTO/253                  ?0        ?205                 ?139                	;0
183  100   GOTO/253                  ?0        ?202                 ?140                	;0	<<181
184  102   INIT_STATIC_METHOD_CALL/113 ?0        141:'XUI'            143:'b4AB2A8eb0Aa68ee'	;2
185  102   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
186  102   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
187  102   DO_FCALL/60               $147=     ?0                   ?0                  	;0
188  102   JMPZ/43                   ?0        $147                 ?190                	;0	>>190
189  103   GOTO/253                  ?0        ?200                 ?145                	;0
190  105   INIT_FCALL_BY_NAME/59     ?0        ?0                   146:'file_put_contents'	;2	<<188
191  105   FETCH_CONSTANT/99         #148=     ?0                   148:'STREAMS_PATH'  	;16
192  105   CONCAT/8                  #149=     #148                 16?1                	;0
193  105   CONCAT/8                  #150=     #149                 151:'_.monitor'     	;0
194  105   SEND_VAL_EX/116           ?80       #150                 ?1                  	;0
195  105   INIT_FCALL_BY_NAME/59     ?0        ?0                   152:'getmypid'      	;0
196  105   DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
197  105   SEND_VAR_NO_REF_EX/50     ?96       $151                 ?2                  	;0
198  105   DO_FCALL_BY_NAME/131      ?88       ?0                   ?0                  	;0
199  106   GOTO/253                  ?0        ?105                 ?154                	;0
200  108   ECHO/40                   ?0        155:'Stream is running.
' ?0                  	;0
201  109   GOTO/253                  ?0        ?1467                ?156                	;0
202  111   ECHO/40                   ?0        157:'Ffmpeg stopped running
' ?0                  	;0
203  112   ASSIGN/38                 ?89       16?18                158:true            	;0
204  113   GOTO/253                  ?0        ?524                 ?159                	;0
205  115   INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'file_exists'   	;1
206  115   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
207  115   DO_FCALL_BY_NAME/131      $154=     ?0                   ?0                  	;0
208  115   JMPZ/43                   ?0        $154                 ?210                	;0	>>210
209  116   GOTO/253                  ?0        ?22                  ?162                	;0
210  118   GOTO/253                  ?0        ?1289                ?163                	;0	<<208
211  120   INIT_STATIC_METHOD_CALL/113 ?0        164:'XUI'            166:'B0fBcff8A7D2659d'	;2
212  120   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
213  120   SEND_VAL_EX/116           ?96       168:10               ?2                  	;0
214  120   DO_FCALL/60               $155=     ?0                   ?0                  	;0
215  120   FETCH_DIM_R/81            $156=     $155                 169:0               	;0
216  120   CONCAT/8                  #157=     16?22                $156                	;0
217  120   ASSIGN/38                 ?94       16?21                #157                	;0
218  121   ASSIGN_DIM/147            ?95       16?4                 170:'stream_info'   	;0
219  121   OP_DATA/137               ?0        171:NULL             ?0                  	;0
220  122   INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'file_exists'   	;1
221  122   SEND_VAR_EX/66            ?80       16?21                ?1                  	;0
222  122   DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
223  122   BOOL_NOT/13               #161=     $160                 ?0                  	;0
224  122   JMPZ/43                   ?0        #161                 ?226                	;0	>>226
225  123   GOTO/253                  ?0        ?246                 ?174                	;0
226  125   INIT_STATIC_METHOD_CALL/113 ?0        175:'XUI'            177:'e57006536cD5655D'	;1	<<224
227  125   SEND_VAR_EX/66            ?80       16?21                ?1                  	;0
228  125   DO_FCALL/60               $162=     ?0                   ?0                  	;0
229  125   ASSIGN/38                 ?99       16?0                 $162                	;0
230  126   INIT_FCALL_BY_NAME/59     ?0        ?0                   179:'intval'        	;1
231  126   FETCH_DIM_FUNC_ARG/93     $164=     16?0                 181:'of_duration'   	;1
232  126   SEND_VAR_EX/66            ?80       $164                 ?1                  	;0
233  126   DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
234  126   IS_SMALLER/19             #166=     182:10               $165                	;0
235  126   BOOL_NOT/13               #167=     #166                 ?0                  	;0
236  126   JMPZ/43                   ?0        #167                 ?238                	;0	>>238
237  127   GOTO/253                  ?0        ?720                 ?183                	;0
238  129   GOTO/253                  ?0        ?718                 ?184                	;0	<<236
239  133   JMPZ/43                   ?0        16?10                ?241                	;0	>>241
240  134   GOTO/253                  ?0        ?242                 ?185                	;0
241  136   EXIT/79                   ?0        ?0                   ?0                  	;0	<<239
242  138   GOTO/253                  ?0        ?1558                ?186                	;0
243  140   INIT_FCALL_BY_NAME/59     ?0        ?0                   187:'time'          	;0
244  140   DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
245  140   ASSIGN/38                 ?105      16?23                $168                	;0
246  143   ASSIGN/38                 ?106      16?24                189:0               	;0
247  144   ASSIGN/38                 $171=     16?27                190:NULL            	;0
248  144   ASSIGN/38                 $172=     16?26                $171                	;0
249  144   ASSIGN/38                 ?109      16?25                $172                	;0
250  145   GOTO/253                  ?0        ?771                 ?191                	;0
251  147   JMPNZ_EX/47               #174=     16?28                ?266                	;0	>>266
252  147   INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'file_exists'   	;1
253  147   FETCH_CONSTANT/99         #175=     ?0                   194:'STREAMS_PATH'  	;16
254  147   CONCAT/8                  #176=     #175                 16?1                	;0
255  147   CONCAT/8                  #177=     #176                 197:'_.dur'         	;0
256  147   SEND_VAL_EX/116           ?80       #177                 ?1                  	;0
257  147   DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
258  147   BOOL_NOT/13               #179=     $178                 ?0                  	;0
259  147   JMPZ_EX/46                #179=     #179                 ?265                	;0	>>265
260  147   INIT_FCALL_BY_NAME/59     ?0        ?0                   198:'time'          	;0
261  147   DO_FCALL_BY_NAME/131      $180=     ?0                   ?0                  	;0
262  147   SUB/2                     #181=     $180                 16?23               	;0
263  147   IS_SMALLER/19             #182=     200:300              #181                	;0
264  147   BOOL/52                   #179=     #182                 ?0                  	;0
265  147   BOOL/52                   #174=     #179                 ?0                  	;0	<<259
266  147   BOOL_NOT/13               #183=     #174                 ?0                  	;0	<<251
267  147   JMPZ/43                   ?0        #183                 ?269                	;0	>>269
268  148   GOTO/253                  ?0        ?1261                ?201                	;0
269  150   ECHO/40                   ?0        202:'Probe Stream
'  ?0                  	;0	<<267
270  151   INIT_STATIC_METHOD_CALL/113 ?0        203:'XUI'            205:'b0FBcff8a7d2659D'	;2
271  151   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
272  151   SEND_VAL_EX/116           ?96       207:10               ?2                  	;0
273  151   DO_FCALL/60               $184=     ?0                   ?0                  	;0
274  151   FETCH_DIM_R/81            $185=     $184                 208:0               	;0
275  151   ASSIGN/38                 ?122      16?21                $185                	;0
276  152   ISSET_ISEMPTY_CV/197      #187=     16?21                ?0                  	;16777216
277  152   JMPZ/43                   ?0        #187                 ?279                	;0	>>279
278  153   GOTO/253                  ?0        ?1243                ?209                	;0
279  155   INIT_FCALL_BY_NAME/59     ?0        ?0                   210:'time'          	;0	<<277
280  155   DO_FCALL_BY_NAME/131      $188=     ?0                   ?0                  	;0
281  155   SUB/2                     #189=     $188                 16?23               	;0
282  155   IS_SMALLER/19             #190=     212:300              #189                	;0
283  155   JMPZ_EX/46                #190=     #190                 ?286                	;0	>>286
284  155   IS_EQUAL/17               #191=     16?21                16?15               	;0
285  155   BOOL/52                   #190=     #191                 ?0                  	;0
286  155   BOOL_NOT/13               #192=     #190                 ?0                  	;0	<<283
287  155   JMPZ/43                   ?0        #192                 ?289                	;0	>>289
288  156   GOTO/253                  ?0        ?594                 ?213                	;0
289  158   GOTO/253                  ?0        ?586                 ?214                	;0	<<287
290  160   INIT_FCALL_BY_NAME/59     ?0        ?0                   215:'exec'          	;2
291  160   ROPE_INIT/54              #194=     ?0                   217:'ps aux | grep -v grep | grep \'/'	;3
292  160   ROPE_ADD/55               #194=     #194                 16?1                	;1
293  160   ROPE_END/56               #193=     #194                 218:'_.m3u8\' | awk \'{print $2}\''	;2
294  160   SEND_VAL_EX/116           ?80       #193                 ?1                  	;0
295  160   SEND_VAR_EX/66            ?96       16?29                ?2                  	;0
296  160   DO_FCALL_BY_NAME/131      ?132      ?0                   ?0                  	;0
297  161   FE_RESET_R/77             $197=     16?29                ?328                	;0
298  161   FE_FETCH_R/78             ?0        $197                 16?30               	;328	>>328	<<327
299  162   INIT_FCALL_BY_NAME/59     ?0        ?0                   219:'is_numeric'    	;1
300  162   SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
301  162   DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
302  162   JMPZ_EX/46                #199=     $198                 ?308                	;0	>>308
303  162   INIT_FCALL_BY_NAME/59     ?0        ?0                   221:'intval'        	;1
304  162   SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
305  162   DO_FCALL_BY_NAME/131      $200=     ?0                   ?0                  	;0
306  162   IS_SMALLER/19             #201=     223:0                $200                	;0
307  162   BOOL/52                   #199=     #201                 ?0                  	;0
308  162   JMPZ_EX/46                #199=     #199                 ?317                	;0	>>317	<<302
309  162   INIT_FCALL_BY_NAME/59     ?0        ?0                   224:'intval'        	;1
310  162   SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
311  162   DO_FCALL_BY_NAME/131      $202=     ?0                   ?0                  	;0
312  162   INIT_FCALL_BY_NAME/59     ?0        ?0                   226:'intval'        	;1
313  162   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
314  162   DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
315  162   IS_NOT_EQUAL/18           #204=     $202                 $203                	;0
316  162   BOOL/52                   #199=     #204                 ?0                  	;0
317  162   BOOL_NOT/13               #205=     #199                 ?0                  	;0	<<308
318  162   JMPZ/43                   ?0        #205                 ?321                	;0	>>321
319  163   NOP/0                     ?0        ?0                   ?0                  	;1
320  163   GOTO/253                  ?0        ?327                 ?228                	;0
321  165   INIT_FCALL_BY_NAME/59     ?0        ?0                   229:'shell_exec'    	;1	<<318
322  165   ROPE_INIT/54              #207=     ?0                   231:'kill -9 '      	;3
323  165   ROPE_ADD/55               #207=     #207                 16?30               	;1
324  165   ROPE_END/56               #206=     #207                 232:';'             	;2
325  165   SEND_VAL_EX/116           ?80       #206                 ?1                  	;0
326  165   DO_FCALL_BY_NAME/131      ?145      ?0                   ?0                  	;0
327  167   JMP/42                    ?0        ?298                 ?0                  	;0	>>298
328  167   FE_FREE/127               ?0        $197                 ?0                  	;0	<<297
329  172   GOTO/253                  ?0        ?1447                ?233                	;0
330  174   INIT_FCALL_BY_NAME/59     ?0        ?0                   234:'time'          	;0
331  174   DO_FCALL_BY_NAME/131      $210=     ?0                   ?0                  	;0
332  174   ASSIGN/38                 ?147      16?31                $210                	;0
333  177   INIT_FCALL_BY_NAME/59     ?0        ?0                   236:'time'          	;0
334  177   DO_FCALL_BY_NAME/131      $212=     ?0                   ?0                  	;0
335  177   SUB/2                     #213=     $212                 16?32               	;0
336  177   MUL/3                     #214=     16?33                238:6               	;0
337  177   IS_SMALLER_OR_EQUAL/20    #215=     #214                 #213                	;0
338  177   BOOL_NOT/13               #216=     #215                 ?0                  	;0
339  177   JMPZ/43                   ?0        #216                 ?341                	;0	>>341
340  178   GOTO/253                  ?0        ?845                 ?239                	;0
341  180   INIT_FCALL_BY_NAME/59     ?0        ?0                   240:'md5_file'      	;1	<<339
342  180   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
343  180   DO_FCALL_BY_NAME/131      $217=     ?0                   ?0                  	;0
344  180   ASSIGN/38                 ?154      16?34                $217                	;0
345  181   GOTO/253                  ?0        ?971                 ?242                	;0
346  183   ECHO/40                   ?0        243:'FPS dropped below threshold! Break
' ?0                  	;0
347  184   INIT_STATIC_METHOD_CALL/113 ?0        244:'XUI'            246:'d242DF32bD80320F'	;4
348  184   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
349  184   FETCH_CONSTANT/99         #219=     ?0                   248:'SERVER_ID'     	;16
350  184   SEND_VAL_EX/116           ?96       #219                 ?2                  	;0
351  184   SEND_VAL_EX/116           ?112      251:'FPS_DROP_THRESHOLD' ?3                  	;0
352  184   SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
353  184   DO_FCALL/60               ?156      ?0                   ?0                  	;0
354  185   GOTO/253                  ?0        ?957                 ?252                	;0
355  187   GOTO/253                  ?0        ?555                 ?253                	;0
356  188   GOTO/253                  ?0        ?92                  ?254                	;0
357  190   EXIT/79                   ?0        ?0                   ?0                  	;0
358  192   INIT_METHOD_CALL/112      ?0        16?8                 255:'get_row'       	;0
359  192   DO_FCALL/60               $221=     ?0                   ?0                  	;0
360  192   ASSIGN/38                 ?158      16?4                 $221                	;0
361  193   INIT_METHOD_CALL/112      ?0        16?8                 257:'query'         	;3
362  193   SEND_VAL_EX/116           ?80       259:'UPDATE `streams_servers` SET `monitor_pid` = ? WHERE `server_stream_id` = ?' ?1                  	;0
363  193   INIT_FCALL_BY_NAME/59     ?0        ?0                   260:'getmypid'      	;0
364  193   DO_FCALL_BY_NAME/131      $223=     ?0                   ?0                  	;0
365  193   SEND_VAR_NO_REF_EX/50     ?96       $223                 ?2                  	;0
366  193   FETCH_DIM_FUNC_ARG/93     $224=     16?4                 262:'server_stream_id'	;3
367  193   SEND_VAR_EX/66            ?112      $224                 ?3                  	;0
368  193   DO_FCALL/60               ?161      ?0                   ?0                  	;0
369  194   FETCH_STATIC_PROP_R/173   $226=     263:'rSettings'      264:'XUI'           	;0
370  194   FETCH_DIM_R/81            $227=     $226                 266:'enable_cache'  	;0
371  194   BOOL_NOT/13               #228=     $227                 ?0                  	;0
372  194   JMPZ/43                   ?0        #228                 ?374                	;0	>>374
373  195   GOTO/253                  ?0        ?28                  ?267                	;0
374  197   GOTO/253                  ?0        ?25                  ?268                	;0	<<372
375  200   FETCH_CONSTANT/99         #229=     ?0                   269:'MONITOR_CALLS' 	;16
376  200   IS_SMALLER_OR_EQUAL/20    #230=     #229                 16?35               	;0
377  200   BOOL_NOT/13               #231=     #230                 ?0                  	;0
378  200   JMPZ/43                   ?0        #231                 ?380                	;0	>>380
379  201   GOTO/253                  ?0        ?381                 ?272                	;0
380  203   ASSIGN/38                 ?168      16?35                273:0               	;0	<<378
381  205   GOTO/253                  ?0        ?149                 ?274                	;0
382  206   GOTO/253                  ?0        ?383                 ?275                	;0
383  209   GOTO/253                  ?0        ?329                 ?276                	;0
384  211   GOTO/253                  ?0        ?1880                ?277                	;0
385  213   INIT_METHOD_CALL/112      ?0        16?8                 278:'query'         	;9
386  213   SEND_VAL_EX/116           ?80       280:'UPDATE `streams_servers` SET `stream_info` = ?, `compatible` = ?, `audio_codec` = ?, `video_codec` = ?, `resolution` = ?, `bitrate` = ?, `stream_status` = 0, `stream_started` = ? WHERE `server_stream_id` = ?' ?1                  	;0
387  213   FETCH_DIM_FUNC_ARG/93     $233=     16?4                 281:'stream_info'   	;2
388  213   SEND_VAR_EX/66            ?96       $233                 ?2                  	;0
389  213   SEND_VAR_EX/66            ?112      16?24                ?3                  	;0
390  213   SEND_VAR_EX/66            ?128      16?25                ?4                  	;0
391  213   SEND_VAR_EX/66            ?144      16?26                ?5                  	;0
392  213   SEND_VAR_EX/66            ?160      16?27                ?6                  	;0
393  213   INIT_FCALL_BY_NAME/59     ?0        ?0                   282:'intval'        	;1
394  213   SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
395  213   DO_FCALL_BY_NAME/131      $234=     ?0                   ?0                  	;0
396  213   SEND_VAR_NO_REF_EX/50     ?176      $234                 ?7                  	;0
397  213   INIT_FCALL_BY_NAME/59     ?0        ?0                   284:'time'          	;0
398  213   DO_FCALL_BY_NAME/131      $235=     ?0                   ?0                  	;0
399  213   SUB/2                     #236=     $235                 16?9                	;0
400  213   SEND_VAL_EX/116           ?192      #236                 ?8                  	;0
401  213   FETCH_DIM_FUNC_ARG/93     $237=     16?4                 286:'server_stream_id'	;9
402  213   SEND_VAR_EX/66            ?208      $237                 ?9                  	;0
403  213   DO_FCALL/60               ?174      ?0                   ?0                  	;0
404  215   GOTO/253                  ?0        ?1647                ?287                	;0
405  217   INIT_METHOD_CALL/112      ?0        16?8                 288:'query'         	;8
406  217   SEND_VAL_EX/116           ?80       290:'UPDATE `streams_servers` SET `stream_info` = ?, `compatible` = ?, `audio_codec` = ?, `video_codec` = ?, `resolution` = ?, `bitrate` = ?, `stream_status` = 0 WHERE `server_stream_id` = ?' ?1                  	;0
407  217   FETCH_DIM_FUNC_ARG/93     $239=     16?4                 291:'stream_info'   	;2
408  217   SEND_VAR_EX/66            ?96       $239                 ?2                  	;0
409  217   SEND_VAR_EX/66            ?112      16?24                ?3                  	;0
410  217   SEND_VAR_EX/66            ?128      16?25                ?4                  	;0
411  217   SEND_VAR_EX/66            ?144      16?26                ?5                  	;0
412  217   SEND_VAR_EX/66            ?160      16?27                ?6                  	;0
413  217   INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'intval'        	;1
414  217   SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
415  217   DO_FCALL_BY_NAME/131      $240=     ?0                   ?0                  	;0
416  217   SEND_VAR_NO_REF_EX/50     ?176      $240                 ?7                  	;0
417  217   FETCH_DIM_FUNC_ARG/93     $241=     16?4                 294:'server_stream_id'	;8
418  217   SEND_VAR_EX/66            ?192      $241                 ?8                  	;0
419  217   DO_FCALL/60               ?178      ?0                   ?0                  	;0
420  218   GOTO/253                  ?0        ?1647                ?295                	;0
421  220   INIT_METHOD_CALL/112      ?0        16?8                 296:'query'         	;2
422  220   SEND_VAL_EX/116           ?80       298:'UPDATE `streams_servers` SET `pid` = null, `stream_status` = 1 WHERE `server_stream_id` = ?;' ?1                  	;0
423  220   FETCH_DIM_FUNC_ARG/93     $243=     16?4                 299:'server_stream_id'	;2
424  220   SEND_VAR_EX/66            ?96       $243                 ?2                  	;0
425  220   DO_FCALL/60               ?180      ?0                   ?0                  	;0
426  221   FETCH_STATIC_PROP_R/173   $245=     300:'rSettings'      301:'XUI'           	;0
427  221   FETCH_DIM_R/81            $246=     $245                 303:'enable_cache'  	;0
428  221   BOOL_NOT/13               #247=     $246                 ?0                  	;0
429  221   JMPZ/43                   ?0        #247                 ?431                	;0	>>431
430  222   GOTO/253                  ?0        ?434                 ?304                	;0
431  224   INIT_STATIC_METHOD_CALL/113 ?0        305:'XUI'            307:'cAc325153a658c37'	;1	<<429
432  224   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
433  224   DO_FCALL/60               ?184      ?0                   ?0                  	;0
434  226   FETCH_STATIC_PROP_R/173   $249=     309:'rSettings'      310:'XUI'           	;0
435  226   FETCH_DIM_R/81            $250=     $249                 312:'stream_fail_sleep'	;0
436  226   CONCAT/8                  #251=     313:'Sleep for '     $250                	;0
437  226   CONCAT/8                  #252=     #251                 314:' seconds...'   	;0
438  226   ECHO/40                   ?0        #252                 ?0                  	;0
439  227   GOTO/253                  ?0        ?1097                ?315                	;0
440  229   INIT_FCALL_BY_NAME/59     ?0        ?0                   316:'explode'       	;2
441  229   SEND_VAL_EX/116           ?80       318:':'              ?1                  	;0
442  229   FETCH_DIM_FUNC_ARG/93     $253=     16?5                 319:'at'            	;2
443  229   SEND_VAR_EX/66            ?96       $253                 ?2                  	;0
444  229   DO_FCALL_BY_NAME/131      $254=     ?0                   ?0                  	;0
445  229   FETCH_LIST/98             $255=     $254                 320:0               	;0
446  229   ASSIGN/38                 ?192      16?37                $255                	;0
447  229   FETCH_LIST/98             $257=     $254                 321:1               	;0
448  229   ASSIGN/38                 ?194      16?38                $257                	;0
449  229   FREE/70                   ?0        $254                 ?0                  	;0
450  230   INIT_FCALL_BY_NAME/59     ?0        ?0                   322:'in_array'      	;2
451  230   INIT_FCALL_BY_NAME/59     ?0        ?0                   324:'date'          	;1
452  230   SEND_VAL_EX/116           ?80       326:'l'              ?1                  	;0
453  230   DO_FCALL_BY_NAME/131      $259=     ?0                   ?0                  	;0
454  230   SEND_VAR_NO_REF_EX/50     ?80       $259                 ?1                  	;0
455  230   FETCH_DIM_FUNC_ARG/93     $260=     16?5                 327:'days'          	;2
456  230   SEND_VAR_EX/66            ?96       $260                 ?2                  	;0
457  230   DO_FCALL_BY_NAME/131      $261=     ?0                   ?0                  	;0
458  230   JMPZ_EX/46                #262=     $261                 ?464                	;0	>>464
459  230   INIT_FCALL_BY_NAME/59     ?0        ?0                   328:'date'          	;1
460  230   SEND_VAL_EX/116           ?80       330:'H'              ?1                  	;0
461  230   DO_FCALL_BY_NAME/131      $263=     ?0                   ?0                  	;0
462  230   IS_EQUAL/17               #264=     $263                 16?37               	;0
463  230   BOOL/52                   #262=     #264                 ?0                  	;0
464  230   BOOL_NOT/13               #265=     #262                 ?0                  	;0	<<458
465  230   JMPZ/43                   ?0        #265                 ?467                	;0	>>467
466  231   GOTO/253                  ?0        ?685                 ?331                	;0
467  233   INIT_FCALL_BY_NAME/59     ?0        ?0                   332:'date'          	;1	<<465
468  233   SEND_VAL_EX/116           ?80       334:'i'              ?1                  	;0
469  233   DO_FCALL_BY_NAME/131      $266=     ?0                   ?0                  	;0
470  233   IS_EQUAL/17               #267=     16?38                $266                	;0
471  233   BOOL_NOT/13               #268=     #267                 ?0                  	;0
472  233   JMPZ/43                   ?0        #268                 ?474                	;0	>>474
473  234   GOTO/253                  ?0        ?685                 ?335                	;0
474  236   ECHO/40                   ?0        336:'Auto-restart
'  ?0                  	;0	<<472
475  237   INIT_STATIC_METHOD_CALL/113 ?0        337:'XUI'            339:'D242DF32BD80320f'	;4
476  237   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
477  237   FETCH_CONSTANT/99         #269=     ?0                   341:'SERVER_ID'     	;16
478  237   SEND_VAL_EX/116           ?96       #269                 ?2                  	;0
479  237   SEND_VAL_EX/116           ?112      344:'AUTO_RESTART'   ?3                  	;0
480  237   SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
481  237   DO_FCALL/60               ?206      ?0                   ?0                  	;0
482  238   GOTO/253                  ?0        ?683                 ?345                	;0
483  240   INIT_STATIC_METHOD_CALL/113 ?0        346:'XUI'            348:'B0FBcFf8A7d2659d'	;2
484  240   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
485  240   SEND_VAL_EX/116           ?96       350:10               ?2                  	;0
486  240   DO_FCALL/60               $271=     ?0                   ?0                  	;0
487  240   FETCH_DIM_R/81            $272=     $271                 351:0               	;0
488  240   ASSIGN/38                 ?209      16?21                $272                	;0
489  241   ISSET_ISEMPTY_CV/197      #274=     16?21                ?0                  	;16777216
490  241   JMPZ/43                   ?0        #274                 ?492                	;0	>>492
491  242   GOTO/253                  ?0        ?555                 ?352                	;0
492  244   INIT_STATIC_METHOD_CALL/113 ?0        353:'XUI'            355:'E57006536cd5655d'	;1	<<490
493  244   CONCAT/8                  #275=     16?22                16?21               	;0
494  244   SEND_VAL_EX/116           ?80       #275                 ?1                  	;0
495  244   DO_FCALL/60               $276=     ?0                   ?0                  	;0
496  244   ASSIGN/38                 ?213      16?0                 $276                	;0
497  245   FETCH_DIM_IS/90           $278=     16?0                 357:'codecs'        	;0
498  245   FETCH_DIM_IS/90           $279=     $278                 358:'video'         	;0
499  245   ISSET_ISEMPTY_DIM_OBJ/115 #280=     $279                 359:'avg_frame_rate'	;33554432
500  245   JMPNZ_EX/47               #280=     #280                 ?505                	;0	>>505
501  245   FETCH_DIM_IS/90           $281=     16?0                 360:'codecs'        	;0
502  245   FETCH_DIM_IS/90           $282=     $281                 361:'video'         	;0
503  245   ISSET_ISEMPTY_DIM_OBJ/115 #283=     $282                 362:'r_frame_rate'  	;33554432
504  245   BOOL/52                   #280=     #283                 ?0                  	;0
505  245   BOOL_NOT/13               #284=     #280                 ?0                  	;0	<<500
506  245   JMPZ/43                   ?0        #284                 ?508                	;0	>>508
507  246   GOTO/253                  ?0        ?555                 ?363                	;0
508  248   FETCH_DIM_R/81            $285=     16?0                 364:'codecs'        	;0	<<506
509  248   FETCH_DIM_R/81            $286=     $285                 365:'video'         	;0
510  248   FETCH_DIM_R/81            $287=     $286                 366:'avg_frame_rate'	;0
511  248   JMP_SET/152               #288=     $287                 ?516                	;0
512  248   FETCH_DIM_R/81            $289=     16?0                 367:'codecs'        	;0
513  248   FETCH_DIM_R/81            $290=     $289                 368:'video'         	;0
514  248   FETCH_DIM_R/81            $291=     $290                 369:'r_frame_rate'  	;0
515  248   QM_ASSIGN/22              #288=     $291                 ?0                  	;0
516  248   ASSIGN/38                 ?228      16?13                #288                	;0
517  249   GOTO/253                  ?0        ?978                 ?370                	;0
518  252   POST_INC/36               #293=     16?19                ?0                  	;0
519  252   FREE/70                   ?0        #293                 ?0                  	;0
520  253   INIT_FCALL_BY_NAME/59     ?0        ?0                   371:'sleep'         	;1
521  253   SEND_VAL_EX/116           ?80       373:1                ?1                  	;0
522  253   DO_FCALL_BY_NAME/131      ?230      ?0                   ?0                  	;0
523  254   GOTO/253                  ?0        ?168                 ?374                	;0
524  256   GOTO/253                  ?0        ?1048                ?375                	;0
525  258   INIT_STATIC_METHOD_CALL/113 ?0        376:'XUI'            378:'d242Df32Bd80320f'	;4
526  258   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
527  258   FETCH_CONSTANT/99         #295=     ?0                   380:'SERVER_ID'     	;16
528  258   SEND_VAL_EX/116           ?96       #295                 ?2                  	;0
529  258   SEND_VAL_EX/116           ?112      383:'STREAM_START_FAIL' ?3                  	;0
530  258   SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
531  258   DO_FCALL/60               ?232      ?0                   ?0                  	;0
532  260   INIT_FCALL_BY_NAME/59     ?0        ?0                   384:'is_numeric'    	;1
533  260   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
534  260   DO_FCALL_BY_NAME/131      $297=     ?0                   ?0                  	;0
535  260   JMPZ_EX/46                #298=     $297                 ?538                	;0	>>538
536  260   IS_SMALLER/19             #299=     386:0                16?3                	;0
537  260   BOOL/52                   #298=     #299                 ?0                  	;0
538  260   JMPZ_EX/46                #298=     #298                 ?544                	;0	>>544	<<535
539  260   INIT_STATIC_METHOD_CALL/113 ?0        387:'XUI'            389:'b4ab2a8eb0Aa68Ee'	;2
540  260   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
541  260   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
542  260   DO_FCALL/60               $300=     ?0                   ?0                  	;0
543  260   BOOL/52                   #298=     $300                 ?0                  	;0
544  260   BOOL_NOT/13               #301=     #298                 ?0                  	;0	<<538
545  260   JMPZ/43                   ?0        #301                 ?547                	;0	>>547
546  261   GOTO/253                  ?0        ?554                 ?391                	;0
547  263   INIT_FCALL_BY_NAME/59     ?0        ?0                   392:'shell_exec'    	;1	<<545
548  263   INIT_FCALL_BY_NAME/59     ?0        ?0                   394:'intval'        	;1
549  263   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
550  263   DO_FCALL_BY_NAME/131      $302=     ?0                   ?0                  	;0
551  263   CONCAT/8                  #303=     396:'kill -9 '       $302                	;0
552  263   SEND_VAL_EX/116           ?80       #303                 ?1                  	;0
553  263   DO_FCALL_BY_NAME/131      ?240      ?0                   ?0                  	;0
554  265   GOTO/253                  ?0        ?421                 ?397                	;0
555  272   GOTO/253                  ?0        ?1532                ?398                	;0
556  274   INIT_FCALL_BY_NAME/59     ?0        ?0                   399:'unlink'        	;1
557  274   FETCH_CONSTANT/99         #305=     ?0                   401:'SIGNALS_TMP_PATH'	;16
558  274   CONCAT/8                  #306=     #305                 16?1                	;0
559  274   CONCAT/8                  #307=     #306                 404:'.force'        	;0
560  274   SEND_VAL_EX/116           ?80       #307                 ?1                  	;0
561  274   DO_FCALL_BY_NAME/131      ?244      ?0                   ?0                  	;0
562  276   JMPZ_EX/46                #309=     16?39                ?568                	;0	>>568
563  276   INIT_FCALL_BY_NAME/59     ?0        ?0                   405:'time'          	;0
564  276   DO_FCALL_BY_NAME/131      $310=     ?0                   ?0                  	;0
565  276   FETCH_DIM_R/81            $311=     16?4                 407:'delay_available_at'	;0
566  276   IS_SMALLER_OR_EQUAL/20    #312=     $311                 $310                	;0
567  276   BOOL/52                   #309=     #312                 ?0                  	;0
568  276   JMPZ_EX/46                #309=     #309                 ?575                	;0	>>575	<<562
569  276   INIT_STATIC_METHOD_CALL/113 ?0        408:'XUI'            410:'d69230d2A98C2fD4'	;2
570  276   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
571  276   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
572  276   DO_FCALL/60               $313=     ?0                   ?0                  	;0
573  276   BOOL_NOT/13               #314=     $313                 ?0                  	;0
574  276   BOOL/52                   #309=     #314                 ?0                  	;0
575  276   BOOL_NOT/13               #315=     #309                 ?0                  	;0	<<568
576  276   JMPZ/43                   ?0        #315                 ?578                	;0	>>578
577  277   GOTO/253                  ?0        ?953                 ?412                	;0
578  279   ECHO/40                   ?0        413:'Start Delay
'   ?0                  	;0	<<576
579  280   INIT_STATIC_METHOD_CALL/113 ?0        414:'XUI'            416:'D242df32bD80320f'	;3
580  280   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
581  280   FETCH_CONSTANT/99         #316=     ?0                   418:'SERVER_ID'     	;16
582  280   SEND_VAL_EX/116           ?96       #316                 ?2                  	;0
583  280   SEND_VAL_EX/116           ?112      421:'DELAY_START'    ?3                  	;0
584  280   DO_FCALL/60               ?253      ?0                   ?0                  	;0
585  281   GOTO/253                  ?0        ?930                 ?422                	;0
586  283   INIT_STATIC_METHOD_CALL/113 ?0        423:'XUI'            425:'d242DF32Bd80320f'	;4
587  283   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
588  283   FETCH_CONSTANT/99         #318=     ?0                   427:'SERVER_ID'     	;16
589  283   SEND_VAL_EX/116           ?96       #318                 ?2                  	;0
590  283   SEND_VAL_EX/116           ?112      430:'FFMPEG_ERROR'   ?3                  	;0
591  283   SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
592  283   DO_FCALL/60               ?255      ?0                   ?0                  	;0
593  284   GOTO/253                  ?0        ?957                 ?431                	;0
594  286   ASSIGN/38                 ?256      16?15                16?21               	;0
595  287   INIT_STATIC_METHOD_CALL/113 ?0        432:'XUI'            434:'e57006536cD5655d'	;1
596  287   CONCAT/8                  #321=     16?22                16?21               	;0
597  287   SEND_VAL_EX/116           ?80       #321                 ?1                  	;0
598  287   DO_FCALL/60               $322=     ?0                   ?0                  	;0
599  287   ASSIGN/38                 ?259      16?0                 $322                	;0
600  288   GOTO/253                  ?0        ?1667                ?436                	;0
601  290   INIT_FCALL_BY_NAME/59     ?0        ?0                   437:'is_numeric'    	;1
602  290   SEND_VAR_EX/66            ?80       16?40                ?1                  	;0
603  290   DO_FCALL_BY_NAME/131      $324=     ?0                   ?0                  	;0
604  290   BOOL_NOT/13               #325=     $324                 ?0                  	;0
605  290   JMPNZ_EX/47               #325=     #325                 ?608                	;0	>>608
606  290   IS_SMALLER/19             #326=     439:0                16?40               	;0
607  290   BOOL/52                   #325=     #326                 ?0                  	;0
608  290   BOOL_NOT/13               #327=     #325                 ?0                  	;0	<<605
609  290   JMPZ/43                   ?0        #327                 ?611                	;0	>>611
610  291   GOTO/253                  ?0        ?682                 ?440                	;0
611  293   FE_RESET_R/77             $328=     16?41                ?681                	;0	<<609
612  293   FE_FETCH_R/78             ?0        $328                 16?42               	;681	>>681	<<680
613  294   NOP/0                     ?0        ?0                   ?0                  	;1
614  294   GOTO/253                  ?0        ?615                 ?441                	;0
615  296   IS_EQUAL/17               #329=     16?42                16?2                	;0
616  296   JMPNZ_EX/47               #329=     #329                 ?619                	;0	>>619
617  296   IS_EQUAL/17               #330=     16?42                16?16               	;0
618  296   BOOL/52                   #329=     #330                 ?0                  	;0
619  296   BOOL_NOT/13               #331=     #329                 ?0                  	;0	<<616
620  296   JMPZ/43                   ?0        #331                 ?623                	;0	>>623
621  297   NOP/0                     ?0        ?0                   ?0                  	;1
622  297   GOTO/253                  ?0        ?625                 ?442                	;0
623  299   FE_FREE/127               ?0        $328                 ?10                 	;1	<<620
624  299   GOTO/253                  ?0        ?682                 ?443                	;0
625  301   INIT_STATIC_METHOD_CALL/113 ?0        444:'XUI'            446:'c1F42cA38AD7a48D'	;1
626  301   SEND_VAR_EX/66            ?80       16?42                ?1                  	;0
627  301   DO_FCALL/60               $332=     ?0                   ?0                  	;0
628  301   ASSIGN/38                 ?269      16?43                $332                	;0
629  302   INIT_FCALL_BY_NAME/59     ?0        ?0                   448:'strtolower'    	;1
630  302   INIT_FCALL_BY_NAME/59     ?0        ?0                   450:'substr'        	;3
631  302   SEND_VAR_EX/66            ?80       16?43                ?1                  	;0
632  302   SEND_VAL_EX/116           ?96       452:0                ?2                  	;0
633  302   INIT_FCALL_BY_NAME/59     ?0        ?0                   453:'strpos'        	;2
634  302   SEND_VAR_EX/66            ?80       16?43                ?1                  	;0
635  302   SEND_VAL_EX/116           ?96       455:'://'            ?2                  	;0
636  302   DO_FCALL_BY_NAME/131      $334=     ?0                   ?0                  	;0
637  302   SEND_VAR_NO_REF_EX/50     ?112      $334                 ?3                  	;0
638  302   DO_FCALL_BY_NAME/131      $335=     ?0                   ?0                  	;0
639  302   SEND_VAR_NO_REF_EX/50     ?80       $335                 ?1                  	;0
640  302   DO_FCALL_BY_NAME/131      $336=     ?0                   ?0                  	;0
641  302   ASSIGN/38                 ?273      16?44                $336                	;0
642  303   NOP/0                     ?0        ?0                   ?0                  	;1
643  303   GOTO/253                  ?0        ?650                 ?456                	;0
644  305   ASSIGN/38                 ?274      16?45                457:true            	;0
645  306   ASSIGN/38                 ?275      16?46                458:false           	;0
646  307   FE_FREE/127               ?0        $328                 ?10                 	;1
647  307   GOTO/253                  ?0        ?957                 ?459                	;0
648  310   NOP/0                     ?0        ?0                   ?0                  	;1
649  310   GOTO/253                  ?0        ?680                 ?460                	;0
650  312   INIT_FCALL_BY_NAME/59     ?0        ?0                   461:'implode'       	;2
651  312   SEND_VAL_EX/116           ?80       463:' '              ?1                  	;0
652  312   INIT_STATIC_METHOD_CALL/113 ?0        464:'XUI'            466:'a0779cB0a5BDF6fF'	;3
653  312   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
654  312   SEND_VAR_EX/66            ?96       16?44                ?2                  	;0
655  312   SEND_VAL_EX/116           ?112      468:'fetch'          ?3                  	;0
656  312   DO_FCALL/60               $340=     ?0                   ?0                  	;0
657  312   SEND_VAR_NO_REF_EX/50     ?96       $340                 ?2                  	;0
658  312   DO_FCALL_BY_NAME/131      $341=     ?0                   ?0                  	;0
659  312   ASSIGN/38                 ?278      16?47                $341                	;0
660  313   INIT_STATIC_METHOD_CALL/113 ?0        469:'XUI'            471:'E57006536CD5655D'	;2
661  313   SEND_VAR_EX/66            ?80       16?43                ?1                  	;0
662  313   SEND_VAR_EX/66            ?96       16?47                ?2                  	;0
663  313   DO_FCALL/60               $343=     ?0                   ?0                  	;0
664  313   ASSIGN/38                 $344=     16?0                 $343                	;0
665  313   BOOL_NOT/13               #345=     $344                 ?0                  	;0
666  313   JMPZ/43                   ?0        #345                 ?669                	;0	>>669
667  314   NOP/0                     ?0        ?0                   ?0                  	;1
668  314   GOTO/253                  ?0        ?648                 ?473                	;0
669  316   ECHO/40                   ?0        474:'Switch priority
' ?0                  	;0	<<666
670  317   INIT_STATIC_METHOD_CALL/113 ?0        475:'XUI'            477:'d242dF32bD80320f'	;4
671  317   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
672  317   FETCH_CONSTANT/99         #346=     ?0                   479:'SERVER_ID'     	;16
673  317   SEND_VAL_EX/116           ?96       #346                 ?2                  	;0
674  317   SEND_VAL_EX/116           ?112      482:'PRIORITY_SWITCH' ?3                  	;0
675  317   SEND_VAR_EX/66            ?128      16?42                ?4                  	;0
676  317   DO_FCALL/60               ?283      ?0                   ?0                  	;0
677  318   ASSIGN/38                 ?284      16?16                16?42               	;0
678  319   NOP/0                     ?0        ?0                   ?0                  	;1
679  319   GOTO/253                  ?0        ?644                 ?483                	;0
680  320   JMP/42                    ?0        ?612                 ?0                  	;0	>>612
681  320   FE_FREE/127               ?0        $328                 ?0                  	;0	<<611
682  325   GOTO/253                  ?0        ?1601                ?484                	;0
683  327   ASSIGN/38                 ?285      16?46                485:false           	;0
684  328   GOTO/253                  ?0        ?957                 ?486                	;0
685  332   GOTO/253                  ?0        ?251                 ?487                	;0
686  334   INIT_FCALL_BY_NAME/59     ?0        ?0                   488:'posix_getpwuid'	;1	<<0
687  334   INIT_FCALL_BY_NAME/59     ?0        ?0                   490:'posix_geteuid' 	;0
688  334   DO_FCALL_BY_NAME/131      $350=     ?0                   ?0                  	;0
689  334   SEND_VAR_NO_REF_EX/50     ?80       $350                 ?1                  	;0
690  334   DO_FCALL_BY_NAME/131      $351=     ?0                   ?0                  	;0
691  334   FETCH_DIM_R/81            $352=     $351                 492:'name'          	;0
692  334   IS_NOT_EQUAL/18           #353=     $352                 493:'xui'           	;0
693  334   BOOL_NOT/13               #354=     #353                 ?0                  	;0
694  334   JMPZ/43                   ?0        #354                 ?696                	;0	>>696
695  335   GOTO/253                  ?0        ?697                 ?494                	;0
696  337   EXIT/79                   ?0        495:'Please run as XUI!
' ?0                  	;0	<<694
697  339   BEGIN_SILENCE/57          #355=     ?0                   ?0                  	;0
698  339   FETCH_R/80                $356=     496:'argc'           ?0                  	;268435456
699  339   END_SILENCE/58            ?0        #355                 ?0                  	;0
700  339   BOOL_NOT/13               #357=     $356                 ?0                  	;0
701  339   JMPNZ_EX/47               #357=     #357                 ?704                	;0	>>704
702  339   IS_SMALLER_OR_EQUAL/20    #358=     16?48                497:1               	;0
703  339   BOOL/52                   #357=     #358                 ?0                  	;0
704  339   BOOL_NOT/13               #359=     #357                 ?0                  	;0	<<701
705  339   JMPZ/43                   ?0        #359                 ?707                	;0	>>707
706  340   GOTO/253                  ?0        ?1727                ?498                	;0
707  342   EXIT/79                   ?0        499:0                ?0                  	;0	<<705
708  343   GOTO/253                  ?0        ?1727                ?500                	;0
709  345   IS_SMALLER/19             #360=     501:0                16?11               	;0
710  345   JMPZ/43                   ?0        #360                 ?712                	;0	>>712
711  346   GOTO/253                  ?0        ?715                 ?502                	;0
712  348   FETCH_DIM_R/81            $361=     16?4                 503:'current_source'	;0	<<710
713  348   ASSIGN/38                 ?298      16?2                 $361                	;0
714  349   GOTO/253                  ?0        ?131                 ?504                	;0
715  351   CONCAT/8                  #363=     505:'Loopback: #'    16?11               	;0
716  351   ASSIGN/38                 ?300      16?2                 #363                	;0
717  352   GOTO/253                  ?0        ?131                 ?506                	;0
718  354   ASSIGN_DIM/147            ?301      16?0                 507:'of_duration'   	;0
719  354   OP_DATA/137               ?0        508:10               ?0                  	;0
720  356   INIT_FCALL_BY_NAME/59     ?0        ?0                   509:'file_put_contents'	;2
721  356   FETCH_CONSTANT/99         #366=     ?0                   511:'STREAMS_PATH'  	;16
722  356   CONCAT/8                  #367=     #366                 16?1                	;0
723  356   CONCAT/8                  #368=     #367                 514:'_.dur'         	;0
724  356   SEND_VAL_EX/116           ?80       #368                 ?1                  	;0
725  356   INIT_FCALL_BY_NAME/59     ?0        ?0                   515:'intval'        	;1
726  356   FETCH_DIM_FUNC_ARG/93     $369=     16?0                 517:'of_duration'   	;1
727  356   SEND_VAR_EX/66            ?80       $369                 ?1                  	;0
728  356   DO_FCALL_BY_NAME/131      $370=     ?0                   ?0                  	;0
729  356   SEND_VAR_NO_REF_EX/50     ?96       $370                 ?2                  	;0
730  356   DO_FCALL_BY_NAME/131      ?307      ?0                   ?0                  	;0
731  357   INIT_FCALL_BY_NAME/59     ?0        ?0                   518:'intval'        	;1
732  357   FETCH_DIM_FUNC_ARG/93     $372=     16?0                 520:'of_duration'   	;1
733  357   SEND_VAR_EX/66            ?80       $372                 ?1                  	;0
734  357   DO_FCALL_BY_NAME/131      $373=     ?0                   ?0                  	;0
735  357   IS_SMALLER/19             #374=     16?33                $373                	;0
736  357   BOOL_NOT/13               #375=     #374                 ?0                  	;0
737  357   JMPZ/43                   ?0        #375                 ?739                	;0	>>739
738  358   GOTO/253                  ?0        ?1132                ?521                	;0
739  360   INIT_FCALL_BY_NAME/59     ?0        ?0                   522:'intval'        	;1	<<737
740  360   FETCH_DIM_FUNC_ARG/93     $376=     16?0                 524:'of_duration'   	;1
741  360   SEND_VAR_EX/66            ?80       $376                 ?1                  	;0
742  360   DO_FCALL_BY_NAME/131      $377=     ?0                   ?0                  	;0
743  360   ASSIGN/38                 ?314      16?33                $377                	;0
744  361   GOTO/253                  ?0        ?1132                ?525                	;0
745  363   FETCH_DIM_R/81            $379=     16?4                 526:'type'          	;0
746  363   IS_EQUAL/17               #380=     $379                 527:3               	;0
747  363   JMPZ/43                   ?0        #380                 ?749                	;0	>>749
748  364   GOTO/253                  ?0        ?758                 ?528                	;0
749  366   INIT_STATIC_METHOD_CALL/113 ?0        529:'XUI'            531:'FFA26438e002c2b7'	;3	<<747
750  366   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
751  366   FETCH_CONSTANT/99         #381=     ?0                   533:'MONITOR_CALLS' 	;16
752  366   IS_SMALLER/19             #382=     16?35                #381                	;0
753  366   SEND_VAL_EX/116           ?96       #382                 ?2                  	;0
754  366   SEND_VAR_EX/66            ?112      16?16                ?3                  	;0
755  366   DO_FCALL/60               $383=     ?0                   ?0                  	;0
756  366   ASSIGN/38                 ?320      16?10                $383                	;0
757  367   GOTO/253                  ?0        ?884                 ?536                	;0
758  369   IS_SMALLER/19             #385=     537:0                16?3                	;0
759  369   JMPZ_EX/46                #385=     #385                 ?763                	;0	>>763
760  369   FETCH_DIM_R/81            $386=     16?4                 538:'parent_id'     	;0
761  369   BOOL_NOT/13               #387=     $386                 ?0                  	;0
762  369   BOOL/52                   #385=     #387                 ?0                  	;0
763  369   JMPZ_EX/46                #385=     #385                 ?767                	;0	>>767	<<759
764  369   FETCH_DIM_R/81            $388=     16?4                 539:'stream_started'	;0
765  369   IS_SMALLER/19             #389=     540:0                $388                	;0
766  369   BOOL/52                   #385=     #389                 ?0                  	;0
767  369   BOOL_NOT/13               #390=     #385                 ?0                  	;0	<<763
768  369   JMPZ/43                   ?0        #390                 ?770                	;0	>>770
769  370   GOTO/253                  ?0        ?1391                ?541                	;0
770  372   GOTO/253                  ?0        ?1360                ?542                	;0	<<768
771  374   FETCH_DIM_R/81            $391=     16?4                 543:'stream_info'   	;0
772  374   BOOL_NOT/13               #392=     $391                 ?0                  	;0
773  374   JMPZ/43                   ?0        #392                 ?775                	;0	>>775
774  375   GOTO/253                  ?0        ?1096                ?544                	;0
775  377   INIT_FCALL_BY_NAME/59     ?0        ?0                   545:'json_decode'   	;2	<<773
776  377   FETCH_DIM_FUNC_ARG/93     $393=     16?4                 547:'stream_info'   	;1
777  377   SEND_VAR_EX/66            ?80       $393                 ?1                  	;0
778  377   SEND_VAL_EX/116           ?96       548:true             ?2                  	;0
779  377   DO_FCALL_BY_NAME/131      $394=     ?0                   ?0                  	;0
780  377   ASSIGN/38                 ?331      16?49                $394                	;0
781  378   INIT_FCALL_BY_NAME/59     ?0        ?0                   549:'intval'        	;1
782  378   INIT_STATIC_METHOD_CALL/113 ?0        551:'XUI'            553:'D00c33C8075d14a5'	;1
783  378   SEND_VAR_EX/66            ?80       16?49                ?1                  	;0
784  378   DO_FCALL/60               $396=     ?0                   ?0                  	;0
785  378   SEND_VAR_NO_REF_EX/50     ?80       $396                 ?1                  	;0
786  378   DO_FCALL_BY_NAME/131      $397=     ?0                   ?0                  	;0
787  378   ASSIGN/38                 ?334      16?24                $397                	;0
788  379   FETCH_DIM_R/81            $399=     16?49                555:'codecs'        	;0
789  379   FETCH_DIM_R/81            $400=     $399                 556:'audio'         	;0
790  379   FETCH_DIM_R/81            $401=     $400                 557:'codec_name'    	;0
791  379   JMP_SET/152               #402=     $401                 ?793                	;0
792  379   QM_ASSIGN/22              #402=     558:NULL             ?0                  	;0
793  379   ASSIGN/38                 ?339      16?25                #402                	;0
794  380   FETCH_DIM_R/81            $404=     16?49                559:'codecs'        	;0
795  380   FETCH_DIM_R/81            $405=     $404                 560:'video'         	;0
796  380   FETCH_DIM_R/81            $406=     $405                 561:'codec_name'    	;0
797  380   JMP_SET/152               #407=     $406                 ?799                	;0
798  380   QM_ASSIGN/22              #407=     562:NULL             ?0                  	;0
799  380   ASSIGN/38                 ?344      16?26                #407                	;0
800  381   GOTO/253                  ?0        ?1082                ?563                	;0
801  383   INIT_FCALL_BY_NAME/59     ?0        ?0                   564:'shell_exec'    	;1
802  383   FETCH_CONSTANT/99         #409=     ?0                   566:'STREAMS_PATH'  	;16
803  383   CONCAT/8                  #410=     569:'rm -f '         #409                	;0
804  383   INIT_FCALL_BY_NAME/59     ?0        ?0                   570:'intval'        	;1
805  383   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
806  383   DO_FCALL_BY_NAME/131      $411=     ?0                   ?0                  	;0
807  383   CONCAT/8                  #412=     #410                 $411                	;0
808  383   CONCAT/8                  #413=     #412                 572:'_*'            	;0
809  383   SEND_VAL_EX/116           ?80       #413                 ?1                  	;0
810  383   DO_FCALL_BY_NAME/131      ?350      ?0                   ?0                  	;0
811  384   INIT_FCALL_BY_NAME/59     ?0        ?0                   573:'file_put_contents'	;2
812  384   FETCH_CONSTANT/99         #415=     ?0                   575:'STREAMS_PATH'  	;16
813  384   CONCAT/8                  #416=     #415                 16?1                	;0
814  384   CONCAT/8                  #417=     #416                 578:'_.monitor'     	;0
815  384   SEND_VAL_EX/116           ?80       #417                 ?1                  	;0
816  384   INIT_FCALL_BY_NAME/59     ?0        ?0                   579:'getmypid'      	;0
817  384   DO_FCALL_BY_NAME/131      $418=     ?0                   ?0                  	;0
818  384   SEND_VAR_NO_REF_EX/50     ?96       $418                 ?2                  	;0
819  384   DO_FCALL_BY_NAME/131      ?355      ?0                   ?0                  	;0
820  385   JMPZ_EX/46                #420=     16?39                ?826                	;0	>>826
821  385   INIT_STATIC_METHOD_CALL/113 ?0        581:'XUI'            583:'D69230d2a98C2Fd4'	;2
822  385   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
823  385   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
824  385   DO_FCALL/60               $421=     ?0                   ?0                  	;0
825  385   BOOL/52                   #420=     $421                 ?0                  	;0
826  385   JMPZ_EX/46                #420=     #420                 ?831                	;0	>>831	<<820
827  385   INIT_FCALL_BY_NAME/59     ?0        ?0                   585:'is_numeric'    	;1
828  385   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
829  385   DO_FCALL_BY_NAME/131      $422=     ?0                   ?0                  	;0
830  385   BOOL/52                   #420=     $422                 ?0                  	;0
831  385   JMPZ_EX/46                #420=     #420                 ?834                	;0	>>834	<<826
832  385   IS_SMALLER/19             #423=     587:0                16?14               	;0
833  385   BOOL/52                   #420=     #423                 ?0                  	;0
834  385   BOOL_NOT/13               #424=     #420                 ?0                  	;0	<<831
835  385   JMPZ/43                   ?0        #424                 ?837                	;0	>>837
836  386   GOTO/253                  ?0        ?844                 ?588                	;0
837  388   INIT_FCALL_BY_NAME/59     ?0        ?0                   589:'shell_exec'    	;1	<<835
838  388   INIT_FCALL_BY_NAME/59     ?0        ?0                   591:'intval'        	;1
839  388   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
840  388   DO_FCALL_BY_NAME/131      $425=     ?0                   ?0                  	;0
841  388   CONCAT/8                  #426=     593:'kill -9 '       $425                	;0
842  388   SEND_VAL_EX/116           ?80       #426                 ?1                  	;0
843  388   DO_FCALL_BY_NAME/131      ?363      ?0                   ?0                  	;0
844  390   GOTO/253                  ?0        ?100                 ?594                	;0
845  393   FETCH_STATIC_PROP_R/173   $428=     595:'rSettings'      596:'XUI'           	;0
846  393   FETCH_DIM_R/81            $429=     $428                 598:'priority_backup'	;0
847  393   IS_EQUAL/17               #430=     $429                 599:1               	;0
848  393   JMPZ_EX/46                #430=     #430                 ?854                	;0	>>854
849  393   INIT_FCALL_BY_NAME/59     ?0        ?0                   600:'count'         	;1
850  393   SEND_VAR_EX/66            ?80       16?41                ?1                  	;0
851  393   DO_FCALL_BY_NAME/131      $431=     ?0                   ?0                  	;0
852  393   IS_SMALLER/19             #432=     602:1                $431                	;0
853  393   BOOL/52                   #430=     #432                 ?0                  	;0
854  393   JMPZ_EX/46                #430=     #430                 ?857                	;0	>>857	<<848
855  393   IS_EQUAL/17               #433=     16?11                603:0               	;0
856  393   BOOL/52                   #430=     #433                 ?0                  	;0
857  393   JMPZ_EX/46                #430=     #430                 ?863                	;0	>>863	<<854
858  393   INIT_FCALL_BY_NAME/59     ?0        ?0                   604:'time'          	;0
859  393   DO_FCALL_BY_NAME/131      $434=     ?0                   ?0                  	;0
860  393   SUB/2                     #435=     $434                 16?50               	;0
861  393   IS_SMALLER/19             #436=     606:300              #435                	;0
862  393   BOOL/52                   #430=     #436                 ?0                  	;0
863  393   BOOL_NOT/13               #437=     #430                 ?0                  	;0	<<857
864  393   JMPZ/43                   ?0        #437                 ?866                	;0	>>866
865  394   GOTO/253                  ?0        ?682                 ?607                	;0
866  396   ECHO/40                   ?0        608:'Checking backups...
' ?0                  	;0	<<864
867  397   INIT_FCALL_BY_NAME/59     ?0        ?0                   609:'time'          	;0
868  397   DO_FCALL_BY_NAME/131      $438=     ?0                   ?0                  	;0
869  397   ASSIGN/38                 ?375      16?50                $438                	;0
870  398   INIT_FCALL_BY_NAME/59     ?0        ?0                   611:'array_search'  	;2
871  398   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
872  398   SEND_VAR_EX/66            ?96       16?41                ?2                  	;0
873  398   DO_FCALL_BY_NAME/131      $440=     ?0                   ?0                  	;0
874  398   ASSIGN/38                 ?377      16?40                $440                	;0
875  399   GOTO/253                  ?0        ?601                 ?613                	;0
876  401   INIT_STATIC_METHOD_CALL/113 ?0        614:'XUI'            616:'FFA26438e002c2B7'	;5
877  401   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
878  401   SEND_VAL_EX/116           ?96       618:false            ?2                  	;0
879  401   SEND_VAR_EX/66            ?112      16?16                ?3                  	;0
880  401   SEND_VAL_EX/116           ?128      619:false            ?4                  	;0
881  401   SEND_VAR_EX/66            ?144      16?9                 ?5                  	;0
882  401   DO_FCALL/60               $442=     ?0                   ?0                  	;0
883  401   ASSIGN/38                 ?379      16?10                $442                	;0
884  403   GOTO/253                  ?0        ?1802                ?620                	;0
885  405   FETCH_DIM_R/81            $444=     16?4                 621:'llod'          	;0
886  405   IS_EQUAL/17               #445=     $444                 622:1               	;0
887  405   JMPZ/43                   ?0        #445                 ?889                	;0	>>889
888  406   GOTO/253                  ?0        ?1283                ?623                	;0
889  408   GOTO/253                  ?0        ?1803                ?624                	;0	<<887
890  411   INIT_FCALL_BY_NAME/59     ?0        ?0                   625:'usleep'        	;1
891  411   SEND_VAL_EX/116           ?80       627:50000            ?1                  	;0
892  411   DO_FCALL_BY_NAME/131      ?382      ?0                   ?0                  	;0
893  413   INIT_STATIC_METHOD_CALL/113 ?0        628:'XUI'            630:'D69230D2A98C2FD4'	;2
894  413   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
895  413   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
896  413   DO_FCALL/60               $447=     ?0                   ?0                  	;0
897  413   BOOL_NOT/13               #448=     $447                 ?0                  	;0
898  413   JMPZ/43                   ?0        #448                 ?900                	;0	>>900
899  414   GOTO/253                  ?0        ?130                 ?632                	;0
900  416   ECHO/40                   ?0        633:'Killing stream delay...
' ?0                  	;0	<<898
901  417   GOTO/253                  ?0        ?111                 ?634                	;0
902  420   INIT_FCALL_BY_NAME/59     ?0        ?0                   635:'count'         	;1
903  420   INIT_FCALL_BY_NAME/59     ?0        ?0                   637:'json_decode'   	;2
904  420   FETCH_DIM_FUNC_ARG/93     $449=     16?4                 639:'stream_info'   	;1
905  420   SEND_VAR_EX/66            ?80       $449                 ?1                  	;0
906  420   SEND_VAL_EX/116           ?96       640:true             ?2                  	;0
907  420   DO_FCALL_BY_NAME/131      $450=     ?0                   ?0                  	;0
908  420   SEND_VAR_NO_REF_EX/50     ?80       $450                 ?1                  	;0
909  420   DO_FCALL_BY_NAME/131      $451=     ?0                   ?0                  	;0
910  420   IS_EQUAL/17               #452=     $451                 641:0               	;0
911  420   BOOL_NOT/13               #453=     #452                 ?0                  	;0
912  420   JMPZ/43                   ?0        #453                 ?914                	;0	>>914
913  421   GOTO/253                  ?0        ?915                 ?642                	;0
914  423   ASSIGN/38                 ?390      16?28                643:true            	;0	<<912
915  425   INIT_FCALL_BY_NAME/59     ?0        ?0                   644:'time'          	;0
916  425   DO_FCALL_BY_NAME/131      $455=     ?0                   ?0                  	;0
917  425   ASSIGN/38                 ?392      16?32                $455                	;0
918  426   GOTO/253                  ?0        ?845                 ?646                	;0
919  428   INIT_FCALL_BY_NAME/59     ?0        ?0                   647:'floatval'      	;1
920  428   DIV/4                     #457=     16?51                16?52               	;0
921  428   SEND_VAL_EX/116           ?80       #457                 ?1                  	;0
922  428   DO_FCALL_BY_NAME/131      $458=     ?0                   ?0                  	;0
923  428   ASSIGN/38                 ?395      16?13                $458                	;0
924  430   IS_SMALLER/19             #460=     649:0                16?13               	;0
925  430   BOOL_NOT/13               #461=     #460                 ?0                  	;0
926  430   JMPZ/43                   ?0        #461                 ?928                	;0	>>928
927  431   GOTO/253                  ?0        ?929                 ?650                	;0
928  433   ASSIGN/38                 ?398      16?12                16?13               	;0	<<926
929  435   GOTO/253                  ?0        ?555                 ?651                	;0
930  437   INIT_FCALL_BY_NAME/59     ?0        ?0                   652:'intval'        	;1
931  437   INIT_FCALL_BY_NAME/59     ?0        ?0                   654:'shell_exec'    	;1
932  437   FETCH_CONSTANT/99         #463=     ?0                   656:'PHP_BIN'       	;16
933  437   CONCAT/8                  #464=     #463                 659:' '             	;0
934  437   FETCH_CONSTANT/99         #465=     ?0                   660:'CLI_PATH'      	;16
935  437   CONCAT/8                  #466=     #464                 #465                	;0
936  437   CONCAT/8                  #467=     #466                 663:'delay.php '    	;0
937  437   INIT_FCALL_BY_NAME/59     ?0        ?0                   664:'intval'        	;1
938  437   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
939  437   DO_FCALL_BY_NAME/131      $468=     ?0                   ?0                  	;0
940  437   CONCAT/8                  #469=     #467                 $468                	;0
941  437   CONCAT/8                  #470=     #469                 666:' '             	;0
942  437   INIT_FCALL_BY_NAME/59     ?0        ?0                   667:'intval'        	;1
943  437   FETCH_DIM_FUNC_ARG/93     $471=     16?4                 669:'delay_minutes' 	;1
944  437   SEND_VAR_EX/66            ?80       $471                 ?1                  	;0
945  437   DO_FCALL_BY_NAME/131      $472=     ?0                   ?0                  	;0
946  437   CONCAT/8                  #473=     #470                 $472                	;0
947  437   CONCAT/8                  #474=     #473                 670:' >/dev/null 2>/dev/null & echo $!'	;0
948  437   SEND_VAL_EX/116           ?80       #474                 ?1                  	;0
949  437   DO_FCALL_BY_NAME/131      $475=     ?0                   ?0                  	;0
950  437   SEND_VAR_NO_REF_EX/50     ?80       $475                 ?1                  	;0
951  437   DO_FCALL_BY_NAME/131      $476=     ?0                   ?0                  	;0
952  437   ASSIGN/38                 ?413      16?14                $476                	;0
953  439   INIT_FCALL_BY_NAME/59     ?0        ?0                   671:'sleep'         	;1
954  439   SEND_VAL_EX/116           ?80       673:1                ?1                  	;0
955  439   DO_FCALL_BY_NAME/131      ?414      ?0                   ?0                  	;0
956  440   GOTO/253                  ?0        ?1197                ?674                	;0
957  442   GOTO/253                  ?0        ?1518                ?675                	;0
958  444   ASSIGN/38                 ?415      16?45                676:false           	;0
959  445   ASSIGN/38                 ?416      16?53                677:0               	;0
960  446   IS_EQUAL/17               #481=     16?11                678:0               	;0
961  446   BOOL_NOT/13               #482=     #481                 ?0                  	;0
962  446   JMPZ/43                   ?0        #482                 ?964                	;0	>>964
963  447   GOTO/253                  ?0        ?970                 ?679                	;0
964  449   INIT_FCALL_BY_NAME/59     ?0        ?0                   680:'json_decode'   	;2	<<962
965  449   FETCH_DIM_FUNC_ARG/93     $483=     16?4                 682:'stream_source' 	;1
966  449   SEND_VAR_EX/66            ?80       $483                 ?1                  	;0
967  449   SEND_VAL_EX/116           ?96       683:true             ?2                  	;0
968  449   DO_FCALL_BY_NAME/131      $484=     ?0                   ?0                  	;0
969  449   ASSIGN/38                 ?421      16?41                $484                	;0
970  451   GOTO/253                  ?0        ?709                 ?684                	;0
971  453   IS_NOT_EQUAL/18           #486=     16?54                16?34               	;0
972  453   JMPZ/43                   ?0        #486                 ?974                	;0	>>974
973  454   GOTO/253                  ?0        ?976                 ?685                	;0
974  456   GOTO/253                  ?0        ?957                 ?686                	;0	<<972
975  457   GOTO/253                  ?0        ?1418                ?687                	;0
976  459   ASSIGN/38                 ?423      16?54                16?34               	;0
977  460   GOTO/253                  ?0        ?1415                ?688                	;0
978  462   INIT_FCALL_BY_NAME/59     ?0        ?0                   689:'stripos'       	;2
979  462   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
980  462   SEND_VAL_EX/116           ?96       691:'/'              ?2                  	;0
981  462   DO_FCALL_BY_NAME/131      $488=     ?0                   ?0                  	;0
982  462   IS_NOT_IDENTICAL/16       #489=     $488                 692:false           	;0
983  462   JMPZ/43                   ?0        #489                 ?985                	;0	>>985
984  463   GOTO/253                  ?0        ?990                 ?693                	;0
985  465   INIT_FCALL_BY_NAME/59     ?0        ?0                   694:'floatval'      	;1	<<983
986  465   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
987  465   DO_FCALL_BY_NAME/131      $490=     ?0                   ?0                  	;0
988  465   ASSIGN/38                 ?427      16?13                $490                	;0
989  466   GOTO/253                  ?0        ?924                 ?696                	;0
990  468   INIT_FCALL_BY_NAME/59     ?0        ?0                   697:'array_map'     	;2
991  468   SEND_VAL_EX/116           ?80       699:'floatval'       ?1                  	;0
992  468   INIT_FCALL_BY_NAME/59     ?0        ?0                   700:'explode'       	;2
993  468   SEND_VAL_EX/116           ?80       702:'/'              ?1                  	;0
994  468   SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
995  468   DO_FCALL_BY_NAME/131      $492=     ?0                   ?0                  	;0
996  468   SEND_VAR_NO_REF_EX/50     ?96       $492                 ?2                  	;0
997  468   DO_FCALL_BY_NAME/131      $493=     ?0                   ?0                  	;0
998  468   FETCH_LIST/98             $494=     $493                 703:0               	;0
999  468   ASSIGN/38                 ?431      16?51                $494                	;0
1000 468   FETCH_LIST/98             $496=     $493                 704:1               	;0
1001 468   ASSIGN/38                 ?433      16?52                $496                	;0
1002 468   FREE/70                   ?0        $493                 ?0                  	;0
1003 469   GOTO/253                  ?0        ?919                 ?705                	;0
1004 471   ECHO/40                   ?0        706:'Checking FPS...
' ?0                  	;0
1005 472   INIT_FCALL_BY_NAME/59     ?0        ?0                   707:'floatval'      	;1
1006 472   INIT_FCALL_BY_NAME/59     ?0        ?0                   709:'json_decode'   	;2
1007 472   INIT_FCALL_BY_NAME/59     ?0        ?0                   711:'file_get_contents'	;1
1008 472   FETCH_CONSTANT/99         #498=     ?0                   713:'STREAMS_PATH'  	;16
1009 472   CONCAT/8                  #499=     #498                 16?1                	;0
1010 472   CONCAT/8                  #500=     #499                 716:'_.progress_check'	;0
1011 472   SEND_VAL_EX/116           ?80       #500                 ?1                  	;0
1012 472   DO_FCALL_BY_NAME/131      $501=     ?0                   ?0                  	;0
1013 472   SEND_VAR_NO_REF_EX/50     ?80       $501                 ?1                  	;0
1014 472   SEND_VAL_EX/116           ?96       717:true             ?2                  	;0
1015 472   DO_FCALL_BY_NAME/131      $502=     ?0                   ?0                  	;0
1016 472   SEPARATE/156              $502=     $502                 ?0                  	;0
1017 472   FETCH_DIM_FUNC_ARG/93     $503=     $502                 718:'fps'           	;1
1018 472   SEND_VAR_EX/66            ?80       $503                 ?1                  	;0
1019 472   DO_FCALL_BY_NAME/131      $504=     ?0                   ?0                  	;0
1020 472   JMP_SET/152               #505=     $504                 ?1022               	;0
1021 472   QM_ASSIGN/22              #505=     719:0                ?0                  	;0
1022 472   ASSIGN/38                 ?442      16?13                #505                	;0
1023 473   IS_SMALLER/19             #507=     720:0                16?13               	;0
1024 473   BOOL_NOT/13               #508=     #507                 ?0                  	;0
1025 473   JMPZ/43                   ?0        #508                 ?1027               	;0	>>1027
1026 474   GOTO/253                  ?0        ?555                 ?721                	;0
1027 476   BOOL_NOT/13               #509=     16?12                ?0                  	;0	<<1025
1028 476   JMPZ/43                   ?0        #509                 ?1030               	;0	>>1030
1029 477   GOTO/253                  ?0        ?92                  ?722                	;0
1030 479   JMPZ_EX/46                #510=     16?12                ?1037               	;0	>>1037	<<1028
1031 479   FETCH_DIM_R/81            $511=     16?4                 723:'fps_threshold' 	;0
1032 479   JMP_SET/152               #512=     $511                 ?1034               	;0
1033 479   QM_ASSIGN/22              #512=     724:100              ?0                  	;0
1034 479   MUL/3                     #513=     16?13                #512                	;0
1035 479   IS_SMALLER/19             #514=     #513                 16?12               	;0
1036 479   BOOL/52                   #510=     #514                 ?0                  	;0
1037 479   BOOL_NOT/13               #515=     #510                 ?0                  	;0	<<1030
1038 479   JMPZ/43                   ?0        #515                 ?1040               	;0	>>1040
1039 480   GOTO/253                  ?0        ?355                 ?725                	;0
1040 482   GOTO/253                  ?0        ?346                 ?726                	;0	<<1038
1041 484   GOTO/253                  ?0        ?1044                ?727                	;0
1042 486   FETCH_CONSTANT/99         #516=     ?0                   728:'DELAY_PATH'    	;16
1043 486   ASSIGN/38                 ?453      16?22                #516                	;0
1044 488   CONCAT/8                  #518=     16?22                16?1                	;0
1045 488   CONCAT/8                  #519=     #518                 731:'_0.ts'         	;0
1046 488   ASSIGN/38                 ?456      16?55                #519                	;0
1047 489   GOTO/253                  ?0        ?1324                ?732                	;0
1048 492   INIT_STATIC_METHOD_CALL/113 ?0        736:'XUI'            738:'aC49B56Dbe10E52c'	;0
1049 492   DO_FCALL/60               $522=     ?0                   ?0                  	;0
1050 492   FETCH_STATIC_PROP_W/174   $521=     733:'rSettings'      734:'XUI'           	;0
1051 492   ASSIGN/38                 ?459      $521                 $522                	;0
1052 493   INIT_STATIC_METHOD_CALL/113 ?0        740:'XUI'            742:'b4ab2A8EB0aA68Ee'	;2
1053 493   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1054 493   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1055 493   DO_FCALL/60               $524=     ?0                   ?0                  	;0
1056 493   JMPZ_EX/46                #525=     $524                 ?1059               	;0	>>1059
1057 493   BOOL_NOT/13               #526=     16?18                ?0                  	;0
1058 493   BOOL/52                   #525=     #526                 ?0                  	;0
1059 493   JMPZ/43                   ?0        #525                 ?1061               	;0	>>1061	<<1056
1060 494   GOTO/253                  ?0        ?1114                ?744                	;0
1061 496   ECHO/40                   ?0        745:'Stream start failed...
' ?0                  	;0	<<1059
1062 497   IS_EQUAL/17               #527=     16?11                746:0               	;0
1063 497   BOOL_NOT/13               #528=     #527                 ?0                  	;0
1064 497   JMPZ/43                   ?0        #528                 ?1066               	;0	>>1066
1065 498   GOTO/253                  ?0        ?532                 ?747                	;0
1066 500   GOTO/253                  ?0        ?525                 ?748                	;0	<<1064
1067 502   GOTO/253                  ?0        ?1072                ?749                	;0
1068 504   INIT_STATIC_METHOD_CALL/113 ?0        750:'XUI'            752:'startLoopback' 	;1
1069 504   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1070 504   DO_FCALL/60               $529=     ?0                   ?0                  	;0
1071 504   ASSIGN/38                 ?466      16?10                $529                	;0
1072 506   INIT_FCALL_BY_NAME/59     ?0        ?0                   754:'is_numeric'    	;1
1073 506   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
1074 506   DO_FCALL_BY_NAME/131      $531=     ?0                   ?0                  	;0
1075 506   JMPZ_EX/46                #532=     $531                 ?1078               	;0	>>1078
1076 506   IS_EQUAL/17               #533=     16?10                756:0               	;0
1077 506   BOOL/52                   #532=     #533                 ?0                  	;0
1078 506   BOOL_NOT/13               #534=     #532                 ?0                  	;0	<<1075
1079 506   JMPZ/43                   ?0        #534                 ?1081               	;0	>>1081
1080 507   GOTO/253                  ?0        ?239                 ?757                	;0
1081 509   GOTO/253                  ?0        ?1489                ?758                	;0	<<1079
1082 511   FETCH_DIM_R/81            $535=     16?49                759:'codecs'        	;0
1083 511   FETCH_DIM_R/81            $536=     $535                 760:'video'         	;0
1084 511   FETCH_DIM_R/81            $537=     $536                 761:'height'        	;0
1085 511   JMP_SET/152               #538=     $537                 ?1087               	;0
1086 511   QM_ASSIGN/22              #538=     762:NULL             ?0                  	;0
1087 511   ASSIGN/38                 ?475      16?27                #538                	;0
1088 512   BOOL_NOT/13               #540=     16?27                ?0                  	;0
1089 512   JMPZ/43                   ?0        #540                 ?1091               	;0	>>1091
1090 513   GOTO/253                  ?0        ?1096                ?763                	;0
1091 515   INIT_STATIC_METHOD_CALL/113 ?0        764:'XUI'            766:'B954Bd7c2BeC3c82'	;2	<<1089
1092 515   SEND_VAL_EX/116           ?80       768:array (
  0 => 240,
  1 => 360,
  2 => 480,
  3 => 576,
  4 => 720,
  5 => 1080,
  6 => 1440,
  7 => 2160,
) ?1                  	;0
1093 515   SEND_VAR_EX/66            ?96       16?27                ?2                  	;0
1094 515   DO_FCALL/60               $541=     ?0                   ?0                  	;0
1095 515   ASSIGN/38                 ?478      16?27                $541                	;0
1096 518   GOTO/253                  ?0        ?60                  ?769                	;0
1097 520   INIT_FCALL_BY_NAME/59     ?0        ?0                   770:'sleep'         	;1
1098 520   FETCH_STATIC_PROP_FUNC_ARG/177 $543=     772:'rSettings'      773:'XUI'           	;1
1099 520   FETCH_DIM_FUNC_ARG/93     $544=     $543                 775:'stream_fail_sleep'	;1
1100 520   SEND_VAR_EX/66            ?80       $544                 ?1                  	;0
1101 520   DO_FCALL_BY_NAME/131      ?481      ?0                   ?0                  	;0
1102 521   FETCH_STATIC_PROP_R/173   $546=     776:'rSettings'      777:'XUI'           	;0
1103 521   FETCH_DIM_R/81            $547=     $546                 779:'on_demand_failure_exit'	;0
1104 521   JMPZ_EX/46                #548=     $547                 ?1107               	;0	>>1107
1105 521   FETCH_DIM_R/81            $549=     16?4                 780:'on_demand'     	;0
1106 521   BOOL/52                   #548=     $549                 ?0                  	;0
1107 521   BOOL_NOT/13               #550=     #548                 ?0                  	;0	<<1104
1108 521   JMPZ/43                   ?0        #550                 ?1110               	;0	>>1110
1109 522   GOTO/253                  ?0        ?1112                ?781                	;0
1110 524   ECHO/40                   ?0        782:'On-demand failed to run!
' ?0                  	;0	<<1108
1111 525   EXIT/79                   ?0        ?0                   ?0                  	;0
1112 527   GOTO/253                  ?0        ?1113                ?783                	;0
1113 529   GOTO/253                  ?0        ?375                 ?784                	;0
1114 531   ECHO/40                   ?0        785:'Started! Probe Stream
' ?0                  	;0
1115 532   JMPZ/43                   ?0        16?56                ?1117               	;0	>>1117
1116 533   GOTO/253                  ?0        ?1658                ?786                	;0
1117 535   INIT_STATIC_METHOD_CALL/113 ?0        787:'XUI'            789:'D242df32bd80320f'	;4	<<1115
1118 535   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1119 535   FETCH_CONSTANT/99         #551=     ?0                   791:'SERVER_ID'     	;16
1120 535   SEND_VAL_EX/116           ?96       #551                 ?2                  	;0
1121 535   SEND_VAL_EX/116           ?112      794:'STREAM_RESTART' ?3                  	;0
1122 535   SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
1123 535   DO_FCALL/60               ?488      ?0                   ?0                  	;0
1124 536   GOTO/253                  ?0        ?1657                ?795                	;0
1125 538   ASSIGN/38                 ?489      16?39                796:false           	;0
1126 539   FETCH_CONSTANT/99         #554=     ?0                   797:'STREAMS_PATH'  	;16
1127 539   ASSIGN/38                 ?491      16?22                #554                	;0
1128 540   GOTO/253                  ?0        ?1870                ?800                	;0
1129 542   FETCH_CONSTANT/99         #556=     ?0                   801:'DELAY_PATH'    	;16
1130 542   ASSIGN/38                 ?493      16?22                #556                	;0
1131 543   GOTO/253                  ?0        ?1865                ?804                	;0
1132 546   BOOL_NOT/13               #558=     16?0                 ?0                  	;0
1133 546   JMPZ/43                   ?0        #558                 ?1135               	;0	>>1135
1134 547   GOTO/253                  ?0        ?246                 ?805                	;0
1135 549   INIT_FCALL_BY_NAME/59     ?0        ?0                   807:'json_encode'   	;2	<<1133
1136 549   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
1137 549   FETCH_CONSTANT/99         #560=     ?0                   809:'JSON_UNESCAPED_UNICODE'	;16
1138 549   SEND_VAL_EX/116           ?96       #560                 ?2                  	;0
1139 549   DO_FCALL_BY_NAME/131      $561=     ?0                   ?0                  	;0
1140 549   ASSIGN_DIM/147            ?495      16?4                 806:'stream_info'   	;0
1141 549   OP_DATA/137               ?0        $561                 ?0                  	;0
1142 550   INIT_STATIC_METHOD_CALL/113 ?0        812:'XUI'            814:'E0117654B65aE897'	;2
1143 550   SEND_VAL_EX/116           ?80       816:'live'           ?1                  	;0
1144 550   FETCH_CONSTANT/99         #562=     ?0                   817:'STREAMS_PATH'  	;16
1145 550   CONCAT/8                  #563=     #562                 16?1                	;0
1146 550   CONCAT/8                  #564=     #563                 820:'_.m3u8'        	;0
1147 550   SEND_VAL_EX/116           ?96       #564                 ?2                  	;0
1148 550   DO_FCALL/60               $565=     ?0                   ?0                  	;0
1149 550   ASSIGN/38                 ?502      16?36                $565                	;0
1150 551   ASSIGN/38                 ?503      16?28                821:false           	;0
1151 552   GOTO/253                  ?0        ?243                 ?822                	;0
1152 554   INIT_FCALL_BY_NAME/59     ?0        ?0                   823:'unlink'        	;1
1153 554   FETCH_CONSTANT/99         #568=     ?0                   825:'SIGNALS_TMP_PATH'	;16
1154 554   CONCAT/8                  #569=     #568                 16?1                	;0
1155 554   CONCAT/8                  #570=     #569                 828:'.force'        	;0
1156 554   SEND_VAL_EX/116           ?80       #570                 ?1                  	;0
1157 554   DO_FCALL_BY_NAME/131      ?507      ?0                   ?0                  	;0
1158 555   ASSIGN/38                 ?508      16?46                829:false           	;0
1159 556   GOTO/253                  ?0        ?957                 ?830                	;0
1160 559   GOTO/253                  ?0        ?556                 ?831                	;0
1161 562   INIT_STATIC_METHOD_CALL/113 ?0        832:'XUI'            834:'B4AB2a8eb0AA68ee'	;2
1162 562   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1163 562   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1164 562   DO_FCALL/60               $573=     ?0                   ?0                  	;0
1165 562   BOOL_NOT/13               #574=     $573                 ?0                  	;0
1166 562   JMPZ/43                   ?0        #574                 ?1168               	;0	>>1168
1167 563   GOTO/253                  ?0        ?893                 ?836                	;0
1168 565   ECHO/40                   ?0        837:'Killing stream...
' ?0                  	;0	<<1166
1169 566   INIT_FCALL_BY_NAME/59     ?0        ?0                   838:'is_numeric'    	;1
1170 566   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1171 566   DO_FCALL_BY_NAME/131      $575=     ?0                   ?0                  	;0
1172 566   JMPZ_EX/46                #576=     $575                 ?1175               	;0	>>1175
1173 566   IS_SMALLER/19             #577=     840:0                16?3                	;0
1174 566   BOOL/52                   #576=     #577                 ?0                  	;0
1175 566   BOOL_NOT/13               #578=     #576                 ?0                  	;0	<<1172
1176 566   JMPZ/43                   ?0        #578                 ?1178               	;0	>>1178
1177 567   GOTO/253                  ?0        ?890                 ?841                	;0
1178 569   INIT_FCALL_BY_NAME/59     ?0        ?0                   842:'shell_exec'    	;1	<<1176
1179 569   INIT_FCALL_BY_NAME/59     ?0        ?0                   844:'intval'        	;1
1180 569   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1181 569   DO_FCALL_BY_NAME/131      $579=     ?0                   ?0                  	;0
1182 569   CONCAT/8                  #580=     846:'kill -9 '       $579                	;0
1183 569   SEND_VAL_EX/116           ?80       #580                 ?1                  	;0
1184 569   DO_FCALL_BY_NAME/131      ?517      ?0                   ?0                  	;0
1185 570   GOTO/253                  ?0        ?890                 ?847                	;0
1186 572   INIT_STATIC_METHOD_CALL/113 ?0        848:'XUI'            850:'B4ab2A8eB0aA68eE'	;2
1187 572   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1188 572   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1189 572   DO_FCALL/60               $582=     ?0                   ?0                  	;0
1190 572   JMPZ_EX/46                #583=     $582                 ?1195               	;0	>>1195
1191 572   INIT_FCALL_BY_NAME/59     ?0        ?0                   852:'file_exists'   	;1
1192 572   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
1193 572   DO_FCALL_BY_NAME/131      $584=     ?0                   ?0                  	;0
1194 572   BOOL/52                   #583=     $584                 ?0                  	;0
1195 572   ASSIGN/38                 ?521      16?46                #583                	;0	<<1190
1196 573   ASSIGN/38                 ?522      16?12                854:NULL            	;0
1197 575   INIT_STATIC_METHOD_CALL/113 ?0        855:'XUI'            857:'b4aB2a8eB0AA68ee'	;2
1198 575   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1199 575   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1200 575   DO_FCALL/60               $587=     ?0                   ?0                  	;0
1201 575   JMPZ_EX/46                #588=     $587                 ?1206               	;0	>>1206
1202 575   INIT_FCALL_BY_NAME/59     ?0        ?0                   859:'file_exists'   	;1
1203 575   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
1204 575   DO_FCALL_BY_NAME/131      $589=     ?0                   ?0                  	;0
1205 575   BOOL/52                   #588=     $589                 ?0                  	;0
1206 575   BOOL_NOT/13               #590=     #588                 ?0                  	;0	<<1201
1207 575   JMPZ/43                   ?0        #590                 ?1209               	;0	>>1209
1208 576   GOTO/253                  ?0        ?957                 ?861                	;0
1209 578   ISSET_ISEMPTY_DIM_OBJ/115 #591=     16?5                 862:'days'          	;16777216	<<1207
1210 578   BOOL_NOT/13               #592=     #591                 ?0                  	;0
1211 578   JMPZ_EX/46                #592=     #592                 ?1215               	;0	>>1215
1212 578   ISSET_ISEMPTY_DIM_OBJ/115 #593=     16?5                 863:'at'            	;16777216
1213 578   BOOL_NOT/13               #594=     #593                 ?0                  	;0
1214 578   BOOL/52                   #592=     #594                 ?0                  	;0
1215 578   BOOL_NOT/13               #595=     #592                 ?0                  	;0	<<1211
1216 578   JMPZ/43                   ?0        #595                 ?1218               	;0	>>1218
1217 579   GOTO/253                  ?0        ?685                 ?864                	;0
1218 581   GOTO/253                  ?0        ?440                 ?865                	;0	<<1216
1219 583   INIT_FCALL_BY_NAME/59     ?0        ?0                   866:'intval'        	;1
1220 583   FETCH_DIM_FUNC_ARG/93     $596=     16?0                 868:'of_duration'   	;1
1221 583   SEND_VAR_EX/66            ?80       $596                 ?1                  	;0
1222 583   DO_FCALL_BY_NAME/131      $597=     ?0                   ?0                  	;0
1223 583   ASSIGN/38                 ?534      16?33                $597                	;0
1224 585   INIT_FCALL_BY_NAME/59     ?0        ?0                   869:'file_put_contents'	;2
1225 585   FETCH_CONSTANT/99         #599=     ?0                   871:'STREAMS_PATH'  	;16
1226 585   CONCAT/8                  #600=     #599                 16?1                	;0
1227 585   CONCAT/8                  #601=     #600                 874:'_.stream_info' 	;0
1228 585   SEND_VAL_EX/116           ?80       #601                 ?1                  	;0
1229 585   INIT_FCALL_BY_NAME/59     ?0        ?0                   875:'json_encode'   	;2
1230 585   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
1231 585   FETCH_CONSTANT/99         #602=     ?0                   877:'JSON_UNESCAPED_UNICODE'	;16
1232 585   SEND_VAL_EX/116           ?96       #602                 ?2                  	;0
1233 585   DO_FCALL_BY_NAME/131      $603=     ?0                   ?0                  	;0
1234 585   SEND_VAR_NO_REF_EX/50     ?96       $603                 ?2                  	;0
1235 585   DO_FCALL_BY_NAME/131      ?540      ?0                   ?0                  	;0
1236 586   INIT_FCALL_BY_NAME/59     ?0        ?0                   881:'json_encode'   	;2
1237 586   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
1238 586   FETCH_CONSTANT/99         #606=     ?0                   883:'JSON_UNESCAPED_UNICODE'	;16
1239 586   SEND_VAL_EX/116           ?96       #606                 ?2                  	;0
1240 586   DO_FCALL_BY_NAME/131      $607=     ?0                   ?0                  	;0
1241 586   ASSIGN_DIM/147            ?541      16?4                 880:'stream_info'   	;0
1242 586   OP_DATA/137               ?0        $607                 ?0                  	;0
1243 588   GOTO/253                  ?0        ?1340                ?886                	;0
1244 590   INIT_FCALL_BY_NAME/59     ?0        ?0                   887:'file_exists'   	;1
1245 590   FETCH_CONSTANT/99         #608=     ?0                   889:'STREAMS_PATH'  	;16
1246 590   CONCAT/8                  #609=     #608                 16?1                	;0
1247 590   CONCAT/8                  #610=     #609                 892:'_.monitor'     	;0
1248 590   SEND_VAL_EX/116           ?80       #610                 ?1                  	;0
1249 590   DO_FCALL_BY_NAME/131      $611=     ?0                   ?0                  	;0
1250 590   JMPZ/43                   ?0        $611                 ?1252               	;0	>>1252
1251 591   GOTO/253                  ?0        ?1261                ?893                	;0
1252 593   INIT_FCALL_BY_NAME/59     ?0        ?0                   894:'file_put_contents'	;2	<<1250
1253 593   FETCH_CONSTANT/99         #612=     ?0                   896:'STREAMS_PATH'  	;16
1254 593   CONCAT/8                  #613=     #612                 16?1                	;0
1255 593   CONCAT/8                  #614=     #613                 899:'_.monitor'     	;0
1256 593   SEND_VAL_EX/116           ?80       #614                 ?1                  	;0
1257 593   INIT_FCALL_BY_NAME/59     ?0        ?0                   900:'getmypid'      	;0
1258 593   DO_FCALL_BY_NAME/131      $615=     ?0                   ?0                  	;0
1259 593   SEND_VAR_NO_REF_EX/50     ?96       $615                 ?2                  	;0
1260 593   DO_FCALL_BY_NAME/131      ?552      ?0                   ?0                  	;0
1261 596   FETCH_DIM_R/81            $617=     16?4                 902:'fps_restart'   	;0
1262 596   IS_EQUAL/17               #618=     $617                 903:1               	;0
1263 596   JMPZ_EX/46                #618=     #618                 ?1271               	;0	>>1271
1264 596   INIT_FCALL_BY_NAME/59     ?0        ?0                   904:'time'          	;0
1265 596   DO_FCALL_BY_NAME/131      $619=     ?0                   ?0                  	;0
1266 596   SUB/2                     #620=     $619                 16?57               	;0
1267 596   FETCH_STATIC_PROP_R/173   $621=     906:'rSettings'      907:'XUI'           	;0
1268 596   FETCH_DIM_R/81            $622=     $621                 909:'fps_delay'     	;0
1269 596   IS_SMALLER/19             #623=     $622                 #620                	;0
1270 596   BOOL/52                   #618=     #623                 ?0                  	;0
1271 596   JMPZ_EX/46                #618=     #618                 ?1279               	;0	>>1279	<<1263
1272 596   INIT_FCALL_BY_NAME/59     ?0        ?0                   910:'file_exists'   	;1
1273 596   FETCH_CONSTANT/99         #624=     ?0                   912:'STREAMS_PATH'  	;16
1274 596   CONCAT/8                  #625=     #624                 16?1                	;0
1275 596   CONCAT/8                  #626=     #625                 915:'_.progress_check'	;0
1276 596   SEND_VAL_EX/116           ?80       #626                 ?1                  	;0
1277 596   DO_FCALL_BY_NAME/131      $627=     ?0                   ?0                  	;0
1278 596   BOOL/52                   #618=     $627                 ?0                  	;0
1279 596   BOOL_NOT/13               #628=     #618                 ?0                  	;0	<<1271
1280 596   JMPZ/43                   ?0        #628                 ?1282               	;0	>>1282
1281 597   GOTO/253                  ?0        ?1538                ?916                	;0
1282 599   GOTO/253                  ?0        ?1004                ?917                	;0	<<1280
1283 602   BOOL_NOT/13               #629=     16?16                ?0                  	;0
1284 602   JMPZ/43                   ?0        #629                 ?1286               	;0	>>1286
1285 603   GOTO/253                  ?0        ?1288                ?918                	;0
1286 605   ASSIGN/38                 ?566      16?58                16?16               	;0	<<1284
1287 606   GOTO/253                  ?0        ?1795                ?919                	;0
1288 608   GOTO/253                  ?0        ?1788                ?920                	;0
1289 610   INIT_FCALL_BY_NAME/59     ?0        ?0                   921:'file_exists'   	;1
1290 610   SEND_VAR_EX/66            ?80       16?55                ?1                  	;0
1291 610   DO_FCALL_BY_NAME/131      $631=     ?0                   ?0                  	;0
1292 610   JMPZ_EX/46                #632=     $631                 ?1295               	;0	>>1295
1293 610   BOOL_NOT/13               #633=     16?7                 ?0                  	;0
1294 610   BOOL/52                   #632=     #633                 ?0                  	;0
1295 610   JMPZ_EX/46                #632=     #632                 ?1298               	;0	>>1298	<<1292
1296 610   FETCH_DIM_R/81            $634=     16?4                 923:'on_demand'     	;0
1297 610   BOOL/52                   #632=     $634                 ?0                  	;0
1298 610   BOOL_NOT/13               #635=     #632                 ?0                  	;0	<<1295
1299 610   JMPZ/43                   ?0        #635                 ?1301               	;0	>>1301
1300 611   GOTO/253                  ?0        ?21                  ?924                	;0
1301 613   ECHO/40                   ?0        925:'Segment exists!
' ?0                  	;0	<<1299
1302 614   ASSIGN/38                 ?572      16?7                 926:true            	;0
1303 615   ASSIGN/38                 ?573      16?19                927:0               	;0
1304 616   INIT_METHOD_CALL/112      ?0        16?8                 928:'query'         	;3
1305 616   SEND_VAL_EX/116           ?80       930:'UPDATE `streams_servers` SET `stream_status` = 0, `stream_started` = ? WHERE `server_stream_id` = ?' ?1                  	;0
1306 616   INIT_FCALL_BY_NAME/59     ?0        ?0                   931:'time'          	;0
1307 616   DO_FCALL_BY_NAME/131      $638=     ?0                   ?0                  	;0
1308 616   SUB/2                     #639=     $638                 16?9                	;0
1309 616   SEND_VAL_EX/116           ?96       #639                 ?2                  	;0
1310 616   FETCH_DIM_FUNC_ARG/93     $640=     16?4                 933:'server_stream_id'	;3
1311 616   SEND_VAR_EX/66            ?112      $640                 ?3                  	;0
1312 616   DO_FCALL/60               ?577      ?0                   ?0                  	;0
1313 617   GOTO/253                  ?0        ?21                  ?934                	;0
1314 619   FETCH_DIM_R/81            $642=     16?10                935:'offset'        	;0
1315 619   ASSIGN/38                 ?579      16?9                 $642                	;0
1316 620   ASSIGN/38                 ?580      16?28                936:true            	;0
1317 621   ECHO/40                   ?0        937:'Stream started
' ?0                  	;0
1318 622   CONCAT/8                  #645=     16?2                 938:'
'             	;0
1319 622   ECHO/40                   ?0        #645                 ?0                  	;0
1320 623   BOOL_NOT/13               #646=     16?45                ?0                  	;0
1321 623   JMPZ/43                   ?0        #646                 ?1323               	;0	>>1323
1322 624   GOTO/253                  ?0        ?1875                ?939                	;0
1323 626   GOTO/253                  ?0        ?1873                ?940                	;0	<<1321
1324 628   ASSIGN/38                 ?583      16?7                 941:false           	;0
1325 629   ASSIGN/38                 ?584      16?19                942:0               	;0
1326 630   MUL/3                     #649=     16?33                943:3               	;0
1327 630   IS_SMALLER_OR_EQUAL/20    #650=     #649                 944:30              	;0
1328 630   JMPZ/43                   ?0        #650                 ?1332               	;0	>>1332
1329 630   MUL/3                     #651=     16?33                945:3               	;0
1330 630   QM_ASSIGN/22              #652=     #651                 ?0                  	;0
1331 630   JMP/42                    ?0        ?1333                ?0                  	;0	>>1333
1332 630   QM_ASSIGN/22              #652=     946:30               ?0                  	;0	<<1328
1333 630   ASSIGN/38                 ?589      16?20                #652                	;0	<<1331
1334 631   IS_SMALLER/19             #654=     16?20                947:20              	;0
1335 631   BOOL_NOT/13               #655=     #654                 ?0                  	;0
1336 631   JMPZ/43                   ?0        #655                 ?1338               	;0	>>1338
1337 632   GOTO/253                  ?0        ?168                 ?948                	;0
1338 634   ASSIGN/38                 ?592      16?20                949:20              	;0	<<1336
1339 635   GOTO/253                  ?0        ?168                 ?950                	;0
1340 637   ASSIGN/38                 ?593      16?28                951:false           	;0
1341 638   INIT_FCALL_BY_NAME/59     ?0        ?0                   952:'time'          	;0
1342 638   DO_FCALL_BY_NAME/131      $658=     ?0                   ?0                  	;0
1343 638   ASSIGN/38                 ?595      16?23                $658                	;0
1344 639   INIT_FCALL_BY_NAME/59     ?0        ?0                   954:'file_exists'   	;1
1345 639   FETCH_CONSTANT/99         #660=     ?0                   956:'STREAMS_PATH'  	;16
1346 639   CONCAT/8                  #661=     #660                 16?1                	;0
1347 639   CONCAT/8                  #662=     #661                 959:'_.pid'         	;0
1348 639   SEND_VAL_EX/116           ?80       #662                 ?1                  	;0
1349 639   DO_FCALL_BY_NAME/131      $663=     ?0                   ?0                  	;0
1350 639   JMPZ/43                   ?0        $663                 ?1352               	;0	>>1352
1351 640   GOTO/253                  ?0        ?1359                ?960                	;0
1352 642   INIT_FCALL_BY_NAME/59     ?0        ?0                   961:'file_put_contents'	;2	<<1350
1353 642   FETCH_CONSTANT/99         #664=     ?0                   963:'STREAMS_PATH'  	;16
1354 642   CONCAT/8                  #665=     #664                 16?1                	;0
1355 642   CONCAT/8                  #666=     #665                 966:'_.pid'         	;0
1356 642   SEND_VAL_EX/116           ?80       #666                 ?1                  	;0
1357 642   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
1358 642   DO_FCALL_BY_NAME/131      ?603      ?0                   ?0                  	;0
1359 644   GOTO/253                  ?0        ?1244                ?967                	;0
1360 646   INIT_FCALL_BY_NAME/59     ?0        ?0                   968:'json_decode'   	;2
1361 646   FETCH_DIM_FUNC_ARG/93     $668=     16?4                 970:'cc_info'       	;1
1362 646   SEND_VAR_EX/66            ?80       $668                 ?1                  	;0
1363 646   SEND_VAL_EX/116           ?96       971:true             ?2                  	;0
1364 646   DO_FCALL_BY_NAME/131      $669=     ?0                   ?0                  	;0
1365 646   ASSIGN/38                 ?606      16?59                $669                	;0
1366 647   JMPZ_EX/46                #671=     16?59                ?1383               	;0	>>1383
1367 647   INIT_FCALL_BY_NAME/59     ?0        ?0                   972:'time'          	;0
1368 647   DO_FCALL_BY_NAME/131      $672=     ?0                   ?0                  	;0
1369 647   FETCH_DIM_R/81            $673=     16?4                 974:'stream_started'	;0
1370 647   SUB/2                     #674=     $672                 $673                	;0
1371 647   INIT_FCALL_BY_NAME/59     ?0        ?0                   975:'intval'        	;1
1372 647   INIT_FCALL_BY_NAME/59     ?0        ?0                   977:'count'         	;1
1373 647   SEND_VAR_EX/66            ?80       16?59                ?1                  	;0
1374 647   DO_FCALL_BY_NAME/131      $675=     ?0                   ?0                  	;0
1375 647   SUB/2                     #676=     $675                 979:1               	;0
1376 647   FETCH_DIM_FUNC_ARG/93     $677=     16?59                #676                	;1
1377 647   FETCH_DIM_FUNC_ARG/93     $678=     $677                 980:'finish'        	;1
1378 647   SEND_VAR_EX/66            ?80       $678                 ?1                  	;0
1379 647   DO_FCALL_BY_NAME/131      $679=     ?0                   ?0                  	;0
1380 647   MUL/3                     #680=     $679                 981:0.95            	;0
1381 647   IS_SMALLER/19             #681=     #674                 #680                	;0
1382 647   BOOL/52                   #671=     #681                 ?0                  	;0
1383 647   BOOL_NOT/13               #682=     #671                 ?0                  	;0	<<1366
1384 647   JMPZ/43                   ?0        #682                 ?1386               	;0	>>1386
1385 648   GOTO/253                  ?0        ?1391                ?982                	;0
1386 650   INIT_FCALL_BY_NAME/59     ?0        ?0                   983:'time'          	;0	<<1384
1387 650   DO_FCALL_BY_NAME/131      $683=     ?0                   ?0                  	;0
1388 650   FETCH_DIM_R/81            $684=     16?4                 985:'stream_started'	;0
1389 650   SUB/2                     #685=     $683                 $684                	;0
1390 650   ASSIGN/38                 ?622      16?9                 #685                	;0
1391 653   GOTO/253                  ?0        ?876                 ?986                	;0
1392 655   FETCH_DIM_R/81            $687=     16?10                987:'playlist'      	;0
1393 655   ASSIGN/38                 ?624      16?6                 $687                	;0
1394 656   FETCH_DIM_R/81            $689=     16?10                988:'delay_enabled' 	;0
1395 656   ASSIGN/38                 ?626      16?39                $689                	;0
1396 657   FETCH_DIM_R/81            $692=     16?10                990:'delay_start_at'	;0
1397 657   ASSIGN_DIM/147            ?627      16?4                 989:'delay_available_at'	;0
1398 657   OP_DATA/137               ?0        $692                 ?0                  	;0
1399 658   FETCH_DIM_R/81            $693=     16?10                991:'parent_id'     	;0
1400 658   ASSIGN/38                 ?630      16?11                $693                	;0
1401 659   IS_SMALLER/19             #695=     992:0                16?11               	;0
1402 659   JMPZ/43                   ?0        #695                 ?1404               	;0	>>1404
1403 660   GOTO/253                  ?0        ?89                  ?993                	;0
1404 662   GOTO/253                  ?0        ?82                  ?994                	;0	<<1402
1405 664   FETCH_DIM_R/81            $696=     16?4                 995:'delay_pid'     	;0
1406 664   ASSIGN/38                 ?633      16?14                $696                	;0
1407 665   FETCH_DIM_R/81            $698=     16?4                 996:'parent_id'     	;0
1408 665   ASSIGN/38                 ?635      16?11                $698                	;0
1409 666   ASSIGN/38                 ?636      16?28                997:false           	;0
1410 667   ASSIGN/38                 ?637      16?41                998:array (
)       	;0
1411 668   FETCH_STATIC_PROP_R/173   $702=     999:'rSegmentSettings' 1000:'XUI'          	;0
1412 668   FETCH_DIM_R/81            $703=     $702                 1002:'seg_time'     	;0
1413 668   ASSIGN/38                 ?640      16?33                $703                	;0
1414 669   GOTO/253                  ?0        ?958                 ?1003               	;0
1415 671   INIT_FCALL_BY_NAME/59     ?0        ?0                   1004:'time'         	;0
1416 671   DO_FCALL_BY_NAME/131      $705=     ?0                   ?0                  	;0
1417 671   ASSIGN/38                 ?642      16?32                $705                	;0
1418 673   FETCH_STATIC_PROP_R/173   $707=     1006:'rSettings'     1007:'XUI'          	;0
1419 673   FETCH_DIM_R/81            $708=     $707                 1009:'encrypt_hls'  	;0
1420 673   BOOL_NOT/13               #709=     $708                 ?0                  	;0
1421 673   JMPZ/43                   ?0        #709                 ?1423               	;0	>>1423
1422 674   GOTO/253                  ?0        ?902                 ?1010               	;0
1423 676   INIT_FCALL_BY_NAME/59     ?0        ?0                   1011:'glob'         	;1	<<1421
1424 676   FETCH_CONSTANT/99         #710=     ?0                   1013:'STREAMS_PATH' 	;16
1425 676   CONCAT/8                  #711=     #710                 16?1                	;0
1426 676   CONCAT/8                  #712=     #711                 1016:'_*.ts.enc'    	;0
1427 676   SEND_VAL_EX/116           ?80       #712                 ?1                  	;0
1428 676   DO_FCALL_BY_NAME/131      $713=     ?0                   ?0                  	;0
1429 676   FE_RESET_R/77             $714=     $713                 ?1445               	;0
1430 676   FE_FETCH_R/78             ?0        $714                 16?60               	;1445	>>1445	<<1444
1431 677   INIT_FCALL_BY_NAME/59     ?0        ?0                   1017:'file_exists'  	;1
1432 677   INIT_FCALL_BY_NAME/59     ?0        ?0                   1019:'rtrim'        	;2
1433 677   SEND_VAR_EX/66            ?80       16?60                ?1                  	;0
1434 677   SEND_VAL_EX/116           ?96       1021:'.enc'          ?2                  	;0
1435 677   DO_FCALL_BY_NAME/131      $715=     ?0                   ?0                  	;0
1436 677   SEND_VAR_NO_REF_EX/50     ?80       $715                 ?1                  	;0
1437 677   DO_FCALL_BY_NAME/131      $716=     ?0                   ?0                  	;0
1438 677   JMPZ/43                   ?0        $716                 ?1441               	;0	>>1441
1439 678   NOP/0                     ?0        ?0                   ?0                  	;1
1440 678   GOTO/253                  ?0        ?1444                ?1022               	;0
1441 680   INIT_FCALL_BY_NAME/59     ?0        ?0                   1023:'unlink'       	;1	<<1438
1442 680   SEND_VAR_EX/66            ?80       16?60                ?1                  	;0
1443 680   DO_FCALL_BY_NAME/131      ?653      ?0                   ?0                  	;0
1444 682   JMP/42                    ?0        ?1430                ?0                  	;0	>>1430
1445 682   FE_FREE/127               ?0        $714                 ?0                  	;0	<<1429
1446 685   GOTO/253                  ?0        ?902                 ?1025               	;0
1447 687   JMPZ/43                   ?0        1026:false           ?1449               	;0	>>1449
1448 688   GOTO/253                  ?0        ?384                 ?1027               	;0
1449 690   IS_SMALLER/19             #718=     1028:0               16?3                	;0	<<1447
1450 690   BOOL_NOT/13               #719=     #718                 ?0                  	;0
1451 690   JMPZ/43                   ?0        #719                 ?1453               	;0	>>1453
1452 691   GOTO/253                  ?0        ?1161                ?1029               	;0
1453 693   INIT_METHOD_CALL/112      ?0        16?8                 1030:'close_mysql'  	;0	<<1451
1454 693   DO_FCALL/60               ?656      ?0                   ?0                  	;0
1455 694   INIT_FCALL_BY_NAME/59     ?0        ?0                   1032:'time'         	;0
1456 694   DO_FCALL_BY_NAME/131      $721=     ?0                   ?0                  	;0
1457 694   ASSIGN/38                 $722=     16?50                $721                	;0
1458 694   ASSIGN/38                 $723=     16?32                $722                	;0
1459 694   ASSIGN/38                 $724=     16?31                $723                	;0
1460 694   ASSIGN/38                 $725=     16?23                $724                	;0
1461 694   ASSIGN/38                 ?662      16?57                $725                	;0
1462 695   INIT_FCALL_BY_NAME/59     ?0        ?0                   1034:'md5_file'     	;1
1463 695   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
1464 695   DO_FCALL_BY_NAME/131      $727=     ?0                   ?0                  	;0
1465 695   ASSIGN/38                 ?664      16?54                $727                	;0
1466 696   GOTO/253                  ?0        ?1186                ?1036               	;0
1467 698   BOOL_NOT/13               #729=     16?61                ?0                  	;0
1468 698   JMPZ/43                   ?0        #729                 ?1470               	;0	>>1470
1469 699   GOTO/253                  ?0        ?105                 ?1037               	;0
1470 701   FETCH_CONSTANT/99         #730=     ?0                   1038:'MONITOR_CALLS'	;16	<<1468
1471 701   ASSIGN/38                 ?667      16?35                #730                	;0
1472 702   INIT_FCALL_BY_NAME/59     ?0        ?0                   1041:'is_numeric'   	;1
1473 702   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1474 702   DO_FCALL_BY_NAME/131      $732=     ?0                   ?0                  	;0
1475 702   JMPZ_EX/46                #733=     $732                 ?1478               	;0	>>1478
1476 702   IS_SMALLER/19             #734=     1043:0               16?3                	;0
1477 702   BOOL/52                   #733=     #734                 ?0                  	;0
1478 702   BOOL_NOT/13               #735=     #733                 ?0                  	;0	<<1475
1479 702   JMPZ/43                   ?0        #735                 ?1481               	;0	>>1481
1480 703   GOTO/253                  ?0        ?1488                ?1044               	;0
1481 705   INIT_FCALL_BY_NAME/59     ?0        ?0                   1045:'shell_exec'   	;1	<<1479
1482 705   INIT_FCALL_BY_NAME/59     ?0        ?0                   1047:'intval'       	;1
1483 705   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1484 705   DO_FCALL_BY_NAME/131      $736=     ?0                   ?0                  	;0
1485 705   CONCAT/8                  #737=     1049:'kill -9 '      $736                	;0
1486 705   SEND_VAL_EX/116           ?80       #737                 ?1                  	;0
1487 705   DO_FCALL_BY_NAME/131      ?674      ?0                   ?0                  	;0
1488 707   GOTO/253                  ?0        ?801                 ?1050               	;0
1489 709   ASSIGN/38                 ?675      16?18                1051:true           	;0
1490 710   POST_INC/36               #740=     16?53                ?0                  	;0
1491 710   FREE/70                   ?0        #740                 ?0                  	;0
1492 711   FETCH_STATIC_PROP_R/173   $741=     1052:'rSettings'     1053:'XUI'          	;0
1493 711   FETCH_DIM_R/81            $742=     $741                 1055:'stop_failures'	;0
1494 711   IS_SMALLER/19             #743=     1056:0               $742                	;0
1495 711   JMPZ_EX/46                #743=     #743                 ?1500               	;0	>>1500
1496 711   FETCH_STATIC_PROP_R/173   $744=     1057:'rSettings'     1058:'XUI'          	;0
1497 711   FETCH_DIM_R/81            $745=     $744                 1060:'stop_failures'	;0
1498 711   IS_EQUAL/17               #746=     16?53                $745                	;0
1499 711   BOOL/52                   #743=     #746                 ?0                  	;0
1500 711   BOOL_NOT/13               #747=     #743                 ?0                  	;0	<<1495
1501 711   JMPZ/43                   ?0        #747                 ?1503               	;0	>>1503
1502 712   GOTO/253                  ?0        ?239                 ?1061               	;0
1503 714   ECHO/40                   ?0        1062:'Failure limit reached, exiting.
' ?0                  	;0	<<1501
1504 715   EXIT/79                   ?0        ?0                   ?0                  	;0
1505 716   GOTO/253                  ?0        ?239                 ?1063               	;0
1506 718   ISSET_ISEMPTY_CV/197      #748=     16?21                ?0                  	;16777216
1507 718   BOOL_NOT/13               #749=     #748                 ?0                  	;0
1508 718   JMPZ/43                   ?0        #749                 ?1510               	;0	>>1510
1509 719   GOTO/253                  ?0        ?1512                ?1064               	;0
1510 721   GOTO/253                  ?0        ?957                 ?1065               	;0	<<1508
1511 722   GOTO/253                  ?0        ?333                 ?1066               	;0
1512 724   INIT_STATIC_METHOD_CALL/113 ?0        1067:'XUI'           1069:'E57006536cd5655D'	;1
1513 724   CONCAT/8                  #750=     16?22                16?21               	;0
1514 724   SEND_VAL_EX/116           ?80       #750                 ?1                  	;0
1515 724   DO_FCALL/60               $751=     ?0                   ?0                  	;0
1516 724   ASSIGN/38                 ?688      16?0                 $751                	;0
1517 725   GOTO/253                  ?0        ?1                   ?1071               	;0
1518 727   BOOL_NOT/13               #753=     16?46                ?0                  	;0
1519 727   JMPZ/43                   ?0        #753                 ?1521               	;0	>>1521
1520 728   GOTO/253                  ?0        ?1529                ?1072               	;0
1521 730   INIT_STATIC_METHOD_CALL/113 ?0        1073:'XUI'           1075:'d242DF32bD80320F'	;4	<<1519
1522 730   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1523 730   FETCH_CONSTANT/99         #754=     ?0                   1077:'SERVER_ID'    	;16
1524 730   SEND_VAL_EX/116           ?96       #754                 ?2                  	;0
1525 730   SEND_VAL_EX/116           ?112      1080:'STREAM_FAILED' ?3                  	;0
1526 730   SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
1527 730   DO_FCALL/60               ?691      ?0                   ?0                  	;0
1528 731   ECHO/40                   ?0        1081:'Stream failed!
' ?0                  	;0
1529 733   INIT_METHOD_CALL/112      ?0        16?8                 1082:'db_connect'   	;0
1530 733   DO_FCALL/60               ?692      ?0                   ?0                  	;0
1531 734   GOTO/253                  ?0        ?1161                ?1084               	;0
1532 736   INIT_FCALL_BY_NAME/59     ?0        ?0                   1085:'unlink'       	;1
1533 736   FETCH_CONSTANT/99         #757=     ?0                   1087:'STREAMS_PATH' 	;16
1534 736   CONCAT/8                  #758=     #757                 16?1                	;0
1535 736   CONCAT/8                  #759=     #758                 1090:'_.progress_check'	;0
1536 736   SEND_VAL_EX/116           ?80       #759                 ?1                  	;0
1537 736   DO_FCALL_BY_NAME/131      ?696      ?0                   ?0                  	;0
1538 738   FETCH_STATIC_PROP_R/173   $761=     1091:'rSettings'     1092:'XUI'          	;0
1539 738   FETCH_DIM_R/81            $762=     $761                 1094:'audio_restart_loss'	;0
1540 738   IS_EQUAL/17               #763=     $762                 1095:1              	;0
1541 738   JMPZ_EX/46                #763=     #763                 ?1547               	;0	>>1547
1542 738   INIT_FCALL_BY_NAME/59     ?0        ?0                   1096:'time'         	;0
1543 738   DO_FCALL_BY_NAME/131      $764=     ?0                   ?0                  	;0
1544 738   SUB/2                     #765=     $764                 16?31               	;0
1545 738   IS_SMALLER/19             #766=     1098:300             #765                	;0
1546 738   BOOL/52                   #763=     #766                 ?0                  	;0
1547 738   BOOL_NOT/13               #767=     #763                 ?0                  	;0	<<1541
1548 738   JMPZ/43                   ?0        #767                 ?1550               	;0	>>1550
1549 739   GOTO/253                  ?0        ?333                 ?1099               	;0
1550 741   ECHO/40                   ?0        1100:'Checking audio...
' ?0                  	;0	<<1548
1551 742   INIT_STATIC_METHOD_CALL/113 ?0        1101:'XUI'           1103:'b0fbCFf8a7d2659d'	;2
1552 742   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
1553 742   SEND_VAL_EX/116           ?96       1105:10              ?2                  	;0
1554 742   DO_FCALL/60               $768=     ?0                   ?0                  	;0
1555 742   FETCH_DIM_R/81            $769=     $768                 1106:0              	;0
1556 742   ASSIGN/38                 ?706      16?21                $769                	;0
1557 743   GOTO/253                  ?0        ?1506                ?1107               	;0
1558 745   JMPZ/43                   ?0        16?18                ?1560               	;0	>>1560
1559 746   GOTO/253                  ?0        ?1048                ?1108               	;0
1560 748   INIT_FCALL_BY_NAME/59     ?0        ?0                   1109:'intval'       	;1	<<1558
1561 748   FETCH_DIM_FUNC_ARG/93     $771=     16?10                1111:'main_pid'     	;1
1562 748   SEND_VAR_EX/66            ?80       $771                 ?1                  	;0
1563 748   DO_FCALL_BY_NAME/131      $772=     ?0                   ?0                  	;0
1564 748   ASSIGN/38                 ?709      16?3                 $772                	;0
1565 749   BOOL_NOT/13               #774=     16?3                 ?0                  	;0
1566 749   JMPZ/43                   ?0        #774                 ?1568               	;0	>>1568
1567 750   GOTO/253                  ?0        ?1575                ?1112               	;0
1568 752   INIT_FCALL_BY_NAME/59     ?0        ?0                   1113:'file_put_contents'	;2	<<1566
1569 752   FETCH_CONSTANT/99         #775=     ?0                   1115:'STREAMS_PATH' 	;16
1570 752   CONCAT/8                  #776=     #775                 16?1                	;0
1571 752   CONCAT/8                  #777=     #776                 1118:'_.pid'        	;0
1572 752   SEND_VAL_EX/116           ?80       #777                 ?1                  	;0
1573 752   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
1574 752   DO_FCALL_BY_NAME/131      ?714      ?0                   ?0                  	;0
1575 754   GOTO/253                  ?0        ?1392                ?1119               	;0
1576 756   INIT_FCALL_BY_NAME/59     ?0        ?0                   1120:'set_time_limit'	;1
1577 756   SEND_VAL_EX/116           ?80       1122:0               ?1                  	;0
1578 756   DO_FCALL_BY_NAME/131      ?715      ?0                   ?0                  	;0
1579 757   INIT_FCALL_BY_NAME/59     ?0        ?0                   1123:'cli_set_process_title'	;1
1580 757   ROPE_INIT/54              #781=     ?0                   1125:'XUI['         	;3
1581 757   ROPE_ADD/55               #781=     #781                 16?1                	;1
1582 757   ROPE_END/56               #780=     #781                 1126:']'            	;2
1583 757   SEND_VAL_EX/116           ?80       #780                 ?1                  	;0
1584 757   DO_FCALL_BY_NAME/131      ?719      ?0                   ?0                  	;0
1585 758   INIT_METHOD_CALL/112      ?0        16?8                 1127:'query'        	;3
1586 758   SEND_VAL_EX/116           ?80       1129:'SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t2.stream_id = t1.id AND t2.server_id = ? WHERE t1.id = ?' ?1                  	;0
1587 758   FETCH_CONSTANT/99         #784=     ?0                   1130:'SERVER_ID'    	;16
1588 758   SEND_VAL_EX/116           ?96       #784                 ?2                  	;0
1589 758   SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
1590 758   DO_FCALL/60               ?721      ?0                   ?0                  	;0
1591 759   INIT_METHOD_CALL/112      ?0        16?8                 1133:'num_rows'     	;0
1592 759   DO_FCALL/60               $786=     ?0                   ?0                  	;0
1593 759   IS_SMALLER_OR_EQUAL/20    #787=     $786                 1135:0              	;0
1594 759   BOOL_NOT/13               #788=     #787                 ?0                  	;0
1595 759   JMPZ/43                   ?0        #788                 ?1597               	;0	>>1597
1596 760   GOTO/253                  ?0        ?358                 ?1136               	;0
1597 762   INIT_STATIC_METHOD_CALL/113 ?0        1137:'XUI'           1139:'eE173B194544b3A2'	;1	<<1595
1598 762   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1599 762   DO_FCALL/60               ?725      ?0                   ?0                  	;0
1600 763   GOTO/253                  ?0        ?357                 ?1141               	;0
1601 765   INIT_FCALL_BY_NAME/59     ?0        ?0                   1142:'file_exists'  	;1
1602 765   FETCH_CONSTANT/99         #790=     ?0                   1144:'SIGNALS_TMP_PATH'	;16
1603 765   CONCAT/8                  #791=     #790                 16?1                	;0
1604 765   CONCAT/8                  #792=     #791                 1147:'.force'       	;0
1605 765   SEND_VAL_EX/116           ?80       #792                 ?1                  	;0
1606 765   DO_FCALL_BY_NAME/131      $793=     ?0                   ?0                  	;0
1607 765   JMPZ_EX/46                #794=     $793                 ?1610               	;0	>>1610
1608 765   IS_EQUAL/17               #795=     16?11                1148:0              	;0
1609 765   BOOL/52                   #794=     #795                 ?0                  	;0
1610 765   BOOL_NOT/13               #796=     #794                 ?0                  	;0	<<1607
1611 765   JMPZ/43                   ?0        #796                 ?1613               	;0	>>1613
1612 766   GOTO/253                  ?0        ?562                 ?1149               	;0
1613 768   INIT_FCALL_BY_NAME/59     ?0        ?0                   1150:'intval'       	;1	<<1611
1614 768   INIT_FCALL_BY_NAME/59     ?0        ?0                   1152:'file_get_contents'	;1
1615 768   FETCH_CONSTANT/99         #797=     ?0                   1154:'SIGNALS_TMP_PATH'	;16
1616 768   CONCAT/8                  #798=     #797                 16?1                	;0
1617 768   CONCAT/8                  #799=     #798                 1157:'.force'       	;0
1618 768   SEND_VAL_EX/116           ?80       #799                 ?1                  	;0
1619 768   DO_FCALL_BY_NAME/131      $800=     ?0                   ?0                  	;0
1620 768   SEND_VAR_NO_REF_EX/50     ?80       $800                 ?1                  	;0
1621 768   DO_FCALL_BY_NAME/131      $801=     ?0                   ?0                  	;0
1622 768   ASSIGN/38                 ?738      16?62                $801                	;0
1623 769   INIT_STATIC_METHOD_CALL/113 ?0        1158:'XUI'           1160:'c1F42CA38AD7a48D'	;1
1624 769   FETCH_DIM_FUNC_ARG/93     $803=     16?41                16?62               	;1
1625 769   SEND_VAR_EX/66            ?80       $803                 ?1                  	;0
1626 769   DO_FCALL/60               $804=     ?0                   ?0                  	;0
1627 769   ASSIGN/38                 ?741      16?43                $804                	;0
1628 770   FETCH_DIM_R/81            $806=     16?41                16?62               	;0
1629 770   IS_NOT_EQUAL/18           #807=     $806                 16?2                	;0
1630 770   BOOL_NOT/13               #808=     #807                 ?0                  	;0
1631 770   JMPZ/43                   ?0        #808                 ?1633               	;0	>>1633
1632 771   GOTO/253                  ?0        ?1160                ?1162               	;0
1633 773   INIT_FCALL_BY_NAME/59     ?0        ?0                   1163:'strtolower'   	;1	<<1631
1634 773   INIT_FCALL_BY_NAME/59     ?0        ?0                   1165:'substr'       	;3
1635 773   SEND_VAR_EX/66            ?80       16?43                ?1                  	;0
1636 773   SEND_VAL_EX/116           ?96       1167:0               ?2                  	;0
1637 773   INIT_FCALL_BY_NAME/59     ?0        ?0                   1168:'strpos'       	;2
1638 773   SEND_VAR_EX/66            ?80       16?43                ?1                  	;0
1639 773   SEND_VAL_EX/116           ?96       1170:'://'           ?2                  	;0
1640 773   DO_FCALL_BY_NAME/131      $809=     ?0                   ?0                  	;0
1641 773   SEND_VAR_NO_REF_EX/50     ?112      $809                 ?3                  	;0
1642 773   DO_FCALL_BY_NAME/131      $810=     ?0                   ?0                  	;0
1643 773   SEND_VAR_NO_REF_EX/50     ?80       $810                 ?1                  	;0
1644 773   DO_FCALL_BY_NAME/131      $811=     ?0                   ?0                  	;0
1645 773   ASSIGN/38                 ?748      16?44                $811                	;0
1646 774   GOTO/253                  ?0        ?1750                ?1171               	;0
1647 777   FETCH_STATIC_PROP_R/173   $813=     1172:'rSettings'     1173:'XUI'          	;0
1648 777   FETCH_DIM_R/81            $814=     $813                 1175:'enable_cache' 	;0
1649 777   BOOL_NOT/13               #815=     $814                 ?0                  	;0
1650 777   JMPZ/43                   ?0        #815                 ?1652               	;0	>>1652
1651 778   GOTO/253                  ?0        ?1655                ?1176               	;0
1652 780   INIT_STATIC_METHOD_CALL/113 ?0        1177:'XUI'           1179:'cAc325153A658c37'	;1	<<1650
1653 780   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1654 780   DO_FCALL/60               ?752      ?0                   ?0                  	;0
1655 782   ECHO/40                   ?0        1181:'End start process
' ?0                  	;0
1656 783   GOTO/253                  ?0        ?375                 ?1182               	;0
1657 785   GOTO/253                  ?0        ?1666                ?1183               	;0
1658 787   ASSIGN/38                 ?753      16?56                1184:false          	;0
1659 788   INIT_STATIC_METHOD_CALL/113 ?0        1185:'XUI'           1187:'D242DF32bD80320F'	;4
1660 788   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1661 788   FETCH_CONSTANT/99         #818=     ?0                   1189:'SERVER_ID'    	;16
1662 788   SEND_VAL_EX/116           ?96       #818                 ?2                  	;0
1663 788   SEND_VAL_EX/116           ?112      1192:'STREAM_START'  ?3                  	;0
1664 788   SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
1665 788   DO_FCALL/60               ?755      ?0                   ?0                  	;0
1666 790   GOTO/253                  ?0        ?211                 ?1193               	;0
1667 792   INIT_FCALL_BY_NAME/59     ?0        ?0                   1194:'intval'       	;1
1668 792   FETCH_DIM_FUNC_ARG/93     $820=     16?0                 1196:'of_duration'  	;1
1669 792   SEND_VAR_EX/66            ?80       $820                 ?1                  	;0
1670 792   DO_FCALL_BY_NAME/131      $821=     ?0                   ?0                  	;0
1671 792   IS_SMALLER/19             #822=     1197:10              $821                	;0
1672 792   BOOL_NOT/13               #823=     #822                 ?0                  	;0
1673 792   JMPZ/43                   ?0        #823                 ?1675               	;0	>>1675
1674 793   GOTO/253                  ?0        ?1677                ?1198               	;0
1675 795   ASSIGN_DIM/147            ?760      16?0                 1199:'of_duration'  	;0	<<1673
1676 795   OP_DATA/137               ?0        1200:10              ?0                  	;0
1677 797   INIT_FCALL_BY_NAME/59     ?0        ?0                   1201:'file_put_contents'	;2
1678 797   FETCH_CONSTANT/99         #825=     ?0                   1203:'STREAMS_PATH' 	;16
1679 797   CONCAT/8                  #826=     #825                 16?1                	;0
1680 797   CONCAT/8                  #827=     #826                 1206:'_.dur'        	;0
1681 797   SEND_VAL_EX/116           ?80       #827                 ?1                  	;0
1682 797   INIT_FCALL_BY_NAME/59     ?0        ?0                   1207:'intval'       	;1
1683 797   FETCH_DIM_FUNC_ARG/93     $828=     16?0                 1209:'of_duration'  	;1
1684 797   SEND_VAR_EX/66            ?80       $828                 ?1                  	;0
1685 797   DO_FCALL_BY_NAME/131      $829=     ?0                   ?0                  	;0
1686 797   SEND_VAR_NO_REF_EX/50     ?96       $829                 ?2                  	;0
1687 797   DO_FCALL_BY_NAME/131      ?766      ?0                   ?0                  	;0
1688 798   INIT_FCALL_BY_NAME/59     ?0        ?0                   1210:'intval'       	;1
1689 798   FETCH_DIM_FUNC_ARG/93     $831=     16?0                 1212:'of_duration'  	;1
1690 798   SEND_VAR_EX/66            ?80       $831                 ?1                  	;0
1691 798   DO_FCALL_BY_NAME/131      $832=     ?0                   ?0                  	;0
1692 798   IS_SMALLER/19             #833=     16?33                $832                	;0
1693 798   BOOL_NOT/13               #834=     #833                 ?0                  	;0
1694 798   JMPZ/43                   ?0        #834                 ?1696               	;0	>>1696
1695 799   GOTO/253                  ?0        ?1224                ?1213               	;0
1696 801   GOTO/253                  ?0        ?1219                ?1214               	;0	<<1694
1697 803   INIT_FCALL_BY_NAME/59     ?0        ?0                   1215:'file_put_contents'	;2
1698 803   FETCH_CONSTANT/99         #835=     ?0                   1217:'STREAMS_PATH' 	;16
1699 803   CONCAT/8                  #836=     #835                 16?1                	;0
1700 803   CONCAT/8                  #837=     #836                 1220:'_.monitor'    	;0
1701 803   SEND_VAL_EX/116           ?80       #837                 ?1                  	;0
1702 803   INIT_FCALL_BY_NAME/59     ?0        ?0                   1221:'getmypid'     	;0
1703 803   DO_FCALL_BY_NAME/131      $838=     ?0                   ?0                  	;0
1704 803   SEND_VAR_NO_REF_EX/50     ?96       $838                 ?2                  	;0
1705 803   DO_FCALL_BY_NAME/131      ?775      ?0                   ?0                  	;0
1706 804   ASSIGN/38                 ?776      16?9                 1223:0              	;0
1707 805   POST_INC/36               #841=     16?35                ?0                  	;0
1708 805   FREE/70                   ?0        #841                 ?0                  	;0
1709 806   FETCH_DIM_R/81            $842=     16?4                 1224:'parent_id'    	;0
1710 806   IS_SMALLER/19             #843=     1225:0               $842                	;0
1711 806   JMPZ_EX/46                #843=     #843                 ?1715               	;0	>>1715
1712 806   FETCH_STATIC_PROP_R/173   $844=     1226:'rSettings'     1227:'XUI'          	;0
1713 806   FETCH_DIM_R/81            $845=     $844                 1229:'php_loopback' 	;0
1714 806   BOOL/52                   #843=     $845                 ?0                  	;0
1715 806   JMPZ/43                   ?0        #843                 ?1717               	;0	>>1717	<<1711
1716 807   GOTO/253                  ?0        ?1068                ?1230               	;0
1717 809   FETCH_DIM_R/81            $846=     16?4                 1231:'llod'         	;0	<<1715
1718 809   IS_SMALLER/19             #847=     1232:0               $846                	;0
1719 809   JMPZ_EX/46                #847=     #847                 ?1722               	;0	>>1722
1720 809   FETCH_DIM_R/81            $848=     16?4                 1233:'on_demand'    	;0
1721 809   BOOL/52                   #847=     $848                 ?0                  	;0
1722 809   JMPZ_EX/46                #847=     #847                 ?1724               	;0	>>1724	<<1719
1723 809   BOOL/52                   #847=     16?56                ?0                  	;0
1724 809   JMPZ/43                   ?0        #847                 ?1726               	;0	>>1726	<<1722
1725 810   GOTO/253                  ?0        ?885                 ?1234               	;0
1726 812   GOTO/253                  ?0        ?745                 ?1235               	;0	<<1724
1727 815   INIT_FCALL_BY_NAME/59     ?0        ?0                   1236:'intval'       	;1
1728 815   FETCH_DIM_FUNC_ARG/93     $849=     16?63                1238:1              	;1
1729 815   SEND_VAR_EX/66            ?80       $849                 ?1                  	;0
1730 815   DO_FCALL_BY_NAME/131      $850=     ?0                   ?0                  	;0
1731 815   ASSIGN/38                 ?787      16?1                 $850                	;0
1732 816   ISSET_ISEMPTY_DIM_OBJ/115 #852=     16?63                1239:2              	;16777216
1733 816   BOOL_NOT/13               #853=     #852                 ?0                  	;0
1734 816   ASSIGN/38                 ?790      16?61                #853                	;0
1735 817   INIT_FCALL_BY_NAME/59     ?0        ?0                   1240:'str_replace'  	;3
1736 817   SEND_VAL_EX/116           ?80       1242:'\\'            ?1                  	;0
1737 817   SEND_VAL_EX/116           ?96       1243:'/'             ?2                  	;0
1738 817   INIT_FCALL_BY_NAME/59     ?0        ?0                   1244:'dirname'      	;1
1739 817   FETCH_DIM_FUNC_ARG/93     $855=     16?63                1246:0              	;1
1740 817   SEND_VAR_EX/66            ?80       $855                 ?1                  	;0
1741 817   DO_FCALL_BY_NAME/131      $856=     ?0                   ?0                  	;0
1742 817   SEND_VAR_NO_REF_EX/50     ?112      $856                 ?3                  	;0
1743 817   DO_FCALL_BY_NAME/131      $857=     ?0                   ?0                  	;0
1744 817   CONCAT/8                  #858=     $857                 1247:'/../../www/init.php'	;0
1745 817   INCLUDE_OR_EVAL/73        ?795      #858                 ?0                  	;8
1746 818   INIT_FCALL_BY_NAME/59     ?0        ?0                   1248:'c7Cc2f0dD6F71Ebb'	;1
1747 818   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1748 818   DO_FCALL_BY_NAME/131      ?796      ?0                   ?0                  	;0
1749 819   GOTO/253                  ?0        ?1576                ?1250               	;0
1750 821   INIT_FCALL_BY_NAME/59     ?0        ?0                   1251:'implode'      	;2
1751 821   SEND_VAL_EX/116           ?80       1253:' '             ?1                  	;0
1752 821   INIT_STATIC_METHOD_CALL/113 ?0        1254:'XUI'           1256:'a0779Cb0a5BdF6FF'	;3
1753 821   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
1754 821   SEND_VAR_EX/66            ?96       16?44                ?2                  	;0
1755 821   SEND_VAL_EX/116           ?112      1258:'fetch'         ?3                  	;0
1756 821   DO_FCALL/60               $861=     ?0                   ?0                  	;0
1757 821   SEND_VAR_NO_REF_EX/50     ?96       $861                 ?2                  	;0
1758 821   DO_FCALL_BY_NAME/131      $862=     ?0                   ?0                  	;0
1759 821   ASSIGN/38                 ?799      16?47                $862                	;0
1760 822   INIT_STATIC_METHOD_CALL/113 ?0        1259:'XUI'           1261:'E57006536cd5655D'	;2
1761 822   SEND_VAR_EX/66            ?80       16?43                ?1                  	;0
1762 822   SEND_VAR_EX/66            ?96       16?47                ?2                  	;0
1763 822   DO_FCALL/60               $864=     ?0                   ?0                  	;0
1764 822   ASSIGN/38                 $865=     16?0                 $864                	;0
1765 822   BOOL_NOT/13               #866=     $865                 ?0                  	;0
1766 822   JMPZ/43                   ?0        #866                 ?1768               	;0	>>1768
1767 823   GOTO/253                  ?0        ?1160                ?1263               	;0
1768 825   ECHO/40                   ?0        1264:'Force new source
' ?0                  	;0	<<1766
1769 826   INIT_STATIC_METHOD_CALL/113 ?0        1265:'XUI'           1267:'D242Df32bd80320F'	;4
1770 826   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1771 826   FETCH_CONSTANT/99         #867=     ?0                   1269:'SERVER_ID'    	;16
1772 826   SEND_VAL_EX/116           ?96       #867                 ?2                  	;0
1773 826   SEND_VAL_EX/116           ?112      1272:'FORCE_SOURCE'  ?3                  	;0
1774 826   FETCH_DIM_FUNC_ARG/93     $868=     16?41                16?62               	;4
1775 826   SEND_VAR_EX/66            ?128      $868                 ?4                  	;0
1776 826   DO_FCALL/60               ?805      ?0                   ?0                  	;0
1777 827   FETCH_DIM_R/81            $870=     16?41                16?62               	;0
1778 827   ASSIGN/38                 ?807      16?16                $870                	;0
1779 828   GOTO/253                  ?0        ?1152                ?1273               	;0
1780 831   IS_EQUAL/17               #872=     16?19                16?20               	;0
1781 831   BOOL_NOT/13               #873=     #872                 ?0                  	;0
1782 831   JMPZ/43                   ?0        #873                 ?1784               	;0	>>1784
1783 832   GOTO/253                  ?0        ?518                 ?1274               	;0
1784 834   ECHO/40                   ?0        1275:'Reached max failures
' ?0                  	;0	<<1782
1785 835   ASSIGN/38                 ?810      16?18                1276:true           	;0
1786 836   GOTO/253                  ?0        ?524                 ?1277               	;0
1787 837   GOTO/253                  ?0        ?518                 ?1278               	;0
1788 839   INIT_FCALL_BY_NAME/59     ?0        ?0                   1279:'json_decode'  	;2
1789 839   FETCH_DIM_FUNC_ARG/93     $875=     16?4                 1281:'stream_source'	;1
1790 839   SEND_VAR_EX/66            ?80       $875                 ?1                  	;0
1791 839   SEND_VAL_EX/116           ?96       1282:true            ?2                  	;0
1792 839   DO_FCALL_BY_NAME/131      $876=     ?0                   ?0                  	;0
1793 839   FETCH_DIM_R/81            $877=     $876                 1283:0              	;0
1794 839   ASSIGN/38                 ?814      16?58                $877                	;0
1795 841   INIT_STATIC_METHOD_CALL/113 ?0        1284:'XUI'           1286:'fFa26438E002C2b7'	;4
1796 841   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1797 841   SEND_VAL_EX/116           ?96       1288:false           ?2                  	;0
1798 841   SEND_VAR_EX/66            ?112      16?58                ?3                  	;0
1799 841   SEND_VAL_EX/116           ?128      1289:true            ?4                  	;0
1800 841   DO_FCALL/60               $879=     ?0                   ?0                  	;0
1801 841   ASSIGN/38                 ?816      16?10                $879                	;0
1802 844   GOTO/253                  ?0        ?1067                ?1290               	;0
1803 846   FETCH_DIM_R/81            $881=     16?4                 1291:'parent_id'    	;0
1804 846   BOOL_NOT/13               #882=     $881                 ?0                  	;0
1805 846   JMPZ/43                   ?0        #882                 ?1807               	;0	>>1807
1806 847   GOTO/253                  ?0        ?1851                ?1292               	;0
1807 849   INIT_FCALL_BY_NAME/59     ?0        ?0                   1293:'is_null'      	;1	<<1805
1808 849   FETCH_CONSTANT/99         #884=     ?0                   1298:'SERVER_ID'    	;16
1809 849   FETCH_STATIC_PROP_FUNC_ARG/177 $883=     1295:'rServers'      1296:'XUI'          	;1
1810 849   FETCH_DIM_FUNC_ARG/93     $885=     $883                 #884                	;1
1811 849   FETCH_DIM_FUNC_ARG/93     $886=     $885                 1301:'private_url_ip'	;1
1812 849   SEND_VAR_EX/66            ?80       $886                 ?1                  	;0
1813 849   DO_FCALL_BY_NAME/131      $887=     ?0                   ?0                  	;0
1814 849   BOOL_NOT/13               #888=     $887                 ?0                  	;0
1815 849   JMPZ_EX/46                #888=     #888                 ?1825               	;0	>>1825
1816 849   INIT_FCALL_BY_NAME/59     ?0        ?0                   1302:'is_null'      	;1
1817 849   FETCH_DIM_R/81            $890=     16?4                 1307:'parent_id'    	;0
1818 849   FETCH_STATIC_PROP_FUNC_ARG/177 $889=     1304:'rServers'      1305:'XUI'          	;1
1819 849   FETCH_DIM_FUNC_ARG/93     $891=     $889                 $890                	;1
1820 849   FETCH_DIM_FUNC_ARG/93     $892=     $891                 1308:'private_url_ip'	;1
1821 849   SEND_VAR_EX/66            ?80       $892                 ?1                  	;0
1822 849   DO_FCALL_BY_NAME/131      $893=     ?0                   ?0                  	;0
1823 849   BOOL_NOT/13               #894=     $893                 ?0                  	;0
1824 849   BOOL/52                   #888=     #894                 ?0                  	;0
1825 849   JMPZ/43                   ?0        #888                 ?1832               	;0	>>1832	<<1815
1826 849   FETCH_DIM_R/81            $896=     16?4                 1312:'parent_id'    	;0
1827 849   FETCH_STATIC_PROP_R/173   $895=     1309:'rServers'      1310:'XUI'          	;0
1828 849   FETCH_DIM_R/81            $897=     $895                 $896                	;0
1829 849   FETCH_DIM_R/81            $898=     $897                 1313:'private_url_ip'	;0
1830 849   QM_ASSIGN/22              #899=     $898                 ?0                  	;0
1831 849   JMP/42                    ?0        ?1837                ?0                  	;0	>>1837
1832 849   FETCH_DIM_R/81            $901=     16?4                 1317:'parent_id'    	;0	<<1825
1833 849   FETCH_STATIC_PROP_R/173   $900=     1314:'rServers'      1315:'XUI'          	;0
1834 849   FETCH_DIM_R/81            $902=     $900                 $901                	;0
1835 849   FETCH_DIM_R/81            $903=     $902                 1318:'public_url_ip'	;0
1836 849   QM_ASSIGN/22              #899=     $903                 ?0                  	;0
1837 849   CONCAT/8                  #904=     #899                 1319:'admin/live?stream='	;0	<<1831
1838 849   INIT_FCALL_BY_NAME/59     ?0        ?0                   1320:'intval'       	;1
1839 849   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1840 849   DO_FCALL_BY_NAME/131      $905=     ?0                   ?0                  	;0
1841 849   CONCAT/8                  #906=     #904                 $905                	;0
1842 849   CONCAT/8                  #907=     #906                 1322:'&password='   	;0
1843 849   INIT_FCALL_BY_NAME/59     ?0        ?0                   1323:'urlencode'    	;1
1844 849   FETCH_STATIC_PROP_FUNC_ARG/177 $908=     1325:'rSettings'     1326:'XUI'          	;1
1845 849   FETCH_DIM_FUNC_ARG/93     $909=     $908                 1328:'live_streaming_pass'	;1
1846 849   SEND_VAR_EX/66            ?80       $909                 ?1                  	;0
1847 849   DO_FCALL_BY_NAME/131      $910=     ?0                   ?0                  	;0
1848 849   CONCAT/8                  #911=     #907                 $910                	;0
1849 849   CONCAT/8                  #912=     #911                 1329:'&extension=ts'	;0
1850 849   ASSIGN/38                 ?849      16?16                #912                	;0
1851 851   INIT_STATIC_METHOD_CALL/113 ?0        1330:'XUI'           1332:'F7DA8229D2d44874'	;4
1852 851   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1853 851   SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
1854 851   FETCH_DIM_R/81            $914=     16?4                 1334:'parent_id'    	;0
1855 851   JMPZ/43                   ?0        $914                 ?1858               	;0	>>1858
1856 851   QM_ASSIGN/22              #915=     1335:array (
)       ?0                  	;0
1857 851   JMP/42                    ?0        ?1859                ?0                  	;0	>>1859
1858 851   QM_ASSIGN/22              #915=     16?17                ?0                  	;0	<<1855
1859 851   SEND_VAL_EX/116           ?112      #915                 ?3                  	;0	<<1857
1860 851   SEND_VAR_EX/66            ?128      16?16                ?4                  	;0
1861 851   DO_FCALL/60               $916=     ?0                   ?0                  	;0
1862 851   ASSIGN/38                 ?853      16?10                $916                	;0
1863 852   GOTO/253                  ?0        ?1802                ?1336               	;0
1864 853   GOTO/253                  ?0        ?1283                ?1337               	;0
1865 855   FETCH_CONSTANT/99         #918=     ?0                   1338:'DELAY_PATH'   	;16
1866 855   CONCAT/8                  #919=     #918                 16?1                	;0
1867 855   CONCAT/8                  #920=     #919                 1341:'_.m3u8'       	;0
1868 855   ASSIGN/38                 ?857      16?6                 #920                	;0
1869 856   ASSIGN/38                 ?858      16?39                1342:true           	;0
1870 858   ASSIGN/38                 ?859      16?56                1343:true           	;0
1871 859   ASSIGN/38                 ?860      16?35                1344:0              	;0
1872 860   GOTO/253                  ?0        ?184                 ?1345               	;0
1873 862   ASSIGN/38                 ?861      16?16                1346:NULL           	;0
1874 863   ASSIGN/38                 ?862      16?45                1347:false          	;0
1875 865   JMPZ/43                   ?0        16?39                ?1877               	;0	>>1877
1876 866   GOTO/253                  ?0        ?1042                ?1348               	;0
1877 868   FETCH_CONSTANT/99         #927=     ?0                   1349:'STREAMS_PATH' 	;16	<<1875
1878 868   ASSIGN/38                 ?864      16?22                #927                	;0
1879 869   GOTO/253                  ?0        ?1041                ?1352               	;0
1880 871   NOP/0                     ?0        ?0                   ?0                  	;0
1881 905   NOP/0                     ?0        1353:1               ?0                  	;4294967295
*/

?>