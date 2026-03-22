<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?46                  ?0                  	;0	>>46
1   5    ECHO/40                   ?0        1:'" />
											</li>
										</ul>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
2   6    GOTO/253                  ?0        ?113                 ?2                  	;0
3   8    ECHO/40                   ?0        3:'">
													</div>
                                                </div>
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="keygen">HMAC Key</label>
													<div class="col-md-5 input-group">
														<input readonly type="text" maxlength="32" class="form-control" id="keygen" name="keygen" value="' ?0                  	;0
4   9    ISSET_ISEMPTY_CV/197      #3=       16?0                 ?0                  	;33554432
5   9    BOOL_NOT/13               #4=       #3                   ?0                  	;0
6   9    JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
7   10   GOTO/253                  ?0        ?9                   ?4                  	;0
8   12   ECHO/40                   ?0        5:'HMAC KEY HIDDEN'  ?0                  	;0	<<6
9   14   ECHO/40                   ?0        6:'" required data-parsley-trigger="change">
														<div class="input-group-append">
															<button class="btn btn-info waves-effect waves-light" onClick="generateCode();" type="button"><i class="mdi mdi-refresh"></i></button>
														</div>
													</div>
                                                    <label class="col-md-2 col-form-label" for="enabled">Enabled</label>
													<div class="col-md-2">
														<input name="enabled" id="enabled" type="checkbox" ' ?0                  	;0
10  15   GOTO/253                  ?0        ?29                  ?7                  	;0
11  17   FETCH_STATIC_PROP_IS/176  $5=       8:'rRequest'         9:'XUI'             	;0
12  17   ISSET_ISEMPTY_DIM_OBJ/115 #6=       $5                   11:'id'             	;33554432
13  17   JMPZ_EX/46                #6=       #6                   ?22                 	;0	>>22
14  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'FA460aBdD5DcA199'	;1
15  17   FETCH_STATIC_PROP_FUNC_ARG/177 $7=       14:'rRequest'        15:'XUI'            	;1
16  17   FETCH_DIM_FUNC_ARG/93     $8=       $7                   17:'id'             	;1
17  17   SEND_VAR_EX/66            ?80       $8                   ?1                  	;0
18  17   DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
19  17   ASSIGN/38                 $10=      16?0                 $9                  	;0
20  17   BOOL_NOT/13               #11=      $10                  ?0                  	;0
21  17   BOOL/52                   #6=       #11                  ?0                  	;0
22  17   BOOL_NOT/13               #12=      #6                   ?0                  	;0	<<13
23  17   JMPZ/43                   ?0        #12                  ?25                 	;0	>>25
24  18   GOTO/253                  ?0        ?26                  ?18                 	;0
25  20   EXIT/79                   ?0        ?0                   ?0                  	;0	<<23
26  22   ASSIGN/38                 ?10       16?1                 19:'HMAC Key'       	;0
27  23   INCLUDE_OR_EVAL/73        ?11       20:'header.php'      ?0                  	;2
28  24   GOTO/253                  ?0        ?75                  ?21                 	;0
29  26   ISSET_ISEMPTY_CV/197      #15=      16?0                 ?0                  	;33554432
30  26   JMPZ/43                   ?0        #15                  ?32                 	;0	>>32
31  27   GOTO/253                  ?0        ?34                  ?22                 	;0
32  29   ECHO/40                   ?0        23:'checked '        ?0                  	;0	<<30
33  30   GOTO/253                  ?0        ?70                  ?24                 	;0
34  32   FETCH_DIM_R/81            $16=      16?0                 25:'enabled'        	;0
35  32   IS_EQUAL/17               #17=      $16                  26:1                	;0
36  32   BOOL_NOT/13               #18=      #17                  ?0                  	;0
37  32   JMPZ/43                   ?0        #18                  ?39                 	;0	>>39
38  33   GOTO/253                  ?0        ?70                  ?27                 	;0
39  35   GOTO/253                  ?0        ?69                  ?28                 	;0	<<37
40  37   ECHO/40                   ?0        29:'							<input type="hidden" name="edit" value="' ?0                  	;0
41  38   FETCH_DIM_R/81            $19=      16?0                 30:'id'             	;0
42  38   ECHO/40                   ?0        $19                  ?0                  	;0
43  39   ECHO/40                   ?0        31:'" />
							'   ?0                  	;0
44  41   ECHO/40                   ?0        32:'							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#hmac-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
45  42   GOTO/253                  ?0        ?100                 ?33                 	;0
46  44   INCLUDE_OR_EVAL/73        ?17       34:'session.php'     ?0                  	;2	<<0
47  45   INCLUDE_OR_EVAL/73        ?18       35:'functions.php'   ?0                  	;2
48  46   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'e6D500E19634D513'	;0
49  46   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
50  46   JMPZ/43                   ?0        $22                  ?52                 	;0	>>52
51  47   GOTO/253                  ?0        ?54                  ?38                 	;0
52  49   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'e72F42a93714BA87'	;0	<<50
53  49   DO_FCALL_BY_NAME/131      ?20       ?0                   ?0                  	;0
54  51   GOTO/253                  ?0        ?11                  ?41                 	;0
55  53   INCLUDE_OR_EVAL/73        ?21       42:'topbar.php'      ?0                  	;2
56  54   ECHO/40                   ?0        43:'					</div>
					<h4 class="page-title">' ?0                  	;0
