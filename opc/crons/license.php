<?php


function ed28Cb44bc386D46()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  73  ASSIGN/38                 ?0        16?0                 0:0                 	;0
	1  74  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'exec'            	;3
	2  74  SEND_VAL_EX/116           ?80       3:'ps -fp $(pgrep -u xui)' ?1                  	;0
	3  74  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	4  74  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
	5  74  DO_FCALL_BY_NAME/131      ?1        ?0                   ?0                  	;0
	6  75  FE_RESET_R/77             $7=       16?1                 ?34                 	;0
	7  75  FE_FETCH_R/78             ?0        $7                   16?3                	;34	>>34	<<33
	8  76  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'explode'         	;2
	9  76  SEND_VAL_EX/116           ?80       6:' '                ?1                  	;0
	10 76  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'preg_replace'    	;3
	11 76  SEND_VAL_EX/116           ?80       9:'!\\s+!'           ?1                  	;0
	12 76  SEND_VAL_EX/116           ?96       10:' '               ?2                  	;0
	13 76  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'trim'           	;1
	14 76  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	15 76  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	16 76  SEND_VAR_NO_REF_EX/50     ?112      $8                   ?3                  	;0
	17 76  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	18 76  SEND_VAR_NO_REF_EX/50     ?96       $9                   ?2                  	;0
	19 76  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	20 76  ASSIGN/38                 ?6        16?4                 $10                 	;0
	21 77  FETCH_DIM_R/81            $12=      16?4                 13:8                	;0
	22 77  IS_EQUAL/17               #13=      $12                  14:'nginx:'         	;0
	23 77  JMPZ_EX/46                #13=      #13                  ?27                 	;0	>>27
	24 77  FETCH_DIM_R/81            $14=      16?4                 15:9                	;0
	25 77  IS_EQUAL/17               #15=      $14                  16:'master'         	;0
	26 77  BOOL/52                   #13=      #15                  ?0                  	;0
	27 77  BOOL_NOT/13               #16=      #13                  ?0                  	;0	<<23
	28 77  JMPZ/43                   ?0        #16                  ?31                 	;0	>>31
	29 78  NOP/0                     ?0        ?0                   ?0                  	;1
	30 78  GOTO/253                  ?0        ?33                  ?17                 	;0
	31 80  POST_INC/36               #17=      16?0                 ?0                  	;0	<<28
	32 80  FREE/70                   ?0        #17                  ?0                  	;0
	33 82  JMP/42                    ?0        ?7                   ?0                  	;0	>>7
	34 82  FE_FREE/127               ?0        $7                   ?0                  	;0	<<6
	35 85  IS_SMALLER/19             #18=      18:0                 16?0                	;0
	36 85  RETURN/62                 ?0        #18                  ?0                  	;0
	37 86  NOP/0                     ?0        19:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?104                 ?0                  	;0	>>104
