<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?169                 ?0                  	;0	>>169
1   5    ECHO/40                   ?0        1:'</h4>
				</div>
			</div>
		</div>     
        <div class="row">
			<div class="col-12">
                ' ?0                  	;0
2   6    ISSET_ISEMPTY_CV/197      #5=       16?0                 ?0                  	;33554432
3   6    JMPZ_EX/46                #5=       #5                   ?7                  	;0	>>7
4   6    FETCH_CONSTANT/99         #6=       ?0                   2:'STATUS_SUCCESS'  	;16
5   6    IS_EQUAL/17               #7=       16?0                 #6                  	;0
6   6    BOOL/52                   #5=       #7                   ?0                  	;0
7   6    BOOL_NOT/13               #8=       #5                   ?0                  	;0	<<3
8   6    JMPZ/43                   ?0        #8                   ?10                 	;0	>>10
9   7    GOTO/253                  ?0        ?162                 ?5                  	;0
10  9    ECHO/40                   ?0        6:'                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    ' ?0                  	;0	<<8
11  10   FETCH_DIM_R/81            $9=       16?1                 7:'profile_success' 	;0
12  10   ECHO/40                   ?0        $9                   ?0                  	;0
13  11   ECHO/40                   ?0        8:'                </div>
                ' ?0                  	;0
14  12   GOTO/253                  ?0        ?162                 ?9                  	;0
15  14   ECHO/40                   ?0        10:'</th>
									<th class="text-center">GPU</th>
									<th class="text-center">Video</th>
									<th class="text-center">Audio</th>
									<th class="text-center">Resolution</th>
									<th class="text-center">Logo</th>
									<th class="text-center">' ?0                  	;0
16  15   FETCH_DIM_R/81            $10=      16?1                 11:'actions'        	;0
17  15   ECHO/40                   ?0        $10                  ?0                  	;0
18  16   ECHO/40                   ?0        12:'</th>
								</tr>
							</thead>
							<tbody>
								' ?0                  	;0
19  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'F93e9343c3d7fd99'	;0
20  17   DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
21  17   FE_RESET_R/77             $12=      $11                  ?133                	;0
22  17   FE_FETCH_R/78             ?0        $12                  16?2                	;133	>>133	<<132
23  18   NOP/0                     ?0        ?0                   ?0                  	;1
24  18   GOTO/253                  ?0        ?89                  ?15                 	;0
25  20   FETCH_DIM_R/81            $13=      16?2                 16:'profile_id'     	;0
26  20   ECHO/40                   ?0        $13                  ?0                  	;0
27  21   ECHO/40                   ?0        17:', \'delete\');"><i class="mdi mdi-close"></i></button>
										</div>
										' ?0                  	;0
28  23   ECHO/40                   ?0        18:'									</td>
								</tr>
								' ?0                  	;0
