<?php


function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   462  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   462  BIND_GLOBAL/168           ?0        16?1                 1:'Bf9899a172ecff52'	;0
	2   462  BIND_GLOBAL/168           ?0        16?2                 2:'C98e11437faf4199'	;0
	3   462  BIND_GLOBAL/168           ?0        16?3                 3:'ee6d1fc5d801b43f'	;0
	4   463  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'is_object'       	;1
	5   463  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	6   463  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	7   463  BOOL_NOT/13               #5=       $4                   ?0                  	;0
	8   463  JMPZ/43                   ?0        #5                   ?10                 	;0	>>10
	9   464  GOTO/253                  ?0        ?12                  ?6                  	;0
	10  466  INIT_METHOD_CALL/112      ?0        16?0                 7:'close_mysql'     	;0	<<8
	11  466  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	12  468  FETCH_STATIC_PROP_R/173   $7=       9:'rSettings'        10:'XUI'            	;0
	13  468  FETCH_DIM_R/81            $8=       $7                   12:'on_demand_instant_off'	;0
	14  468  JMPZ_EX/46                #9=       $8                   ?18                 	;0	>>18
	15  468  FETCH_DIM_R/81            $10=      16?1                 13:'on_demand'      	;0
	16  468  IS_EQUAL/17               #11=      $10                  14:1                	;0
	17  468  BOOL/52                   #9=       #11                  ?0                  	;0
	18  468  BOOL_NOT/13               #12=      #9                   ?0                  	;0	<<14
	19  468  JMPZ/43                   ?0        #12                  ?21                 	;0	>>21
	20  469  GOTO/253                  ?0        ?25                  ?15                 	;0
	21  471  INIT_STATIC_METHOD_CALL/113 ?0        16:'XUI'             18:'e1E756bD417e235b'	;2	<<19
	22  471  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	23  471  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	24  471  DO_FCALL/60               ?9        ?0                   ?0                  	;0
	25  473  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?843                 ?0                  	;0	>>843
