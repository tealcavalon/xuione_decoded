<?php


function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   253  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'is_object'       	;1
	1   253  FETCH_STATIC_PROP_FUNC_ARG/177 $0=       2:'db'               3:'XUI'             	;1
	2   253  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
	3   253  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4   253  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5   253  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6   254  GOTO/253                  ?0        ?10                  ?5                  	;0
	7   256  FETCH_STATIC_PROP_R/173   $3=       6:'db'               7:'XUI'             	;0	<<5
	8   256  INIT_METHOD_CALL/112      ?0        $3                   9:'close_mysql'     	;0
	9   256  DO_FCALL/60               ?4        ?0                   ?0                  	;0
	10  258  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?314                 ?0                  	;0	>>314
1   7    GOTO/253                  ?0        ?246                 ?1                  	;0
2   9    JMPZ/43                   ?0        16?0                 ?4                  	;0	>>4
3   10   GOTO/253                  ?0        ?143                 ?2                  	;0
4   12   GOTO/253                  ?0        ?159                 ?3                  	;0	<<2
5   14   INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'intval'          	;1
6   14   FETCH_DIM_FUNC_ARG/93     $11=      16?1                 6:3                 	;1
7   14   SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
8   14   DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
9   14   ASSIGN/38                 ?2        16?0                 $12                 	;0
10  15   INIT_STATIC_METHOD_CALL/113 ?0        7:'XUI'              9:'cC988751EeBbF271'	;4
11  15   SEND_VAL_EX/116           ?80       11:NULL              ?1                  	;0
12  15   FETCH_DIM_FUNC_ARG/93     $14=      16?1                 12:1                	;2
13  15   SEND_VAR_EX/66            ?96       $14                  ?2                  	;0
14  15   FETCH_DIM_FUNC_ARG/93     $15=      16?1                 13:2                	;3
15  15   SEND_VAR_EX/66            ?112      $15                  ?3                  	;0
16  15   SEND_VAL_EX/116           ?128      14:true              ?4                  	;0
17  15   DO_FCALL/60               $16=      ?0                   ?0                  	;0
18  15   ASSIGN/38                 ?6        16?2                 $16                 	;0
19  19   GOTO/253                  ?0        ?292                 ?15                 	;0
20  22   JMPZ/43                   ?0        16?0                 ?22                 	;0	>>22
21  23   GOTO/253                  ?0        ?289                 ?16                 	;0
22  25   ASSIGN/38                 ?7        16?3                 17:'/\\/(.*)\\/(.*)\\/(\\d+)\\.(.*)$/m'	;0	<<20
23  26   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'preg_match'     	;3
24  26   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
25  26   SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
26  26   SEND_VAR_EX/66            ?112      16?5                 ?3                  	;0
27  26   DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
28  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'count'          	;1
29  27   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
30  27   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
31  27   IS_EQUAL/17               #21=      $20                  22:5                	;0
32  27   BOOL_NOT/13               #22=      #21                  ?0                  	;0
33  27   JMPZ/43                   ?0        #22                  ?35                 	;0	>>35
34  28   GOTO/253                  ?0        ?289                 ?23                 	;0
35  30   GOTO/253                  ?0        ?275                 ?24                 	;0	<<33
36  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'intval'         	;1
37  32   FETCH_DIM_FUNC_ARG/93     $23=      16?1                 27:'stream_id'      	;1
38  32   SEND_VAR_EX/66            ?80       $23                  ?1                  	;0
39  32   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
40  32   ASSIGN/38                 ?14       16?0                 $24                 	;0
41  33   INIT_STATIC_METHOD_CALL/113 ?0        28:'XUI'             30:'cc988751eEbbf271'	;4
42  33   SEND_VAL_EX/116           ?80       32:NULL              ?1                  	;0
43  33   FETCH_DIM_FUNC_ARG/93     $26=      16?1                 33:'username'       	;2
44  33   SEND_VAR_EX/66            ?96       $26                  ?2                  	;0
45  33   FETCH_DIM_FUNC_ARG/93     $27=      16?1                 34:'password'       	;3
46  33   SEND_VAR_EX/66            ?112      $27                  ?3                  	;0
47  33   SEND_VAL_EX/116           ?128      35:true              ?4                  	;0
48  33   DO_FCALL/60               $28=      ?0                   ?0                  	;0
49  33   ASSIGN/38                 ?18       16?2                 $28                 	;0
50  36   JMPZ/43                   ?0        16?0                 ?52                 	;0	>>52
51  37   GOTO/253                  ?0        ?19                  ?36                 	;0
52  39   GOTO/253                  ?0        ?213                 ?37                 	;0	<<50
53  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'preg_match'     	;3
54  41   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
55  41   SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
56  41   SEND_VAR_EX/66            ?112      16?5                 ?3                  	;0
57  41   DO_FCALL_BY_NAME/131      ?19       ?0                   ?0                  	;0
58  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'count'          	;1
59  42   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
60  42   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
61  42   IS_EQUAL/17               #32=      $31                  42:4                	;0
62  42   BOOL_NOT/13               #33=      #32                  ?0                  	;0
63  42   JMPZ/43                   ?0        #33                  ?65                 	;0	>>65
64  43   GOTO/253                  ?0        ?79                  ?43                 	;0
65  45   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'intval'         	;1	<<63
66  45   FETCH_DIM_FUNC_ARG/93     $34=      16?5                 46:3                	;1
67  45   SEND_VAR_EX/66            ?80       $34                  ?1                  	;0
68  45   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
69  45   ASSIGN/38                 ?25       16?0                 $35                 	;0
70  46   INIT_STATIC_METHOD_CALL/113 ?0        47:'XUI'             49:'cc988751EEBBf271'	;4
71  46   SEND_VAL_EX/116           ?80       51:NULL              ?1                  	;0
72  46   FETCH_DIM_FUNC_ARG/93     $37=      16?5                 52:1                	;2
73  46   SEND_VAR_EX/66            ?96       $37                  ?2                  	;0
74  46   FETCH_DIM_FUNC_ARG/93     $38=      16?5                 53:2                	;3
75  46   SEND_VAR_EX/66            ?112      $38                  ?3                  	;0
76  46   SEND_VAL_EX/116           ?128      54:true              ?4                  	;0
77  46   DO_FCALL/60               $39=      ?0                   ?0                  	;0
78  46   ASSIGN/38                 ?29       16?2                 $39                 	;0
79  48   GOTO/253                  ?0        ?1                   ?55                 	;0
80  50   JMPZ/43                   ?0        16?0                 ?82                 	;0	>>82
81  51   GOTO/253                  ?0        ?50                  ?56                 	;0
82  53   ASSIGN/38                 ?30       16?3                 57:'/\\/auth\\/(.*)$/m'	;0	<<80
83  54   INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'preg_match'     	;3
84  54   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
85  54   SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
86  54   SEND_VAR_EX/66            ?112      16?5                 ?3                  	;0
87  54   DO_FCALL_BY_NAME/131      ?31       ?0                   ?0                  	;0
88  55   INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'count'          	;1
89  55   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
90  55   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
91  55   IS_EQUAL/17               #44=      $43                  62:2                	;0
92  55   BOOL_NOT/13               #45=      #44                  ?0                  	;0
93  55   JMPZ/43                   ?0        #45                  ?95                 	;0	>>95
94  56   GOTO/253                  ?0        ?50                  ?63                 	;0
95  58   INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'json_decode'    	;2	<<93
96  58   INIT_STATIC_METHOD_CALL/113 ?0        66:'Xui\\Functions'  68:'decrypt'        	;3
97  58   FETCH_DIM_FUNC_ARG/93     $46=      16?5                 70:1                	;1
98  58   SEND_VAR_EX/66            ?80       $46                  ?1                  	;0
99  58   FETCH_STATIC_PROP_FUNC_ARG/177 $47=      71:'rSettings'       72:'XUI'            	;2
100 58   FETCH_DIM_FUNC_ARG/93     $48=      $47                  74:'live_streaming_pass'	;2
101 58   SEND_VAR_EX/66            ?96       $48                  ?2                  	;0
102 58   FETCH_CONSTANT/99         #49=      ?0                   75:'OPENSSL_EXTRA'  	;16
103 58   SEND_VAL_EX/116           ?112      #49                  ?3                  	;0
104 58   DO_FCALL/60               $50=      ?0                   ?0                  	;0
105 58   SEND_VAR_NO_REF_EX/50     ?80       $50                  ?1                  	;0
106 58   SEND_VAL_EX/116           ?96       78:true              ?2                  	;0
107 58   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
108 58   ASSIGN/38                 ?41       16?1                 $51                 	;0
109 59   GOTO/253                  ?0        ?36                  ?79                 	;0
110 61   FETCH_DIM_R/81            $53=      16?2                 80:'admin_enabled'  	;0
111 61   IS_EQUAL/17               #54=      $53                  81:0                	;0
112 61   BOOL_NOT/13               #55=      #54                  ?0                  	;0
113 61   JMPZ/43                   ?0        #55                  ?115                	;0	>>115
114 62   GOTO/253                  ?0        ?117                 ?82                 	;0
115 64   INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'F82199EFf9017bc9'	;0	<<113
116 64   DO_FCALL_BY_NAME/131      ?45       ?0                   ?0                  	;0
117 66   FETCH_DIM_R/81            $57=      16?2                 85:'enabled'        	;0
118 66   IS_EQUAL/17               #58=      $57                  86:0                	;0
119 66   BOOL_NOT/13               #59=      #58                  ?0                  	;0
120 66   JMPZ/43                   ?0        #59                  ?122                	;0	>>122
121 67   GOTO/253                  ?0        ?144                 ?87                 	;0
122 69   INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'F82199eFf9017BC9'	;0	<<120
123 69   DO_FCALL_BY_NAME/131      ?49       ?0                   ?0                  	;0
124 70   GOTO/253                  ?0        ?144                 ?90                 	;0
125 72   EXIT/79                   ?0        ?0                   ?0                  	;0
126 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'f82199eFF9017bC9'	;0
127 76   DO_FCALL_BY_NAME/131      ?50       ?0                   ?0                  	;0
128 77   GOTO/253                  ?0        ?491                 ?93                 	;0
129 79   INIT_FCALL_BY_NAME/59     ?0        ?0                   94:'intval'         	;1
130 79   FETCH_DIM_FUNC_ARG/93     $62=      16?1                 96:3                	;1
131 79   SEND_VAR_EX/66            ?80       $62                  ?1                  	;0
132 79   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
133 79   ASSIGN/38                 ?53       16?0                 $63                 	;0
134 80   INIT_STATIC_METHOD_CALL/113 ?0        97:'XUI'             99:'cC988751EEBbf271'	;4
135 80   SEND_VAL_EX/116           ?80       101:NULL             ?1                  	;0
136 80   FETCH_DIM_FUNC_ARG/93     $65=      16?1                 102:1               	;2
137 80   SEND_VAR_EX/66            ?96       $65                  ?2                  	;0
138 80   FETCH_DIM_FUNC_ARG/93     $66=      16?1                 103:2               	;3
139 80   SEND_VAR_EX/66            ?112      $66                  ?3                  	;0
140 80   SEND_VAL_EX/116           ?128      104:true             ?4                  	;0
141 80   DO_FCALL/60               $67=      ?0                   ?0                  	;0
142 80   ASSIGN/38                 ?57       16?2                 $67                 	;0
143 84   GOTO/253                  ?0        ?408                 ?105                	;0
144 87   FETCH_DIM_R/81            $69=      16?2                 106:'is_restreamer' 	;0
145 87   JMPZ/43                   ?0        $69                  ?147                	;0	>>147
146 88   GOTO/253                  ?0        ?149                 ?107                	;0
147 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   108:'f82199EFF9017bC9'	;0	<<145
148 90   DO_FCALL_BY_NAME/131      ?59       ?0                   ?0                  	;0
149 92   INIT_STATIC_METHOD_CALL/113 ?0        110:'XUI'            112:'f520B2272cdE299c'	;6
150 92   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
151 92   SEND_VAL_EX/116           ?96       114:'ts'             ?2                  	;0
152 92   SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
153 92   SEND_VAL_EX/116           ?128      115:NULL             ?4                  	;0
154 92   SEND_VAL_EX/116           ?144      116:''               ?5                  	;0
155 92   SEND_VAL_EX/116           ?160      117:'live'           ?6                  	;0
156 92   DO_FCALL/60               $71=      ?0                   ?0                  	;0
157 92   ASSIGN/38                 ?61       16?6                 $71                 	;0
158 93   GOTO/253                  ?0        ?429                 ?118                	;0
159 95   ASSIGN/38                 ?62       16?3                 119:'/\\/play\\/(.*)\\/(.*)$/m'	;0
160 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   120:'preg_match'    	;3
161 96   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
162 96   SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
163 96   SEND_VAR_EX/66            ?112      16?5                 ?3                  	;0
164 96   DO_FCALL_BY_NAME/131      ?63       ?0                   ?0                  	;0
165 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   122:'count'         	;1
166 97   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
167 97   DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
168 97   IS_EQUAL/17               #76=      $75                  124:3               	;0
169 97   BOOL_NOT/13               #77=      #76                  ?0                  	;0
170 97   JMPZ/43                   ?0        #77                  ?172                	;0	>>172
171 98   GOTO/253                  ?0        ?143                 ?125                	;0
172 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   126:'explode'       	;2	<<170
173 100  SEND_VAL_EX/116           ?80       128:'/'              ?1                  	;0
174 100  INIT_STATIC_METHOD_CALL/113 ?0        129:'Xui\\Functions' 131:'decrypt'       	;3
175 100  FETCH_DIM_FUNC_ARG/93     $78=      16?5                 133:1               	;1
176 100  SEND_VAR_EX/66            ?80       $78                  ?1                  	;0
177 100  FETCH_STATIC_PROP_FUNC_ARG/177 $79=      134:'rSettings'      135:'XUI'           	;2
178 100  FETCH_DIM_FUNC_ARG/93     $80=      $79                  137:'live_streaming_pass'	;2
179 100  SEND_VAR_EX/66            ?96       $80                  ?2                  	;0
180 100  FETCH_CONSTANT/99         #81=      ?0                   138:'OPENSSL_EXTRA' 	;16
181 100  SEND_VAL_EX/116           ?112      #81                  ?3                  	;0
182 100  DO_FCALL/60               $82=      ?0                   ?0                  	;0
183 100  SEND_VAR_NO_REF_EX/50     ?96       $82                  ?2                  	;0
184 100  DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
185 100  ASSIGN/38                 ?73       16?1                 $83                 	;0
186 101  FETCH_DIM_R/81            $85=      16?1                 141:0               	;0
187 101  IS_EQUAL/17               #86=      $85                  142:'live'          	;0
188 101  BOOL_NOT/13               #87=      #86                  ?0                  	;0
189 101  JMPZ/43                   ?0        #87                  ?191                	;0	>>191
190 102  GOTO/253                  ?0        ?143                 ?143                	;0
191 104  GOTO/253                  ?0        ?129                 ?144                	;0	<<189
192 106  INIT_FCALL_BY_NAME/59     ?0        ?0                   145:'count'         	;1
193 106  INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'explode'       	;2
194 106  SEND_VAL_EX/116           ?80       149:'/'              ?1                  	;0
195 106  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
196 106  DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
197 106  SEND_VAR_NO_REF_EX/50     ?80       $88                  ?1                  	;0
198 106  DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
199 106  ASSIGN/38                 ?79       16?7                 $89                 	;0
200 107  ASSIGN/38                 $91=      16?0                 150:NULL            	;0
201 107  ASSIGN/38                 ?81       16?2                 $91                 	;0
202 108  IS_EQUAL/17               #93=      16?7                 151:3               	;0
203 108  JMPZ/43                   ?0        #93                  ?205                	;0	>>205
204 109  GOTO/253                  ?0        ?247                 ?152                	;0
205 111  IS_EQUAL/17               #94=      16?7                 153:4               	;0	<<203
206 111  JMPZ/43                   ?0        #94                  ?208                	;0	>>208
207 112  GOTO/253                  ?0        ?2                   ?154                	;0
208 114  IS_EQUAL/17               #95=      16?7                 155:5               	;0	<<206
209 114  BOOL_NOT/13               #96=      #95                  ?0                  	;0
210 114  JMPZ/43                   ?0        #96                  ?212                	;0	>>212
211 115  GOTO/253                  ?0        ?1                   ?156                	;0
212 117  GOTO/253                  ?0        ?333                 ?157                	;0	<<210
213 119  ASSIGN/38                 ?86       16?3                 158:'/\\/play\\/(.*)$/m'	;0
214 120  INIT_FCALL_BY_NAME/59     ?0        ?0                   159:'preg_match'    	;3
215 120  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
216 120  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
217 120  SEND_VAR_EX/66            ?112      16?5                 ?3                  	;0
218 120  DO_FCALL_BY_NAME/131      ?87       ?0                   ?0                  	;0
219 121  INIT_FCALL_BY_NAME/59     ?0        ?0                   161:'count'         	;1
220 121  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
221 121  DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
222 121  IS_EQUAL/17               #100=     $99                  163:2               	;0
223 121  BOOL_NOT/13               #101=     #100                 ?0                  	;0
224 121  JMPZ/43                   ?0        #101                 ?226                	;0	>>226
225 122  GOTO/253                  ?0        ?19                  ?164                	;0
226 124  INIT_FCALL_BY_NAME/59     ?0        ?0                   165:'explode'       	;2	<<224
227 124  SEND_VAL_EX/116           ?80       167:'/'              ?1                  	;0
228 124  INIT_STATIC_METHOD_CALL/113 ?0        168:'Xui\\Functions' 170:'decrypt'       	;3
229 124  FETCH_DIM_FUNC_ARG/93     $102=     16?5                 172:1               	;1
230 124  SEND_VAR_EX/66            ?80       $102                 ?1                  	;0
231 124  FETCH_STATIC_PROP_FUNC_ARG/177 $103=     173:'rSettings'      174:'XUI'           	;2
232 124  FETCH_DIM_FUNC_ARG/93     $104=     $103                 176:'live_streaming_pass'	;2
233 124  SEND_VAR_EX/66            ?96       $104                 ?2                  	;0
234 124  FETCH_CONSTANT/99         #105=     ?0                   177:'OPENSSL_EXTRA' 	;16
235 124  SEND_VAL_EX/116           ?112      #105                 ?3                  	;0
236 124  DO_FCALL/60               $106=     ?0                   ?0                  	;0
237 124  SEND_VAR_NO_REF_EX/50     ?96       $106                 ?2                  	;0
238 124  DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
239 124  ASSIGN/38                 ?97       16?1                 $107                	;0
240 125  FETCH_DIM_R/81            $109=     16?1                 180:0               	;0
241 125  IS_EQUAL/17               #110=     $109                 181:'live'          	;0
242 125  BOOL_NOT/13               #111=     #110                 ?0                  	;0
243 125  JMPZ/43                   ?0        #111                 ?245                	;0	>>245
244 126  GOTO/253                  ?0        ?19                  ?182                	;0
245 128  GOTO/253                  ?0        ?5                   ?183                	;0	<<243
246 133  GOTO/253                  ?0        ?292                 ?184                	;0
247 135  GOTO/253                  ?0        ?80                  ?185                	;0
248 138  FETCH_DIM_R/81            $112=     16?6                 186:'monitor_pid'   	;0
249 138  IS_SMALLER/19             #113=     187:0                $112                	;0
250 138  JMPZ_EX/46                #113=     #113                 ?254                	;0	>>254
251 138  FETCH_DIM_R/81            $114=     16?6                 188:'pid'           	;0
252 138  IS_SMALLER/19             #115=     189:0                $114                	;0
253 138  BOOL/52                   #113=     #115                 ?0                  	;0
254 138  JMPZ_EX/46                #113=     #113                 ?260                	;0	>>260	<<250
255 138  FETCH_STATIC_PROP_R/173   $116=     190:'rServers'       191:'XUI'           	;0
256 138  FETCH_DIM_R/81            $117=     $116                 16?8                	;0
257 138  FETCH_DIM_R/81            $118=     $117                 193:'last_status'   	;0
258 138  IS_EQUAL/17               #119=     $118                 194:1               	;0
259 138  BOOL/52                   #113=     #119                 ?0                  	;0
260 138  BOOL_NOT/13               #120=     #113                 ?0                  	;0	<<254
261 138  JMPZ/43                   ?0        #120                 ?263                	;0	>>263
262 139  GOTO/253                  ?0        ?126                 ?195                	;0
263 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'file_exists'   	;1	<<261
264 141  FETCH_CONSTANT/99         #121=     ?0                   198:'STREAMS_PATH'  	;16
265 141  CONCAT/8                  #122=     #121                 16?0                	;0
266 141  CONCAT/8                  #123=     #122                 201:'_.stream_info' 	;0
267 141  SEND_VAL_EX/116           ?80       #123                 ?1                  	;0
268 141  DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
269 141  JMPZ/43                   ?0        $124                 ?271                	;0	>>271
270 142  GOTO/253                  ?0        ?443                 ?202                	;0
271 144  FETCH_DIM_R/81            $125=     16?6                 203:'stream_info'   	;0	<<269
272 144  ASSIGN/38                 ?115      16?9                 $125                	;0
273 145  GOTO/253                  ?0        ?450                 ?204                	;0
274 146  GOTO/253                  ?0        ?443                 ?205                	;0
275 148  INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'intval'        	;1
276 148  FETCH_DIM_FUNC_ARG/93     $127=     16?5                 208:3               	;1
277 148  SEND_VAR_EX/66            ?80       $127                 ?1                  	;0
278 148  DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
279 148  ASSIGN/38                 ?118      16?0                 $128                	;0
280 149  INIT_STATIC_METHOD_CALL/113 ?0        209:'XUI'            211:'cc988751eEbbf271'	;4
281 149  SEND_VAL_EX/116           ?80       213:NULL             ?1                  	;0
282 149  FETCH_DIM_FUNC_ARG/93     $130=     16?5                 214:1               	;2
283 149  SEND_VAR_EX/66            ?96       $130                 ?2                  	;0
284 149  FETCH_DIM_FUNC_ARG/93     $131=     16?5                 215:2               	;3
285 149  SEND_VAR_EX/66            ?112      $131                 ?3                  	;0
286 149  SEND_VAL_EX/116           ?128      216:true             ?4                  	;0
287 149  DO_FCALL/60               $132=     ?0                   ?0                  	;0
288 149  ASSIGN/38                 ?122      16?2                 $132                	;0
289 152  JMPZ/43                   ?0        16?0                 ?291                	;0	>>291
290 153  GOTO/253                  ?0        ?246                 ?217                	;0
291 155  GOTO/253                  ?0        ?380                 ?218                	;0	<<289
292 158  JMPZ_EX/46                #134=     16?0                 ?294                	;0	>>294
293 158  BOOL/52                   #134=     16?2                 ?0                  	;0
294 158  BOOL_NOT/13               #135=     #134                 ?0                  	;0	<<292
295 158  JMPZ/43                   ?0        #135                 ?297                	;0	>>297
296 159  GOTO/253                  ?0        ?126                 ?219                	;0
297 161  INIT_FCALL_BY_NAME/59     ?0        ?0                   220:'is_null'       	;1	<<295
298 161  FETCH_DIM_FUNC_ARG/93     $136=     16?2                 222:'exp_date'      	;1
299 161  SEND_VAR_EX/66            ?80       $136                 ?1                  	;0
300 161  DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
301 161  BOOL_NOT/13               #138=     $137                 ?0                  	;0
302 161  JMPZ_EX/46                #138=     #138                 ?308                	;0	>>308
303 161  INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'time'          	;0
304 161  DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
305 161  FETCH_DIM_R/81            $140=     16?2                 225:'exp_date'      	;0
306 161  IS_SMALLER_OR_EQUAL/20    #141=     $140                 $139                	;0
307 161  BOOL/52                   #138=     #141                 ?0                  	;0
308 161  BOOL_NOT/13               #142=     #138                 ?0                  	;0	<<302
309 161  JMPZ/43                   ?0        #142                 ?311                	;0	>>311
310 162  GOTO/253                  ?0        ?313                 ?226                	;0
311 164  INIT_FCALL_BY_NAME/59     ?0        ?0                   227:'F82199EfF9017bC9'	;0	<<309
312 164  DO_FCALL_BY_NAME/131      ?132      ?0                   ?0                  	;0
313 166  GOTO/253                  ?0        ?110                 ?229                	;0
314 168  INIT_FCALL_BY_NAME/59     ?0        ?0                   230:'register_shutdown_function'	;1	<<0
315 168  SEND_VAL_EX/116           ?80       232:'shutdown'       ?1                  	;0
316 168  DO_FCALL_BY_NAME/131      ?133      ?0                   ?0                  	;0
317 169  INCLUDE_OR_EVAL/73        ?134      233:'./stream/init.php' ?0                  	;2
318 170  FETCH_STATIC_PROP_IS/176  $146=     234:'rRequest'       235:'XUI'           	;0
319 170  ISSET_ISEMPTY_DIM_OBJ/115 #147=     $146                 237:'data'          	;33554432
320 170  BOOL_NOT/13               #148=     #147                 ?0                  	;0
321 170  JMPZ/43                   ?0        #148                 ?323                	;0	>>323
322 171  GOTO/253                  ?0        ?126                 ?238                	;0
323 173  INIT_STATIC_METHOD_CALL/113 ?0        239:'XUI'            241:'ad72b4259cA295b2'	;0	<<321
324 173  DO_FCALL/60               $149=     ?0                   ?0                  	;0
325 173  ASSIGN/38                 ?139      16?10                $149                	;0
326 174  INIT_FCALL_BY_NAME/59     ?0        ?0                   243:'base64_decode' 	;1
327 174  FETCH_STATIC_PROP_FUNC_ARG/177 $151=     245:'rRequest'       246:'XUI'           	;1
328 174  FETCH_DIM_FUNC_ARG/93     $152=     $151                 248:'data'          	;1
329 174  SEND_VAR_EX/66            ?80       $152                 ?1                  	;0
330 174  DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
331 174  ASSIGN/38                 ?143      16?4                 $153                	;0
332 175  GOTO/253                  ?0        ?192                 ?249                	;0
333 177  JMPZ/43                   ?0        16?0                 ?335                	;0	>>335
334 178  GOTO/253                  ?0        ?487                 ?250                	;0
335 180  ASSIGN/38                 ?144      16?3                 251:'/\\/live\\/(.*)\\/(.*)\\/(\\d+)\\.(.*)$/m'	;0	<<333
336 181  INIT_FCALL_BY_NAME/59     ?0        ?0                   252:'preg_match'    	;3
337 181  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
338 181  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
339 181  SEND_VAR_EX/66            ?112      16?5                 ?3                  	;0
340 181  DO_FCALL_BY_NAME/131      ?145      ?0                   ?0                  	;0
341 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   254:'count'         	;1
342 182  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
343 182  DO_FCALL_BY_NAME/131      $157=     ?0                   ?0                  	;0
344 182  IS_EQUAL/17               #158=     $157                 256:5               	;0
345 182  BOOL_NOT/13               #159=     #158                 ?0                  	;0
346 182  JMPZ/43                   ?0        #159                 ?348                	;0	>>348
347 183  GOTO/253                  ?0        ?487                 ?257                	;0
348 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   258:'intval'        	;1	<<346
349 185  FETCH_DIM_FUNC_ARG/93     $160=     16?5                 260:3               	;1
350 185  SEND_VAR_EX/66            ?80       $160                 ?1                  	;0
351 185  DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
352 185  ASSIGN/38                 ?151      16?0                 $161                	;0
353 186  GOTO/253                  ?0        ?478                 ?261                	;0
354 188  INIT_FCALL_BY_NAME/59     ?0        ?0                   262:'preg_match'    	;3
355 188  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
356 188  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
357 188  SEND_VAR_EX/66            ?112      16?5                 ?3                  	;0
358 188  DO_FCALL_BY_NAME/131      ?152      ?0                   ?0                  	;0
359 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   264:'count'         	;1
360 189  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
361 189  DO_FCALL_BY_NAME/131      $164=     ?0                   ?0                  	;0
362 189  IS_EQUAL/17               #165=     $164                 266:4               	;0
363 189  BOOL_NOT/13               #166=     #165                 ?0                  	;0
364 189  JMPZ/43                   ?0        #166                 ?366                	;0	>>366
365 190  GOTO/253                  ?0        ?379                 ?267                	;0
366 192  INIT_FCALL_BY_NAME/59     ?0        ?0                   268:'intval'        	;1	<<364
367 192  FETCH_DIM_FUNC_ARG/93     $167=     16?5                 270:2               	;1
368 192  SEND_VAR_EX/66            ?80       $167                 ?1                  	;0
369 192  DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
370 192  ASSIGN/38                 ?158      16?0                 $168                	;0
371 193  INIT_STATIC_METHOD_CALL/113 ?0        271:'XUI'            273:'cC988751EEBBf271'	;4
372 193  SEND_VAL_EX/116           ?80       275:NULL             ?1                  	;0
373 193  FETCH_DIM_FUNC_ARG/93     $170=     16?5                 276:1               	;2
374 193  SEND_VAR_EX/66            ?96       $170                 ?2                  	;0
375 193  SEND_VAL_EX/116           ?112      277:NULL             ?3                  	;0
376 193  SEND_VAL_EX/116           ?128      278:true             ?4                  	;0
377 193  DO_FCALL/60               $171=     ?0                   ?0                  	;0
378 193  ASSIGN/38                 ?161      16?2                 $171                	;0
379 195  GOTO/253                  ?0        ?20                  ?279                	;0
380 197  ASSIGN/38                 ?162      16?3                 280:'/\\/(.*)\\/(.*)\\/(\\d+)$/m'	;0
381 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   281:'preg_match'    	;3
382 198  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
383 198  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
384 198  SEND_VAR_EX/66            ?112      16?5                 ?3                  	;0
385 198  DO_FCALL_BY_NAME/131      ?163      ?0                   ?0                  	;0
386 199  INIT_FCALL_BY_NAME/59     ?0        ?0                   283:'count'         	;1
387 199  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
388 199  DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
389 199  IS_EQUAL/17               #176=     $175                 285:4               	;0
390 199  BOOL_NOT/13               #177=     #176                 ?0                  	;0
391 199  JMPZ/43                   ?0        #177                 ?393                	;0	>>393
392 200  GOTO/253                  ?0        ?246                 ?286                	;0
393 202  INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'intval'        	;1	<<391
394 202  FETCH_DIM_FUNC_ARG/93     $178=     16?5                 289:3               	;1
395 202  SEND_VAR_EX/66            ?80       $178                 ?1                  	;0
396 202  DO_FCALL_BY_NAME/131      $179=     ?0                   ?0                  	;0
397 202  ASSIGN/38                 ?169      16?0                 $179                	;0
398 203  INIT_STATIC_METHOD_CALL/113 ?0        290:'XUI'            292:'cC988751EebbF271'	;4
399 203  SEND_VAL_EX/116           ?80       294:NULL             ?1                  	;0
400 203  FETCH_DIM_FUNC_ARG/93     $181=     16?5                 295:1               	;2
401 203  SEND_VAR_EX/66            ?96       $181                 ?2                  	;0
402 203  FETCH_DIM_FUNC_ARG/93     $182=     16?5                 296:2               	;3
403 203  SEND_VAR_EX/66            ?112      $182                 ?3                  	;0
404 203  SEND_VAL_EX/116           ?128      297:true             ?4                  	;0
405 203  DO_FCALL/60               $183=     ?0                   ?0                  	;0
406 203  ASSIGN/38                 ?173      16?2                 $183                	;0
407 204  GOTO/253                  ?0        ?246                 ?298                	;0
408 206  JMPZ/43                   ?0        16?0                 ?410                	;0	>>410
409 207  GOTO/253                  ?0        ?474                 ?299                	;0
410 209  ASSIGN/38                 ?174      16?3                 300:'/\\/live\\/(.*)\\/(\\d+)$/m'	;0	<<408
411 210  INIT_FCALL_BY_NAME/59     ?0        ?0                   301:'preg_match'    	;3
412 210  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
413 210  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
414 210  SEND_VAR_EX/66            ?112      16?5                 ?3                  	;0
415 210  DO_FCALL_BY_NAME/131      ?175      ?0                   ?0                  	;0
416 211  INIT_FCALL_BY_NAME/59     ?0        ?0                   303:'count'         	;1
417 211  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
418 211  DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
419 211  IS_EQUAL/17               #188=     $187                 305:3               	;0
420 211  BOOL_NOT/13               #189=     #188                 ?0                  	;0
421 211  JMPZ/43                   ?0        #189                 ?423                	;0	>>423
422 212  GOTO/253                  ?0        ?474                 ?306                	;0
423 214  INIT_FCALL_BY_NAME/59     ?0        ?0                   307:'intval'        	;1	<<421
424 214  FETCH_DIM_FUNC_ARG/93     $190=     16?5                 309:2               	;1
425 214  SEND_VAR_EX/66            ?80       $190                 ?1                  	;0
426 214  DO_FCALL_BY_NAME/131      $191=     ?0                   ?0                  	;0
427 214  ASSIGN/38                 ?181      16?0                 $191                	;0
428 215  GOTO/253                  ?0        ?466                 ?310                	;0
429 217  ISSET_ISEMPTY_DIM_OBJ/115 #193=     16?6                 311:'redirect_id'   	;33554432
430 217  JMPZ_EX/46                #193=     #193                 ?435                	;0	>>435
431 217  FETCH_DIM_R/81            $194=     16?6                 312:'redirect_id'   	;0
432 217  FETCH_CONSTANT/99         #195=     ?0                   313:'SERVER_ID'     	;16
433 217  IS_NOT_EQUAL/18           #196=     $194                 #195                	;0
434 217  BOOL/52                   #193=     #196                 ?0                  	;0
435 217  JMPZ/43                   ?0        #193                 ?437                	;0	>>437	<<430
436 218  GOTO/253                  ?0        ?440                 ?316                	;0
437 220  FETCH_CONSTANT/99         #197=     ?0                   317:'SERVER_ID'     	;16	<<435
438 220  ASSIGN/38                 ?187      16?8                 #197                	;0
439 221  GOTO/253                  ?0        ?248                 ?320                	;0
440 223  FETCH_DIM_R/81            $199=     16?6                 321:'redirect_id'   	;0
441 223  ASSIGN/38                 ?189      16?8                 $199                	;0
442 224  GOTO/253                  ?0        ?248                 ?322                	;0
443 227  INIT_FCALL_BY_NAME/59     ?0        ?0                   323:'file_get_contents'	;1
444 227  FETCH_CONSTANT/99         #201=     ?0                   325:'STREAMS_PATH'  	;16
445 227  CONCAT/8                  #202=     #201                 16?0                	;0
446 227  CONCAT/8                  #203=     #202                 328:'_.stream_info' 	;0
447 227  SEND_VAL_EX/116           ?80       #203                 ?1                  	;0
448 227  DO_FCALL_BY_NAME/131      $204=     ?0                   ?0                  	;0
449 227  ASSIGN/38                 ?194      16?9                 $204                	;0
450 229  INIT_FCALL_BY_NAME/59     ?0        ?0                   329:'json_decode'   	;2
451 229  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
452 229  SEND_VAL_EX/116           ?96       331:true             ?2                  	;0
453 229  DO_FCALL_BY_NAME/131      $206=     ?0                   ?0                  	;0
454 229  ASSIGN/38                 ?196      16?9                 $206                	;0
455 230  INIT_FCALL_BY_NAME/59     ?0        ?0                   332:'json_encode'   	;1
456 230  FETCH_DIM_R/81            $208=     16?9                 334:'codecs'        	;0
457 230  INIT_ARRAY/71             #209=     $208                 335:'codecs'        	;14
458 230  FETCH_DIM_R/81            $210=     16?9                 336:'container'     	;0
459 230  ADD_ARRAY_ELEMENT/72      #209=     $210                 337:'container'     	;0
460 230  FETCH_DIM_R/81            $211=     16?9                 338:'bitrate'       	;0
461 230  ADD_ARRAY_ELEMENT/72      #209=     $211                 339:'bitrate'       	;0
462 230  SEND_VAL_EX/116           ?80       #209                 ?1                  	;0
463 230  DO_FCALL_BY_NAME/131      $212=     ?0                   ?0                  	;0
464 230  ECHO/40                   ?0        $212                 ?0                  	;0
465 231  GOTO/253                  ?0        ?125                 ?340                	;0
466 233  INIT_STATIC_METHOD_CALL/113 ?0        341:'XUI'            343:'CC988751eebBf271'	;4
467 233  SEND_VAL_EX/116           ?80       345:NULL             ?1                  	;0
468 233  FETCH_DIM_FUNC_ARG/93     $213=     16?5                 346:1               	;2
469 233  SEND_VAR_EX/66            ?96       $213                 ?2                  	;0
470 233  SEND_VAL_EX/116           ?112      347:NULL             ?3                  	;0
471 233  SEND_VAL_EX/116           ?128      348:true             ?4                  	;0
472 233  DO_FCALL/60               $214=     ?0                   ?0                  	;0
473 233  ASSIGN/38                 ?204      16?2                 $214                	;0
474 236  JMPZ/43                   ?0        16?0                 ?476                	;0	>>476
475 237  GOTO/253                  ?0        ?20                  ?349                	;0
476 239  ASSIGN/38                 ?205      16?3                 350:'/\\/live\\/(.*)\\/(\\d+)\\.(.*)$/m'	;0	<<474
477 240  GOTO/253                  ?0        ?354                 ?351                	;0
478 242  INIT_STATIC_METHOD_CALL/113 ?0        352:'XUI'            354:'cc988751EEBBF271'	;4
479 242  SEND_VAL_EX/116           ?80       356:NULL             ?1                  	;0
480 242  FETCH_DIM_FUNC_ARG/93     $217=     16?5                 357:1               	;2
481 242  SEND_VAR_EX/66            ?96       $217                 ?2                  	;0
482 242  FETCH_DIM_FUNC_ARG/93     $218=     16?5                 358:2               	;3
483 242  SEND_VAR_EX/66            ?112      $218                 ?3                  	;0
484 242  SEND_VAL_EX/116           ?128      359:true             ?4                  	;0
485 242  DO_FCALL/60               $219=     ?0                   ?0                  	;0
486 242  ASSIGN/38                 ?209      16?2                 $219                	;0
487 245  JMPZ/43                   ?0        16?0                 ?489                	;0	>>489
488 246  GOTO/253                  ?0        ?1                   ?360                	;0
489 248  ASSIGN/38                 ?210      16?3                 361:'/\\/live\\/(.*)\\/(.*)\\/(\\d+)$/m'	;0	<<487
490 249  GOTO/253                  ?0        ?53                  ?362                	;0
491 251  NOP/0                     ?0        ?0                   ?0                  	;0
492 259  NOP/0                     ?0        363:1                ?0                  	;4294967295
*/

?>