29  25   NOP/0                     ?0        ?0                   ?0                  	;1
30  25   GOTO/253                  ?0        ?132                 ?19                 	;0
31  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'str_replace'    	;3
32  27   SEND_VAL_EX/116           ?80       22:':'               ?1                  	;0
33  27   SEND_VAL_EX/116           ?96       23:'x'               ?2                  	;0
34  27   FETCH_DIM_FUNC_ARG/93     $14=      16?3                 24:9                	;3
35  27   FETCH_DIM_FUNC_ARG/93     $15=      $14                  25:'val'            	;3
36  27   SEND_VAR_EX/66            ?112      $15                  ?3                  	;0
37  27   DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
38  27   ECHO/40                   ?0        $16                  ?0                  	;0
39  28   NOP/0                     ?0        ?0                   ?0                  	;1
40  28   GOTO/253                  ?0        ?53                  ?26                 	;0
41  30   FETCH_DIM_R/81            $17=      16?3                 27:'gpu'            	;0
42  30   FETCH_DIM_R/81            $18=      $17                  28:'resize'         	;0
43  30   JMP_SET/152               #19=      $18                  ?52                 	;0
44  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'str_replace'    	;3
45  30   SEND_VAL_EX/116           ?80       31:':'               ?1                  	;0
46  30   SEND_VAL_EX/116           ?96       32:'x'               ?2                  	;0
47  30   FETCH_DIM_FUNC_ARG/93     $20=      16?3                 33:9                	;3
48  30   FETCH_DIM_FUNC_ARG/93     $21=      $20                  34:'val'            	;3
49  30   SEND_VAR_EX/66            ?112      $21                  ?3                  	;0
50  30   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
51  30   QM_ASSIGN/22              #19=      $22                  ?0                  	;0
52  30   ECHO/40                   ?0        #19                  ?0                  	;0
53  32   NOP/0                     ?0        ?0                   ?0                  	;1
54  32   GOTO/253                  ?0        ?103                 ?35                 	;0
55  34   FETCH_DIM_R/81            $23=      16?3                 36:'-vcodec'        	;0
56  34   JMP_SET/152               #24=      $23                  ?58                 	;0
57  34   QM_ASSIGN/22              #24=      37:'None'            ?0                  	;0
58  34   ECHO/40                   ?0        #24                  ?0                  	;0
59  35   ECHO/40                   ?0        38:'</td>
									<td class="text-center">' ?0                  	;0
60  36   FETCH_DIM_R/81            $25=      16?3                 39:'-acodec'        	;0
61  36   JMP_SET/152               #26=      $25                  ?63                 	;0
62  36   QM_ASSIGN/22              #26=      40:'None'            ?0                  	;0
63  36   ECHO/40                   ?0        #26                  ?0                  	;0
64  37   ECHO/40                   ?0        41:'</td>
									<td class="text-center">
										' ?0                  	;0
65  38   ISSET_ISEMPTY_DIM_OBJ/115 #27=      16?3                 42:'gpu'            	;33554432
66  38   JMPZ/43                   ?0        #27                  ?69                 	;0	>>69
67  39   NOP/0                     ?0        ?0                   ?0                  	;1
68  39   GOTO/253                  ?0        ?41                  ?43                 	;0
69  41   NOP/0                     ?0        ?0                   ?0                  	;1	<<66
70  41   GOTO/253                  ?0        ?31                  ?44                 	;0
71  43   NOP/0                     ?0        ?0                   ?0                  	;1
72  43   GOTO/253                  ?0        ?74                  ?45                 	;0
73  45   ECHO/40                   ?0        46:'<i class="text-success fas fa-square"></i>' ?0                  	;0
74  47   ECHO/40                   ?0        47:'									</td>
									<td class="text-center">' ?0                  	;0
75  48   NOP/0                     ?0        ?0                   ?0                  	;1
76  48   GOTO/253                  ?0        ?55                  ?48                 	;0
77  50   ECHO/40                   ?0        49:'<i class="text-success fas fa-square"></i>' ?0                  	;0
78  52   ECHO/40                   ?0        50:'									</td>
									<td class="text-center">
										' ?0                  	;0
79  53   INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'e589A4BF54a2DAD1'	;2
80  53   SEND_VAL_EX/116           ?80       53:'adv'             ?1                  	;0
81  53   SEND_VAL_EX/116           ?96       54:'edit_tprofile'   ?2                  	;0
82  53   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
83  53   JMPZ/43                   ?0        $28                  ?86                 	;0	>>86
84  54   NOP/0                     ?0        ?0                   ?0                  	;1
85  54   GOTO/253                  ?0        ?126                 ?55                 	;0
86  56   ECHO/40                   ?0        56:'--'              ?0                  	;0	<<83
87  57   NOP/0                     ?0        ?0                   ?0                  	;1
88  57   GOTO/253                  ?0        ?124                 ?57                 	;0
89  59   INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'json_decode'    	;2
90  59   FETCH_DIM_FUNC_ARG/93     $29=      16?2                 60:'profile_options'	;1
91  59   SEND_VAR_EX/66            ?80       $29                  ?1                  	;0
92  59   SEND_VAL_EX/116           ?96       61:true              ?2                  	;0
93  59   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
94  59   ASSIGN/38                 ?26       16?3                 $30                 	;0
95  60   ECHO/40                   ?0        62:'								<tr id="profile-' ?0                  	;0
96  61   FETCH_DIM_R/81            $32=      16?2                 63:'profile_id'     	;0
97  61   ECHO/40                   ?0        $32                  ?0                  	;0
98  62   ECHO/40                   ?0        64:'">
									<td class="text-center">' ?0                  	;0