1   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'file_exists'     	;1
2   6    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
3   6    DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
4   6    BOOL_NOT/13               #35=      $34                  ?0                  	;0
5   6    JMPZ_EX/46                #35=      #35                  ?11                 	;0	>>11
6   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'file_exists'     	;1
7   6    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
8   6    DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
9   6    BOOL_NOT/13               #37=      $36                  ?0                  	;0
10  6    BOOL/52                   #35=      #37                  ?0                  	;0
11  6    JMPZ_EX/46                #35=      #35                  ?18                 	;0	>>18	<<5
12  6    INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'intval'          	;1
13  6    SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
14  6    DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
15  6    MUL/3                     #39=      $38                  7:100               	;0
16  6    IS_SMALLER/19             #40=      16?2                 #39                 	;0
17  6    BOOL/52                   #35=      #40                  ?0                  	;0
18  6    BOOL_NOT/13               #41=      #35                  ?0                  	;0	<<11
19  6    JMPZ/43                   ?0        #41                  ?21                 	;0	>>21
20  7    GOTO/253                  ?0        ?738                 ?8                  	;0
21  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'usleep'          	;1	<<19
22  9    SEND_VAL_EX/116           ?80       11:10000             ?1                  	;0
23  9    DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
24  10   POST_INC/36               #43=      16?2                 ?0                  	;0
25  10   FREE/70                   ?0        #43                  ?0                  	;0
26  11   GOTO/253                  ?0        ?1                   ?12                 	;0
27  12   GOTO/253                  ?0        ?738                 ?13                 	;0
28  14   INIT_METHOD_CALL/112      ?0        16?4                 14:'query'          	;3
29  14   SEND_VAL_EX/116           ?80       16:'SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t2.stream_id = t1.id AND t2.server_id = ? WHERE t1.`id` = ?' ?1                  	;0
30  14   FETCH_CONSTANT/99         #44=      ?0                   17:'SERVER_ID'      	;16
31  14   SEND_VAL_EX/116           ?96       #44                  ?2                  	;0
32  14   SEND_VAR_EX/66            ?112      16?5                 ?3                  	;0
33  14   DO_FCALL/60               ?11       ?0                   ?0                  	;0
34  15   INIT_METHOD_CALL/112      ?0        16?4                 20:'num_rows'       	;0
35  15   DO_FCALL/60               $46=      ?0                   ?0                  	;0
36  15   IS_SMALLER/19             #47=      22:0                 $46                 	;0
37  15   JMPZ/43                   ?0        #47                  ?39                 	;0	>>39
38  16   GOTO/253                  ?0        ?42                  ?23                 	;0
39  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'f82199eff9017BC9'	;0	<<37
40  18   DO_FCALL_BY_NAME/131      ?14       ?0                   ?0                  	;0
41  19   GOTO/253                  ?0        ?595                 ?26                 	;0
42  21   GOTO/253                  ?0        ?596                 ?27                 	;0
43  24   ASSIGN/38                 ?15       16?2                 28:0                	;0
44  25   FETCH_CONSTANT/99         #50=      ?0                   29:'STREAMS_PATH'   	;16
45  25   CONCAT/8                  #51=      #50                  16?5                	;0
46  25   CONCAT/8                  #52=      #51                  32:'_.m3u8'         	;0
47  25   ASSIGN/38                 ?19       16?0                 #52                 	;0
48  26   IS_EQUAL/17               #54=      16?6                 33:'ts'             	;0
49  26   JMPZ/43                   ?0        #54                  ?51                 	;0	>>51
50  27   GOTO/253                  ?0        ?739                 ?34                 	;0
51  29   FETCH_CONSTANT/99         #55=      ?0                   35:'STREAMS_PATH'   	;16	<<49
52  29   CONCAT/8                  #56=      #55                  16?5                	;0
53  29   CONCAT/8                  #57=      #56                  38:'_.m3u8'         	;0
54  29   ASSIGN/38                 ?24       16?1                 #57                 	;0
55  30   GOTO/253                  ?0        ?1                   ?39                 	;0
56  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'json_decode'    	;2
57  32   INIT_STATIC_METHOD_CALL/113 ?0        42:'Xui\\Functions'  44:'decrypt'        	;3
58  32   FETCH_STATIC_PROP_FUNC_ARG/177 $59=      46:'rRequest'        47:'XUI'            	;1
59  32   FETCH_DIM_FUNC_ARG/93     $60=      $59                  49:'uitoken'        	;1
60  32   SEND_VAR_EX/66            ?80       $60                  ?1                  	;0
61  32   FETCH_STATIC_PROP_FUNC_ARG/177 $61=      50:'rSettings'       51:'XUI'            	;2
62  32   FETCH_DIM_FUNC_ARG/93     $62=      $61                  53:'live_streaming_pass'	;2
63  32   SEND_VAR_EX/66            ?96       $62                  ?2                  	;0
64  32   FETCH_CONSTANT/99         #63=      ?0                   54:'OPENSSL_EXTRA'  	;16
65  32   SEND_VAL_EX/116           ?112      #63                  ?3                  	;0
66  32   DO_FCALL/60               $64=      ?0                   ?0                  	;0
67  32   SEND_VAR_NO_REF_EX/50     ?80       $64                  ?1                  	;0
68  32   SEND_VAL_EX/116           ?96       57:true              ?2                  	;0
69  32   DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
70  32   ASSIGN/38                 ?32       16?7                 $65                 	;0
71  33   FETCH_DIM_R/81            $69=      16?7                 62:'stream_id'      	;0
72  33   FETCH_STATIC_PROP_W/174   $67=      58:'rRequest'        59:'XUI'            	;0
73  33   ASSIGN_DIM/147            ?34       $67                  61:'stream'         	;0
74  33   OP_DATA/137               ?0        $69                  ?0                  	;0
75  34   FETCH_STATIC_PROP_W/174   $70=      63:'rRequest'        64:'XUI'            	;0
76  34   ASSIGN_DIM/147            ?37       $70                  66:'extension'      	;0
77  34   OP_DATA/137               ?0        67:'m3u8'            ?0                  	;0
78  35   FETCH_STATIC_PROP_R/173   $72=      68:'rSettings'       69:'XUI'            	;0
79  35   FETCH_DIM_R/81            $73=      $72                  71:'ip_subnet_match'	;0
80  35   JMPZ/43                   ?0        $73                  ?113                	;0	>>113
81  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'implode'        	;2
82  35   SEND_VAL_EX/116           ?80       74:'.'               ?1                  	;0
83  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'array_slice'    	;3
84  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'explode'        	;2
85  35   SEND_VAL_EX/116           ?80       79:'.'               ?1                  	;0
86  35   FETCH_DIM_FUNC_ARG/93     $74=      16?7                 80:'ip'             	;2
87  35   SEND_VAR_EX/66            ?96       $74                  ?2                  	;0
88  35   DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
89  35   SEND_VAR_NO_REF_EX/50     ?80       $75                  ?1                  	;0
90  35   SEND_VAL_EX/116           ?96       81:0                 ?2                  	;0
91  35   SEND_VAL_EX/116           ?112      82:-1                ?3                  	;0
92  35   DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
93  35   SEND_VAR_NO_REF_EX/50     ?96       $76                  ?2                  	;0
94  35   DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
95  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'implode'        	;2
96  35   SEND_VAL_EX/116           ?80       85:'.'               ?1                  	;0
97  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'array_slice'    	;3
98  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'explode'        	;2
99  35   SEND_VAL_EX/116           ?80       90:'.'               ?1                  	;0
100 35   INIT_STATIC_METHOD_CALL/113 ?0        91:'XUI'             93:'AD72b4259ca295b2'	;0
101 35   DO_FCALL/60               $78=      ?0                   ?0                  	;0
102 35   SEND_VAR_NO_REF_EX/50     ?96       $78                  ?2                  	;0
103 35   DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
104 35   SEND_VAR_NO_REF_EX/50     ?80       $79                  ?1                  	;0
105 35   SEND_VAL_EX/116           ?96       95:0                 ?2                  	;0
106 35   SEND_VAL_EX/116           ?112      96:-1                ?3                  	;0
107 35   DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
108 35   SEND_VAR_NO_REF_EX/50     ?96       $80                  ?2                  	;0
109 35   DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
110 35   IS_EQUAL/17               #82=      $77                  $81                 	;0
111 35   QM_ASSIGN/22              #83=      #82                  ?0                  	;0
112 35   JMP/42                    ?0        ?118                 ?0                  	;0	>>118
113 35   FETCH_DIM_R/81            $84=      16?7                 97:'ip'             	;0	<<80
114 35   INIT_STATIC_METHOD_CALL/113 ?0        98:'XUI'             100:'aD72B4259ca295b2'	;0
115 35   DO_FCALL/60               $85=      ?0                   ?0                  	;0
116 35   IS_EQUAL/17               #86=      $84                  $85                 	;0
117 35   QM_ASSIGN/22              #83=      #86                  ?0                  	;0
118 35   ASSIGN/38                 ?53       16?8                 #83                 	;0	<<112
119 36   FETCH_DIM_R/81            $88=      16?7                 102:'expires'       	;0
120 36   INIT_FCALL_BY_NAME/59     ?0        ?0                   103:'time'          	;0
121 36   DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
122 36   IS_SMALLER/19             #90=      $88                  $89                 	;0
123 36   JMPNZ_EX/47               #90=      #90                  ?126                	;0	>>126
124 36   BOOL_NOT/13               #91=      16?8                 ?0                  	;0
125 36   BOOL/52                   #90=      #91                  ?0                  	;0
126 36   BOOL_NOT/13               #92=      #90                  ?0                  	;0	<<123
127 36   JMPZ/43                   ?0        #92                  ?129                	;0	>>129
128 37   GOTO/253                  ?0        ?166                 ?105                	;0
129 39   GOTO/253                  ?0        ?164                 ?106                	;0	<<127
130 41   EXIT/79                   ?0        ?0                   ?0                  	;0
131 44   FETCH_DIM_R/81            $93=      16?9                 107:'pid'           	;0
132 44   JMPZ/43                   ?0        $93                  ?134                	;0	>>134
133 45   GOTO/253                  ?0        ?192                 ?108                	;0
134 47   INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'intval'        	;1	<<132
135 47   INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'file_get_contents'	;1
136 47   FETCH_CONSTANT/99         #95=      ?0                   114:'STREAMS_PATH'  	;16
137 47   CONCAT/8                  #96=      #95                  16?5                	;0
138 47   CONCAT/8                  #97=      #96                  117:'_.pid'         	;0
139 47   SEND_VAL_EX/116           ?80       #97                  ?1                  	;0
140 47   DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
141 47   SEND_VAR_NO_REF_EX/50     ?80       $98                  ?1                  	;0
142 47   DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
143 47   ASSIGN_DIM/147            ?60       16?9                 109:'pid'           	;0
144 47   OP_DATA/137               ?0        $99                  ?0                  	;0
145 48   GOTO/253                  ?0        ?192                 ?118                	;0
146 50   INIT_STATIC_METHOD_CALL/113 ?0        119:'XUI'            121:'A60D4C9F99f8330B'	;2
147 50   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
148 50   SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
149 50   DO_FCALL/60               ?66       ?0                   ?0                  	;0
150 52   INIT_STATIC_METHOD_CALL/113 ?0        123:'XUI'            125:'b4Ab2A8Eb0aa68eE'	;2
151 52   FETCH_DIM_FUNC_ARG/93     $101=     16?9                 127:'pid'           	;1
152 52   SEND_VAR_EX/66            ?80       $101                 ?1                  	;0
153 52   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
154 52   DO_FCALL/60               $102=     ?0                   ?0                  	;0
155 52   JMPZ/43                   ?0        $102                 ?157                	;0	>>157
156 53   GOTO/253                  ?0        ?43                  ?128                	;0
157 55   ASSIGN_DIM/147            ?69       16?9                 129:'pid'           	;0	<<155
158 55   OP_DATA/137               ?0        130:NULL             ?0                  	;0
159 56   FETCH_DIM_R/81            $104=     16?9                 131:'on_demand'     	;0
160 56   IS_EQUAL/17               #105=     $104                 132:1               	;0
161 56   JMPZ/43                   ?0        #105                 ?163                	;0	>>163
162 57   GOTO/253                  ?0        ?793                 ?133                	;0
163 59   GOTO/253                  ?0        ?790                 ?134                	;0	<<161
164 61   INIT_FCALL_BY_NAME/59     ?0        ?0                   135:'f82199eFf9017Bc9'	;0
165 61   DO_FCALL_BY_NAME/131      ?72       ?0                   ?0                  	;0
166 63   FETCH_STATIC_PROP_R/173   $107=     137:'rSegmentSettings' 138:'XUI'           	;0
167 63   FETCH_DIM_R/81            $108=     $107                 140:'seg_time'      	;0
168 63   ASSIGN/38                 ?75       16?11                $108                	;0
169 65   NEW/68                    $110=     141:'Database'       ?96                 	;1
170 65   SEND_VAL_EX/116           ?80       143:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
171 65   DO_FCALL/60               ?77       ?8                   ?0                  	;0
172 65   ASSIGN/38                 ?78       16?4                 $110                	;0
173 66   GOTO/253                  ?0        ?722                 ?144                	;0
174 68   INIT_FCALL_BY_NAME/59     ?0        ?0                   145:'getmypid'      	;0
175 68   DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
176 68   ASSIGN/38                 ?80       16?10                $113                	;0
177 69   FETCH_STATIC_PROP_R/173   $115=     147:'rSettings'      148:'XUI'           	;0
178 69   FETCH_DIM_R/81            $116=     $115                 150:'use_buffer'    	;0
179 69   IS_EQUAL/17               #117=     $116                 151:0               	;0
180 69   BOOL_NOT/13               #118=     #117                 ?0                  	;0
181 69   JMPZ/43                   ?0        #118                 ?183                	;0	>>183
182 70   GOTO/253                  ?0        ?186                 ?152                	;0
183 72   INIT_FCALL_BY_NAME/59     ?0        ?0                   153:'header'        	;1	<<181
184 72   SEND_VAL_EX/116           ?80       155:'X-Accel-Buffering: no' ?1                  	;0
185 72   DO_FCALL_BY_NAME/131      ?85       ?0                   ?0                  	;0
186 74   FETCH_STATIC_PROP_IS/176  $120=     156:'rRequest'       157:'XUI'           	;0
187 74   ISSET_ISEMPTY_DIM_OBJ/115 #121=     $120                 159:'uitoken'       	;16777216
188 74   BOOL_NOT/13               #122=     #121                 ?0                  	;0
189 74   JMPZ/43                   ?0        #122                 ?191                	;0	>>191
190 75   GOTO/253                  ?0        ?884                 ?160                	;0
191 77   GOTO/253                  ?0        ?674                 ?161                	;0	<<189
192 80   SWITCH_STRING/188         ?0        16?6                 162:array (
  'm3u8' => 196,
)	;276
193 81   CASE/48                   #123=     16?6                 163:'m3u8'          	;0	>>195
194 81   JMPNZ/44                  ?0        #123                 ?196                	;0	>>196
195 81   JMP/42                    ?0        ?276                 ?0                  	;0	>>276	<<193
196 82   GOTO/253                  ?0        ?240                 ?164                	;0	<<194
197 84   INIT_FCALL_BY_NAME/59     ?0        ?0                   165:'header'        	;1
198 84   CONCAT/8                  #124=     167:'Content-Length: ' 16?12               	;0
199 84   SEND_VAL_EX/116           ?80       #124                 ?1                  	;0
200 84   DO_FCALL_BY_NAME/131      ?91       ?0                   ?0                  	;0
201 85   INIT_FCALL_BY_NAME/59     ?0        ?0                   168:'header'        	;1
202 85   SEND_VAL_EX/116           ?80       170:'Content-Type: video/mp2t' ?1                  	;0
203 85   DO_FCALL_BY_NAME/131      ?92       ?0                   ?0                  	;0
204 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   171:'readfile'      	;1
205 86   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
206 86   DO_FCALL_BY_NAME/131      ?93       ?0                   ?0                  	;0
207 87   EXIT/79                   ?0        ?0                   ?0                  	;0
208 89   GOTO/253                  ?0        ?209                 ?173                	;0
209 91   GOTO/253                  ?0        ?239                 ?174                	;0
210 93   INIT_STATIC_METHOD_CALL/113 ?0        175:'XUI'            177:'C527CfDb95C0a595'	;4
211 93   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
212 93   SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
213 93   SEND_VAR_EX/66            ?112      16?5                 ?3                  	;0
214 93   FETCH_STATIC_PROP_FUNC_ARG/177 $128=     179:'rRequest'       180:'XUI'           	;4
215 93   FETCH_DIM_FUNC_ARG/93     $129=     $128                 182:'uitoken'       	;4
216 93   SEND_VAR_EX/66            ?128      $129                 ?4                  	;0
217 93   DO_FCALL/60               $130=     ?0                   ?0                  	;0
218 93   ASSIGN/38                 $131=     16?14                $130                	;0
219 93   BOOL_NOT/13               #132=     $131                 ?0                  	;0
220 93   JMPZ/43                   ?0        #132                 ?222                	;0	>>222
221 94   GOTO/253                  ?0        ?239                 ?183                	;0
222 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   184:'header'        	;1	<<220
223 96   SEND_VAL_EX/116           ?80       186:'Content-Type: application/vnd.apple.mpegurl' ?1                  	;0
224 96   DO_FCALL_BY_NAME/131      ?99       ?0                   ?0                  	;0
225 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   187:'header'        	;1
226 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'strlen'        	;1
227 97   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
228 97   DO_FCALL_BY_NAME/131      $134=     ?0                   ?0                  	;0
229 97   CONCAT/8                  #135=     191:'Content-Length: ' $134                	;0
230 97   SEND_VAL_EX/116           ?80       #135                 ?1                  	;0
231 97   DO_FCALL_BY_NAME/131      ?102      ?0                   ?0                  	;0
232 98   GOTO/253                  ?0        ?235                 ?192                	;0
233 101  GOTO/253                  ?0        ?595                 ?193                	;0
234 102  GOTO/253                  ?0        ?276                 ?194                	;0
235 104  INIT_FCALL_BY_NAME/59     ?0        ?0                   195:'ob_end_flush'  	;0
236 104  DO_FCALL_BY_NAME/131      ?103      ?0                   ?0                  	;0
237 105  ECHO/40                   ?0        16?14                ?0                  	;0
238 106  EXIT/79                   ?0        ?0                   ?0                  	;0
239 109  GOTO/253                  ?0        ?233                 ?197                	;0
240 111  INIT_STATIC_METHOD_CALL/113 ?0        198:'XUI'            200:'aedcfe9cCb2C4A4B'	;2
241 111  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
242 111  FETCH_DIM_FUNC_ARG/93     $138=     16?9                 202:'pid'           	;2
243 111  SEND_VAR_EX/66            ?96       $138                 ?2                  	;0
244 111  DO_FCALL/60               $139=     ?0                   ?0                  	;0
245 111  BOOL_NOT/13               #140=     $139                 ?0                  	;0
246 111  JMPZ/43                   ?0        #140                 ?248                	;0	>>248
247 112  GOTO/253                  ?0        ?233                 ?203                	;0
248 114  FETCH_STATIC_PROP_IS/176  $141=     204:'rRequest'       205:'XUI'           	;0	<<246
249 114  ISSET_ISEMPTY_DIM_OBJ/115 #142=     $141                 207:'segment'       	;16777216
250 114  JMPZ/43                   ?0        #142                 ?252                	;0	>>252
251 115  GOTO/253                  ?0        ?210                 ?208                	;0
252 117  FETCH_CONSTANT/99         #143=     ?0                   209:'STREAMS_PATH'  	;16	<<250
253 117  INIT_FCALL_BY_NAME/59     ?0        ?0                   212:'str_replace'   	;3
254 117  SEND_VAL_EX/116           ?80       214:array (
  0 => '\\',
  1 => '/',
) ?1                  	;0
255 117  SEND_VAL_EX/116           ?96       215:''               ?2                  	;0
256 117  INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'urldecode'     	;1
257 117  FETCH_STATIC_PROP_FUNC_ARG/177 $144=     218:'rRequest'       219:'XUI'           	;1
258 117  FETCH_DIM_FUNC_ARG/93     $145=     $144                 221:'segment'       	;1
259 117  SEND_VAR_EX/66            ?80       $145                 ?1                  	;0
260 117  DO_FCALL_BY_NAME/131      $146=     ?0                   ?0                  	;0
261 117  SEND_VAR_NO_REF_EX/50     ?112      $146                 ?3                  	;0
262 117  DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
263 117  CONCAT/8                  #148=     #143                 $147                	;0
264 117  ASSIGN/38                 ?115      16?13                #148                	;0
265 118  INIT_FCALL_BY_NAME/59     ?0        ?0                   222:'file_exists'   	;1
266 118  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
267 118  DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
268 118  BOOL_NOT/13               #151=     $150                 ?0                  	;0
269 118  JMPZ/43                   ?0        #151                 ?271                	;0	>>271
270 119  GOTO/253                  ?0        ?208                 ?224                	;0
271 121  INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'filesize'      	;1	<<269
272 121  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
273 121  DO_FCALL_BY_NAME/131      $152=     ?0                   ?0                  	;0
274 121  ASSIGN/38                 ?119      16?12                $152                	;0
275 122  GOTO/253                  ?0        ?197                 ?227                	;0
276 125  GOTO/253                  ?0        ?405                 ?228                	;0	<<195
277 127  EXIT/79                   ?0        ?0                   ?0                  	;0
278 128  GOTO/253                  ?0        ?280                 ?229                	;0
279 130  ASSIGN/38                 ?120      16?16                230:-1              	;0
280 132  GOTO/253                  ?0        ?474                 ?231                	;0
281 134  INIT_STATIC_METHOD_CALL/113 ?0        232:'XUI'            234:'B4aB2a8Eb0Aa68EE'	;2
282 134  FETCH_DIM_FUNC_ARG/93     $155=     16?9                 236:'pid'           	;1
283 134  SEND_VAR_EX/66            ?80       $155                 ?1                  	;0
284 134  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
285 134  DO_FCALL/60               $156=     ?0                   ?0                  	;0
286 134  JMPZ_EX/46                #157=     $156                 ?289                	;0	>>289
287 134  IS_SMALLER_OR_EQUAL/20    #158=     16?17                16?18               	;0
288 134  BOOL/52                   #157=     #158                 ?0                  	;0
289 134  JMPZ_EX/46                #157=     #157                 ?296                	;0	>>296	<<286
290 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   237:'file_exists'   	;1
291 134  FETCH_CONSTANT/99         #159=     ?0                   239:'STREAMS_PATH'  	;16
292 134  CONCAT/8                  #160=     #159                 16?19               	;0
293 134  SEND_VAL_EX/116           ?80       #160                 ?1                  	;0
294 134  DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
295 134  BOOL/52                   #157=     $161                 ?0                  	;0
296 134  JMPZ_EX/46                #157=     #157                 ?301                	;0	>>301	<<289
297 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   242:'is_resource'   	;1
298 134  SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
299 134  DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
300 134  BOOL/52                   #157=     $162                 ?0                  	;0
301 134  JMPZ/43                   ?0        #157                 ?303                	;0	>>303	<<296
302 135  GOTO/253                  ?0        ?305                 ?244                	;0
303 137  EXIT/79                   ?0        ?0                   ?0                  	;0	<<301
304 138  GOTO/253                  ?0        ?404                 ?245                	;0
305 140  INIT_FCALL_BY_NAME/59     ?0        ?0                   246:'filesize'      	;1
306 140  FETCH_CONSTANT/99         #163=     ?0                   248:'STREAMS_PATH'  	;16
307 140  CONCAT/8                  #164=     #163                 16?19               	;0
308 140  SEND_VAL_EX/116           ?80       #164                 ?1                  	;0
309 140  DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
310 140  ASSIGN/38                 ?132      16?21                $165                	;0
311 141  GOTO/253                  ?0        ?390                 ?251                	;0
312 143  FETCH_STATIC_PROP_R/173   $167=     252:'rSegmentSettings' 253:'XUI'           	;0
313 143  FETCH_DIM_R/81            $168=     $167                 255:'seg_time'      	;0
314 143  MUL/3                     #169=     $168                 256:2               	;0
315 143  ASSIGN/38                 ?136      16?18                #169                	;0
316 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   257:'intval'        	;1
317 144  FETCH_STATIC_PROP_FUNC_ARG/177 $171=     259:'rSettings'      260:'XUI'           	;1
318 144  FETCH_DIM_FUNC_ARG/93     $172=     $171                 262:'segment_wait_time'	;1
319 144  SEND_VAR_EX/66            ?80       $172                 ?1                  	;0
320 144  DO_FCALL_BY_NAME/131      $173=     ?0                   ?0                  	;0
321 144  IS_SMALLER/19             #174=     16?18                $173                	;0
322 144  JMP_SET/152               #175=     #174                 ?324                	;0
323 144  QM_ASSIGN/22              #175=     263:20               ?0                  	;0
324 144  BOOL_NOT/13               #176=     #175                 ?0                  	;0
325 144  JMPZ/43                   ?0        #176                 ?327                	;0	>>327
326 145  GOTO/253                  ?0        ?335                 ?264                	;0
327 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   265:'intval'        	;1	<<325
328 147  FETCH_STATIC_PROP_FUNC_ARG/177 $177=     267:'rSettings'      268:'XUI'           	;1
329 147  FETCH_DIM_FUNC_ARG/93     $178=     $177                 270:'segment_wait_time'	;1
330 147  SEND_VAR_EX/66            ?80       $178                 ?1                  	;0
331 147  DO_FCALL_BY_NAME/131      $179=     ?0                   ?0                  	;0
332 147  JMP_SET/152               #180=     $179                 ?334                	;0
333 147  QM_ASSIGN/22              #180=     271:20               ?0                  	;0
334 147  ASSIGN/38                 ?147      16?18                #180                	;0
335 150  GOTO/253                  ?0        ?545                 ?272                	;0
336 152  INIT_FCALL_BY_NAME/59     ?0        ?0                   273:'fclose'        	;1
337 152  SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
338 152  DO_FCALL_BY_NAME/131      ?148      ?0                   ?0                  	;0
339 153  ASSIGN/38                 ?149      16?17                275:0               	;0
340 154  POST_INC/36               #184=     16?16                ?0                  	;0
341 154  FREE/70                   ?0        #184                 ?0                  	;0
342 155  GOTO/253                  ?0        ?335                 ?276                	;0
343 157  GOTO/253                  ?0        ?388                 ?277                	;0
344 160  ASSIGN/38                 ?151      16?17                278:0               	;0
345 161  INIT_FCALL_BY_NAME/59     ?0        ?0                   279:'time'          	;0
346 161  DO_FCALL_BY_NAME/131      $186=     ?0                   ?0                  	;0
347 161  ASSIGN/38                 ?153      16?22                $186                	;0
348 162  INIT_FCALL_BY_NAME/59     ?0        ?0                   281:'fopen'         	;2
349 162  FETCH_CONSTANT/99         #188=     ?0                   283:'STREAMS_PATH'  	;16
350 162  CONCAT/8                  #189=     #188                 16?19               	;0
351 162  SEND_VAL_EX/116           ?80       #189                 ?1                  	;0
352 162  SEND_VAL_EX/116           ?96       286:'r'              ?2                  	;0
353 162  DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
354 162  ASSIGN/38                 ?157      16?20                $190                	;0
355 164  GOTO/253                  ?0        ?356                 ?287                	;0
356 166  IS_SMALLER_OR_EQUAL/20    #192=     16?17                16?18               	;0
357 166  JMPZ_EX/46                #192=     #192                 ?365                	;0	>>365
358 166  INIT_FCALL_BY_NAME/59     ?0        ?0                   288:'file_exists'   	;1
359 166  FETCH_CONSTANT/99         #193=     ?0                   290:'STREAMS_PATH'  	;16
360 166  CONCAT/8                  #194=     #193                 16?23               	;0
361 166  SEND_VAL_EX/116           ?80       #194                 ?1                  	;0
362 166  DO_FCALL_BY_NAME/131      $195=     ?0                   ?0                  	;0
363 166  BOOL_NOT/13               #196=     $195                 ?0                  	;0
364 166  BOOL/52                   #192=     #196                 ?0                  	;0
365 166  BOOL_NOT/13               #197=     #192                 ?0                  	;0	<<357
366 166  JMPZ/43                   ?0        #197                 ?368                	;0	>>368
367 167  GOTO/253                  ?0        ?473                 ?293                	;0
368 169  INIT_FCALL_BY_NAME/59     ?0        ?0                   294:'stream_get_line'	;2	<<366
369 169  SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
370 169  FETCH_STATIC_PROP_FUNC_ARG/177 $198=     296:'rSettings'      297:'XUI'           	;2
371 169  FETCH_DIM_FUNC_ARG/93     $199=     $198                 299:'read_buffer_size'	;2
372 169  SEND_VAR_EX/66            ?96       $199                 ?2                  	;0
373 169  DO_FCALL_BY_NAME/131      $200=     ?0                   ?0                  	;0
374 169  ASSIGN/38                 ?167      16?24                $200                	;0
375 170  ISSET_ISEMPTY_CV/197      #202=     16?24                ?0                  	;16777216
376 170  BOOL_NOT/13               #203=     #202                 ?0                  	;0
377 170  JMPZ/43                   ?0        #203                 ?379                	;0	>>379
378 171  GOTO/253                  ?0        ?518                 ?300                	;0
379 173  INIT_STATIC_METHOD_CALL/113 ?0        301:'XUI'            303:'B4aB2A8eB0AA68eE'	;2	<<377
380 173  FETCH_DIM_FUNC_ARG/93     $204=     16?9                 305:'pid'           	;1
381 173  SEND_VAR_EX/66            ?80       $204                 ?1                  	;0
382 173  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
383 173  DO_FCALL/60               $205=     ?0                   ?0                  	;0
384 173  JMPZ/43                   ?0        $205                 ?386                	;0	>>386
385 174  GOTO/253                  ?0        ?512                 ?306                	;0
386 176  GOTO/253                  ?0        ?473                 ?307                	;0	<<384
387 177  GOTO/253                  ?0        ?512                 ?308                	;0
388 179  GOTO/253                  ?0        ?595                 ?309                	;0
389 180  GOTO/253                  ?0        ?595                 ?310                	;0
390 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   311:'ftell'         	;1
391 182  SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
392 182  DO_FCALL_BY_NAME/131      $206=     ?0                   ?0                  	;0
393 182  SUB/2                     #207=     16?21                $206                	;0
394 182  ASSIGN/38                 ?174      16?25                #207                	;0
395 183  IS_SMALLER/19             #209=     313:0                16?25               	;0
396 183  BOOL_NOT/13               #210=     #209                 ?0                  	;0
397 183  JMPZ/43                   ?0        #210                 ?399                	;0	>>399
398 184  GOTO/253                  ?0        ?404                 ?314                	;0
399 186  INIT_FCALL_BY_NAME/59     ?0        ?0                   315:'stream_get_line'	;2	<<397
400 186  SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
401 186  SEND_VAR_EX/66            ?96       16?25                ?2                  	;0
402 186  DO_FCALL_BY_NAME/131      $211=     ?0                   ?0                  	;0
403 186  ECHO/40                   ?0        $211                 ?0                  	;0
404 189  GOTO/253                  ?0        ?336                 ?317                	;0
405 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   318:'header'        	;1
406 191  SEND_VAL_EX/116           ?80       320:'Content-Type: video/mp2t' ?1                  	;0
407 191  DO_FCALL_BY_NAME/131      ?178      ?0                   ?0                  	;0
408 192  INIT_FCALL_BY_NAME/59     ?0        ?0                   321:'file_exists'   	;1
409 192  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
410 192  DO_FCALL_BY_NAME/131      $213=     ?0                   ?0                  	;0
411 192  JMPZ/43                   ?0        $213                 ?413                	;0	>>413
412 193  GOTO/253                  ?0        ?415                 ?323                	;0
413 195  ASSIGN/38                 ?180      16?26                324:NULL            	;0	<<411
414 196  GOTO/253                  ?0        ?424                 ?325                	;0
415 198  GOTO/253                  ?0        ?483                 ?326                	;0
416 201  INIT_STATIC_METHOD_CALL/113 ?0        327:'XUI'            329:'B0fBCFF8A7D2659D'	;3
417 201  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
418 201  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
419 201  FETCH_STATIC_PROP_FUNC_ARG/177 $215=     331:'rSegmentSettings' 332:'XUI'           	;3
420 201  FETCH_DIM_FUNC_ARG/93     $216=     $215                 334:'seg_time'      	;3
421 201  SEND_VAR_EX/66            ?112      $216                 ?3                  	;0
422 201  DO_FCALL/60               $217=     ?0                   ?0                  	;0
423 201  ASSIGN/38                 ?184      16?26                $217                	;0
424 203  INIT_FCALL_BY_NAME/59     ?0        ?0                   335:'is_null'       	;1
425 203  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
426 203  DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
427 203  BOOL_NOT/13               #220=     $219                 ?0                  	;0
428 203  JMPZ/43                   ?0        #220                 ?430                	;0	>>430
429 204  GOTO/253                  ?0        ?475                 ?337                	;0
430 206  INIT_FCALL_BY_NAME/59     ?0        ?0                   338:'file_exists'   	;1	<<428
431 206  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
432 206  DO_FCALL_BY_NAME/131      $221=     ?0                   ?0                  	;0
433 206  BOOL_NOT/13               #222=     $221                 ?0                  	;0
434 206  JMPZ/43                   ?0        #222                 ?436                	;0	>>436
435 207  GOTO/253                  ?0        ?279                 ?340                	;0
436 209  GOTO/253                  ?0        ?277                 ?341                	;0	<<434
437 211  INIT_FCALL_BY_NAME/59     ?0        ?0                   342:'file_exists'   	;1
438 211  FETCH_CONSTANT/99         #223=     ?0                   344:'STREAMS_PATH'  	;16
439 211  CONCAT/8                  #224=     #223                 16?19               	;0
440 211  SEND_VAL_EX/116           ?80       #224                 ?1                  	;0
441 211  DO_FCALL_BY_NAME/131      $225=     ?0                   ?0                  	;0
442 211  JMPZ/43                   ?0        $225                 ?444                	;0	>>444
443 212  GOTO/253                  ?0        ?445                 ?347                	;0
444 214  EXIT/79                   ?0        ?0                   ?0                  	;0	<<442
445 216  ISSET_ISEMPTY_DIM_OBJ/115 #226=     16?9                 348:'pid'           	;16777216
446 216  JMPZ_EX/46                #226=     #226                 ?454                	;0	>>454
447 216  INIT_FCALL_BY_NAME/59     ?0        ?0                   349:'file_exists'   	;1
448 216  FETCH_CONSTANT/99         #227=     ?0                   351:'STREAMS_PATH'  	;16
449 216  CONCAT/8                  #228=     #227                 16?5                	;0
450 216  CONCAT/8                  #229=     #228                 354:'_.pid'         	;0
451 216  SEND_VAL_EX/116           ?80       #229                 ?1                  	;0
452 216  DO_FCALL_BY_NAME/131      $230=     ?0                   ?0                  	;0
453 216  BOOL/52                   #226=     $230                 ?0                  	;0
454 216  BOOL_NOT/13               #231=     #226                 ?0                  	;0	<<446
455 216  JMPZ/43                   ?0        #231                 ?457                	;0	>>457
456 217  GOTO/253                  ?0        ?344                 ?355                	;0
457 219  INIT_FCALL_BY_NAME/59     ?0        ?0                   357:'intval'        	;1	<<455
458 219  INIT_FCALL_BY_NAME/59     ?0        ?0                   359:'file_get_contents'	;1
459 219  FETCH_CONSTANT/99         #233=     ?0                   361:'STREAMS_PATH'  	;16
460 219  CONCAT/8                  #234=     #233                 16?5                	;0
461 219  CONCAT/8                  #235=     #234                 364:'_.pid'         	;0
462 219  SEND_VAL_EX/116           ?80       #235                 ?1                  	;0
463 219  DO_FCALL_BY_NAME/131      $236=     ?0                   ?0                  	;0
464 219  SEND_VAR_NO_REF_EX/50     ?80       $236                 ?1                  	;0
465 219  DO_FCALL_BY_NAME/131      $237=     ?0                   ?0                  	;0
466 219  ASSIGN_DIM/147            ?198      16?9                 356:'pid'           	;0
467 219  OP_DATA/137               ?0        $237                 ?0                  	;0
468 220  GOTO/253                  ?0        ?344                 ?365                	;0
469 222  ECHO/40                   ?0        16?24                ?0                  	;0
470 223  ASSIGN/38                 ?204      16?24                366:''              	;0
471 224  ASSIGN/38                 ?205      16?17                367:0               	;0
472 225  GOTO/253                  ?0        ?355                 ?368                	;0
473 227  GOTO/253                  ?0        ?281                 ?369                	;0
474 229  GOTO/253                  ?0        ?573                 ?370                	;0
475 231  INIT_FCALL_BY_NAME/59     ?0        ?0                   371:'is_array'      	;1
476 231  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
477 231  DO_FCALL_BY_NAME/131      $240=     ?0                   ?0                  	;0
478 231  JMPZ/43                   ?0        $240                 ?480                	;0	>>480
479 232  GOTO/253                  ?0        ?519                 ?373                	;0
480 234  ASSIGN/38                 ?207      16?16                16?26               	;0	<<478
481 235  GOTO/253                  ?0        ?573                 ?374                	;0
482 236  GOTO/253                  ?0        ?519                 ?375                	;0
483 238  INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'file_exists'   	;1
484 238  FETCH_CONSTANT/99         #242=     ?0                   378:'STREAMS_PATH'  	;16
485 238  CONCAT/8                  #243=     #242                 16?5                	;0
486 238  CONCAT/8                  #244=     #243                 381:'_.dur'         	;0
487 238  SEND_VAL_EX/116           ?80       #244                 ?1                  	;0
488 238  DO_FCALL_BY_NAME/131      $245=     ?0                   ?0                  	;0
489 238  BOOL_NOT/13               #246=     $245                 ?0                  	;0
490 238  JMPZ/43                   ?0        #246                 ?492                	;0	>>492
491 239  GOTO/253                  ?0        ?416                 ?382                	;0
492 241  INIT_FCALL_BY_NAME/59     ?0        ?0                   383:'intval'        	;1	<<490
493 241  INIT_FCALL_BY_NAME/59     ?0        ?0                   385:'file_get_contents'	;1
494 241  FETCH_CONSTANT/99         #247=     ?0                   387:'STREAMS_PATH'  	;16
495 241  CONCAT/8                  #248=     #247                 16?5                	;0
496 241  CONCAT/8                  #249=     #248                 390:'_.dur'         	;0
497 241  SEND_VAL_EX/116           ?80       #249                 ?1                  	;0
498 241  DO_FCALL_BY_NAME/131      $250=     ?0                   ?0                  	;0
499 241  SEND_VAR_NO_REF_EX/50     ?80       $250                 ?1                  	;0
500 241  DO_FCALL_BY_NAME/131      $251=     ?0                   ?0                  	;0
501 241  ASSIGN/38                 ?218      16?27                $251                	;0
502 242  FETCH_STATIC_PROP_R/173   $253=     391:'rSegmentSettings' 392:'XUI'           	;0
503 242  FETCH_DIM_R/81            $254=     $253                 394:'seg_time'      	;0
504 242  IS_SMALLER/19             #255=     $254                 16?27               	;0
505 242  BOOL_NOT/13               #256=     #255                 ?0                  	;0
506 242  JMPZ/43                   ?0        #256                 ?508                	;0	>>508
507 243  GOTO/253                  ?0        ?511                 ?395                	;0
508 245  FETCH_STATIC_PROP_W/174   $257=     396:'rSegmentSettings' 397:'XUI'           	;0	<<506
509 245  ASSIGN_DIM/147            ?224      $257                 399:'seg_time'      	;0
510 245  OP_DATA/137               ?0        16?27                ?0                  	;0
511 247  GOTO/253                  ?0        ?416                 ?400                	;0
512 250  INIT_FCALL_BY_NAME/59     ?0        ?0                   401:'sleep'         	;1
513 250  SEND_VAL_EX/116           ?80       403:1                ?1                  	;0
514 250  DO_FCALL_BY_NAME/131      ?225      ?0                   ?0                  	;0
515 251  POST_INC/36               #260=     16?17                ?0                  	;0
516 251  FREE/70                   ?0        #260                 ?0                  	;0
517 252  GOTO/253                  ?0        ?355                 ?404                	;0
518 254  GOTO/253                  ?0        ?469                 ?405                	;0
519 257  ASSIGN/38                 ?227      16?12                406:0               	;0
520 258  INIT_FCALL_BY_NAME/59     ?0        ?0                   407:'time'          	;0
521 258  DO_FCALL_BY_NAME/131      $262=     ?0                   ?0                  	;0
522 258  ASSIGN/38                 ?229      16?28                $262                	;0
523 259  FE_RESET_R/77             $264=     16?26                ?543                	;0
524 259  FE_FETCH_R/78             ?0        $264                 16?13               	;543	>>543	<<542
525 260  INIT_FCALL_BY_NAME/59     ?0        ?0                   409:'file_exists'   	;1
526 260  FETCH_CONSTANT/99         #265=     ?0                   411:'STREAMS_PATH'  	;16
527 260  CONCAT/8                  #266=     #265                 16?13               	;0
528 260  SEND_VAL_EX/116           ?80       #266                 ?1                  	;0
529 260  DO_FCALL_BY_NAME/131      $267=     ?0                   ?0                  	;0
530 260  JMPZ/43                   ?0        $267                 ?533                	;0	>>533
531 261  NOP/0                     ?0        ?0                   ?0                  	;1
532 261  GOTO/253                  ?0        ?536                 ?414                	;0
533 263  EXIT/79                   ?0        ?0                   ?0                  	;0	<<530
534 264  NOP/0                     ?0        ?0                   ?0                  	;1
535 264  GOTO/253                  ?0        ?542                 ?415                	;0
536 266  INIT_FCALL_BY_NAME/59     ?0        ?0                   416:'readfile'      	;1
537 266  FETCH_CONSTANT/99         #268=     ?0                   418:'STREAMS_PATH'  	;16
538 266  CONCAT/8                  #269=     #268                 16?13               	;0
539 266  SEND_VAL_EX/116           ?80       #269                 ?1                  	;0
540 266  DO_FCALL_BY_NAME/131      $270=     ?0                   ?0                  	;0
541 266  ASSIGN_ADD/23             ?237      16?12                $270                	;0
542 268  JMP/42                    ?0        ?524                 ?0                  	;0	>>524
543 268  FE_FREE/127               ?0        $264                 ?0                  	;0	<<523
544 271  GOTO/253                  ?0        ?563                 ?421                	;0
545 273  JMPZ/43                   ?0        422:false            ?547                	;0	>>547
546 274  GOTO/253                  ?0        ?343                 ?423                	;0
547 276  INIT_FCALL_BY_NAME/59     ?0        ?0                   424:'sprintf'       	;3	<<545
548 276  SEND_VAL_EX/116           ?80       426:'%d_%d.ts'       ?1                  	;0
549 276  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
550 276  ADD/1                     #272=     16?16                427:1               	;0
551 276  SEND_VAL_EX/116           ?112      #272                 ?3                  	;0
552 276  DO_FCALL_BY_NAME/131      $273=     ?0                   ?0                  	;0
553 276  ASSIGN/38                 ?240      16?19                $273                	;0
554 277  INIT_FCALL_BY_NAME/59     ?0        ?0                   428:'sprintf'       	;3
555 277  SEND_VAL_EX/116           ?80       430:'%d_%d.ts'       ?1                  	;0
556 277  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
557 277  ADD/1                     #275=     16?16                431:2               	;0
558 277  SEND_VAL_EX/116           ?112      #275                 ?3                  	;0
559 277  DO_FCALL_BY_NAME/131      $276=     ?0                   ?0                  	;0
560 277  ASSIGN/38                 ?243      16?23                $276                	;0
561 278  ASSIGN/38                 ?244      16?29                432:0               	;0
562 280  GOTO/253                  ?0        ?575                 ?433                	;0
563 282  INIT_FCALL_BY_NAME/59     ?0        ?0                   434:'preg_match'    	;3
564 282  SEND_VAL_EX/116           ?80       436:'/_(.*)\\./'     ?1                  	;0
565 282  INIT_FCALL_BY_NAME/59     ?0        ?0                   437:'array_pop'     	;1
566 282  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
567 282  DO_FCALL_BY_NAME/131      $279=     ?0                   ?0                  	;0
568 282  SEND_VAR_NO_REF_EX/50     ?96       $279                 ?2                  	;0
569 282  SEND_VAR_EX/66            ?112      16?30                ?3                  	;0
570 282  DO_FCALL_BY_NAME/131      ?246      ?0                   ?0                  	;0
571 283  FETCH_DIM_R/81            $281=     16?30                439:1               	;0
572 283  ASSIGN/38                 ?248      16?16                $281                	;0
573 286  ASSIGN/38                 ?249      16?17                440:0               	;0
574 287  GOTO/253                  ?0        ?312                 ?441                	;0
575 289  INIT_FCALL_BY_NAME/59     ?0        ?0                   442:'file_exists'   	;1
576 289  FETCH_CONSTANT/99         #284=     ?0                   444:'STREAMS_PATH'  	;16
577 289  CONCAT/8                  #285=     #284                 16?19               	;0
578 289  SEND_VAL_EX/116           ?80       #285                 ?1                  	;0
579 289  DO_FCALL_BY_NAME/131      $286=     ?0                   ?0                  	;0
580 289  BOOL_NOT/13               #287=     $286                 ?0                  	;0
581 289  JMPZ_EX/46                #287=     #287                 ?585                	;0	>>585
582 289  MUL/3                     #288=     16?18                447:10              	;0
583 289  IS_SMALLER_OR_EQUAL/20    #289=     16?29                #288                	;0
584 289  BOOL/52                   #287=     #289                 ?0                  	;0
585 289  BOOL_NOT/13               #290=     #287                 ?0                  	;0	<<581
586 289  JMPZ/43                   ?0        #290                 ?588                	;0	>>588
587 290  GOTO/253                  ?0        ?594                 ?448                	;0
588 292  INIT_FCALL_BY_NAME/59     ?0        ?0                   449:'usleep'        	;1	<<586
589 292  SEND_VAL_EX/116           ?80       451:100000           ?1                  	;0
590 292  DO_FCALL_BY_NAME/131      ?257      ?0                   ?0                  	;0
591 293  POST_INC/36               #292=     16?29                ?0                  	;0
592 293  FREE/70                   ?0        #292                 ?0                  	;0
593 294  GOTO/253                  ?0        ?562                 ?452                	;0
594 296  GOTO/253                  ?0        ?437                 ?453                	;0
595 302  GOTO/253                  ?0        ?885                 ?454                	;0
596 304  INIT_FCALL_BY_NAME/59     ?0        ?0                   455:'touch'         	;1
597 304  FETCH_CONSTANT/99         #293=     ?0                   457:'SIGNALS_TMP_PATH'	;16
598 304  CONCAT/8                  #294=     #293                 460:'admin_'        	;0
599 304  INIT_FCALL_BY_NAME/59     ?0        ?0                   461:'intval'        	;1
600 304  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
601 304  DO_FCALL_BY_NAME/131      $295=     ?0                   ?0                  	;0
602 304  CONCAT/8                  #296=     #294                 $295                	;0
603 304  SEND_VAL_EX/116           ?80       #296                 ?1                  	;0
604 304  DO_FCALL_BY_NAME/131      ?263      ?0                   ?0                  	;0
605 305  INIT_METHOD_CALL/112      ?0        16?4                 463:'get_row'       	;0
606 305  DO_FCALL/60               $298=     ?0                   ?0                  	;0
607 305  ASSIGN/38                 ?265      16?9                 $298                	;0
608 306  INIT_METHOD_CALL/112      ?0        16?4                 465:'close_mysql'   	;0
609 306  DO_FCALL/60               ?266      ?0                   ?0                  	;0
610 307  INIT_FCALL_BY_NAME/59     ?0        ?0                   467:'file_exists'   	;1
611 307  FETCH_CONSTANT/99         #301=     ?0                   469:'STREAMS_PATH'  	;16
612 307  CONCAT/8                  #302=     #301                 16?5                	;0
613 307  CONCAT/8                  #303=     #302                 472:'_.pid'         	;0
614 307  SEND_VAL_EX/116           ?80       #303                 ?1                  	;0
615 307  DO_FCALL_BY_NAME/131      $304=     ?0                   ?0                  	;0
616 307  BOOL_NOT/13               #305=     $304                 ?0                  	;0
617 307  JMPZ/43                   ?0        #305                 ?619                	;0	>>619
618 308  GOTO/253                  ?0        ?644                 ?473                	;0
619 310  INIT_FCALL_BY_NAME/59     ?0        ?0                   475:'intval'        	;1	<<617
620 310  INIT_FCALL_BY_NAME/59     ?0        ?0                   477:'file_get_contents'	;1
621 310  FETCH_CONSTANT/99         #307=     ?0                   479:'STREAMS_PATH'  	;16
622 310  CONCAT/8                  #308=     #307                 16?5                	;0
623 310  CONCAT/8                  #309=     #308                 482:'_.pid'         	;0
624 310  SEND_VAL_EX/116           ?80       #309                 ?1                  	;0
625 310  DO_FCALL_BY_NAME/131      $310=     ?0                   ?0                  	;0
626 310  SEND_VAR_NO_REF_EX/50     ?80       $310                 ?1                  	;0
627 310  DO_FCALL_BY_NAME/131      $311=     ?0                   ?0                  	;0
628 310  ASSIGN_DIM/147            ?272      16?9                 474:'pid'           	;0
629 310  OP_DATA/137               ?0        $311                 ?0                  	;0
630 311  GOTO/253                  ?0        ?644                 ?483                	;0
631 316  INIT_FCALL_BY_NAME/59     ?0        ?0                   484:'intval'        	;1
632 316  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
633 316  DO_FCALL_BY_NAME/131      $312=     ?0                   ?0                  	;0
634 316  MUL/3                     #313=     $312                 486:10              	;0
635 316  IS_EQUAL/17               #314=     16?2                 #313                	;0
636 316  JMPZ/43                   ?0        #314                 ?638                	;0	>>638
637 317  GOTO/253                  ?0        ?752                 ?487                	;0
638 319  FETCH_STATIC_PROP_IS/176  $315=     488:'rRequest'       489:'XUI'           	;0	<<636
639 319  ISSET_ISEMPTY_DIM_OBJ/115 #316=     $315                 491:'odstart'       	;33554432
640 319  BOOL_NOT/13               #317=     #316                 ?0                  	;0
641 319  JMPZ/43                   ?0        #317                 ?643                	;0	>>643
642 320  GOTO/253                  ?0        ?751                 ?492                	;0
643 322  GOTO/253                  ?0        ?749                 ?493                	;0	<<641
644 325  INIT_FCALL_BY_NAME/59     ?0        ?0                   494:'file_exists'   	;1
645 325  FETCH_CONSTANT/99         #318=     ?0                   496:'STREAMS_PATH'  	;16
646 325  CONCAT/8                  #319=     #318                 16?5                	;0
647 325  CONCAT/8                  #320=     #319                 499:'_.monitor'     	;0
648 325  SEND_VAL_EX/116           ?80       #320                 ?1                  	;0
649 325  DO_FCALL_BY_NAME/131      $321=     ?0                   ?0                  	;0
650 325  BOOL_NOT/13               #322=     $321                 ?0                  	;0
651 325  JMPZ/43                   ?0        #322                 ?653                	;0	>>653
652 326  GOTO/253                  ?0        ?664                 ?500                	;0
653 328  INIT_FCALL_BY_NAME/59     ?0        ?0                   502:'intval'        	;1	<<651
654 328  INIT_FCALL_BY_NAME/59     ?0        ?0                   504:'file_get_contents'	;1
655 328  FETCH_CONSTANT/99         #324=     ?0                   506:'STREAMS_PATH'  	;16
656 328  CONCAT/8                  #325=     #324                 16?5                	;0
657 328  CONCAT/8                  #326=     #325                 509:'_.monitor'     	;0
658 328  SEND_VAL_EX/116           ?80       #326                 ?1                  	;0
659 328  DO_FCALL_BY_NAME/131      $327=     ?0                   ?0                  	;0
660 328  SEND_VAR_NO_REF_EX/50     ?80       $327                 ?1                  	;0
661 328  DO_FCALL_BY_NAME/131      $328=     ?0                   ?0                  	;0
662 328  ASSIGN_DIM/147            ?289      16?9                 501:'monitor_pid'   	;0
663 328  OP_DATA/137               ?0        $328                 ?0                  	;0
664 330  FETCH_STATIC_PROP_R/173   $329=     510:'rSettings'      511:'XUI'           	;0
665 330  FETCH_DIM_R/81            $330=     $329                 513:'on_demand_instant_off'	;0
666 330  JMPZ_EX/46                #331=     $330                 ?670                	;0	>>670
667 330  FETCH_DIM_R/81            $332=     16?9                 514:'on_demand'     	;0
668 330  IS_EQUAL/17               #333=     $332                 515:1               	;0
669 330  BOOL/52                   #331=     #333                 ?0                  	;0
670 330  BOOL_NOT/13               #334=     #331                 ?0                  	;0	<<666
671 330  JMPZ/43                   ?0        #334                 ?673                	;0	>>673
672 331  GOTO/253                  ?0        ?150                 ?516                	;0
673 333  GOTO/253                  ?0        ?146                 ?517                	;0	<<671
674 335  FETCH_STATIC_PROP_IS/176  $335=     518:'rRequest'       519:'XUI'           	;0
675 335  ISSET_ISEMPTY_DIM_OBJ/115 #336=     $335                 521:'password'      	;16777216
676 335  JMPNZ_EX/47               #336=     #336                 ?683                	;0	>>683
677 335  FETCH_STATIC_PROP_R/173   $337=     522:'rSettings'      523:'XUI'           	;0
678 335  FETCH_DIM_R/81            $338=     $337                 525:'live_streaming_pass'	;0
679 335  FETCH_STATIC_PROP_R/173   $339=     526:'rRequest'       527:'XUI'           	;0
680 335  FETCH_DIM_R/81            $340=     $339                 529:'password'      	;0
681 335  IS_NOT_EQUAL/18           #341=     $338                 $340                	;0
682 335  BOOL/52                   #336=     #341                 ?0                  	;0
683 335  JMPZ/43                   ?0        #336                 ?685                	;0	>>685	<<676
684 336  GOTO/253                  ?0        ?881                 ?530                	;0
685 338  INIT_FCALL_BY_NAME/59     ?0        ?0                   531:'in_array'      	;2	<<683
686 338  SEND_VAR_EX/66            ?80       16?31                ?1                  	;0
687 338  INIT_STATIC_METHOD_CALL/113 ?0        533:'XUI'            535:'dE052F142A92e9BF'	;0
688 338  DO_FCALL/60               $342=     ?0                   ?0                  	;0
689 338  SEND_VAR_NO_REF_EX/50     ?96       $342                 ?2                  	;0
690 338  DO_FCALL_BY_NAME/131      $343=     ?0                   ?0                  	;0
691 338  BOOL_NOT/13               #344=     $343                 ?0                  	;0
692 338  JMPZ/43                   ?0        #344                 ?694                	;0	>>694
693 339  GOTO/253                  ?0        ?877                 ?537                	;0
694 341  FETCH_STATIC_PROP_IS/176  $345=     538:'rRequest'       539:'XUI'           	;0	<<692
695 341  ISSET_ISEMPTY_DIM_OBJ/115 #346=     $345                 541:'prebuffer'     	;33554432
696 341  JMPZ/43                   ?0        #346                 ?701                	;0	>>701
697 341  FETCH_STATIC_PROP_R/173   $347=     542:'rSegmentSettings' 543:'XUI'           	;0
698 341  FETCH_DIM_R/81            $348=     $347                 545:'seg_time'      	;0
699 341  QM_ASSIGN/22              #349=     $348                 ?0                  	;0
700 341  JMP/42                    ?0        ?702                 ?0                  	;0	>>702
701 341  QM_ASSIGN/22              #349=     546:0                ?0                  	;0	<<696
702 341  ASSIGN/38                 ?316      16?11                #349                	;0	<<700
703 342  INIT_FCALL_BY_NAME/59     ?0        ?0                   547:'getallheaders' 	;0
704 342  DO_FCALL_BY_NAME/131      $351=     ?0                   ?0                  	;0
705 342  FE_RESET_R/77             $352=     $351                 ?720                	;0
706 342  FE_FETCH_R/78             #353=     $352                 16?32               	;720	>>720	<<719
707 342  ASSIGN/38                 ?320      16?33                #353                	;0
708 343  INIT_FCALL_BY_NAME/59     ?0        ?0                   549:'strtoupper'    	;1
709 343  SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
710 343  DO_FCALL_BY_NAME/131      $355=     ?0                   ?0                  	;0
711 343  IS_EQUAL/17               #356=     $355                 551:'X-XUI-PREBUFFER'	;0
712 343  BOOL_NOT/13               #357=     #356                 ?0                  	;0
713 343  JMPZ/43                   ?0        #357                 ?716                	;0	>>716
714 344  NOP/0                     ?0        ?0                   ?0                  	;1
715 344  GOTO/253                  ?0        ?719                 ?552                	;0
716 346  FETCH_STATIC_PROP_R/173   $358=     553:'rSegmentSettings' 554:'XUI'           	;0	<<713
717 346  FETCH_DIM_R/81            $359=     $358                 556:'seg_time'      	;0
718 346  ASSIGN/38                 ?326      16?11                $359                	;0
719 348  JMP/42                    ?0        ?706                 ?0                  	;0	>>706
720 348  FE_FREE/127               ?0        $352                 ?0                  	;0	<<705
721 351  GOTO/253                  ?0        ?876                 ?557                	;0
722 353  FETCH_STATIC_PROP_W/174   $361=     558:'db'             559:'XUI'           	;0
723 353  ASSIGN_REF/39             ?328      $361                 16?4                	;0
724 354  FETCH_STATIC_PROP_R/173   $363=     561:'rSettings'      562:'XUI'           	;0
725 354  FETCH_DIM_R/81            $364=     $363                 564:'live_streaming_pass'	;0
726 354  ASSIGN/38                 ?331      16?15                $364                	;0
727 355  INIT_FCALL_BY_NAME/59     ?0        ?0                   565:'intval'        	;1
728 355  FETCH_STATIC_PROP_FUNC_ARG/177 $366=     567:'rRequest'       568:'XUI'           	;1
729 355  FETCH_DIM_FUNC_ARG/93     $367=     $366                 570:'stream'        	;1
730 355  SEND_VAR_EX/66            ?80       $367                 ?1                  	;0
731 355  DO_FCALL_BY_NAME/131      $368=     ?0                   ?0                  	;0
732 355  ASSIGN/38                 ?335      16?5                 $368                	;0
733 356  FETCH_STATIC_PROP_R/173   $370=     571:'rRequest'       572:'XUI'           	;0
734 356  FETCH_DIM_R/81            $371=     $370                 574:'extension'     	;0
735 356  ASSIGN/38                 ?338      16?6                 $371                	;0
736 357  ASSIGN/38                 ?339      16?3                 575:20              	;0
737 358  GOTO/253                  ?0        ?28                  ?576                	;0
738 361  GOTO/253                  ?0        ?631                 ?577                	;0
739 363  INIT_FCALL_BY_NAME/59     ?0        ?0                   578:'file_exists'   	;1
740 363  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
741 363  DO_FCALL_BY_NAME/131      $374=     ?0                   ?0                  	;0
742 363  JMPZ/43                   ?0        $374                 ?744                	;0	>>744
743 364  GOTO/253                  ?0        ?631                 ?580                	;0
744 366  FETCH_CONSTANT/99         #375=     ?0                   581:'STREAMS_PATH'  	;16	<<742
745 366  CONCAT/8                  #376=     #375                 16?5                	;0
746 366  CONCAT/8                  #377=     #376                 584:'_0.ts'         	;0
747 366  ASSIGN/38                 ?344      16?1                 #377                	;0
748 367  GOTO/253                  ?0        ?753                 ?585                	;0
749 369  ECHO/40                   ?0        586:'1'              ?0                  	;0
750 370  EXIT/79                   ?0        ?0                   ?0                  	;0
751 372  GOTO/253                  ?0        ?131                 ?587                	;0
752 374  GOTO/253                  ?0        ?867                 ?588                	;0
753 376  ASSIGN/38                 ?345      16?20                589:NULL            	;0
754 378  INIT_FCALL_BY_NAME/59     ?0        ?0                   590:'intval'        	;1
755 378  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
756 378  DO_FCALL_BY_NAME/131      $380=     ?0                   ?0                  	;0
757 378  MUL/3                     #381=     $380                 592:100             	;0
758 378  IS_SMALLER/19             #382=     16?2                 #381                	;0
759 378  BOOL_NOT/13               #383=     #382                 ?0                  	;0
760 378  JMPZ/43                   ?0        #383                 ?762                	;0	>>762
761 379  GOTO/253                  ?0        ?860                 ?593                	;0
762 381  INIT_FCALL_BY_NAME/59     ?0        ?0                   594:'file_exists'   	;1	<<760
763 381  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
764 381  DO_FCALL_BY_NAME/131      $384=     ?0                   ?0                  	;0
765 381  JMPZ_EX/46                #385=     $384                 ?768                	;0	>>768
766 381  BOOL_NOT/13               #386=     16?20                ?0                  	;0
767 381  BOOL/52                   #385=     #386                 ?0                  	;0
768 381  BOOL_NOT/13               #387=     #385                 ?0                  	;0	<<765
769 381  JMPZ/43                   ?0        #387                 ?771                	;0	>>771
770 382  GOTO/253                  ?0        ?827                 ?596                	;0
771 384  INIT_FCALL_BY_NAME/59     ?0        ?0                   597:'fopen'         	;2	<<769
772 384  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
773 384  SEND_VAL_EX/116           ?96       599:'r'              ?2                  	;0
774 384  DO_FCALL_BY_NAME/131      $388=     ?0                   ?0                  	;0
775 384  ASSIGN/38                 ?355      16?20                $388                	;0
776 385  GOTO/253                  ?0        ?827                 ?600                	;0
777 387  GOTO/253                  ?0        ?805                 ?601                	;0
778 389  INIT_FCALL_BY_NAME/59     ?0        ?0                   603:'intval'        	;1
779 389  INIT_FCALL_BY_NAME/59     ?0        ?0                   605:'file_get_contents'	;1
780 389  FETCH_CONSTANT/99         #391=     ?0                   607:'STREAMS_PATH'  	;16
781 389  CONCAT/8                  #392=     #391                 16?5                	;0
782 389  CONCAT/8                  #393=     #392                 610:'_.monitor'     	;0
783 389  SEND_VAL_EX/116           ?80       #393                 ?1                  	;0
784 389  DO_FCALL_BY_NAME/131      $394=     ?0                   ?0                  	;0
785 389  SEND_VAR_NO_REF_EX/50     ?80       $394                 ?1                  	;0
786 389  DO_FCALL_BY_NAME/131      $395=     ?0                   ?0                  	;0
787 389  ASSIGN_DIM/147            ?356      16?9                 602:'monitor_pid'   	;0
788 389  OP_DATA/137               ?0        $395                 ?0                  	;0
789 392  GOTO/253                  ?0        ?43                  ?611                	;0
790 394  INIT_FCALL_BY_NAME/59     ?0        ?0                   612:'f82199Eff9017Bc9'	;0
791 394  DO_FCALL_BY_NAME/131      ?362      ?0                   ?0                  	;0
792 395  GOTO/253                  ?0        ?789                 ?614                	;0
793 397  INIT_STATIC_METHOD_CALL/113 ?0        615:'XUI'            617:'D93af048A0e404F2'	;2
794 397  FETCH_DIM_FUNC_ARG/93     $397=     16?9                 619:'monitor_pid'   	;1
795 397  SEND_VAR_EX/66            ?80       $397                 ?1                  	;0
796 397  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
797 397  DO_FCALL/60               $398=     ?0                   ?0                  	;0
798 397  JMPZ/43                   ?0        $398                 ?800                	;0	>>800
799 398  GOTO/253                  ?0        ?789                 ?620                	;0
800 400  INIT_STATIC_METHOD_CALL/113 ?0        621:'XUI'            623:'b820C3Eb85Ebd48C'	;1	<<798
801 400  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
802 400  DO_FCALL/60               ?365      ?0                   ?0                  	;0
803 401  GOTO/253                  ?0        ?804                 ?625                	;0
804 403  ASSIGN/38                 ?366      16?2                 626:0               	;0
805 405  INIT_FCALL_BY_NAME/59     ?0        ?0                   627:'file_exists'   	;1
806 405  FETCH_CONSTANT/99         #401=     ?0                   629:'STREAMS_PATH'  	;16
807 405  INIT_FCALL_BY_NAME/59     ?0        ?0                   632:'intval'        	;1
808 405  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
809 405  DO_FCALL_BY_NAME/131      $402=     ?0                   ?0                  	;0
810 405  CONCAT/8                  #403=     #401                 $402                	;0
811 405  CONCAT/8                  #404=     #403                 634:'_.monitor'     	;0
812 405  SEND_VAL_EX/116           ?80       #404                 ?1                  	;0
813 405  DO_FCALL_BY_NAME/131      $405=     ?0                   ?0                  	;0
814 405  BOOL_NOT/13               #406=     $405                 ?0                  	;0
815 405  JMPZ_EX/46                #406=     #406                 ?818                	;0	>>818
816 405  IS_SMALLER/19             #407=     16?2                 635:300             	;0
817 405  BOOL/52                   #406=     #407                 ?0                  	;0
818 405  BOOL_NOT/13               #408=     #406                 ?0                  	;0	<<815
819 405  JMPZ/43                   ?0        #408                 ?821                	;0	>>821
820 406  GOTO/253                  ?0        ?778                 ?636                	;0
821 408  INIT_FCALL_BY_NAME/59     ?0        ?0                   637:'usleep'        	;1	<<819
822 408  SEND_VAL_EX/116           ?80       639:10000            ?1                  	;0
823 408  DO_FCALL_BY_NAME/131      ?375      ?0                   ?0                  	;0
824 409  POST_INC/36               #410=     16?2                 ?0                  	;0
825 409  FREE/70                   ?0        #410                 ?0                  	;0
826 410  GOTO/253                  ?0        ?777                 ?640                	;0
827 413  JMPZ_EX/46                #411=     16?20                ?835                	;0	>>835
828 413  INIT_FCALL_BY_NAME/59     ?0        ?0                   641:'fread'         	;2
829 413  SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
830 413  SEND_VAL_EX/116           ?96       643:1                ?2                  	;0
831 413  DO_FCALL_BY_NAME/131      $412=     ?0                   ?0                  	;0
832 413  BOOL_NOT/13               #413=     $412                 ?0                  	;0
833 413  BOOL_NOT/13               #414=     #413                 ?0                  	;0
834 413  BOOL/52                   #411=     #414                 ?0                  	;0
835 413  BOOL_NOT/13               #415=     #411                 ?0                  	;0	<<827
836 413  JMPZ/43                   ?0        #415                 ?838                	;0	>>838
837 414  GOTO/253                  ?0        ?839                 ?644                	;0
838 416  GOTO/253                  ?0        ?860                 ?645                	;0	<<836
839 418  INIT_FCALL_BY_NAME/59     ?0        ?0                   646:'usleep'        	;1
840 418  SEND_VAL_EX/116           ?80       648:10000            ?1                  	;0
841 418  DO_FCALL_BY_NAME/131      ?382      ?0                   ?0                  	;0
842 419  GOTO/253                  ?0        ?857                 ?649                	;0
843 421  INIT_FCALL_BY_NAME/59     ?0        ?0                   650:'register_shutdown_function'	;1	<<0
844 421  SEND_VAL_EX/116           ?80       652:'shutdown'       ?1                  	;0
845 421  DO_FCALL_BY_NAME/131      ?383      ?0                   ?0                  	;0
846 422  INIT_FCALL_BY_NAME/59     ?0        ?0                   653:'header'        	;1
847 422  SEND_VAL_EX/116           ?80       655:'Access-Control-Allow-Origin: *' ?1                  	;0
848 422  DO_FCALL_BY_NAME/131      ?384      ?0                   ?0                  	;0
849 423  INIT_FCALL_BY_NAME/59     ?0        ?0                   656:'set_time_limit'	;1
850 423  SEND_VAL_EX/116           ?80       658:0                ?1                  	;0
851 423  DO_FCALL_BY_NAME/131      ?385      ?0                   ?0                  	;0
852 424  INCLUDE_OR_EVAL/73        ?386      659:'../init.php'    ?0                  	;8
853 425  INIT_STATIC_METHOD_CALL/113 ?0        660:'XUI'            662:'aD72b4259CA295B2'	;0
854 425  DO_FCALL/60               $421=     ?0                   ?0                  	;0
855 425  ASSIGN/38                 ?388      16?31                $421                	;0
856 426  GOTO/253                  ?0        ?174                 ?664                	;0
857 428  POST_INC/36               #423=     16?2                 ?0                  	;0
858 428  FREE/70                   ?0        #423                 ?0                  	;0
859 429  GOTO/253                  ?0        ?754                 ?665                	;0
860 431  BOOL_NOT/13               #424=     16?20                ?0                  	;0
861 431  JMPZ/43                   ?0        #424                 ?863                	;0	>>863
862 432  GOTO/253                  ?0        ?631                 ?666                	;0
863 434  INIT_FCALL_BY_NAME/59     ?0        ?0                   667:'fclose'        	;1	<<861
864 434  SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
865 434  DO_FCALL_BY_NAME/131      ?391      ?0                   ?0                  	;0
866 435  GOTO/253                  ?0        ?631                 ?669                	;0
867 437  FETCH_STATIC_PROP_IS/176  $426=     670:'rRequest'       671:'XUI'           	;0
868 437  ISSET_ISEMPTY_DIM_OBJ/115 #427=     $426                 673:'odstart'       	;33554432
869 437  JMPZ/43                   ?0        #427                 ?871                	;0	>>871
870 438  GOTO/253                  ?0        ?874                 ?674                	;0
871 440  INIT_FCALL_BY_NAME/59     ?0        ?0                   675:'F82199EFF9017BC9'	;0	<<869
872 440  DO_FCALL_BY_NAME/131      ?394      ?0                   ?0                  	;0
873 441  GOTO/253                  ?0        ?131                 ?677                	;0
874 443  ECHO/40                   ?0        678:'0'              ?0                  	;0
875 444  GOTO/253                  ?0        ?130                 ?679                	;0
876 446  GOTO/253                  ?0        ?879                 ?680                	;0
877 448  INIT_FCALL_BY_NAME/59     ?0        ?0                   681:'f82199eff9017bc9'	;0
878 448  DO_FCALL_BY_NAME/131      ?395      ?0                   ?0                  	;0
879 450  GOTO/253                  ?0        ?883                 ?683                	;0
880 451  GOTO/253                  ?0        ?881                 ?684                	;0
881 454  INIT_FCALL_BY_NAME/59     ?0        ?0                   685:'F82199Eff9017BC9'	;0
882 454  DO_FCALL_BY_NAME/131      ?396      ?0                   ?0                  	;0
883 456  GOTO/253                  ?0        ?169                 ?687                	;0
884 458  GOTO/253                  ?0        ?56                  ?688                	;0
885 460  NOP/0                     ?0        ?0                   ?0                  	;0
886 474  NOP/0                     ?0        689:1                ?0                  	;4294967295
*/

?>