<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
    <link rel="stylesheet" href="./style/st5.css" />
</head>
<body>
<div id="wrapper">
    <div id="page"class="container">
        <h1 class="heading has-text-weight-bold is-size-4">New user</h1>
        <form method="post" action="/team">
            @csrf

            <div class="field">
                <label class="label" for="description">description</label>

                <div class="control">
                        <textarea class="textarea" name="description"
                                  id="description">{{old('description')}}</textarea>

                </div>
                <div class="field">
                    <label class="label" for="articles">articles</label>

                    <div class="control">
                        <textarea class="textarea @error('articels') is-danger @enderror" name="articles"
                                  id="description">{{old('articles')}}</textarea>
                        @error('articles')
                        <p class="help is-danger">{{$message}}</p>
                        @enderror
                    </div>

                </div>
                <div class="field">
                    <label class="label" for="tags">tags</label>

                    <div class="select is-multiple control">
                        <select name="tags[]"
                                multiple
                                class="select@error('tags[]') is-danger@enderror">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>

                        @error('tags[]')
                        <p class="help is-danger">the tag is required</p>
                        @enderror
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
</body>