99  63   FETCH_DIM_R/81            $33=      16?2                 65:'profile_id'     	;0
100 63   ECHO/40                   ?0        $33                  ?0                  	;0
101 64   NOP/0                     ?0        ?0                   ?0                  	;1
102 64   GOTO/253                  ?0        ?113                 ?66                 	;0
103 66   ECHO/40                   ?0        67:'									</td>
									<td class="text-center">
										' ?0                  	;0
104 67   ISSET_ISEMPTY_DIM_OBJ/115 #34=      16?3                 68:16               	;33554432
105 67   JMPZ/43                   ?0        #34                  ?108                	;0	>>108
106 68   NOP/0                     ?0        ?0                   ?0                  	;1
107 68   GOTO/253                  ?0        ?111                 ?69                 	;0
108 70   ECHO/40                   ?0        70:'<i class="text-secondary fas fa-square"></i>' ?0                  	;0	<<105
109 71   NOP/0                     ?0        ?0                   ?0                  	;1
110 71   GOTO/253                  ?0        ?78                  ?71                 	;0
111 73   NOP/0                     ?0        ?0                   ?0                  	;1
112 73   GOTO/253                  ?0        ?77                  ?72                 	;0
113 75   ECHO/40                   ?0        73:'</td>
									<td>' ?0                  	;0
114 76   FETCH_DIM_R/81            $35=      16?2                 74:'profile_name'   	;0
115 76   ECHO/40                   ?0        $35                  ?0                  	;0
116 77   ECHO/40                   ?0        75:'</td>
									<td class="text-center">
										' ?0                  	;0
117 78   ISSET_ISEMPTY_DIM_OBJ/115 #36=      16?3                 76:'gpu'            	;33554432
118 78   JMPZ/43                   ?0        #36                  ?121                	;0	>>121
119 79   NOP/0                     ?0        ?0                   ?0                  	;1
120 79   GOTO/253                  ?0        ?73                  ?77                 	;0
121 81   ECHO/40                   ?0        78:'<i class="text-secondary fas fa-square"></i>' ?0                  	;0	<<118
122 82   NOP/0                     ?0        ?0                   ?0                  	;1
123 82   GOTO/253                  ?0        ?71                  ?79                 	;0
124 84   NOP/0                     ?0        ?0                   ?0                  	;1
125 84   GOTO/253                  ?0        ?28                  ?80                 	;0
126 86   ECHO/40                   ?0        81:'										<div class="btn-group">
											<a href="./profile?id=' ?0                  	;0
