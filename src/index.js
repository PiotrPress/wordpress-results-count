import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps } from '@wordpress/block-editor';
import ServerSideRender from '@wordpress/server-side-render';

registerBlockType( 'piotrpress/results-count', {
    edit: ( { attributes, setAttributes } ) => {
        return (
            <div { ...useBlockProps() }>
                <ServerSideRender
                    block='piotrpress/results-count'
                    attributes={ attributes }
                />
            </div>
        );
    }
} );