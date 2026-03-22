<?php


function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   208  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   208  BIND_GLOBAL/168           ?0        16?1                 1:'f76e05a7b2c4a341'	;0
	2   208  BIND_GLOBAL/168           ?0        16?2                 2:'cd3f9ed18bcee9bd'	;0
	3   208  BIND_GLOBAL/168           ?0        16?3                 3:'E59d0debc75e7be8'	;0
	4   209  BOOL_NOT/13               #4=       16?1                 ?0                  	;0
	5   209  JMPZ/43                   ?0        #4                   ?7                  	;0	>>7
	6   210  GOTO/253                  ?0        ?9                   ?4                  	;0
	7   212  INIT_STATIC_METHOD_CALL/113 ?0        5:'XUI'              7:'aeea5D3137274F80'	;0	<<5
	8   212  DO_FCALL/60               ?1        ?0                   ?0                  	;0
	9   214  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'is_object'       	;1
	10  214  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	11  214  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
	12  214  BOOL_NOT/13               #7=       $6                   ?0                  	;0
	13  214  JMPZ/43                   ?0        #7                   ?15                 	;0	>>15
	14  215  GOTO/253                  ?0        ?17                  ?11                 	;0
	15  217  INIT_METHOD_CALL/112      ?0        16?0                 12:'close_mysql'    	;0	<<13
	16  217  DO_FCALL/60               ?4        ?0                   ?0                  	;0
	17  219  BOOL_NOT/13               #9=       16?2                 ?0                  	;0
	18  219  JMPZ/43                   ?0        #9                   ?20                 	;0	>>20
	19  220  GOTO/253                  ?0        ?27                  ?14                 	;0
	20  222  INIT_STATIC_METHOD_CALL/113 ?0        15:'XUI'             17:'F655a951d8E1e798'	;3	<<18
	21  222  SEND_VAL_EX/116           ?80       19:'playlist'        ?1                  	;0
	22  222  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
	23  222  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'getmypid'       	;0
	24  222  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	25  222  SEND_VAR_NO_REF_EX/50     ?112      $10                  ?3                  	;0
	26  222  DO_FCALL/60               ?7        ?0                   ?0                  	;0
	27  224  NOP/0                     ?0        22:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?200                 ?0                  	;0	>>200