1   7    GOTO/253                  ?0        ?248                 ?1                  	;0
2   9    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'intval'          	;1
3   9    INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'explode'         	;2
4   9    SEND_VAL_EX/116           ?80       6:';'                ?1                  	;0
5   9    INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'explode'         	;2
6   9    SEND_VAL_EX/116           ?80       9:' '                ?1                  	;0
7   9    INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'trim'           	;1
8   9    INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'explode'        	;2
9   9    SEND_VAL_EX/116           ?80       14:'listen '         ?1                  	;0
10  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'file_get_contents'	;1
11  9    SEND_VAL_EX/116           ?80       17:'/home/xui/bin/nginx/conf/ports/http.conf' ?1                  	;0
12  9    DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
13  9    SEND_VAR_NO_REF_EX/50     ?96       $10                  ?2                  	;0
14  9    DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
15  9    SEPARATE/156              $11=      $11                  ?0                  	;0
16  9    FETCH_DIM_FUNC_ARG/93     $12=      $11                  18:1                	;1
17  9    SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
18  9    DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
19  9    SEND_VAR_NO_REF_EX/50     ?96       $13                  ?2                  	;0
20  9    DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
21  9    SEPARATE/156              $14=      $14                  ?0                  	;0
22  9    FETCH_DIM_FUNC_ARG/93     $15=      $14                  19:0                	;2
23  9    SEND_VAR_EX/66            ?96       $15                  ?2                  	;0
24  9    DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
25  9    SEPARATE/156              $16=      $16                  ?0                  	;0
26  9    FETCH_DIM_FUNC_ARG/93     $17=      $16                  20:0                	;1
27  9    SEND_VAR_EX/66            ?80       $17                  ?1                  	;0
28  9    DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
29  9    JMP_SET/152               #19=      $18                  ?31                 	;0
30  9    QM_ASSIGN/22              #19=      21:80                ?0                  	;0
31  9    ASSIGN/38                 ?10       16?0                 #19                 	;0
32  10   INIT_STATIC_METHOD_CALL/113 ?0        22:'Xui\\Functions'  24:'updateLicense'  	;2
33  10   SEND_VAL_EX/116           ?80       26:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
34  10   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
35  10   DO_FCALL/60               $21=      ?0                   ?0                  	;0
36  10   ASSIGN/38                 ?12       16?1                 $21                 	;0
37  11   FETCH_DIM_R/81            $23=      16?1                 27:'status'         	;0
38  11   JMPZ/43                   ?0        $23                  ?40                 	;0	>>40
39  12   GOTO/253                  ?0        ?47                  ?28                 	;0
40  14   FETCH_DIM_R/81            $24=      16?1                 29:'error'          	;0	<<38
41  14   CONCAT/8                  #25=      30:'Failed to generate license! Error: ' $24                 	;0
42  14   CONCAT/8                  #26=      #25                  31:'
'              	;0
43  14   ECHO/40                   ?0        #26                  ?0                  	;0
44  15   EXIT/79                   ?0        ?0                   ?0                  	;0
45  16   GOTO/253                  ?0        ?46                  ?32                 	;0
46  18   GOTO/253                  ?0        ?48                  ?33                 	;0
47  20   ECHO/40                   ?0        34:'Updated XUI License
' ?0                  	;0
48  23   GOTO/253                  ?0        ?49                  ?35                 	;0
49  25   INIT_STATIC_METHOD_CALL/113 ?0        36:'Xui\\Functions'  38:'verifyLicense'  	;0
50  25   DO_FCALL/60               $27=      ?0                   ?0                  	;0
51  25   JMPZ/43                   ?0        $27                  ?53                 	;0	>>53
52  26   GOTO/253                  ?0        ?56                  ?40                 	;0
53  28   ECHO/40                   ?0        41:'License is invalid.
' ?0                  	;0	<<51
54  29   EXIT/79                   ?0        ?0                   ?0                  	;0
55  30   GOTO/253                  ?0        ?1                   ?42                 	;0
56  32   GOTO/253                  ?0        ?190                 ?43                 	;0
57  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'is_array'       	;1
58  34   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
59  34   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
60  34   JMPZ_EX/46                #29=      $28                  ?63                 	;0	>>63
61  34   FETCH_DIM_R/81            $30=      16?2                 46:'version'        	;0
62  34   BOOL/52                   #29=      $30                  ?0                  	;0
63  34   JMPZ_EX/46                #29=      #29                  ?92                 	;0	>>92	<<60
64  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'version_compare'	;2
65  34   FETCH_DIM_FUNC_ARG/93     $31=      16?2                 49:'version'        	;1
66  34   SEND_VAR_EX/66            ?80       $31                  ?1                  	;0
67  34   FETCH_CONSTANT/99         #32=      ?0                   50:'XUI_VERSION'    	;16
68  34   SEND_VAL_EX/116           ?96       #32                  ?2                  	;0
69  34   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
70  34   IS_SMALLER/19             #34=      53:0                 $33                 	;0
71  34   JMPNZ_EX/47               #34=      #34                  ?91                 	;0	>>91
72  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'version_compare'	;2
73  34   FETCH_DIM_FUNC_ARG/93     $35=      16?2                 56:'version'        	;1
74  34   SEND_VAR_EX/66            ?80       $35                  ?1                  	;0
75  34   FETCH_CONSTANT/99         #36=      ?0                   57:'XUI_VERSION'    	;16
76  34   SEND_VAL_EX/116           ?96       #36                  ?2                  	;0
77  34   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
78  34   IS_EQUAL/17               #38=      $37                  60:0                	;0
79  34   JMPZ_EX/46                #38=      #38                  ?90                 	;0	>>90
80  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'intval'         	;1
81  34   FETCH_DIM_FUNC_ARG/93     $39=      16?2                 63:'revision'       	;1
82  34   SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
83  34   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
84  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'intval'         	;1
85  34   FETCH_CONSTANT/99         #41=      ?0                   66:'XUI_REVISION'   	;16
86  34   SEND_VAL_EX/116           ?80       #41                  ?1                  	;0
87  34   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
88  34   IS_SMALLER/19             #43=      $42                  $40                 	;0
89  34   BOOL/52                   #38=      #43                  ?0                  	;0
90  34   BOOL/52                   #34=      #38                  ?0                  	;0	<<79
91  34   BOOL/52                   #29=      #34                  ?0                  	;0	<<71
92  34   JMPZ/43                   ?0        #29                  ?94                 	;0	>>94	<<63
93  35   GOTO/253                  ?0        ?102                 ?69                 	;0
94  37   INIT_METHOD_CALL/112      ?0        16?3                 70:'query'          	;2	<<92
95  37   SEND_VAL_EX/116           ?80       72:'UPDATE `settings` SET `update_data` = NULL, `reissues` = ?;' ?1                  	;0
96  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'json_encode'    	;1
97  37   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
98  37   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
99  37   SEND_VAR_NO_REF_EX/50     ?96       $44                  ?2                  	;0
100 37   DO_FCALL/60               ?35       ?0                   ?0                  	;0
101 38   GOTO/253                  ?0        ?1                   ?75                 	;0
102 40   ECHO/40                   ?0        76:'Update is available!
' ?0                  	;0
103 41   GOTO/253                  ?0        ?122                 ?77                 	;0
104 43   INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'posix_getpwuid' 	;1	<<0
105 43   INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'posix_geteuid'  	;0
106 43   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
107 43   SEND_VAR_NO_REF_EX/50     ?80       $46                  ?1                  	;0
108 43   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
109 43   FETCH_DIM_R/81            $48=      $47                  82:'name'           	;0
110 43   IS_NOT_EQUAL/18           #49=      $48                  83:'xui'            	;0
111 43   BOOL_NOT/13               #50=      #49                  ?0                  	;0
112 43   JMPZ/43                   ?0        #50                  ?114                	;0	>>114
113 44   GOTO/253                  ?0        ?115                 ?84                 	;0
114 46   EXIT/79                   ?0        85:'Please run as XUI!
' ?0                  	;0	<<112
115 48   BEGIN_SILENCE/57          #51=      ?0                   ?0                  	;0
116 48   FETCH_R/80                $52=      86:'argc'            ?0                  	;268435456
117 48   END_SILENCE/58            ?0        #51                  ?0                  	;0
118 48   JMPZ/43                   ?0        $52                  ?120                	;0	>>120
119 49   GOTO/253                  ?0        ?164                 ?87                 	;0
120 51   EXIT/79                   ?0        88:0                 ?0                  	;0	<<118
121 52   GOTO/253                  ?0        ?164                 ?89                 	;0
122 54   ASSIGN/38                 ?43       16?5                 90:array (
)        	;0
123 55   FETCH_DIM_R/81            $54=      16?2                 91:'changelog'      	;0
124 55   FE_RESET_R/77             $55=      $54                  ?149                	;0
125 55   FE_FETCH_R/78             ?0        $55                  16?6                	;149	>>149	<<148
126 56   FETCH_DIM_R/81            $56=      16?6                 92:'version'        	;0
127 56   FETCH_CONSTANT/99         #57=      ?0                   93:'XUI_VERSION'    	;16
128 56   IS_EQUAL/17               #58=      $56                  #57                 	;0
129 56   JMPZ_EX/46                #58=      #58                  ?140                	;0	>>140
130 56   INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'intval'         	;1
131 56   FETCH_DIM_FUNC_ARG/93     $59=      16?6                 98:'revision'       	;1
132 56   SEND_VAR_EX/66            ?80       $59                  ?1                  	;0
133 56   DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
134 56   INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'intval'         	;1
135 56   FETCH_CONSTANT/99         #61=      ?0                   101:'XUI_REVISION'  	;16
136 56   SEND_VAL_EX/116           ?80       #61                  ?1                  	;0
137 56   DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
138 56   IS_SMALLER_OR_EQUAL/20    #63=      $60                  $62                 	;0
139 56   BOOL/52                   #58=      #63                  ?0                  	;0
140 56   BOOL_NOT/13               #64=      #58                  ?0                  	;0	<<129
141 56   JMPZ/43                   ?0        #64                  ?144                	;0	>>144
142 57   NOP/0                     ?0        ?0                   ?0                  	;1
143 57   GOTO/253                  ?0        ?146                 ?104                	;0
144 59   FE_FREE/127               ?0        $55                  ?2                  	;1	<<141
145 59   GOTO/253                  ?0        ?150                 ?105                	;0
146 61   ASSIGN_DIM/147            ?55       16?5                 ?4397406            	;0
147 61   OP_DATA/137               ?0        16?6                 ?0                  	;0
148 62   JMP/42                    ?0        ?125                 ?0                  	;0	>>125
149 62   FE_FREE/127               ?0        $55                  ?0                  	;0	<<124
150 65   ASSIGN_DIM/147            ?56       16?2                 106:'changelog'     	;0
151 65   OP_DATA/137               ?0        16?5                 ?0                  	;0
152 66   INIT_METHOD_CALL/112      ?0        16?3                 107:'query'         	;3
153 66   SEND_VAL_EX/116           ?80       109:'UPDATE `settings` SET `update_data` = ?, `reissues` = ?;' ?1                  	;0
154 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'json_encode'   	;1
155 66   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
156 66   DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
157 66   SEND_VAR_NO_REF_EX/50     ?96       $67                  ?2                  	;0
158 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'json_encode'   	;1
159 66   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
160 66   DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
161 66   SEND_VAR_NO_REF_EX/50     ?112      $68                  ?3                  	;0
162 66   DO_FCALL/60               ?59       ?0                   ?0                  	;0
163 67   GOTO/253                  ?0        ?1                   ?114                	;0
164 71   NOP/0                     ?0        ?0                   ?0                  	;0
165 87   INIT_FCALL/61             ?0        ?384                 115:'ed28cb44bc386d46'	;0
166 87   DO_FCALL/60               $70=      ?0                   ?0                  	;0
167 87   BOOL_NOT/13               #71=      $70                  ?0                  	;0
168 87   JMPZ/43                   ?0        #71                  ?170                	;0	>>170
169 88   GOTO/253                  ?0        ?248                 ?116                	;0
170 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   117:'parse_ini_string'	;1	<<168
171 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   119:'file_get_contents'	;1
172 90   SEND_VAL_EX/116           ?80       121:'/home/xui/config/config.ini' ?1                  	;0
173 90   DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
174 90   SEND_VAR_NO_REF_EX/50     ?80       $72                  ?1                  	;0
175 90   DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
176 90   ASSIGN/38                 ?64       16?7                 $73                 	;0
177 91   FETCH_DIM_R/81            $75=      16?7                 122:'license'       	;0
178 91   JMPZ_EX/46                #76=      $75                  ?186                	;0	>>186
179 91   ISSET_ISEMPTY_DIM_OBJ/115 #77=      16?7                 123:'is_lb'         	;33554432
180 91   BOOL_NOT/13               #78=      #77                  ?0                  	;0
181 91   JMPNZ_EX/47               #78=      #78                  ?185                	;0	>>185
182 91   FETCH_DIM_R/81            $79=      16?7                 124:'is_lb'         	;0
183 91   BOOL_NOT/13               #80=      $79                  ?0                  	;0
184 91   BOOL/52                   #78=      #80                  ?0                  	;0
185 91   BOOL/52                   #76=      #78                  ?0                  	;0	<<181
186 91   BOOL_NOT/13               #81=      #76                  ?0                  	;0	<<178
187 91   JMPZ/43                   ?0        #81                  ?189                	;0	>>189
188 92   GOTO/253                  ?0        ?48                  ?125                	;0
189 94   GOTO/253                  ?0        ?2                   ?126                	;0	<<187
190 96   INIT_STATIC_METHOD_CALL/113 ?0        127:'Xui\\Functions' 129:'getLicense'    	;1
191 96   SEND_VAL_EX/116           ?80       131:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
192 96   DO_FCALL/60               $82=      ?0                   ?0                  	;0
193 96   ASSIGN/38                 ?73       16?8                 $82                 	;0
194 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   132:'gmdate'        	;2
195 97   SEND_VAL_EX/116           ?80       134:'Y-m-d'          ?1                  	;0
196 97   FETCH_DIM_FUNC_ARG/93     $84=      16?8                 135:3               	;2
197 97   SEND_VAR_EX/66            ?96       $84                  ?2                  	;0
198 97   DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
199 97   CONCAT/8                  #86=      136:'License is valid, expires: ' $85                 	;0
200 97   CONCAT/8                  #87=      #86                  137:'
'             	;0
201 97   ECHO/40                   ?0        #87                  ?0                  	;0
202 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'str_replace'   	;3
203 98   SEND_VAL_EX/116           ?80       140:'\\'             ?1                  	;0
204 98   SEND_VAL_EX/116           ?96       141:'/'              ?2                  	;0
205 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'dirname'       	;1
206 98   FETCH_DIM_FUNC_ARG/93     $88=      16?9                 144:0               	;1
207 98   SEND_VAR_EX/66            ?80       $88                  ?1                  	;0
208 98   DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
209 98   SEND_VAR_NO_REF_EX/50     ?112      $89                  ?3                  	;0
210 98   DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
211 98   CONCAT/8                  #91=      $90                  145:'/../www/init.php'	;0
212 98   INCLUDE_OR_EVAL/73        ?82       #91                  ?0                  	;8
213 99   INIT_STATIC_METHOD_CALL/113 ?0        146:'Xui\\Functions' 148:'checkReissues' 	;1
214 99   SEND_VAL_EX/116           ?80       150:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
215 99   DO_FCALL/60               $93=      ?0                   ?0                  	;0
216 99   ASSIGN/38                 ?84       16?4                 $93                 	;0
217 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   151:'json_decode'   	;2
218 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   153:'str_replace'   	;3
219 100  SEND_VAL_EX/116           ?80       155:'<'              ?1                  	;0
220 100  SEND_VAL_EX/116           ?96       156:'&lt;'           ?2                  	;0
221 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'str_replace'   	;3
222 100  SEND_VAL_EX/116           ?80       159:'>'              ?1                  	;0
223 100  SEND_VAL_EX/116           ?96       160:'&gt;'           ?2                  	;0
224 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   161:'file_get_contents'	;3
225 100  FETCH_CONSTANT/99         #95=      ?0                   163:'XUI_BETA'      	;16
226 100  JMPZ/43                   ?0        #95                  ?229                	;0	>>229
227 100  QM_ASSIGN/22              #96=      166:'_beta'          ?0                  	;0
228 100  JMP/42                    ?0        ?230                 ?0                  	;0	>>230
229 100  QM_ASSIGN/22              #96=      167:''               ?0                  	;0	<<226
230 100  CONCAT/8                  #97=      168:'https://update.xui.one/update' #96                 	;0	<<228
231 100  CONCAT/8                  #98=      #97                  169:'.json'         	;0
232 100  SEND_VAL_EX/116           ?80       #98                  ?1                  	;0
233 100  SEND_VAL_EX/116           ?96       170:false            ?2                  	;0
234 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   171:'stream_context_create'	;1
235 100  SEND_VAL_EX/116           ?80       173:array (
  'http' => 
  array (
    'timeout' => 5,
  ),
) ?1                  	;0
236 100  DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
237 100  SEND_VAR_NO_REF_EX/50     ?112      $99                  ?3                  	;0
238 100  DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
239 100  SEND_VAR_NO_REF_EX/50     ?112      $100                 ?3                  	;0
240 100  DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
241 100  SEND_VAR_NO_REF_EX/50     ?112      $101                 ?3                  	;0
242 100  DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
243 100  SEND_VAR_NO_REF_EX/50     ?80       $102                 ?1                  	;0
244 100  SEND_VAL_EX/116           ?96       174:true             ?2                  	;0
245 100  DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
246 100  ASSIGN/38                 ?94       16?2                 $103                	;0
247 101  GOTO/253                  ?0        ?57                  ?175                	;0
248 104  NOP/0                     ?0        176:1                ?0                  	;4294967295
*/

?>