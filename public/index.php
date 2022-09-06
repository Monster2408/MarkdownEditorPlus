<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="writening.net">
    <meta property="og:url" content="https://writening.net/">
    <meta property="og:title" content="Writening テキストページを一瞬で作成">
    <meta property="og:image" content="https://writening.net/facebook_cover.png">
    <meta property="og:description" content="ユーザー登録不要。テキストを入力すると、共有可能な専用URLが即座に発行されるテキスト共有サービスです。" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Writening テキストページを一瞬で作成" />
    <meta name="twitter:description" content="ユーザー登録不要。テキストを入力すると、共有可能な専用URLが即座に発行されるテキスト共有サービスです。" />
    <meta name="twitter:image" content="https://writening.net/120x120.png" />
    <meta name="description" content="ユーザー登録不要。テキストを入力すると、共有可能な専用URLが即座に発行されるテキスト共有サービスです。">
    <title>Writening テキストページを一瞬で作成</title>
    <link rel="apple-touch-icon" href="facebook_cover256.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/index.css?4">
</head>
<body>
    <div class="main">
        <div class="catch">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="title">
                            <img class="title-image" src="title.png" alt="Writening">
                            <div class="catch-description">
                                テキストページを一瞬で作成
                            </div>
                        </div>
                        <div class="catch-title">
                            ちょっとした文章を共有したい！<br>そんな時に一瞬でテキストページが作れます。
                        </div>
                        <div class="catch-description">
                            ユーザー登録は一切不要。<br>テキストを入力すると、共有可能な専用URLが即座に発行されるテキスト共有サービスです。
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-input">
        <div class="container">
            <div class="row section">
                <div class="col-sm-10 col-sm-offset-1">
                    <form action="create2" method="post" id="form-main">
                        <h2>作成するテキスト情報</h2>
                        <hr>
                        <div class="input-sub-title">
                            さっそく作ろう！<br>
                            （<a href="https://writening.net/page?E6et2i">独自タグが使える</a>ようになりました！）
                        </div>
                        <div class="form-group">
                            <label for="title">タイトル</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="title" maxlength="120">
                        </div>
                        <div class="form-group">
                            <label for="content">内容 <span class="required">*</span> <a href="https://writening.net/tag" target="_blank" style="font-size:12px;">独自タグ</a></label>
                            <textarea class="form-control" name="content" id="content" rows="10" maxlength="100000"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="days">公開期間 <span class="required">*</span></label><br>
                            <select class="selectpicker" name="days" id="days">
                                <option value="1">1日間</option>
                                <option value="2">2日間</option>
                                <option value="3">3日間</option>
                                <option value="5">5日間</option>
                                <option value="7">7日間</option>
                                <option value="10">10日間</option>
                                <option value="14">14日間</option>
                                <option value="30">30日間</option>
                                <option value="9999" selected>ずっと</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="delpass">検索エンジンの設定</label><br>
                            <input type="checkbox" name="noindex" id="noindex" value="on"> 検索を禁止する
                            <div class="noindex-desc">※Google等の検索サイトでページが検索されないようにしたい場合はONにしてください。(robotsにnoindexを追加)</div>
                        </div>
                        <div class="form-group">
                            <label for="delpass">編集/削除用パスワード <span class="required">*</span></label>
                            <input type="password" name="delpass" id="delpass" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="readpass">閲覧制限パスワード</label>
                            <input type="password" name="readpass" id="readpass" class="form-control">
                        </div>
                        <br>
                        <input type="checkbox" name="kiyaku" id="kiyaku">
                        <a href="kiyaku" target="_blank">[利用規約]</a>に同意する<br>
                        <br>
                        <div>
                            <span class="required">*</span>: 必須項目
                        </div>
                        <input type="button" value="テキストページを作成！" id="button-sumbit" class="btn btn-default btn-lg" style="background-color:#333;color:#fff;">
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div class="catch catch-jisseki" style="padding: 40px 0px;">
            <div class="container">
                <div class="text-center" style="padding: 40px 0px;">
                    <h2>作成されたページ数</h2>
                    <hr>
                    <p>
                        いままで<br>
                        <span style="font-size:1.5em;">132560 個以上</span><br>
                        テキストページが作成されました。
                    </p>
                </div>
                <div class="text-center" style="padding: 40px 0px;">
                    <h2>ページが閲覧された回数</h2>
                    <hr>
                    <p>
                        いままで<br>
                        <span style="font-size:1.5em;">14666600 回以上</span><br>
                        テキストページが閲覧されました。
                    </p>
                </div>
            </div>
        </div>
        <div class="catch-howto">
            <div class="container">
                <div class="text-center">
                    <h2>テキストページの作り方</h2>
                    <hr>
                    <p>テキストページの作り方はとても簡単です。</p>
                </div>
                <div class="row text-center">
                    <!-- 3ステップ -->
                    <div class="col-sm-4 row-col">
                        <h3>1. メモ内容を入力</h3>
                        <p>共有したいテキストを入力します。テキスト内に含まれるURL部分は自動的にリンクされます。</p>
                        <img class="step-img" src="step1.png">
                    </div>
                    <div class="col-sm-4 row-col">
                        <h3>2. 作成ボタンを押す</h3>
                        <p>書けたらあとはボタンを押すだけです。あなただけのテキストページが出来上がります。</p>
                        <img class="step-img" src="step2.png">
                    </div>
                    <div class="col-sm-4 row-col">
                        <h3>3. URLを共有</h3>
                        <p>出来上がったテキストページのURLを、自身のブログに貼ったりメッセンジャーなどで共有しましょう。</p>
                        <img class="step-img" src="step3.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="catch-usecase">
            <div class="container">
                <div class="text-center">
                    <h2>ご利用シーン</h2>
                    <hr>
                    <div class="usecase-item">
                        <h3>プロフィールの追加</h3>
                        <p>
                            ブログやTwitterなど、文字数制限があるサービスで入力しきれない情報を「ちょい足し」。
                        </p>
                        <img src="img/usecase.png">
                    </div>
                    <div class="kugiri">◆</div>
                    <div class="usecase-item">
                        <h3>商品に詳細な説明をプラス</h3>
                        <p>
                            ECサイトやマーケットプレイスに出品している商品。<br>
                            商品の魅力を伝えたいのに文字数上限に引っかかってしまった…<br>
                            そんな時は、より詳細な情報をテキストページに書いて、商品説明を「拡張」しましょう。
                        </p>
                        <img src="img/usecase2.png">
                    </div>
                    <div class="kugiri">◆</div>
                    <div class="usecase-item">
                        <h3>仲間内で気軽に回覧</h3>
                        <p>
                            ちょっとしたリスト情報や備忘録、周知事項がある場合は、テキストページで共有しましょう。<br>
                            メッセやメールだと本文が長くなってしまうし、後で編集できない…。<br>
                            Writeningでテキストページを作れば、後で編集できるのはもちろん、閲覧パスワードを設定して秘密のページにすることも可能。<br>
                            今までちょっと不便だったことをちょっと便利にする、「新しい情報共有の形」です。
                        </p>
                        <img src="img/usecase3.png">
                    </div>
                    <div class="kugiri">◆</div>
                    <div class="usecase-item">
                        <h3>あなたのアイディア次第</h3>
                        <p>
                            ほかにも、あなたのアイディア次第で様々な使い方ができます。お好きにご活用ください。
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="catch catch-other">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="menus">
                            <a href="https://writening.net/page?Vy6BeC">サンプルページ１</a><br>
                            <br>
                            <a href="https://writening.net/page?yRjxZK">サンプルページ２（閲覧制限パスワード：1234）</a><br>
                            <br>
                            <a href="https://writening.net/page?E6et2i">サンプルページ３（独自タグ）</a><br>
                            <br>
                            <a href="kiyaku">利用規約</a><br>
                            <br>
                            <a href="contact" target="_blank">お問い合わせ</a><br>
                            <br>
                            <br>
                            (c) Writening - <a href="http://hoku.in/" target="_blank">hoku.in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