1   5    FETCH_STATIC_PROP_IS/176  $15=      1:'rRequest'         2:'XUI'             	;0
2   5    ISSET_ISEMPTY_DIM_OBJ/115 #16=      $15                  4:'output'          	;16777216
3   5    JMPZ/43                   ?0        #16                  ?6                  	;0	>>6
4   5    QM_ASSIGN/22              #17=      5:''                 ?0                  	;0
5   5    JMP/42                    ?0        ?9                   ?0                  	;0	>>9
6   5    FETCH_STATIC_PROP_R/173   $18=      6:'rRequest'         7:'XUI'             	;0	<<3
7   5    FETCH_DIM_R/81            $19=      $18                  9:'output'          	;0
8   5    QM_ASSIGN/22              #17=      $19                  ?0                  	;0
9   5    ASSIGN/38                 ?5        16?0                 #17                 	;0	<<5
10  6    FETCH_STATIC_PROP_IS/176  $21=      10:'rRequest'        11:'XUI'            	;0
11  6    ISSET_ISEMPTY_DIM_OBJ/115 #22=      $21                  13:'nocache'        	;16777216
12  6    BOOL_NOT/13               #23=      #22                  ?0                  	;0
13  6    ASSIGN/38                 ?9        16?1                 #23                 	;0
14  7    FETCH_STATIC_PROP_IS/176  $25=      14:'rRequest'        15:'XUI'            	;0
15  7    ISSET_ISEMPTY_DIM_OBJ/115 #26=      $25                  17:'username'       	;33554432
16  7    JMPZ_EX/46                #26=      #26                  ?20                 	;0	>>20
17  7    FETCH_STATIC_PROP_IS/176  $27=      18:'rRequest'        19:'XUI'            	;0
18  7    ISSET_ISEMPTY_DIM_OBJ/115 #28=      $27                  21:'password'       	;33554432
19  7    BOOL/52                   #26=      #28                  ?0                  	;0
20  7    JMPZ/43                   ?0        #26                  ?22                 	;0	>>22	<<16
21  8    GOTO/253                  ?0        ?151                 ?22                 	;0
22  10   FETCH_STATIC_PROP_IS/176  $29=      23:'rRequest'        24:'XUI'            	;0	<<20
23  10   ISSET_ISEMPTY_DIM_OBJ/115 #30=      $29                  26:'token'          	;33554432
24  10   JMPZ/43                   ?0        #30                  ?26                 	;0	>>26
25  11   GOTO/253                  ?0        ?286                 ?27                 	;0
26  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'generateError'  	;1	<<24
27  13   SEND_VAL_EX/116           ?80       30:'NO_CREDENTIALS'  ?1                  	;0
28  13   DO_FCALL_BY_NAME/131      ?16       ?0                   ?0                  	;0
29  14   GOTO/253                  ?0        ?285                 ?31                 	;0
30  16   FETCH_STATIC_PROP_R/173   $32=      32:'rRequest'        33:'XUI'            	;0
31  16   FETCH_DIM_R/81            $33=      $32                  35:'username'       	;0
32  16   ASSIGN/38                 ?19       16?2                 $33                 	;0
33  17   FETCH_STATIC_PROP_R/173   $35=      36:'rRequest'        37:'XUI'            	;0
34  17   FETCH_DIM_R/81            $36=      $35                  39:'password'       	;0
35  17   ASSIGN/38                 ?22       16?3                 $36                 	;0
36  18   ISSET_ISEMPTY_CV/197      #38=      16?2                 ?0                  	;16777216
37  18   JMPNZ_EX/47               #38=      #38                  ?40                 	;0	>>40
38  18   ISSET_ISEMPTY_CV/197      #39=      16?3                 ?0                  	;16777216
39  18   BOOL/52                   #38=      #39                  ?0                  	;0
40  18   BOOL_NOT/13               #40=      #38                  ?0                  	;0	<<37
41  18   JMPZ/43                   ?0        #40                  ?43                 	;0	>>43
42  19   GOTO/253                  ?0        ?46                  ?40                 	;0
43  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'generateError'  	;1	<<41
44  21   SEND_VAL_EX/116           ?80       43:'NO_CREDENTIALS'  ?1                  	;0
45  21   DO_FCALL_BY_NAME/131      ?26       ?0                   ?0                  	;0
46  23   GOTO/253                  ?0        ?421                 ?44                 	;0
47  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'generateError'  	;1
48  25   SEND_VAL_EX/116           ?80       47:'ASN_BLOCKED'     ?1                  	;0
49  25   DO_FCALL_BY_NAME/131      ?27       ?0                   ?0                  	;0
50  28   ASSIGN/38                 ?28       16?4                 48:true             	;0
51  29   INIT_STATIC_METHOD_CALL/113 ?0        49:'XUI'             51:'bc4858ba4c3cD1fd'	;3
52  29   SEND_VAL_EX/116           ?80       53:'playlist'        ?1                  	;0
53  29   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
54  29   INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'getmypid'       	;0
55  29   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
56  29   SEND_VAR_NO_REF_EX/50     ?112      $44                  ?3                  	;0
57  29   DO_FCALL/60               $45=      ?0                   ?0                  	;0
58  29   JMPZ/43                   ?0        $45                  ?60                 	;0	>>60
59  30   GOTO/253                  ?0        ?182                 ?56                 	;0
60  32   GOTO/253                  ?0        ?173                 ?57                 	;0	<<58
61  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'generateError'  	;1
62  34   SEND_VAL_EX/116           ?80       60:'INVALID_CREDENTIALS' ?1                  	;0
63  34   DO_FCALL_BY_NAME/131      ?31       ?0                   ?0                  	;0
64  35   GOTO/253                  ?0        ?199                 ?61                 	;0
65  37   ASSIGN/38                 ?32       16?6                 62:false            	;0
66  38   FETCH_DIM_R/81            $48=      16?5                 63:'is_restreamer'  	;0
67  38   BOOL_NOT/13               #49=      $48                  ?0                  	;0
68  38   JMPZ_EX/46                #49=      #49                  ?72                 	;0	>>72
69  38   FETCH_STATIC_PROP_R/173   $50=      64:'rSettings'       65:'XUI'            	;0
70  38   FETCH_DIM_R/81            $51=      $50                  67:'disable_playlist'	;0
71  38   BOOL/52                   #49=      $51                  ?0                  	;0
72  38   BOOL_NOT/13               #52=      #49                  ?0                  	;0	<<68
73  38   JMPZ/43                   ?0        #52                  ?75                 	;0	>>75
74  39   GOTO/253                  ?0        ?89                  ?68                 	;0
75  41   GOTO/253                  ?0        ?86                  ?69                 	;0	<<73
76  44   FETCH_DIM_R/81            $53=      16?5                 70:'admin_enabled'  	;0
77  44   JMPZ/43                   ?0        $53                  ?79                 	;0	>>79
78  45   GOTO/253                  ?0        ?82                  ?71                 	;0
79  47   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'generateError'  	;1	<<77
80  47   SEND_VAL_EX/116           ?80       74:'BANNED'          ?1                  	;0
81  47   DO_FCALL_BY_NAME/131      ?39       ?0                   ?0                  	;0
82  49   FETCH_DIM_R/81            $55=      16?5                 75:'enabled'        	;0
83  49   JMPZ/43                   ?0        $55                  ?85                 	;0	>>85
84  50   GOTO/253                  ?0        ?155                 ?76                 	;0
85  52   GOTO/253                  ?0        ?152                 ?77                 	;0	<<83
86  54   INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'generateError'  	;1
87  54   SEND_VAL_EX/116           ?80       80:'PLAYLIST_DISABLED' ?1                  	;0
88  54   DO_FCALL_BY_NAME/131      ?41       ?0                   ?0                  	;0
89  56   FETCH_DIM_R/81            $57=      16?5                 81:'is_restreamer'  	;0
90  56   JMPZ_EX/46                #58=      $57                  ?94                 	;0	>>94
91  56   FETCH_STATIC_PROP_R/173   $59=      82:'rSettings'       83:'XUI'            	;0
92  56   FETCH_DIM_R/81            $60=      $59                  85:'disable_playlist_restreamer'	;0
93  56   BOOL/52                   #58=      $60                  ?0                  	;0
94  56   BOOL_NOT/13               #61=      #58                  ?0                  	;0	<<90
95  56   JMPZ/43                   ?0        #61                  ?97                 	;0	>>97
96  57   GOTO/253                  ?0        ?100                 ?86                 	;0
97  59   INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'generateError'  	;1	<<95
98  59   SEND_VAL_EX/116           ?80       89:'PLAYLIST_DISABLED' ?1                  	;0
99  59   DO_FCALL_BY_NAME/131      ?47       ?0                   ?0                  	;0
100 61   GOTO/253                  ?0        ?183                 ?90                 	;0
101 63   ISSET_ISEMPTY_DIM_OBJ/115 #63=      16?5                 91:'forced_country' 	;16777216
102 63   BOOL_NOT/13               #64=      #63                  ?0                  	;0
103 63   ASSIGN/38                 ?50       16?7                 #64                 	;0
104 64   JMPZ_EX/46                #66=      16?7                 ?108                	;0	>>108
105 64   FETCH_DIM_R/81            $67=      16?5                 92:'forced_country' 	;0
106 64   IS_NOT_EQUAL/18           #68=      $67                  93:'ALL'            	;0
107 64   BOOL/52                   #66=      #68                  ?0                  	;0
108 64   JMPZ_EX/46                #66=      #66                  ?112                	;0	>>112	<<104
109 64   FETCH_DIM_R/81            $69=      16?5                 94:'forced_country' 	;0
110 64   IS_NOT_EQUAL/18           #70=      16?8                 $69                 	;0
111 64   BOOL/52                   #66=      #70                  ?0                  	;0
112 64   BOOL_NOT/13               #71=      #66                  ?0                  	;0	<<108
113 64   JMPZ/43                   ?0        #71                  ?115                	;0	>>115
114 65   GOTO/253                  ?0        ?118                 ?95                 	;0
115 67   INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'generateError'  	;1	<<113
116 67   SEND_VAL_EX/116           ?80       98:'FORCED_COUNTRY_INVALID' ?1                  	;0
117 67   DO_FCALL_BY_NAME/131      ?57       ?0                   ?0                  	;0
118 69   BOOL_NOT/13               #73=      16?7                 ?0                  	;0
119 69   JMPZ_EX/46                #73=      #73                  ?128                	;0	>>128
120 69   INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'in_array'       	;2
121 69   SEND_VAL_EX/116           ?80       101:'ALL'            ?1                  	;0
122 69   FETCH_STATIC_PROP_FUNC_ARG/177 $74=      102:'rSettings'      103:'XUI'           	;2
123 69   FETCH_DIM_FUNC_ARG/93     $75=      $74                  105:'allow_countries'	;2
124 69   SEND_VAR_EX/66            ?96       $75                  ?2                  	;0
125 69   DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
126 69   BOOL_NOT/13               #77=      $76                  ?0                  	;0
127 69   BOOL/52                   #73=      #77                  ?0                  	;0
128 69   JMPZ_EX/46                #73=      #73                  ?137                	;0	>>137	<<119
129 69   INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'in_array'      	;2
130 69   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
131 69   FETCH_STATIC_PROP_FUNC_ARG/177 $78=      108:'rSettings'      109:'XUI'           	;2
132 69   FETCH_DIM_FUNC_ARG/93     $79=      $78                  111:'allow_countries'	;2
133 69   SEND_VAR_EX/66            ?96       $79                  ?2                  	;0
134 69   DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
135 69   BOOL_NOT/13               #81=      $80                  ?0                  	;0
136 69   BOOL/52                   #73=      #81                  ?0                  	;0
137 69   BOOL_NOT/13               #82=      #73                  ?0                  	;0	<<128
138 69   JMPZ/43                   ?0        #82                  ?140                	;0	>>140
139 70   GOTO/253                  ?0        ?268                 ?112                	;0
140 72   GOTO/253                  ?0        ?265                 ?113                	;0	<<138
141 75   INIT_STATIC_METHOD_CALL/113 ?0        114:'XUI'            116:'cC988751EEBbF271'	;6
142 75   SEND_VAL_EX/116           ?80       118:NULL             ?1                  	;0
143 75   SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
144 75   SEND_VAL_EX/116           ?112      119:NULL             ?3                  	;0
145 75   SEND_VAL_EX/116           ?128      120:true             ?4                  	;0
146 75   SEND_VAL_EX/116           ?144      121:false            ?5                  	;0
147 75   SEND_VAR_EX/66            ?160      16?10                ?6                  	;0
148 75   DO_FCALL/60               $83=      ?0                   ?0                  	;0
149 75   ASSIGN/38                 ?69       16?5                 $83                 	;0
150 77   GOTO/253                  ?0        ?430                 ?122                	;0
151 79   GOTO/253                  ?0        ?30                  ?123                	;0
152 81   INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'generateError' 	;1
153 81   SEND_VAL_EX/116           ?80       126:'DISABLED'       ?1                  	;0
154 81   DO_FCALL_BY_NAME/131      ?70       ?0                   ?0                  	;0
155 83   FETCH_STATIC_PROP_R/173   $86=      127:'rSettings'      128:'XUI'           	;0
156 83   FETCH_DIM_R/81            $87=      $86                  130:'restrict_playlists'	;0
157 83   BOOL_NOT/13               #88=      $87                  ?0                  	;0
158 83   JMPZ/43                   ?0        #88                  ?160                	;0	>>160
159 84   GOTO/253                  ?0        ?50                  ?131                	;0
160 86   ISSET_ISEMPTY_CV/197      #89=      16?11                ?0                  	;16777216	<<158
161 86   JMPZ_EX/46                #89=      #89                  ?166                	;0	>>166
162 86   FETCH_STATIC_PROP_R/173   $90=      132:'rSettings'      133:'XUI'           	;0
163 86   FETCH_DIM_R/81            $91=      $90                  135:'disallow_empty_user_agents'	;0
164 86   IS_EQUAL/17               #92=      $91                  136:1               	;0
165 86   BOOL/52                   #89=      #92                  ?0                  	;0
166 86   BOOL_NOT/13               #93=      #89                  ?0                  	;0	<<161
167 86   JMPZ/43                   ?0        #93                  ?169                	;0	>>169
168 87   GOTO/253                  ?0        ?372                 ?137                	;0
169 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'generateError' 	;1	<<167
170 89   SEND_VAL_EX/116           ?80       140:'EMPTY_USER_AGENT' ?1                  	;0
171 89   DO_FCALL_BY_NAME/131      ?79       ?0                   ?0                  	;0
172 90   GOTO/253                  ?0        ?372                 ?141                	;0
173 92   INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'generateError' 	;2
174 92   SEND_VAL_EX/116           ?80       144:'DOWNLOAD_LIMIT_REACHED' ?1                  	;0
175 92   SEND_VAL_EX/116           ?96       145:false            ?2                  	;0
176 92   DO_FCALL_BY_NAME/131      ?80       ?0                   ?0                  	;0
177 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   146:'http_response_code'	;1
178 93   SEND_VAL_EX/116           ?80       148:429              ?1                  	;0
179 93   DO_FCALL_BY_NAME/131      ?81       ?0                   ?0                  	;0
180 94   EXIT/79                   ?0        ?0                   ?0                  	;0
181 95   GOTO/253                  ?0        ?199                 ?149                	;0
182 97   GOTO/253                  ?0        ?396                 ?150                	;0
183 99   FETCH_DIM_R/81            $97=      16?5                 151:'bypass_ua'     	;0
184 99   IS_EQUAL/17               #98=      $97                  152:0               	;0
185 99   BOOL_NOT/13               #99=      #98                  ?0                  	;0
186 99   JMPZ/43                   ?0        #99                  ?188                	;0	>>188
187 100  GOTO/253                  ?0        ?198                 ?153                	;0
188 102  INIT_STATIC_METHOD_CALL/113 ?0        154:'XUI'            156:'BD0c896A193633eB'	;2	<<186
189 102  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
190 102  SEND_VAL_EX/116           ?96       158:true             ?2                  	;0
191 102  DO_FCALL/60               $100=     ?0                   ?0                  	;0
192 102  BOOL_NOT/13               #101=     $100                 ?0                  	;0
193 102  JMPZ/43                   ?0        #101                 ?195                	;0	>>195
194 103  GOTO/253                  ?0        ?198                 ?159                	;0
195 105  INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'generateError' 	;1	<<193
196 105  SEND_VAL_EX/116           ?80       162:'BLOCKED_USER_AGENT' ?1                  	;0
197 105  DO_FCALL_BY_NAME/131      ?87       ?0                   ?0                  	;0
198 108  GOTO/253                  ?0        ?344                 ?163                	;0
199 112  GOTO/253                  ?0        ?442                 ?164                	;0
200 114  INIT_FCALL_BY_NAME/59     ?0        ?0                   165:'register_shutdown_function'	;1	<<0
201 114  SEND_VAL_EX/116           ?80       167:'shutdown'       ?1                  	;0
202 114  DO_FCALL_BY_NAME/131      ?88       ?0                   ?0                  	;0
203 115  INCLUDE_OR_EVAL/73        ?89       168:'init.php'       ?0                  	;8
204 116  INIT_FCALL_BY_NAME/59     ?0        ?0                   169:'set_time_limit'	;1
205 116  SEND_VAL_EX/116           ?80       171:0                ?1                  	;0
206 116  DO_FCALL_BY_NAME/131      ?90       ?0                   ?0                  	;0
207 117  INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'header'        	;1
208 117  SEND_VAL_EX/116           ?80       174:'Access-Control-Allow-Origin: *' ?1                  	;0
209 117  DO_FCALL_BY_NAME/131      ?91       ?0                   ?0                  	;0
210 118  ASSIGN/38                 ?92       16?6                 175:true            	;0
211 119  GOTO/253                  ?0        ?230                 ?176                	;0
212 122  FETCH_DIM_R/81            $108=     16?5                 177:'isp_violate'   	;0
213 122  IS_EQUAL/17               #109=     $108                 178:1               	;0
214 122  BOOL_NOT/13               #110=     #109                 ?0                  	;0
215 122  JMPZ/43                   ?0        #110                 ?217                	;0	>>217
216 123  GOTO/253                  ?0        ?220                 ?179                	;0
217 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   180:'generateError' 	;1	<<215
218 125  SEND_VAL_EX/116           ?80       182:'ISP_BLOCKED'    ?1                  	;0
219 125  DO_FCALL_BY_NAME/131      ?96       ?0                   ?0                  	;0
220 127  FETCH_DIM_R/81            $112=     16?5                 183:'isp_is_server' 	;0
221 127  IS_EQUAL/17               #113=     $112                 184:1               	;0
222 127  JMPZ_EX/46                #113=     #113                 ?226                	;0	>>226
223 127  FETCH_DIM_R/81            $114=     16?5                 185:'is_restreamer' 	;0
224 127  BOOL_NOT/13               #115=     $114                 ?0                  	;0
225 127  BOOL/52                   #113=     #115                 ?0                  	;0
226 127  BOOL_NOT/13               #116=     #113                 ?0                  	;0	<<222
227 127  JMPZ/43                   ?0        #116                 ?229                	;0	>>229
228 128  GOTO/253                  ?0        ?50                  ?186                	;0
229 130  GOTO/253                  ?0        ?47                  ?187                	;0	<<227
230 132  INIT_FCALL_BY_NAME/59     ?0        ?0                   188:'strtolower'    	;1
231 132  INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'explode'       	;2
232 132  SEND_VAL_EX/116           ?80       192:'.'              ?1                  	;0
233 132  INIT_FCALL_BY_NAME/59     ?0        ?0                   193:'ltrim'         	;2
234 132  INIT_FCALL_BY_NAME/59     ?0        ?0                   195:'parse_url'     	;1
235 132  FETCH_FUNC_ARG/92         $117=     197:'_SERVER'        ?0                  	;1
236 132  FETCH_DIM_FUNC_ARG/93     $118=     $117                 198:'REQUEST_URI'   	;1
237 132  SEND_VAR_EX/66            ?80       $118                 ?1                  	;0
238 132  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
239 132  SEPARATE/156              $119=     $119                 ?0                  	;0
240 132  FETCH_DIM_FUNC_ARG/93     $120=     $119                 199:'path'          	;1
241 132  SEND_VAR_EX/66            ?80       $120                 ?1                  	;0
242 132  SEND_VAL_EX/116           ?96       200:'/'              ?2                  	;0
243 132  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
244 132  SEND_VAR_NO_REF_EX/50     ?96       $121                 ?2                  	;0
245 132  DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
246 132  SEPARATE/156              $122=     $122                 ?0                  	;0
247 132  FETCH_DIM_FUNC_ARG/93     $123=     $122                 201:0               	;1
248 132  SEND_VAR_EX/66            ?80       $123                 ?1                  	;0
249 132  DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
250 132  IS_EQUAL/17               #125=     $124                 202:'get'           	;0
251 132  JMPZ_EX/46                #125=     #125                 ?256                	;0	>>256
252 132  FETCH_STATIC_PROP_R/173   $126=     203:'rSettings'      204:'XUI'           	;0
253 132  FETCH_DIM_R/81            $127=     $126                 206:'legacy_get'    	;0
254 132  BOOL_NOT/13               #128=     $127                 ?0                  	;0
255 132  BOOL/52                   #125=     #128                 ?0                  	;0
256 132  BOOL_NOT/13               #129=     #125                 ?0                  	;0	<<251
257 132  JMPZ/43                   ?0        #129                 ?259                	;0	>>259
258 133  GOTO/253                  ?0        ?263                 ?207                	;0
259 135  ASSIGN/38                 ?115      16?6                 208:false           	;0	<<257
260 136  INIT_FCALL_BY_NAME/59     ?0        ?0                   209:'generateError' 	;1
261 136  SEND_VAL_EX/116           ?80       211:'LEGACY_GET_DISABLED' ?1                  	;0
262 136  DO_FCALL_BY_NAME/131      ?116      ?0                   ?0                  	;0
263 138  ASSIGN/38                 ?117      16?4                 212:false           	;0
264 139  GOTO/253                  ?0        ?297                 ?213                	;0
265 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   214:'generateError' 	;1
266 141  SEND_VAL_EX/116           ?80       216:'NOT_IN_ALLOWED_COUNTRY' ?1                  	;0
267 141  DO_FCALL_BY_NAME/131      ?118      ?0                   ?0                  	;0
268 144  ISSET_ISEMPTY_DIM_OBJ/115 #134=     16?5                 217:'allowed_ua'    	;16777216
269 144  BOOL_NOT/13               #135=     #134                 ?0                  	;0
270 144  JMPZ_EX/46                #135=     #135                 ?278                	;0	>>278
271 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'in_array'      	;2
272 144  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
273 144  FETCH_DIM_FUNC_ARG/93     $136=     16?5                 220:'allowed_ua'    	;2
274 144  SEND_VAR_EX/66            ?96       $136                 ?2                  	;0
275 144  DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
276 144  BOOL_NOT/13               #138=     $137                 ?0                  	;0
277 144  BOOL/52                   #135=     #138                 ?0                  	;0
278 144  BOOL_NOT/13               #139=     #135                 ?0                  	;0	<<270
279 144  JMPZ/43                   ?0        #139                 ?281                	;0	>>281
280 145  GOTO/253                  ?0        ?212                 ?221                	;0
281 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   222:'generateError' 	;1	<<279
282 147  SEND_VAL_EX/116           ?80       224:'NOT_IN_ALLOWED_UAS' ?1                  	;0
283 147  DO_FCALL_BY_NAME/131      ?125      ?0                   ?0                  	;0
284 148  GOTO/253                  ?0        ?212                 ?225                	;0
285 150  GOTO/253                  ?0        ?150                 ?226                	;0
286 152  FETCH_STATIC_PROP_R/173   $141=     227:'rRequest'       228:'XUI'           	;0
287 152  FETCH_DIM_R/81            $142=     $141                 230:'token'         	;0
288 152  ASSIGN/38                 ?128      16?9                 $142                	;0
289 153  ISSET_ISEMPTY_CV/197      #144=     16?9                 ?0                  	;16777216
290 153  BOOL_NOT/13               #145=     #144                 ?0                  	;0
291 153  JMPZ/43                   ?0        #145                 ?293                	;0	>>293
292 154  GOTO/253                  ?0        ?141                 ?231                	;0
293 156  INIT_FCALL_BY_NAME/59     ?0        ?0                   232:'generateError' 	;1	<<291
294 156  SEND_VAL_EX/116           ?80       234:'NO_CREDENTIALS' ?1                  	;0
295 156  DO_FCALL_BY_NAME/131      ?131      ?0                   ?0                  	;0
296 157  GOTO/253                  ?0        ?141                 ?235                	;0
297 159  INIT_STATIC_METHOD_CALL/113 ?0        236:'XUI'            238:'ad72B4259CA295B2'	;0
298 159  DO_FCALL/60               $147=     ?0                   ?0                  	;0
299 159  ASSIGN/38                 ?133      16?10                $147                	;0
300 160  INIT_STATIC_METHOD_CALL/113 ?0        240:'XUI'            242:'AEd9009B5dC15cae'	;1
301 160  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
302 160  DO_FCALL/60               $149=     ?0                   ?0                  	;0
303 160  FETCH_DIM_R/81            $150=     $149                 244:'country'       	;0
304 160  FETCH_DIM_R/81            $151=     $150                 245:'iso_code'      	;0
305 160  ASSIGN/38                 ?137      16?8                 $151                	;0
306 161  FETCH_IS/89               $153=     246:'_SERVER'        ?0                  	;0
307 161  ISSET_ISEMPTY_DIM_OBJ/115 #154=     $153                 247:'HTTP_USER_AGENT'	;16777216
308 161  JMPZ/43                   ?0        #154                 ?311                	;0	>>311
309 161  QM_ASSIGN/22              #155=     248:''               ?0                  	;0
310 161  JMP/42                    ?0        ?320                 ?0                  	;0	>>320
311 161  INIT_FCALL_BY_NAME/59     ?0        ?0                   249:'htmlentities'  	;1	<<308
312 161  INIT_FCALL_BY_NAME/59     ?0        ?0                   251:'trim'          	;1
313 161  FETCH_FUNC_ARG/92         $156=     253:'_SERVER'        ?0                  	;1
314 161  FETCH_DIM_FUNC_ARG/93     $157=     $156                 254:'HTTP_USER_AGENT'	;1
315 161  SEND_VAR_EX/66            ?80       $157                 ?1                  	;0
316 161  DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
317 161  SEND_VAR_NO_REF_EX/50     ?80       $158                 ?1                  	;0
318 161  DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
319 161  QM_ASSIGN/22              #155=     $159                 ?0                  	;0
320 161  ASSIGN/38                 ?145      16?11                #155                	;0	<<310
321 162  FETCH_STATIC_PROP_IS/176  $161=     255:'rRequest'       256:'XUI'           	;0
322 162  ISSET_ISEMPTY_DIM_OBJ/115 #162=     $161                 258:'type'          	;16777216
323 162  JMPZ/43                   ?0        #162                 ?326                	;0	>>326
324 162  QM_ASSIGN/22              #163=     259:'m3u_plus'       ?0                  	;0
325 162  JMP/42                    ?0        ?329                 ?0                  	;0	>>329
326 162  FETCH_STATIC_PROP_R/173   $164=     260:'rRequest'       261:'XUI'           	;0	<<323
327 162  FETCH_DIM_R/81            $165=     $164                 263:'type'          	;0
328 162  QM_ASSIGN/22              #163=     $165                 ?0                  	;0
329 162  ASSIGN/38                 ?151      16?12                #163                	;0	<<325
330 163  FETCH_STATIC_PROP_IS/176  $167=     264:'rRequest'       265:'XUI'           	;0
331 163  ISSET_ISEMPTY_DIM_OBJ/115 #168=     $167                 267:'key'           	;16777216
332 163  JMPZ/43                   ?0        #168                 ?335                	;0	>>335
333 163  QM_ASSIGN/22              #169=     268:NULL             ?0                  	;0
334 163  JMP/42                    ?0        ?342                 ?0                  	;0	>>342
335 163  INIT_FCALL_BY_NAME/59     ?0        ?0                   269:'explode'       	;2	<<332
336 163  SEND_VAL_EX/116           ?80       271:','              ?1                  	;0
337 163  FETCH_STATIC_PROP_FUNC_ARG/177 $170=     272:'rRequest'       273:'XUI'           	;2
338 163  FETCH_DIM_FUNC_ARG/93     $171=     $170                 275:'key'           	;2
339 163  SEND_VAR_EX/66            ?96       $171                 ?2                  	;0
340 163  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
341 163  QM_ASSIGN/22              #169=     $172                 ?0                  	;0
342 163  ASSIGN/38                 ?158      16?13                #169                	;0	<<334
343 164  GOTO/253                  ?0        ?1                   ?276                	;0
344 166  INIT_FCALL_BY_NAME/59     ?0        ?0                   277:'is_null'       	;1
345 166  FETCH_DIM_FUNC_ARG/93     $174=     16?5                 279:'exp_date'      	;1
346 166  SEND_VAR_EX/66            ?80       $174                 ?1                  	;0
347 166  DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
348 166  BOOL_NOT/13               #176=     $175                 ?0                  	;0
349 166  JMPZ_EX/46                #176=     #176                 ?355                	;0	>>355
350 166  INIT_FCALL_BY_NAME/59     ?0        ?0                   280:'time'          	;0
351 166  DO_FCALL_BY_NAME/131      $177=     ?0                   ?0                  	;0
352 166  FETCH_DIM_R/81            $178=     16?5                 282:'exp_date'      	;0
353 166  IS_SMALLER_OR_EQUAL/20    #179=     $178                 $177                	;0
354 166  BOOL/52                   #176=     #179                 ?0                  	;0
355 166  BOOL_NOT/13               #180=     #176                 ?0                  	;0	<<349
356 166  JMPZ/43                   ?0        #180                 ?358                	;0	>>358
357 167  GOTO/253                  ?0        ?361                 ?283                	;0
358 169  INIT_FCALL_BY_NAME/59     ?0        ?0                   284:'generateError' 	;1	<<356
359 169  SEND_VAL_EX/116           ?80       286:'EXPIRED'        ?1                  	;0
360 169  DO_FCALL_BY_NAME/131      ?166      ?0                   ?0                  	;0
361 171  FETCH_DIM_R/81            $182=     16?5                 287:'is_mag'        	;0
362 171  JMPNZ_EX/47               #183=     $182                 ?365                	;0	>>365
363 171  FETCH_DIM_R/81            $184=     16?5                 288:'is_e2'         	;0
364 171  BOOL/52                   #183=     $184                 ?0                  	;0
365 171  BOOL_NOT/13               #185=     #183                 ?0                  	;0	<<362
366 171  JMPZ/43                   ?0        #185                 ?368                	;0	>>368
367 172  GOTO/253                  ?0        ?76                  ?289                	;0
368 174  INIT_FCALL_BY_NAME/59     ?0        ?0                   290:'generateError' 	;1	<<366
369 174  SEND_VAL_EX/116           ?80       292:'DEVICE_NOT_ALLOWED' ?1                  	;0
370 174  DO_FCALL_BY_NAME/131      ?171      ?0                   ?0                  	;0
371 175  GOTO/253                  ?0        ?76                  ?293                	;0
372 178  ISSET_ISEMPTY_DIM_OBJ/115 #187=     16?5                 294:'allowed_ips'   	;16777216
373 178  BOOL_NOT/13               #188=     #187                 ?0                  	;0
374 178  JMPZ_EX/46                #188=     #188                 ?386                	;0	>>386
375 178  INIT_FCALL_BY_NAME/59     ?0        ?0                   295:'in_array'      	;2
376 178  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
377 178  INIT_FCALL_BY_NAME/59     ?0        ?0                   297:'array_map'     	;2
378 178  SEND_VAL_EX/116           ?80       299:'gethostbyname'  ?1                  	;0
379 178  FETCH_DIM_FUNC_ARG/93     $189=     16?5                 300:'allowed_ips'   	;2
380 178  SEND_VAR_EX/66            ?96       $189                 ?2                  	;0
381 178  DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
382 178  SEND_VAR_NO_REF_EX/50     ?96       $190                 ?2                  	;0
383 178  DO_FCALL_BY_NAME/131      $191=     ?0                   ?0                  	;0
384 178  BOOL_NOT/13               #192=     $191                 ?0                  	;0
385 178  BOOL/52                   #188=     #192                 ?0                  	;0
386 178  BOOL_NOT/13               #193=     #188                 ?0                  	;0	<<374
387 178  JMPZ/43                   ?0        #193                 ?389                	;0	>>389
388 179  GOTO/253                  ?0        ?392                 ?301                	;0
389 181  INIT_FCALL_BY_NAME/59     ?0        ?0                   302:'generateError' 	;1	<<387
390 181  SEND_VAL_EX/116           ?80       304:'NOT_IN_ALLOWED_IPS' ?1                  	;0
391 181  DO_FCALL_BY_NAME/131      ?179      ?0                   ?0                  	;0
392 183  ISSET_ISEMPTY_CV/197      #195=     16?8                 ?0                  	;16777216
393 183  JMPZ/43                   ?0        #195                 ?395                	;0	>>395
394 184  GOTO/253                  ?0        ?268                 ?305                	;0
395 186  GOTO/253                  ?0        ?101                 ?306                	;0	<<393
396 188  NEW/68                    $196=     307:'Database'       ?96                 	;1
397 188  SEND_VAL_EX/116           ?80       309:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
398 188  DO_FCALL/60               ?182      ?8                   ?0                  	;0
399 188  ASSIGN/38                 ?183      16?14                $196                	;0
400 189  FETCH_STATIC_PROP_W/174   $199=     310:'db'             311:'XUI'           	;0
401 189  ASSIGN_REF/39             ?185      $199                 16?14               	;0
402 190  INIT_STATIC_METHOD_CALL/113 ?0        313:'XUI'            315:'a7cF79752b1aE214'	;6
403 190  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
404 190  SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
405 190  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
406 190  SEND_VAR_EX/66            ?128      16?13                ?4                  	;0
407 190  SEND_VAR_EX/66            ?144      16?1                 ?5                  	;0
408 190  INIT_STATIC_METHOD_CALL/113 ?0        317:'XUI'            319:'efd47D0ab821C8aF'	;1
409 190  FETCH_FUNC_ARG/92         $201=     321:'_SERVER'        ?0                  	;1
410 190  FETCH_DIM_FUNC_ARG/93     $202=     $201                 322:'HTTP_X_IP'     	;1
411 190  SEND_VAR_EX/66            ?80       $202                 ?1                  	;0
412 190  DO_FCALL/60               $203=     ?0                   ?0                  	;0
413 190  SEND_VAR_NO_REF_EX/50     ?160      $203                 ?6                  	;0
414 190  DO_FCALL/60               $204=     ?0                   ?0                  	;0
415 190  JMPZ/43                   ?0        $204                 ?417                	;0	>>417
416 191  GOTO/253                  ?0        ?420                 ?323                	;0
417 193  INIT_FCALL_BY_NAME/59     ?0        ?0                   324:'generateError' 	;1	<<415
418 193  SEND_VAL_EX/116           ?80       326:'GENERATE_PLAYLIST_FAILED' ?1                  	;0
419 193  DO_FCALL_BY_NAME/131      ?190      ?0                   ?0                  	;0
420 195  GOTO/253                  ?0        ?199                 ?327                	;0
421 197  INIT_STATIC_METHOD_CALL/113 ?0        328:'XUI'            330:'cc988751EebBF271'	;6
422 197  SEND_VAL_EX/116           ?80       332:NULL             ?1                  	;0
423 197  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
424 197  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
425 197  SEND_VAL_EX/116           ?128      333:true             ?4                  	;0
426 197  SEND_VAL_EX/116           ?144      334:false            ?5                  	;0
427 197  SEND_VAR_EX/66            ?160      16?10                ?6                  	;0
428 197  DO_FCALL/60               $206=     ?0                   ?0                  	;0
429 197  ASSIGN/38                 ?192      16?5                 $206                	;0
430 199  INIT_FCALL_BY_NAME/59     ?0        ?0                   335:'ini_set'       	;2
431 199  SEND_VAL_EX/116           ?80       337:'memory_limit'   ?1                  	;0
432 199  SEND_VAL_EX/116           ?96       338:-1               ?2                  	;0
433 199  DO_FCALL_BY_NAME/131      ?193      ?0                   ?0                  	;0
434 200  JMPZ/43                   ?0        16?5                 ?436                	;0	>>436
435 201  GOTO/253                  ?0        ?65                  ?339                	;0
436 203  INIT_STATIC_METHOD_CALL/113 ?0        340:'XUI'            342:'a1fEF6439C28608e'	;3	<<434
437 203  SEND_VAL_EX/116           ?80       344:NULL             ?1                  	;0
438 203  SEND_VAL_EX/116           ?96       345:NULL             ?2                  	;0
439 203  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
440 203  DO_FCALL/60               ?194      ?0                   ?0                  	;0
441 204  GOTO/253                  ?0        ?61                  ?346                	;0
442 206  NOP/0                     ?0        ?0                   ?0                  	;0
443 225  NOP/0                     ?0        347:1                ?0                  	;4294967295
*/

?>