57  55   ISSET_ISEMPTY_CV/197      #25=      16?0                 ?0                  	;33554432
58  55   JMPZ/43                   ?0        #25                  ?60                 	;0	>>60
59  56   GOTO/253                  ?0        ?93                  ?44                 	;0
60  58   ECHO/40                   ?0        45:'Add HMAC Key'    ?0                  	;0	<<58
61  59   GOTO/253                  ?0        ?94                  ?46                 	;0
62  60   GOTO/253                  ?0        ?93                  ?47                 	;0
63  62   FETCH_DIM_R/81            $26=      16?2                 48:'add'            	;0
64  62   ECHO/40                   ?0        $26                  ?0                  	;0
65  63   GOTO/253                  ?0        ?68                  ?49                 	;0
66  65   FETCH_DIM_R/81            $27=      16?2                 50:'edit'           	;0
67  65   ECHO/40                   ?0        $27                  ?0                  	;0
68  67   GOTO/253                  ?0        ?1                   ?51                 	;0
69  69   ECHO/40                   ?0        52:'checked '        ?0                  	;0
70  72   ECHO/40                   ?0        53:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
											</div>
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_key" type="submit" class="btn btn-primary" value="' ?0                  	;0
71  73   ISSET_ISEMPTY_CV/197      #28=      16?0                 ?0                  	;33554432
72  73   JMPZ/43                   ?0        #28                  ?74                 	;0	>>74
73  74   GOTO/253                  ?0        ?66                  ?54                 	;0
74  76   GOTO/253                  ?0        ?63                  ?55                 	;0	<<72
75  78   ECHO/40                   ?0        56:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
76  79   FETCH_IS/89               $29=      57:'_SERVER'         ?0                  	;0
77  79   ISSET_ISEMPTY_DIM_OBJ/115 #30=      $29                  58:'HTTP_X_REQUESTED_WITH'	;16777216
78  79   BOOL_NOT/13               #31=      #30                  ?0                  	;0
79  79   JMPZ_EX/46                #31=      #31                  ?87                 	;0	>>87
80  79   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'strtolower'     	;1
81  79   FETCH_FUNC_ARG/92         $32=      61:'_SERVER'         ?0                  	;1
82  79   FETCH_DIM_FUNC_ARG/93     $33=      $32                  62:'HTTP_X_REQUESTED_WITH'	;1
83  79   SEND_VAR_EX/66            ?80       $33                  ?1                  	;0
84  79   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
85  79   IS_EQUAL/17               #35=      $34                  63:'xmlhttprequest' 	;0
86  79   BOOL/52                   #31=      #35                  ?0                  	;0
87  79   BOOL_NOT/13               #36=      #31                  ?0                  	;0	<<79
88  79   JMPZ/43                   ?0        #36                  ?90                 	;0	>>90
89  80   GOTO/253                  ?0        ?91                  ?64                 	;0
90  82   ECHO/40                   ?0        65:' style="display: none;"' ?0                  	;0	<<88
91  84   ECHO/40                   ?0        66:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
92  85   GOTO/253                  ?0        ?55                  ?67                 	;0
93  88   ECHO/40                   ?0        68:'Edit HMAC Key'   ?0                  	;0
94  90   ECHO/40                   ?0        69:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
                <div class="alert alert-info" role="alert">
					Use this tool to generate a key you can use to generate HMAC tokens that can access a stream or movie. Visit the XUI documentation for more information on how to use it.<br/><br/><strong>Write down the HMAC key as you will not see it again, it will also be encrypted in the database so cannot be extracted.</strong>
				</div>
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
95  91   ISSET_ISEMPTY_CV/197      #37=      16?0                 ?0                  	;33554432
96  91   BOOL_NOT/13               #38=      #37                  ?0                  	;0
97  91   JMPZ/43                   ?0        #38                  ?99                 	;0	>>99
98  92   GOTO/253                  ?0        ?44                  ?70                 	;0
99  94   GOTO/253                  ?0        ?40                  ?71                 	;0	<<97
100 96   FETCH_DIM_R/81            $39=      16?2                 72:'details'        	;0
101 96   ECHO/40                   ?0        $39                  ?0                  	;0
102 97   ECHO/40                   ?0        73:'</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="hmac-details">
										<div class="row">
											<div class="col-12">
                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="notes">Description</label>
                                                    <div class="col-md-9">
														<input type="text" class="form-control" id="notes" name="notes" value="' ?0                  	;0
103 98   ISSET_ISEMPTY_CV/197      #40=      16?0                 ?0                  	;33554432
104 98   BOOL_NOT/13               #41=      #40                  ?0                  	;0
105 98   JMPZ/43                   ?0        #41                  ?107                	;0	>>107
106 99   GOTO/253                  ?0        ?112                 ?74                 	;0
107 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'htmlspecialchars'	;1	<<105
108 101  FETCH_DIM_FUNC_ARG/93     $42=      16?0                 77:'notes'          	;1
109 101  SEND_VAR_EX/66            ?80       $42                  ?1                  	;0
110 101  DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
111 101  ECHO/40                   ?0        $43                  ?0                  	;0
112 103  GOTO/253                  ?0        ?3                   ?78                 	;0
113 105  INCLUDE_OR_EVAL/73        ?41       79:'footer.php'      ?0                  	;2
114 106  NOP/0                     ?0        80:1                 ?0                  	;4294967295
*/

?>