127 87   FETCH_DIM_R/81            $37=      16?2                 82:'profile_id'     	;0
128 87   ECHO/40                   ?0        $37                  ?0                  	;0
129 88   ECHO/40                   ?0        83:'"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>
											<button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(' ?0                  	;0
130 89   NOP/0                     ?0        ?0                   ?0                  	;1
131 89   GOTO/253                  ?0        ?25                  ?84                 	;0
132 90   JMP/42                    ?0        ?22                  ?0                  	;0	>>22
133 90   FE_FREE/127               ?0        $12                  ?0                  	;0	<<21
134 93   GOTO/253                  ?0        ?154                 ?85                 	;0
135 95   ASSIGN/38                 ?33       16?4                 86:'Transcoding Profiles'	;0
136 96   INCLUDE_OR_EVAL/73        ?34       87:'header.php'      ?0                  	;2
137 97   ECHO/40                   ?0        88:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
138 98   FETCH_IS/89               $40=      89:'_SERVER'         ?0                  	;0
139 98   ISSET_ISEMPTY_DIM_OBJ/115 #41=      $40                  90:'HTTP_X_REQUESTED_WITH'	;16777216
140 98   BOOL_NOT/13               #42=      #41                  ?0                  	;0
141 98   JMPZ_EX/46                #42=      #42                  ?149                	;0	>>149
142 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'strtolower'     	;1
143 98   FETCH_FUNC_ARG/92         $43=      93:'_SERVER'         ?0                  	;1
144 98   FETCH_DIM_FUNC_ARG/93     $44=      $43                  94:'HTTP_X_REQUESTED_WITH'	;1
145 98   SEND_VAR_EX/66            ?80       $44                  ?1                  	;0
146 98   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
147 98   IS_EQUAL/17               #46=      $45                  95:'xmlhttprequest' 	;0
148 98   BOOL/52                   #42=      #46                  ?0                  	;0
149 98   BOOL_NOT/13               #47=      #42                  ?0                  	;0	<<141
150 98   JMPZ/43                   ?0        #47                  ?152                	;0	>>152
151 99   GOTO/253                  ?0        ?156                 ?96                 	;0
152 101  ECHO/40                   ?0        97:' style="display: none;"' ?0                  	;0	<<150
153 102  GOTO/253                  ?0        ?156                 ?98                 	;0
154 104  ECHO/40                   ?0        99:'							</tbody>
						</table>
					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
155 105  GOTO/253                  ?0        ?178                 ?100                	;0
156 108  ECHO/40                   ?0        101:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
157 109  INCLUDE_OR_EVAL/73        ?43       102:'topbar.php'     ?0                  	;2
158 110  ECHO/40                   ?0        103:'					</div>
					<h4 class="page-title">' ?0                  	;0
159 111  FETCH_DIM_R/81            $49=      16?1                 104:'transcode_profiles'	;0
160 111  ECHO/40                   ?0        $49                  ?0                  	;0
161 112  GOTO/253                  ?0        ?1                   ?105                	;0
162 115  ECHO/40                   ?0        106:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">' ?0                  	;0
163 116  FETCH_DIM_R/81            $50=      16?1                 107:'id'            	;0
164 116  ECHO/40                   ?0        $50                  ?0                  	;0
165 117  ECHO/40                   ?0        108:'</th>
									<th>' ?0                  	;0
166 118  FETCH_DIM_R/81            $51=      16?1                 109:'profile_name'  	;0
167 118  ECHO/40                   ?0        $51                  ?0                  	;0
168 119  GOTO/253                  ?0        ?15                  ?110                	;0
169 121  INCLUDE_OR_EVAL/73        ?47       111:'session.php'    ?0                  	;2	<<0
170 122  INCLUDE_OR_EVAL/73        ?48       112:'functions.php'  ?0                  	;2
171 123  INIT_FCALL_BY_NAME/59     ?0        ?0                   113:'E6D500e19634D513'	;0
172 123  DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
173 123  JMPZ/43                   ?0        $54                  ?175                	;0	>>175
174 124  GOTO/253                  ?0        ?177                 ?115                	;0
175 126  INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'e72f42A93714ba87'	;0	<<173
176 126  DO_FCALL_BY_NAME/131      ?50       ?0                   ?0                  	;0
177 128  GOTO/253                  ?0        ?135                 ?118                	;0
178 130  INCLUDE_OR_EVAL/73        ?51       119:'footer.php'     ?0                  	;2
179 131  NOP/0                     ?0        120:1                ?0                  	;4294967295
*/

?>